<?php
include 'config.php';
session_start();
error_reporting(0);
if ($_SESSION['id'] == "") {
    header('location:login.php');
}
$data = mysqli_query($con, "SELECT * FROM tbl_general_details");
$row = mysqli_fetch_assoc($data);
$fetch_brand = mysqli_query($con, "SELECT * FROM tbl_make WHERE name ='" . $_SESSION['b_brand'] . "'");
$ros_brand = mysqli_fetch_assoc($fetch_brand);
$brand_id = $ros_brand['id'];
$fetch_model = mysqli_query($con, "SELECT * FROM tbl_model WHERE name ='" . $_SESSION['b_model'] . "'");
$ros_model = mysqli_fetch_assoc($fetch_model);
$model_id = $ros_model['id'];
$queryi = "SELECT * FROM tbl_register WHERE id='" . $_SESSION["id"] . "'";
$runi = mysqli_query($con, $queryi);
$rowss = mysqli_fetch_assoc($runi);
if (isset($_POST['submit'])) {
    $reg_number = $_POST['reg_number'];
    $estimates = $_POST['estimates'];
    $appointment_date = $_POST['appointment_date'];
    $time = $_POST['time'];
    // $service = $_POST['service'];
    $picked_or_not = $_POST['chkPassport'];
    $picked_address = $_POST['chkPassport1'];
    $tow_service = $_POST['chkPassport2'];
    $tow_service_detail = $_POST['txtPassportNumber1'];
    $data = substr($phone, -4);
    // $time = date("h-i-sa");
    // $randomNumber = rand(1,50000);
    // $booking_id = $randomNumber . ''. $data +1;
    $randomNumber = rand(10000, 50000);
    $booking_id = time();
    $date = date("Y-m-d");
    $img = '';
    foreach ($_FILES['file_img']['tmp_name'] as $key => $image) {
        $imagename = $_FILES['file_img']['name'][$key];
        $imageTmpName = $_FILES['file_img']['tmp_name'][$key];
        $img .= $imagename . ',';
        $directory = 'mechanical_admin/uploads/contact/';
        $result = move_uploaded_file($imageTmpName, $directory . $imagename);
    }
    //if ($result) {
    // remove comma from price
    $price = str_replace(",", "", $_SESSION['b_selling_price']);
    $query = "INSERT INTO `tbl_appointment`(`booking_id`, `user_id`,`brand`, 
`model`, `register_number`, `variant` ,`service`, `estimated_price`, `appointment_date`,
`appoitment_time`, `picked_or_not`, `picked_address`, `tow_service`, `tow_service_detail`,`created_at`) 

VALUES ('$booking_id','" . $_SESSION['id'] . "','$brand_id','$model_id','$reg_number','" . $_SESSION['b_variant'] . "','" . $_SESSION['b_service'] . "',
'$price','$appointment_date','$time','$picked_or_not','$picked_address','$tow_service','$tow_service_detail','$date')";
    $run = mysqli_query($con, $query);
    $id = $con->insert_id;
    if ($run) {
?>
        <script>
            var bookingid = "<?php echo $id; ?>";
            alert("Your appointment has been fixed");
            window.location.href = "payment/payment.php?id=" + bookingid;
        </script>
<?php
        // $to = $email;
        // $subject = "Get your appointment id";
        // $message = '<b>Your appointment id is...</b>';
        // $message .= "<h1>".$appointment_id."</h1>";
        // $retval = mail ($to,$subject,$message);

        // if( $retval == true ) {
        //     $msg = '<div class="alert alert-success" id="msg" role="alert">
        //      <strong>Your appointment </strong> has been fixed with booking id '.$appointment_id.' we have sent appointment id to your email id from where You can track your order
        //  </div>';
        // }else {
        //     echo "Message could not be sent...";
        // }
    } else {
        $msg = '<div class="alert alert-danger" id="msg" role="alert">
      <strong>Failed</strong>.
  </div>';
    }
    //}

}
?>




