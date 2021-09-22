<?php
include 'mechanical_admin/config.php';
include 'all_function.php';

if (isset($_POST['booking'])) {
    $sql = "SELECT * FROM tbl_servicecharge where id='" . $_GET['id'] . "' ";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    if (is_array($row)) {
         $_SESSION["booking_id"] = $row['id'];
        $_SESSION["b_brand"] = $row['brand'];
        $_SESSION["b_model"] = $row['model'];
        $_SESSION["b_service"] = $row['service'];
        $_SESSION["b_variant"] = $row['variant'];
        $_SESSION["b_selling_price"] = $row['selling_price'];
        if ($_SESSION['id'] != "") {
            header('location:book_appointment.php');
        } else {
            header('location:loginold.php');
        }
    } else {
        echo '<script>alert("Something Went Wrong..!!");
        window.location.href = "index.php";
        </script>';
    }
}
if (isset($_GET['id'])) {

    $fetch_service_details = mysqli_query($con,"SELECT tbl_services.*, tbl_category.name AS cat_name FROM tbl_services JOIN tbl_category ON tbl_services.cat_id=tbl_category.id WHERE tbl_services.title =(SELECT service FROM `tbl_servicecharge` WHERE id='".$_GET['id']."')");
    $fetch_rows = mysqli_fetch_assoc($fetch_service_details);

    //fetching price
    $sql1 = "SELECT * FROM tbl_servicecharge where id='" . $_GET['id'] . "' ";
    $result1 = mysqli_query($con, $sql1);
    $row1 = mysqli_fetch_assoc($result1);

}
?>

