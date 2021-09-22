<?php
include 'mechanical_admin/config.php';
error_reporting(0);
if ($_SESSION['id'] != "") {
    header('location:profile');
}
if (isset($_POST['submit'])) {
    $phone = $_POST['phone'];
    $password = md5($_POST['password']);
    $fetch = mysqli_query($con, "SELECT * FROM `tbl_register` WHERE phone='$phone'");
    $rows = mysqli_fetch_assoc($fetch);
    if ($fetch) {
        $num = mysqli_num_rows($fetch);
        if ($num > 0) {
            $fetch_pass = mysqli_query($con, "SELECT * FROM `tbl_register` WHERE password='$password'");
            if ($fetch_pass) {
                $num_pass = mysqli_num_rows($fetch_pass);
                if ($num_pass > 0) {
                    $_SESSION['id'] = $rows['id'];
                    $_SESSION['email'] = $rows['email'];
                    $_SESSION['name'] = $rows['name'];
                    header('location:index.php');
                } else {
                    $err_pass = 'Invalid Password..!';
                }
            }
        } else {
            $msg = 'Phone is Not Valid..!';
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

                        <form action="#" id="login_form" method="post">
                            <div class="col-lg-6">
                                <div class="card2 card border-0 px-4 py-5">
                                    <h3>Login Here</h3>

                                    <div class="row px-3">
                                        <input type="number" name="phone"  id="name" placeholder="Enter a valid Phone Number">
                                        <label style="color:red;"><?php echo $msg; ?></label>
                                    </div>
                                    <div class="row px-3">
                                        <input type="password" name="password" id="password" placeholder="Enter password">
                                        <label style="color:red;"><?php echo $err_pass; ?></label>
                                    </div>

                                    <div class="row mb-3 px-3" style="margin-top:10px;">
                                        <button class="btn btn-border btn-color02 js-tab-modals" id="get_services" type="submit" name="submit" style="background:#f7941f !important; width:100%">
                                            <span>Find Services</span></button>
                                    </div>
                                    <div class="row mb-4 px-3">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <small class="font-weight-bold">Don't have an account? <a class="text-danger" style="color: red;font-weight: 600;" href="signup">Register</a></small> <br>
                                            </div>
                                            <div class="col-md-6">
                                                <small style="float:right;" class="font-weight-bold">Forgot Password..? <a class="text-danger get_forget_form" style="color: red;font-weight: 600;" href="forgot_password">Click here</a></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="content/cache/min/11/58dd196d6766c8f69b09f71a10e37cab.js" data-minify="1" defer></script>