<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Appointment - MechanicLane</title>

    <link rel="stylesheet" href="css/style.css" media="all" data-minify="1" />
    <link rel="stylesheet" href="css/style1.css" media="all" data-minify="1" />
    <link rel="stylesheet" href="css/style-1.css" media="all" data-minify="1" />

    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="alternate" type="application/rss+xml" title="Car Repair Services &raquo; Comments Feed" href="comments/feed/index.html" />
    <style>

    </style>
    <link rel="stylesheet" id="woocommerce-smallscreen-css" href="content/plugins/woocommerce/assets/css/woocommerce-smallscreen287d.css?ver=4.8.0" media="only screen and (max-width: 768px)" />
    <style id="car-repair-services-style-inline-css">
        body {
            font-weight: 400;
        }

        .multiselect {
            width: 100%;
        }

        .selectBox {
            position: relative;
        }

        .selectBox select {
            width: 100%;

        }

        .overSelect {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
        }

        #services {
            display: none;
            border: 1px #dadada solid;
        }

        #services label {
            display: block;
        }

        #services label:hover {
            background-color: #1e90ff;
        }

        @media (min-width: 992px) {

            header.page-header-1 .navbar-nav>li>a,
            header.page-header-2 .navbar-nav>li>a {
                font-family: 'Poppins', sans-serif;
                ;
                font-weight: 600;
                color: #3a3a3a;
            }
        }

        #pageTitle.page-title-wrapper {
            background-image: url(content/uploads/header-photo-bg02.jpg);
        }

        body:not(.home) #pageContent {
            padding-top: 100px;
        }

        @media (min-width: 992px) {
            body:not(.home) #pageContent {
                padding-top: 120px;
            }
        }

        h2 {
            font-family: 'Poppins', sans-serif;
            ;
            font-weight: 600;
            font-size: 34px;
            line-height: 40px;
            color: #000;
        }

        h4 {
            font-family: 'Poppins', sans-serif;
            ;
            font-size: 36px;
            line-height: 32px;
            color: #000;
        }

        h5 {
            font-family: 'Poppins', sans-serif;
            ;
            font-weight: 700;
            font-size: 20px;
            line-height: 28px;
            color: #000;
        }

        a {}

        a:hover {}

        .car_repair_services_wc_products_tab.vc_tta.vc_tta-style-classic .vc_tta-tab a {}

        .widget-title,
        .title-contact-info,
        .widgettitle {
            font-family: 'Poppins', sans-serif;
            ;
            font-size: 24px;
            color: #000;
        }

        body {}


        @media (max-width: 991px) {

            #slide-nav #slidemenu .close-menu,
            header.page-header .navbar-toggle {}
        }

        a:hover,
        h1 a:hover,
        h2 a:hover,
        .column-right .side-block ul li a:hover {}

        /*heading*/
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        h1 a,
        h2 a,
        h3 a,
        h4 a,
        h5 a,
        h6 a {}

        h1 b,
        h2 b,
        h3 b,
        h3 b {}

        .back-to-top a,
        .services-block .image,
        .services-angle-text .number,
        .text-icon .icon-wrapper>span,
        .testimonials-item,
        td#today,
        .service-icon .icon-wrapper span,
        .services-block-alt .image i,
        .image-scale-color:after,
        .text-icon-sm .icon-wrapper>span,
        .woocommerce #slide-nav #slidemenu.slide-active .search-container button.button,
        .woocommerce .search-container button.button:hover,
        .service-icon .icon-wrapper .fack_icon_div,
        .services-block-alt .image .fack_icon_div,
        .calendar_wrap td#today {
            background-color: #f7941f !important;
        }

        body .services-block-alt .image i,
        .services-block-alt .image .fack_icon_div {
            -webkit-box-shadow: 0 0 0 20px #f7941f;
            -moz-box-shadow: 0 0 0 20px #f7941f;
            box-shadow: 0 0 0 20px #f7941f;
        }

        .services-block-alt .image:hover i,
        .services-block-alt .image:hover .fack_icon_div {
            -webkit-box-shadow: 0 0 0 0px #f7941f;
            -moz-box-shadow: 0 0 0 0px #f7941f;
            box-shadow: 0 0 0 0px #f7941f;
        }


        header.page-header .appointment,
        header.page-header .appointment:after,
        .modal-header .appointment:after {
            border-color: transparent #f7941f transparent transparent;
        }

        .input-custom:hover,
        .input-custom:focus,
        .input-custom.focus,
        .table .cell-marker,
        .coupon-print-inside {
            border-color: #f7941f;
        }

        header.page-header .appointment,
        .modal-header .appointment,
        .table .cell-marker {
            background-color: #f7941f;
        }

        .color,
        a.color,
        a.color:hover,
        a.color:focus,
        .services-block .service.dark h2,
        .services-block .service.dark h3,
        .services-block .service.dark h4,
        header.page-header-1 .header-phone .phone-number .code,
        .marker-list>li:after,
        header.page-header-1 .header-right .address span,
        .testimonials-item .inside .rating,
        .services-block-alt .caption .title,
        .testimonial-card:after,
        .icon-star:before,
        blockquote::before {
            color: #f7941f;
        }

        .page-footer .footer-phone .number {
            color: #f7941f;
        }

        /*Menu Color*/
        @media (min-width: 992px) {
            header.page-header-1 .navbar-nav>li>a:after {
                background-color: #f7941f;
                color: #3a3a3a;
            }
        }

        /*Slider Color*/

        #mainSlider .slide-content h4,
        #mainSlider .slide-content p {}

        #mainSlider .slide-content h3 {
            color: #f7941f;
        }

        #mainSlider .slick-prev:before,
        #mainSlider .slick-next:before {}

        #mainSlider .slick-prev:hover:before,
        #mainSlider .slick-next:hover:before {}

        .slick-dots li.slick-active button,
        .slick-dots li.slick-active button:hover {}

        /*Button*/



        .btn:before,
        .btn:after,
        .column-right .widget_search button:hover,
        input[type="submit"]:hover,
        .tags-list li a:hover,
        .tagcloud a:hover {}

        .view-more-testimonial:hover {}

        button#place_order,
        .btn-invert {
            background: #f7941f;
        }

        .btn-lg.btn-invert.view-more-testimonial {
            background-color: #f7941f;
        }

        .blog-post a.more-link:before,
        .blog-post a.more-link:after {
            background-color: #f7941f !important;
        }

        .btn.btn-border {}


        .btn:hover,
        .btn.active,
        .btn:active,
        .btn.focus,
        .btn:focus {}

        .btn-invert:hover,
        .btn-invert.active,
        .btn-invert:active,
        .btn-invert.focus,
        .btn-invert:focus {}

        .btn::before,
        .btn::after {}

        .btn.btn-invert::before,
        .btn.btn-invert::after {}

        .btn.btn-lg.btn-full.false-submit {}

        .btn.btn-lg.btn-full.false-submit:hover {}

        .btn.btn-lg.btn-full.false-submit span {}

        .btn.btn-lg.btn-full.false-submit:hover span {}

        .btn::before,
        .btn::after,
        .column-right .widget_search button:hover,
        input[type="submit"]:hover,
        .tags-list li a:hover,
        #slide-nav #slidemenu.slide-active .search-container .button,
        .tagcloud a:hover {
            background: #000040 !important;
        }

        @media (max-width: 991px) {
            .header-info-toggle [class*='icon-']:hover {}
        }

        .coupon-text4 {
            color: #f7941f;
        }

        .coupon-text5 {
            color: #f7941f;
        }

        .coupon .coupon-all::after {
            border-color: #f7941f transparent transparent;
        }

        .coupon .coupon-all {
            background: #f7941f;
        }

        .coupon-print-inside {
            border: 1px solid #f7941f;
        }

        .coupon .coupon-all {
            color: #f7941f;
        }

        .coupon-text2 {
            color: #f7941f;
        }

        .coupon .coupon-all:hover::after {
            border-top-color: #f7941f;
        }

        .coupon .coupon-all:hover {
            background-color: #f7941f;
            color: #f7941f;
        }

        header .header-cart:hover a.icon,
        header .header-cart.opened a.icon {
            color: #f7941f !important;
        }

        .woocommerce .widget_price_filter .ui-slider .ui-slider-range {
            background-color: #f7941f;
        }

        .woocommerce .widget_price_filter .ui-slider .ui-slider-handle {
            background-color: #f7941f;
        }

        .woocommerce span.onsale,
        header .header-cart .badge {
            background-color: #f7941f;
        }

        .woocommerce .star-rating span::before,
        .woocommerce .comment-form p.stars a,
        .woocommerce-tabs .tabs.wc-tabs li.active a {
            color: #f7941f !important;
        }

        .wc-tabs>li>a::after {
            background: #f7941f !important;
        }

        .woocommerce-pagination .page-numbers .page-numbers.current,
        .woocommerce nav.woocommerce-pagination ul li a:focus,
        body.woocommerce nav.woocommerce-pagination ul li a:hover,
        .woocommerce nav.woocommerce-pagination ul li span.current {
            color: #f7941f !important;
        }

        .filters-row .page-numbers .current {
            background-color: transparent !important;
            color: #fede00;
        }

        header.page-header-2 a.appointment:after {
            border-color: transparent #000040 transparent transparent;
        }

        header.page-header-2 a.appointment {
            background-color: #000040;
        }


        @media (min-width: 992px) {

            header.page-header-2 .navbar-nav>li.current-menu-item>a:after,
            header.page-header-2 .navbar-nav>li:hover>a:after {
                background-color: #f7941f;
            }
        }

        header.page-header-2 .search-container:hover .button {
            background-color: #000040;
        }

        #mainSlider .banner-btn,
        #mainSlider .banner-btn:focus {
            border: 2px solid #f7941f;
        }

        .services-tabs .services-tabs-icons>span.active {
            background-color: #f7941f;

        }

        .icons-tabs .nav-tabs>li.active>a [class*='icon-'],
        .icons-tabs .nav-tabs>li>a:hover [class*='icon-'] {
            color: #f7941f;

        }

        .icons-tabs .nav-tabs>li>a::after {
            background: #f7941f;

        }

        .marker-list-sm-1>li:after {
            color: #f7941f;

        }

        .how-works-number {
            color: #f7941f;

        }

        .banner-free .banner-text-1 {
            background-color: #f7941f;

        }

        .banner-free .banner-text-1:after {
            border-color: #f7941f transparent transparent transparent;
        }

        .pricing-box-header {
            background-color: #f7941f;

        }

        .text-icon-hor2 .icon-wrapper2 {
            color: #f7941f;

        }

        #appointmentForm.modalform-sm .wpcf7-submit.btn {
            border-color: #f7941f;

        }

        body .textarea-custom:hover,
        body .textarea-custom:focus,
        body .input-custom:hover,
        body .input-custom.focus,
        body .wpcf7-form-control.wpcf7-textarea:hover,
        body .wpcf7-form-control.wpcf7-textarea:focus {
            border-color: #f7941f !important;

        }

        .bootstrap-datetimepicker-widget table td.active,
        .bootstrap-datetimepicker-widget table td.active:hover {
            background-color: #f7941f !important;

        }

        div.wpcf7-validation-errors,
        div.wpcf7-acceptance-missing {
            border-color: #f7941f;
        }

        @media (min-width: 992px) {
            header.page-header-2 .navbar-nav .dropdown-menu {
                border-bottom-color: #f7941f;
            }
        }

        .pricing-box-footer .mark-icon {
            color: #f7941f;

        }

        @media (max-width: 991px) {
            header.page-header-2 .navbar-toggle:hover {
                color: #f7941f;

            }
        }

        .filters-row .page-numbers .current {
            color: #f7941f;

        }

        .estimator-panel .col-title [class*='icon'] {
            color: #f7941f;

        }

        .service-grid-item:hover .service-grid-item-title {
            background-color: #f7941f;

        }

        .service-grid-item-title:after {
            border-color: transparent transparent #f7941f transparent;
        }

        @media (max-width: 767px) {
            .estimator-panel .panel-toggle {
                color: #f7941f;

            }
        }

        .car-faq-text .vc_toggle_title:hover h4 {
            color: #f7941f;

        }

        .filters-by-category ul li a:hover,
        .filters-by-category ul li a.selected {
            color: #f7941f;

        }

        .filters-by-category ul li a:after {
            background-color: #f7941f;

        }

        .twentytwenty-handle {
            background-color: #f7941f;

        }

        .section-blog .item .item__img .icon {
            background-color: #f7941f;

        }

        .slick-dots li.slick-active button,
        .slick-dots li.slick-active button:hover {
            background: #f7941f;

        }

        .block-title .title-separator {
            background-color: #f7941f;

        }

        .block-title .title-separator:before,
        .block-title .title-separator:after {
            background-color: #f7941f;

        }

        .faq-accordion .faq__title:before {
            background-color: #f7941f;

        }

        .info02 .info02__icon {
            color: #f7941f;

        }

        .blog-post .post-meta li.author .author__text {
            color: #f7941f;

        }

        .promo01 .promo01-header {
            background-color: #f7941f;

        }

        .promo01 .promo01-content .text-02 {
            color: #f7941f;

        }

        .services-block-alt .caption .title a:hover {
            color: #f7941f;

        }

        .services-block-alt:before {
            background-color: #f7941f;

        }

        .nav-pills>li.active>a {
            color: #f7941f !important;

        }

        .nav-aside ul li a:before {
            background-color: #f7941f;

        }

        .address-info .address-info__icon {
            color: #f7941f;

        }

        .services-box .services-box__icon {
            color: #f7941f;

        }

        .card01 .card01__wrapper:before {
            background-color: #f7941f;

        }

        .card01 .card01__title a:hover {
            color: #f7941f;

        }

        .card01 .card01__social-icon li a:hover {
            background-color: #f7941f;

        }

        .marker-list-sm>li:after {
            color: #f7941f;

        }

        .promo-01 .promo-01__title .text-02 {
            color: #f7941f;

        }

        .box01 .box01__icon:before {
            background-color: #f7941f;

        }

        .promo02 .promo02__marker {
            color: #f7941f;

        }

        .stat-box02 .stat-box02__value {
            color: #f7941f;

        }

        .text-icon:before {
            background-color: #f7941f;

        }

        .video-block .video-block__icon span {
            background-color: #f7941f;

        }

        .stat-box02 .stat-box02__value:before {
            background-color: #f7941f;

        }

        .pricing-box02:before {
            background-color: #f7941f;

        }

        .pricing-box02.slick-center .pricing-box02__price,
        .pricing-box02.item-active .pricing-box02__price {
            color: #f7941f;

        }

        .newsbox .newsbox__title a:hover {
            color: #f7941f;

        }

        .newsbox .newsbox__data .icon-marker {
            background-color: #f7941f;

        }

        .newsbox .newsbox__link:hover {
            color: #f7941f;

        }

        .box-custom01 .box-custom01__icon .icon {
            color: #f7941f;

        }

        .video-wrapper .video-block__icon span {
            background-color: #f7941f;

        }

        .services-tabs .services-tabs-nav>li a:before {
            background-color: #f7941f;

        }

        .start-box02 .start-box02__text {
            border-color: #f7941f;
        }

        .pt-slick-button .slick-arrow:hover {
            color: #f7941f;

        }

        .banner-service .banner-text-3 i.icon {
            color: #f7941f;
        }

        .services-title .title-separator {
            background-color: #f7941f;

        }

        .estimate-current-change {
            color: #f7941f;
        }

        .estimate-part-price-price {
            color: #f7941f;
        }

        .estimate-part-close {
            color: #f7941f;
        }

        .estimate-table-info-list .round-icon {
            color: #f7941f;
            border-color: #f7941f;
        }

        .estimator-panel .form-group label a,
        div.rwmb-input .form-group label a {
            color: #f7941f;
        }

        #fullServices.modal .modal-header .close {
            color: #f7941f;
        }

        .services-title .title-separator:before,
        .services-title .title-separator:after {
            background-color: #f7941f;

        }

        .btn-invert:before,
        .btn-invert:after {
            background-color: #2c2c2c !important;
        }

        header.page-header-2 .header-topline {
            background-color: #f7941f;
            color: #fff;
            font-size: 14px;
        }

        .dropdown-check-list {
            display: inline-block;
            width: 100%;

            background: #f7f7f7;
            color: #8d8d8d;
            height: 35px;
            margin: 6px 0px;
        }

        .dropdown-check-list .anchor {
            width: 100%;
            padding: 2px 15px;
            color: #8d8d8d;
            height: 35px;
            border: 1px solid #ccc;
            position: relative;
            cursor: pointer;
            display: inline-block;
            padding: 5px 50px 5px 19px;

        }

        .dropdown-check-list .anchor:after {
            position: absolute;
            content: "";
            font-size: 3px;
            border-left: 2px solid #8d8d8d;
            ;
            border-top: 2px solid #8d8d8d;
            ;
            padding: 2px;
            right: 6px;
            top: 39%;
            -moz-transform: rotate(-135deg);
            -ms-transform: rotate(-135deg);
            -o-transform: rotate(-135deg);
            -webkit-transform: rotate(-135deg);
            transform: rotate(-135deg);
        }

        .dropdown-check-list .anchor:active:after {
            right: 8px;
            top: 21%;
        }

        .dropdown-check-list ul.items {
            padding: 2px;
            display: none;
            margin: 0;
            border: 1px solid #ccc;
            border-top: none;
        }

        .dropdown-check-list ul.items li {
            list-style: none;
        }

        .dropdown-check-list.visible .anchor {
            color: #8d8d8d;
        }

        .dropdown-check-list.visible .items {
            display: block;
        }

        th {
            color: white;
        }
    </style>



    <script src="wp-includes/js/jquery/jquery.min9d52.js?ver=3.5.1" id="jquery-core-js"></script>

    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            '../../../connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1075525552878436');
        fbq('track', 'PageView');
    </script>