<body class="home page-template-default page page-id-56 wp-embed-responsive  woocommerce-no-js mechaniclane-default mechaniclane-kit-1944 mechaniclane-page mechaniclane-page-56">
    <!-- mobile menu -->
    <!-- <nav class="panel-menu" id="mobile-menu">
        <ul>
        </ul>
        <div class="mm-navbtn-names">
            <div class="mm-closebtn">Close</div>
            <div class="mm-backbtn">Back</div>
        </div>
    </nav>
 -->
    <?php include 'header.php'; ?>
    <div class="sidebutton">
        <a>
            <form action="" method="Post">
                <button type="submit" style="background-color: #ff000000;border: none;" name="booking">Book Now</button>
            </form>
        </a>
    </div>
    <section id="service-details">
        <div class="container">
            <div class="row">
                <!-- Left container -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="car-img pull-right">
                        <a href="mechanical_admin/uploads/service/<?= $fetch_rows['image'];?>" target="_blank"> <img src="mechanical_admin/uploads/service/<?= $fetch_rows['image'];?>"></a>
                    </div>
                </div>
                <!-- End of Left container -->

                <div class="col-md-8 col-sm-8 col-xs-12 section">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="service-heading">
                                <h1 class="car-selected"><?= $fetch_rows['cat_name']?></h1>
                                <h2 class="service-name"><?= $fetch_rows['title']?></h2>

                                <ul class="service-highlight">
                                    <li>
                                        <p class="">Book Now and use it</p>
                                    </li>
                                    <li>
                                        <p class="">Takes ~<?= $fetch_rows['time_period']?></p>
                                    </li>
                                    <li>
                                        <p class="">Warranty <?= $fetch_rows['warranty']?></p>
                                    </li>
                                </ul>
                                <ul class="pricing-list">
                                    <li>
                                        <span class="item">Package Price</span>
                                        <span class="amount"><i class="fa fa-inr"></i> <?= $row1['selling_price']?></span>
                                        <span id="package_total" class="hidden"></span>
                                        <span id="cashback_total" class="hidden"></span>
                                        <span class="support hidden-xs">Walk-in to any Mechanic Lane service center</span>
                                    </li>
                                    <!-- Implementation of Credits and Coupons -->
                                    <li class="hidden" id="coupan_credit_li">
                                        <span class="item">Coupon Applied</span>
                                        <span class="amount">- <i class="fa fa-inr"><span id="coupan_credit"></span></i></span>
                                    </li>
                                    <!-- End of Credits and Coupons -->

                                    <!-- Total -->
                                    <li class="pricing-total hidden">
                                        <span class="item">Total</span>
                                        <span class="amount" id="package_total"><i class="fa fa-inr"></i>499</span>
                                    </li>
                                    <!-- End of Total -->

                                    <!-- Coupon -->
                                </ul>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">

                            <div class="service-tabs">
                                <ul class="nav nav-tabs nav-tab-pills" role="tablist">
                                    <li role="presentation" class="active"><a href="#package-details">Package Details</a></li>
                                    <li role="presentation"><a href="#how-it-works">How it Works</a></li>
                                    <li role="presentation"><a href="#why-us">Why Mechanic Lane</a></li>
                                    <!-- <li role="presentation"><a href="#reviews"">Customer Reviews</a></li> -->
                                    <li role="presentation"><a href="#faqs">FAQs</a></li>
                                </ul>
                                <div class="tab-content clearfix">
                                    <div role="tabpanel" class="tab-pane active" id="package-details">
                                        <h3 class="tab-heading visible-xs">Package Details</h3>
                                        <div class="service-package">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th colspan="2">Description</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><?php $desc = explode(",",$fetch_rows['description']);
                                                        foreach ($desc as $key => $value) {
                                                            echo $value.'<br>';
                                                       } ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane active" id="how-it-works">
                                        <!-- <h3>How it works</h3> -->
                                        <h3 class="tab-heading">How it Works</h3>
                                        <!-- pickup and drop -->
                                        <ul>
                                            <li>
                                                <div class="steps">1</div>
                                                <h4>Choose a Package</h4>
                                                <p>Upfront pricing for all the services your car needs. No hidden charges</p>
                                            </li>
                                            <li>
                                                <div class="steps">2</div>
                                                <h4>Our Expert Technicians will help you to schedule your booking</h4>
                                                <p>Our team of expert professionals will call you to schedule your booking at the nearest Mechanic Lane service center</p>
                                            </li>
                                            <li>
                                                <div class="steps">3</div>
                                                <h4>Your car is fixed at a designated Mechanic Lane workshop</h4>
                                                <p>You get complete transparency in where the car is fixed and you can also get regular service updated on our app.</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div role="tabpanel" class="tab-pane active" id="why-us">
                                        <h3 class="tab-heading">Why Mechanic Lane?</h3>
                                        <div class="row item-row">
                                             <?php
                                            $sql = "SELECT * FROM tbl_whychooseus ORDER BY id DESC LIMIT 6";
                                            $run = mysqli_query($con,$sql);

                                            if ($run) {
                                            $i=1;
                                            while ($row =mysqli_fetch_assoc($run)) {
                                            ?>
                                            <div class="col-sm-3">
                                                <div class="icon-item">
                                                    <div class="icon">
                                                        <?php
                                                        if ($i==1) {
                                                        echo '<img src="https://dfm8vuuzt40ty.cloudfront.net/home/features/pickup.png" class="" alt="Free Pickup and Drop">';
                                                        }elseif ($i==2) {
                                                           echo '<img src="https://dfm8vuuzt40ty.cloudfront.net/home/features/standardize.png" class="" alt="Trusted Service Partners">';
                                                        }elseif ($i==3) {
                                                            echo '<img src="https://dfm8vuuzt40ty.cloudfront.net/home/features/parts.png"" class="" alt="Trusted Service Partners">';
                                                        }elseif ($i==4) {
                                                            echo ' <img src="https://dfm8vuuzt40ty.cloudfront.net/home/features/trusted.png" class="" alt="1000 KM Warranty">';
                                                        }elseif ($i>4 AND $i%2==0) {
                                                           echo '<img src="https://dfm8vuuzt40ty.cloudfront.net/home/features/parts.png"" class="" alt="Trusted Service Partners">';
                                                        }elseif ($i>4 AND $i%2!=0) {
                                                             echo '<img src="https://dfm8vuuzt40ty.cloudfront.net/home/features/pickup.png" class="" alt="Free Pickup and Drop">';
                                                        }

                                                        ?>
                                                        
                                                    </div>
                                                    <div class="content">
                                                        <div class="heading">
                                                            <?= $row['title'];?>
                                                            <div class="sub-heading">
                                                               <?= $row['description'];?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            $i++;
                                            } 
                                            }
                                            ?>
                                            <!-- <div class="col-sm-3">
                                                <div class="icon-item">
                                                    <div class="icon">
                                                        <img src="https://dfm8vuuzt40ty.cloudfront.net/home/features/standardize.png" class="" alt="Trusted Service Partners">
                                                    </div>
                                                    <div class="content">
                                                        <div class="heading">
                                                            Trusted Partners
                                                            <div class="sub-heading">
                                                                All our service centers are equipped with best in class facilities and technology
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="icon-item">
                                                    <div class="icon">
                                                        <img src="https://dfm8vuuzt40ty.cloudfront.net/home/features/parts.png" class="" alt="Genuine Parts">
                                                    </div>
                                                    <div class="content">
                                                        <div class="heading">
                                                            Genuine Parts
                                                            <div class="sub-heading">
                                                                We use OEM / OEM equivalent parts to ensure that you get the best service for your car
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="icon-item">
                                                    <div class="icon">
                                                        <img src="https://dfm8vuuzt40ty.cloudfront.net/home/features/trusted.png" class="" alt="1000 KM Warranty">
                                                    </div>
                                                    <div class="content">
                                                        <div class="heading">1000 KM Warranty
                                                            <div class="sub-heading">
                                                                Get 1 Month / 1000 KM Warranty on each service and for every part replaced upto Rs 5000
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane active" id="faqs">
                                        <h3 class="tab-heading">Frequently Asked Questions</h3>
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <?php
                                            $sql_faq = "SELECT * FROM tbl_faq ORDER BY id DESC";
                                            $run_faq = mysqli_query($con,$sql_faq);
                                            if ($run_faq) {
                                            $i=1;
                                            while ($row_faq =mysqli_fetch_assoc($run_faq)) {
                                            ?>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="heading<?=$i;?>">
                                                    <h4 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$i;?>" aria-expanded="false" aria-controls="collapse<?=$i;?>">
                                                           <?= $row_faq['question'] ?>
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse<?=$i;?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?=$i;?>">
                                                    <div class="panel-body">
                                                        <?= $row_faq['answer'] ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            $i++;
                                            }
                                            }
                                            ?> 
                                            <!-- <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="heading1">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                                            Are there any extra/added charges apart from the described rates for my car service?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
                                                    <div class="panel-body">
                                                        Absolutely not. When you book a car service through us, you only pay for the service you opted. No last minute surprises, no hidden costs. Promise!
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="heading2">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                                            How much time does AC Gas Topup for my Honda Brio take?</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                                                    <div class="panel-body">
                                                        Car AC Gas Topup for your Honda Brio takes around 1/2 hours at your nearest Mechanic Lane service center</div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="heading3">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                                            What if I face any issue after the service of my car?</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                                    <div class="panel-body">
                                                        At Mechanic Lane, we are all for a fulfilled customer experience. When you book with us, you get 1 month/1000 kms warranty on your car service. On top of that, our 24x7 proactive customer support will help you resolve the issue with the highest priority.
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                    <!-- show 30/50 point checklist only for service packages -->
                                </div>
                            </div>
                            <!-- Similar Services -->
                        </div>
                    </div>
                    <!-- End of Right Container -->

                </div>
            </div>
        </div>
        </div>
    </section>



    <section id="other-services">
        <div class="container">
            <h3 class="heading text-center hidden-xs">More Services for Honda Brio</h3>

            <h3 class="heading visible-xs">More Services <br>for Honda Brio</h3>
            <div class="row">
                <div class="services">
                    <div class="carousel slide multi-item-carousel" id="services-carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <a href="/car-service/honda-brio-petrol/general-service/basic">
                                    <div class="service" id="service-basic">
                                        <div class="list-item-title">
                                            <h3>General Service Basic</h3>
                                            <p>Recommended every 5,000 km/ 3 months</p>
                                            <h4>Rs 2499</h4>
                                        </div>
                                        <div class="list-item-action">
                                            <!-- <button class="btn btn-border btn-invert">Book Now</button> -->

                                        </div>
                                        <div class="list-item-description">
                                            <div class="item-description">
                                                <span class="badge">Engine Oil</span> <span>Replaced</span>
                                            </div>
                                            <div class="item-description">
                                                <span class="badge">Engine Oil Filter</span>
                                                <span>Replaced</span>
                                            </div>
                                            <div class="item-description">
                                                <span class="badge">Air Filter</span>
                                                <span>Cleaned</span>
                                            </div>
                                            <div class="item-description">
                                                <span class="badge">Wiper Fluid</span>
                                            </div>
                                            <div class="item-description">
                                                <span class="badge">Battery Water</span>
                                                <span>Topup</span>
                                            </div>



                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a class="btn btn-outline" href="/car-service/honda-brio-petrol">View All Services</a>
            </div>
        </div>
    </section>



    <?php include 'footer.php'; ?>
    <script src="content/cache/min/11/58dd196d6766c8f69b09f71a10e37cab.js" data-minify="1" defer></script>
    <script src="css/js/owl.carousel.min.js"></script>

</body>


</html>