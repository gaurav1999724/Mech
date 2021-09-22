<?php
include 'mechanical_admin/config.php';
error_reporting(0);
if ($_SESSION['id'] != "") {
    header('location:profile');
}

if (isset($_POST['Submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $user_otp = rand(100000, 999999);
    $date = date("y-m-d");
    $user_activation_code = md5(rand());
    $res = mysqli_query($con, "SELECT * FROM tbl_register WHERE phone = '$phone' AND email_status = 'verified' ");
    $num = mysqli_num_rows($res);
    if ($num > 0) {
        $msg = '<small class="font-weight-bold">This Phone Number is already registered</small>';
    } else {
        $query = "INSERT INTO `tbl_register`(`name`, `phone`, `email`, `password`,`user_activation_code`,`coins`, `user_otp`, `email_status`, `created_at`) VALUES ('$name','$phone','$email','$password','$user_activation_code','500','$user_otp','not verified','$date')";
        if ($query) {  
        $response = file_get_contents('http://cp.smscart.co.in/pushsms.php?username=mechaniclane&api_password=d219dxw7takckgw1l&sender=MechLN&to=' . $phone . '&message=Your_OTP_is ' . $user_otp . '&priority=11&e_id=1001868254458735900&t_id=1007174630871323728');
        $runns =    mysqli_query($con, $query);
        $id = $con->insert_id;
		header('location:verify_otp.php?code=' . $user_activation_code);
        } else {
            $msg = '<div class="alert alert-danger" id="msg" role="alert">Something went wrong</div>';
        }
    }
}


?>
<style>
    #refg {
        padding: 50px;
        background: #e0e4e7;
    }

    #refg .card0 {
        background: none;
        box-shadow: none;
        border-radius: 0px
    }

    #refg .card2 {
        box-shadow: none;
        background: none;
        margin: 0px 40px
    }

    #refg .logo {
        width: 200px;
        height: 100px;
        margin-top: 20px;
        margin-left: 35px
    }

    #refg .image {
        width: 80%
    }

    #refg .border-line {
        border-right: 1px solid #EEEEEE
    }

    #refg .text-sm {
        font-size: 14px !important
    }

    ::placeholder {
        color: #BDBDBD;
        opacity: 1;
        font-weight: 300
    }

    :-ms-input-placeholder {
        color: #BDBDBD;
        font-weight: 300
    }

    ::-ms-input-placeholder {
        color: #BDBDBD;
        font-weight: 300
    }

    #refg input,
    textarea {
        padding: 10px 12px 10px 12px;
        border: 1px solid lightgrey;
        border-radius: 2px;
        margin-bottom: 5px;
        margin-top: 2px;
        width: 100%;
        box-sizing: border-box;
        color: #2C3E50;
        font-size: 14px;
        letter-spacing: 1px
    }

    #refg input:focus,
    textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: 1px solid #304FFE;
        outline-width: 0
    }

    #refg button:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        outline-width: 0
    }

    #refg a {
        color: inherit;
        cursor: pointer
    }

    #refg .btn-blue {
        background-color: #1A237E;
        width: 150px;
        color: #fff;
        border-radius: 2px
    }

    #refg .btn-blue:hover {
        background-color: #000;
        cursor: pointer
    }

    #refg .bg-blue {
        color: #fff;
        background-color: #1A237E
    }

    @media screen and (max-width: 991px) {
        #refg .logo {
            margin-left: 0px
        }

        #refg .image {
            width: 300px;
            height: 220px
        }

        #refg .border-line {
            border-right: none
        }

        #refg .card2 {
            border-top: 1px solid #EEEEEE !important;
            margin: 0px 15px
        }
    }

    #otp_verify {
        display: none;
    }
</style>

<body class="home page-template-default page page-id-56 wp-embed-responsive layout-2 theme-car-repair-services woocommerce-no-js mechaniclane-default mechaniclane-kit-1944 mechaniclane-page mechaniclane-page-56">
    <?php include 'header.php'; ?>
    </div>
    </div>
    </div>
    </div>
    <div id="refg">
        <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
            <div class="container">
                <div class="card card0 border-0">
                    <div class="row d-flex">
                        <div class="col-lg-6">
                            <div class="card1 pb-5">
                                <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="https://i.imgur.com/uNGdWHi.png" class="image"> </div>
                            </div>
                        </div>
                        <form id="signup_form" action="" method="post" name="signup_form">
                            <div class="col-lg-6">
                                <div class="card2 card border-0 px-4 py-5">
                                    <div class="row px-3">
                                        <input type="text" name="name" placeholder="Name">
                                    </div>
                                    <div class="row px-3">
                                        <input type="email" name="email" placeholder="Email">
                                    </div>
                                    <div class="row px-3">
                                        <input type="text" name="phone" id="phone_number" placeholder="Phone Number">
                                        <label id="invalid_phone"></label>
                                    </div>
                                    <div class="row px-3">
                                        <input type="password" name="password" placeholder="Password">
                                    </div>
                                    <div class="error"><?= $msg ?></div>
                                    <div class="row mb-3 px-3" style="margin-top:10px;">
                                        <button class="btn btn-border btn-color02 js-tab-modals" id="get_services" type="submit" name="Submit" style="background:#f7941f !important; width:100%">
                                            <span>Find Services</span></button>
                                    </div>
                                    <div class="row mb-4 px-3">
                                        <small class="font-weight-bold">Already registered..? <a class="text-danger" href="login">Login here</a></small>

                                    </div>

                                </div>
                            </div>
                        </form>
                        <form id="otp_verify" method="post">
                            <div class="col-lg-6">
                                <div class="card2 card border-0 px-4 py-5">
                                    <div class="row px-3">
                                        <input type="text" name="otp" placeholder="Enter OTP">
                                    </div>

                                    <div class="row mb-4 px-3 error"></div>
                                    <div class="row mb-3 px-3" style="margin-top:10px;">
                                        <button class="btn btn-border btn-color02 js-tab-modals" id="get_services" type="submit" name="submit_cars" style="background:#f7941f !important; width:100%">
                                            <span>Submit OTP</span></button>
                                    </div>
                                    <div class="row mb-4 px-3"> <small class="font-weight-bold">Already registered..? <a class="text-danger" href="login.php">Login here</a></small> </div>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="content/cache/min/11/58dd196d6766c8f69b09f71a10e37cab.js" data-minify="1" defer></script>
    <!-- <script type="text/javascript">
        $('#signup_form').on('submit', function(e) {
            e.preventDefault();
            var phone = $("#phone_number").val();
            var filter = /^[7-9][0-9]{9}$/;
            var data = $("#signup_form").serialize();
            if (filter.test(phone)) {
                $.ajax({
                    type: 'POST',
                    url: 'email_verify',
                    data: data,
                    success: function(data) {
                        if (data == '1') {
                            $('.error').html('<small class="font-weight-bold">This email is already registered<</small>');
                        } else if (data == '3') {
                            $('.error').html('<div class="alert alert-danger" id="msg" role="alert">Something went wrong</div>');
                        } else {
                            window.location.href = 'verify_otp.php';
                        }
                    }
                });
            } else {
                $('#invalid_phone').html('Invalid Phone Number').css({
                    color: "red"
                });
                return false;
            }

        });
        $('#otp_verify').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'otp_verify',
                data: data,
                success: function(data) {
                    if (data == '1') {
                        window.location.href = 'index.php';
                    } else {
                        $('.error').html('<small class="font-weight-bold">Invalid otp</small>');
                    }
                }
            });
        });
    </script> -->
    <?php include 'footer.php'; ?>
</body>
</body>