</head>

<body class="home page-template-default page page-id-56 wp-embed-responsive layout-2 theme-car-repair-services woocommerce-no-js mechaniclane-default mechaniclane-kit-1944 mechaniclane-page mechaniclane-page-56">
    <!-- mobile menu -->
    <nav class="panel-menu" id="mobile-menu">
        <ul>
        </ul>
        <div class="mm-navbtn-names">
            <div class="mm-closebtn">Close</div>
            <div class="mm-backbtn">Back</div>
        </div>
    </nav>
    <!-- Header -->
    <?php include 'header.php'; ?>

    <div id="pageTitle" style="background-image: url(content/uploads/block-bg-4.jpg)">
        <div class="container">
            <h1>Appointment</h1>
            <div class="breadcrumbs">
                <div class="breadcrumb">
                    <!-- Breadcrumb section -->
                    <span><span><a href="index.php">Home</a> / <span><a href="ourservices.php">Appointment</a> </span></span></span>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="container-fluid ct" style="padding:30px; color:#000040">
        <div class="container">
            <div class="row">
                <h1>Get In Touch!</h1>
                <p>Our customer team will quickly get back to you with answers!</p>
            </div>
        </div>
    </div> -->
    <?php
    if ($_SESSION['id'] != "") {
        $name = $_SESSION['name'];
        $phone = $_SESSION['phone'];
        $email = $_SESSION['email'];
        $valid = "readonly";
    }
    ?>
    <div class="container-fluid zemp">
        <div class="container">
            <div class="row">

                <div class="content">
                    <div class="body1">
                        <div class="container-fluid mat">
                            <h2 class="title-main">Schedule <span class="color">Car Service</span></h2>
                            To schedule an appointment give us a call at <?php echo $row['contact']; ?> or fill out the form below with your information and requested services.
                            <div class="card" padding: 9px;>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <?php echo $msg; ?>

                                            <div class="col-md-12">
                                                <button style="background: #fede00; padding: 15px;width:100%;border:none;margin-bottom:10px">Contact Information</button>
                                                <table class="table table-dark table-hover">
                                                    <tbody>

                                                        <tr>
                                                            <th scope="row" style=" background: #ed7d31;    width: 40%;">Name </th>
                                                            <td><?= $name  ?></td>
                                                        </tr>
                                                        <tr>

                                                            <th scope="row" style=" background: #ed7d31;    width: 40%;">Phone Number </th>
                                                            <td><?= $rowss['phone'];  ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" style=" background: #ed7d31;    width: 40%;">User Email </th>
                                                            <td><?= $email ?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </div>

                                            <div class="col-md-12">

                                                <button style="background: #fede00; padding: 15px;width:100%;border:none;margin-bottom:10px">Car Details</button>
                                                <table class="table table-dark table-hover">
                                                    <tbody>

                                                        <tr>
                                                            <th scope="row" style=" background: #ed7d31;    width: 40%;">Vehicle Brand </th>
                                                            <td><?= $_SESSION["b_brand"];  ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" style=" background: #ed7d31;    width: 40%;">Vehicle Model </th>
                                                            <td><?= $_SESSION["b_model"];  ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" style=" background: #ed7d31;    width: 40%;">Vehicle Varient</th>
                                                            <td><?= $_SESSION["b_variant"]; ?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                            <div class="col-md-12">

                                                <button style="background: #fede00; padding: 15px;width:100%;border:none;margin-bottom:10px">Service Details</button>
                                                <table class="table table-dark table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row" style=" background: #ed7d31;    width: 40%;">Service</th>
                                                            <td><?= $_SESSION["b_service"];  ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" style=" background: #ed7d31;    width: 40%;">Total Price : </th>
                                                            <td><b>Rs. ₹<?= $_SESSION["b_selling_price"]; ?>/-</b></td>
                                                        </tr>
                                                        <!-- <tr>
                                                    <th scope="row" style=" background: #ed7d31;    width: 40%;">Vehicle Varient</th>
                                                    <td><?= $_SESSION["b_variant"]; ?></td>
                                                </tr> -->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-6">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <form method="POST" action="" enctype="multipart/form-data">

                                                    <div class="row">

                                                        <div class="col-md-12">
                                                            <button style="background: #fede00; padding: 15px;width:100%;border:none;margin-bottom:10px">Appointment Details</button>
                                                            <!-- <h5>Appointment Details</h5> -->
                                                            <div class="form-group">
                                                                <span class="wpcf7-form-control-wrap car-model">
                                                                    <label class="wpcf7-form-label">Vehicle Register Number</label>
                                                                    <input type="text" name="reg_number" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Registration Number" required="">
                                                                </span>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="datetimepicker-wrap">
                                                                    <span class="wpcf7-form-control-wrap date">
                                                                        <input type="text" name="appointment_date" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control datetimepicker" aria-required="true" aria-invalid="false" placeholder="Date" />
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <span class="wpcf7-form-control-wrap car-model">
                                                                    <select name="time">
                                                                        <option value="">--Select time slot--</option>
                                                                        <option value="8-10am">08:00 - 10:00 AM</option>
                                                                        <option value="11-1pm">11:00 - 1:00 PM</option>
                                                                        <option value="2-5pm">02:00 - 05:00 PM</option>
                                                                    </select>
                                                                </span>
                                                            </div>
                                                            <label for="chkPassport">
                                                                <input type="checkbox" name="chkPassport" id="chkPassport" onclick="EnableDisableTextBox()" />
                                                                Whether Pickup Required
                                                            </label>
                                                            <br />
                                                            <div id="pickup_required"></div>

                                                            <label for="chkPassport1">
                                                                <input type="checkbox" id="chkPassport1" name="chkPassport2" onclick="EnableDisableTextBox1()" />
                                                                Whether Tow Services Required
                                                            </label>
                                                            <br />
                                                            <div id="tow_required">
                                                            </div>
                                                            <div class="p-3">
                                                                <div class="custom-checkbox">
                                                                    <input type="checkbox" class="" id="customCheck1" name="customCheck1" required="" aria-required="true">
                                                                    <label>I agree with the Terms and Conditions.</label><span style="color: red;font-size: 22px;">**</span>
                                                                </div>
                                                            </div>


                                                            <button id="submit" type="submit" name="submit" style="    background-color: #6a6aff;padding: 15px;color: white;width: 100%;font-size: 23px;border: none;border-radius: 10px;margin: 20px 0px 20px 0px;"><span>Submit</span></button>
                                                            <div class="notes-custom">Please note that the date and time you requested may not be available. </div>
                                                        </div>





                                                    </div>
                                            </div>

                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script type="text/javascript">
                // fetching models
                function fetch_model(id) {
                    var main_cat = id;
                    if (main_cat) {
                        $('#brand_danger').html('');
                        jQuery.ajax({
                            url: 'fetch_models.php',
                            type: 'POST',
                            data: {
                                id: main_cat
                            },
                            success: function(data) {
                                jQuery('#model_category').html(data);
                            }
                        });
                    } else {
                        jQuery('#model_category').html('<option value="">--Select brand First--</option>');
                    }
                }

                $('#checked_option').on('change', function() {

                    var checked_option = [];
                    $('input[name="checked_option"]:checked').each(function() {
                        checked_option.push(this.value);
                        console.log(checked_option);
                    });
                    $('#fuel_warning').html('');
                    if (checked_option.length === 0) {
                        jQuery('#services').html('<option value="">--Select sevice--</option>');
                    } else {
                        jQuery.ajax({
                            url: 'fetch_models.php',
                            type: 'POST',
                            data: {
                                cat_id: checked_option
                            },
                            success: function(data) {
                                jQuery('#services').html(data);
                            }
                        });
                    }

                })

                function fetch_service(id) {
                    var main_cat = id;
                    $('#fuel_warning').html('');
                    if (main_cat) {
                        jQuery.ajax({
                            url: 'fetch_models.php',
                            type: 'POST',
                            data: {
                                cat_id: main_cat
                            },
                            success: function(data) {
                                jQuery('#services').html(data);
                            }
                        });
                    } else {
                        jQuery('#services').html('<option value="">--Select service--</option>');
                    }
                }

                // $("input[type='radio'][name='fuel_type']").change(function () {
                //   var variant = $(this).val();
                //   $('#fuel_warning').html('');
                //   $('#brand_danger').html('');

                //   var brand= $('#brand').val();
                //   var model = $('#model_category').val();

                //   if(brand==""){
                //     $('#brand_danger').html("Select Brand first").css("color","red");
                //   }else if(model ==""){
                //     $('#model_danger').html("Select model");
                //   }else{
                //       jQuery.ajax({
                //       url:'fetch_models.php',
                //       type:'POST',
                //       data:{brand_id:brand,model:model,variant_name:variant},
                //       success:function(data){
                //           jQuery('#services').html(data);   
                //       } 
                //     })
                //   }

                // });


                $('#services,#brand,#model_category,input[name=fuel_type]').on('change', function() {

                    var brand_name = $("#brand option:selected").text();
                    var model = $("#model_category option:selected").text();
                    var variant = $('input[name=fuel_type]:checked').val();
                    var service = [];
                    var arr = [];

                    $('input[name=services]:checked').each(function() {
                        service.push(this.value);
                    });
                    //deleting space and \n from value of  array in services
                    var service_string = service.map(function(val) {
                        return val.replace(/\n/g, '').trim();
                    });
                    console.log(service_string);

                    $('#fuel_warning').html("");
                    if ($('#brand').val() == "") {
                        $('#brand_danger').html("Select Brand first").css("color", "red");
                    } else if (!$('input[name=fuel_type]:checked').val()) {
                        $('#fuel_warning').html("Select Fuel type").css("color", "red");
                    } else {
                        jQuery.ajax({
                            url: 'fetch_models.php',
                            type: 'POST',
                            data: {
                                brand_name: brand_name,
                                model: model,
                                variant_name: variant,
                                service: service_string
                            },
                            dataType: "json",
                            success: function(data) {
                                $('#estimates_price').val(data);
                            }
                        });
                    }


                    // $('#estimates_ripce').val(valueFUnction());

                });

                function valueFUnction(quan) {
                    var $selection = $('#services').find(':selected');
                    var variant = $('#variant').val();
                    var total = 0;
                    $selection.each(function() {
                        total += $(this).data('price');
                    });
                    return total;
                }
            </script>

        </div>
        <section class="mechaniclane-section mechaniclane-top-section mechaniclane-element mechaniclane-element-144374a mechaniclane-section-stretched mechaniclane-section-boxed mechaniclane-section-height-default mechaniclane-section-height-default" data-id="144374a" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}" style="margin-top: 50px;">
            <div class="mechaniclane-container mechaniclane-column-gap-default">
                <div class="mechaniclane-row">
                    <div class="mechaniclane-column mechaniclane-col-100 mechaniclane-top-column mechaniclane-element mechaniclane-element-e8cc321" data-id="e8cc321" data-element_type="column">
                        <div class="mechaniclane-column-wrap mechaniclane-element-populated">
                            <div class="mechaniclane-widget-wrap">
                                <div class="mechaniclane-element mechaniclane-element-187c5dc mechaniclane-widget mechaniclane-widget-car-brands" data-id="187c5dc" data-element_type="widget" data-widget_type="car-brands.default">
                                    <div class="mechaniclane-widget-container">
                                        <div class="block">
                                            <div class="container">
                                                <div class="block-title">
                                                    <h2 class="block-title__title" style="margin-bottom:20px">We Repair All Makes of Automobiles</h2>
                                                    <!--<div class="block-title__description"> We work with all makes and models of vehicles </div>-->
                                                    <div class="row justify-content-md-center">
                                                        <div class="col col-lg-2"></div>
                                                        <div class="col-lg-8">
                                                            <p>Our comprehensive car care solutions are available for all makes of automobiles to make them readily accessible to all. Whether it be brand-specific spare parts or repairs that require the right skills &amp; expertise, we are equipped to support all your car needs. </p>
                                                        </div>
                                                        <div class="col col-lg-2"></div>
                                                    </div>
                                                    <img src="images/car-brands.jpg" width="100%">

                                                </div>
                                                <div class="row text-center ptb-30">
                                                    <div class="col-md-12 col-lg-12">
                                                        <div class="pb-30">
                                                            <a class="btn btn-border btn-color02 js-tab-modals" href="appointment.php" style="background:#f7941f !important ;color:#fff">
                                                                <span>Book your appointment </span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end bramds-->
        <section class="mechaniclane-section">
            <div class="container-fluid">
                <img src="images/car-repair-service-vector.jpg" class="img-fluid img-responsive" width="100%">
            </div>
        </section>

        <!--footer-->

        <?php include 'footer.php'; ?>

        <!-- Footer -->

        <!--  <div class="back-to-top" style="bottom: 15px;"><a href="#top">
            <span class="icon icon-arrow_up"></span>
       </a></div>-->


        <div class="modal fade" id="couponForm">
            <div class="modal-dialog container">
                <div class="modal-content">
                    <div class="modal-header">

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Coupon</h4>
                    </div>
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <button type="button" id="btn_save_close" class="btn btn-default" data-dismiss="modal"><span>Close</span></button>
                        <button id="btn_save_and_close_for_ele" type="button" class="btn btn-primary"><span>Print </span></button>
                    </div>
                </div>
            </div>
        </div>


        <script src='wp-includes/js/dist/vendor/wp-polyfill.min89b1.js?ver=7.4.4' id='wp-polyfill-js'></script>

        <script src='wp-includes/js/dist/i18n.mina706.js?ver=ac389435e7fd4ded01cf603f3aaba6a6' id='wp-i18n-js'></script>
        <script src='wp-includes/js/dist/vendor/lodash.minf492.js?ver=4.17.19' id='lodash-js'></script>

        <script src='wp-includes/js/dist/url.min534b.js?ver=98645f0502e5ed8dadffd161e39072d2' id='wp-url-js'></script>
        <script src='wp-includes/js/dist/hooks.min110c.js?ver=84b89ab09cbfb4469f02183611cc0939' id='wp-hooks-js'></script>

        <script src='wp-includes/js/dist/api-fetch.min44e0.js?ver=4dec825c071b87c57f687eb90f7c23c3' id='wp-api-fetch-js'></script>
        <script id='wp-api-fetch-js-after'>
            wp.apiFetch.use(wp.apiFetch.createRootURLMiddleware("wp-json/index.html"));
            wp.apiFetch.nonceMiddleware = wp.apiFetch.createNonceMiddleware("79acd41ab6");
            wp.apiFetch.use(wp.apiFetch.nonceMiddleware);
            wp.apiFetch.use(wp.apiFetch.mediaUploadMiddleware);
            wp.apiFetch.nonceEndpoint = "wp-admin/admin-ajaxf809.html?action=rest-nonce";
        </script>



        <script id='wc-add-to-cart-js-extra'>
            /* <![CDATA[ */
            var wc_add_to_cart_params = {
                "ajax_url": "\/car-repair-service-v4\/demo2\/wp-admin\/admin-ajax.php",
                "wc_ajax_url": "\/car-repair-service-v4\/demo2\/?wc-ajax=%%endpoint%%",
                "i18n_view_cart": "View cart",
                "cart_url": "https:\/\/smartdata.tonytemplates.com\/car-repair-service-v4\/demo2\/cart\/",
                "is_cart": "",
                "cart_redirect_after_add": "no"
            };
            /* ]]> */
        </script>


        <script id='woocommerce-js-extra'>
            /* <![CDATA[ */
            var woocommerce_params = {
                "ajax_url": "\/car-repair-service-v4\/demo2\/wp-admin\/admin-ajax.php",
                "wc_ajax_url": "\/car-repair-service-v4\/demo2\/?wc-ajax=%%endpoint%%"
            };
            /* ]]> */
        </script>

        <script id='wc-cart-fragments-js-extra'>
            /* <![CDATA[ */
            var wc_cart_fragments_params = {
                "ajax_url": "\/car-repair-service-v4\/demo2\/wp-admin\/admin-ajax.php",
                "wc_ajax_url": "\/car-repair-service-v4\/demo2\/?wc-ajax=%%endpoint%%",
                "cart_hash_key": "wc_cart_hash_5423fef15a75874e8aa482a87b544eea",
                "fragment_name": "wc_fragments_5423fef15a75874e8aa482a87b544eea",
                "request_timeout": "5000"
            };
            /* ]]> */
        </script>


        <script id='custom-js-extra'>
            /* <![CDATA[ */
            var ajax_object = {
                "ajax_nonce_cart": "2a51254ac2",
                "ajax_nonce_post": "9a3689dd3d",
                "ajax_nonce_coupon": "710f2c7a91",
                "ajax_nonce_testimonial": "04cfec8912",
                "ajax_nonce_gallery": "56a015acbc",
                "ajax_url": "https:\/\/smartdata.tonytemplates.com\/car-repair-service-v4\/demo2\/wp-admin\/admin-ajax.php",
                "loader_img": "https:\/\/smartdata.tonytemplates.com\/car-repair-service-v4\/demo2\/content\/themes\/car-repair-services\/images\/ajax-loader.gif",
                "site_preloader_timeout": "500"
            };
            var ajax_slickslider = {
                "autoplay": "true",
                "autoplay_speed": "7000",
                "arrows": "true",
                "dots": "false",
                "fade": "true",
                "speed": "500",
                "pause_on_hover": "true",
                "pause_on_dots_hover": "true"
            };
            /* ]]> */
        </script>


        <script id="mechaniclane-frontend-js-before">
            var mechaniclaneFrontendConfig = {
                "environmentMode": {
                    "edit": false,
                    "wpPreview": false
                },
                "i18n": {
                    "shareOnFacebook": "Share on Facebook",
                    "shareOnTwitter": "Share on Twitter",
                    "pinIt": "Pin it",
                    "download": "Download",
                    "downloadImage": "Download image",
                    "fullscreen": "Fullscreen",
                    "zoom": "Zoom",
                    "share": "Share",
                    "playVideo": "Play Video",
                    "previous": "Previous",
                    "next": "Next",
                    "close": "Close"
                },
                "is_rtl": false,
                "breakpoints": {
                    "xs": 0,
                    "sm": 480,
                    "md": 768,
                    "lg": 1025,
                    "xl": 1440,
                    "xxl": 1600
                },
                "version": "3.0.16",
                "is_static": false,
                "legacyMode": {
                    "elementWrappers": true
                },
                "urls": {
                    "assets": "https:\/\/smartdata.tonytemplates.com\/car-repair-service-v4\/demo2\/content\/plugins\/mechaniclane\/assets\/"
                },
                "settings": {
                    "page": [],
                    "editorPreferences": []
                },
                "kit": {
                    "lightbox_enable_counter": "yes",
                    "lightbox_enable_fullscreen": "yes",
                    "lightbox_enable_zoom": "yes",
                    "lightbox_enable_share": "yes",
                    "lightbox_title_src": "title",
                    "lightbox_description_src": "description"
                },
                "post": {
                    "id": 56,
                    "title": "Car%20Repair%20Services%20%E2%80%93%20Just%20another%20car-repair-service%20Sites%20site",
                    "excerpt": "",
                    "featuredImage": false
                }
            };
        </script>
        <script type="text/javascript">
            var checkList = document.getElementById('list1');
            checkList.getElementsByClassName('anchor')[0].onclick = function(evt) {
                if (checkList.classList.contains('visible'))
                    checkList.classList.remove('visible');
                else
                    checkList.classList.add('visible');
            }
        </script>

        <div class="modal fade modalform-sm" id="fullServices">
            <div class="modal-dialog container">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2>Select Service</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close-cross"></i></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <form class="estimate_search" autocomplete="off">
                                <div class="row service-modal-row">
                                </div>
                                <input id="mk" type="text" name="make">
                                <input id="md" type="text" name="model">
                                <input id="yr" type="text" name="the_year">
                                <div class="tt-item">
                                    <input type="file" name="s">
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-border btn-invert" type="submit" id="estimatorSubmitModal"><span>GET ESTIMATE</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="content/cache/min/11/58dd196d6766c8f69b09f71a10e37cab.js" data-minify="1" defer></script>

</body>

</html>

<script type="text/javascript">
    function EnableDisableTextBox() {
        if ($('#chkPassport').is(':checked')) {
            $('#pickup_required').html('<textarea class="form-control" name="chkPassport1" id="txtPassportNumber" placeholder="Address" rows="3"/> </textarea>')
        } else {
            $('#pickup_required').html('');
        }
    }
</script>
<script type="text/javascript">
    function EnableDisableTextBox1() {

        if ($('#chkPassport1').is(':checked')) {
            $('#tow_required').html('<textarea class="form-control" id="txtPassportNumber1" name="txtPassportNumber1"/></textarea>')
        } else {
            $('#tow_required').html('');
        }
    }
</script>

<script type="text/javascript">
    var expanded = false;

    function showCheckboxes() {
        var checkboxes = document.getElementById("services");
        if (!expanded) {
            checkboxes.style.display = "block";
            expanded = true;
        } else {
            checkboxes.style.display = "none";
            expanded = false;
        }
    }
</script>