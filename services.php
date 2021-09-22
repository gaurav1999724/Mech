<?php
include 'mechanical_admin/config.php';
include 'all_function.php';
error_reporting(0);
// if ($_GET['brand'] == "" or $_GET['model'] == "") {
//    echo "<script>alert('Select brand modal first');
//    window.location='index.php';</script>";
// }
$fetch_brand = mysqli_query($con, "SELECT * FROM tbl_make WHERE id='" . $_GET['brand'] . "'");
$rows_brand = mysqli_fetch_assoc($fetch_brand);
$fetch_model = mysqli_query($con, "SELECT * FROM tbl_model WHERE id='" . $_GET['model'] . "'");
$rows_model = mysqli_fetch_assoc($fetch_model);
$variant = $_GET['variant'];
//fetch services
$query = "SELECT tbl_servicecharge.*,tbl_services.description FROM tbl_servicecharge JOIN tbl_services ON tbl_servicecharge.service=tbl_services.title WHERE brand='" . $rows_brand['name'] . "' AND model='" . $rows_model['name'] . "' AND variant='$variant'";
$fetch_services = mysqli_query($con, $query);
?>

<body class="home page-template-default page page-id-56 wp-embed-responsive  woocommerce-no-js mechaniclane-default mechaniclane-kit-1944 mechaniclane-page mechaniclane-page-56">
   <!-- mobile menu -->

   <!-- Header -->
   <?php include 'header.php'; ?>
   <!--end Header-->

   <div id="pageTitle" style="background-image: url(content/uploads/block-bg-4.jpg)">
      <div class="container">
         <h1>Services</h1>

         <div class="breadcrumbs">
            <div class="breadcrumb">
               <!-- Breadcrumb section -->
               <span><span><a href="index.php">Home</a> / <span><a href="ourservices.html">Services</a> </span></span></span>
            </div>
         </div>

         <!--end Breadcrumb section -->
      </div>
   </div>





   <section id="services-container">
      <div class="container">
         <div class="row">
            <div class="col-md-12 hidden-xs hidden-sm">
               <h1>Showing Services for <?php
                                          echo '<b>' . $rows_brand['name'] . '-' . $rows_model['name'] . '/' . $_POST['variant'] . '</b>';
                                          ?></h1>
            </div>
            <div class="col-md-2 hidden-xs hidden-sm">
               <ul id="services-menu">
                  <li><a href="#seasonal">Season Special Services</a></li>
                  <li><a href="#general-service">General Service</a></li>
                  <li><a href="#repair">Custom Repairs</a></li>
                  <li><a href="#body-shop">Body Shop</a></li>
                  <li><a href="#car-wash">Car Cleaning</a></li>
                  <li><a href="#wheel-care">Wheel Care</a></li>
                  <li><a href="#others">Other Packages</a></li>
               </ul>
            </div>
            <div class="col-md-10 col-xs-12">
               <!-- General Service -->
               <div class="row-fluid">
                  <div class="hidden-xs" id="seasonal"></div>
                  <h2 class="visible-xs" id="seasonal">Season Special Services <br>for Honda Brio</h2>
                  <div class="row services">
                     <?php
                     if (mysqli_num_rows($fetch_services) == 0) {
                     ?>
                        <h1> No result found</h1>
                        <?php
                     } else {
                        while ($row_service = mysqli_fetch_assoc($fetch_services)) {
                           $desc = explode(",", $row_service['description']);
                           $desc_num = count($desc);
                        ?>
                           <div class="col-sm-4 col-xs-12">
                              <div class="service" id="service-comprehensive-car-ac-service">
                              
                                    <div class="list-item-title">
                                       <h3><?= $row_service['service']; ?></h3>
                                    </div>
                                    <div class="list-item-description">
                                       <?php
                                       foreach ($desc as $key => $value) {
                                          if ($key > 4) {
                                             break;
                                          } else {
                                             $words = preg_replace('/\d/', '', $value ) ;
                                             echo '<div class="item-description">
                                                <span style="text-align:left;">' .  $result = str_replace( array(".", "'", ""), '', $words). '
                                                </span>
                                             </div>';
                                          }
                                       } ?>
                                    </div>
                                    <div class="list-item-action">
                                       <?php
                                       if ($desc_num > 4) {
                                          echo '<div class="list-item-details">See Details</div>';
                                       }
                                       ?>

                                       <h4>Rs <?= $row_service['selling_price']; ?></h4>
                                       <div class="item-description44" style="display: flex">
                                          <a href="servicesdetails.php?brand=<?= $_GET['brand'] ?>&model=<?= $_GET['model'] ?>&variant=<?= $_GET['variant'] ?>&id=<?= $row_service['id']; ?>"><button class="btn" id="jk" style="margin-right:5px; background: #000040;"><span>Book Now</span></button></a>
                                          <?php
                                          foreach ($_SESSION["cart_item"] as $item) {
                                          ?>
                                           
                                          <?php } ?>

                                          <?php
                                          $in_session = "0";
                                          if (!empty($_SESSION["cart_item"])) {
                                             $session_code_array = array_keys($_SESSION["cart_item"]);
                                             if (in_array($row_service['id'], $session_code_array)) {
                                                $in_session = "1";
                                             }
                                          }
                                          ?>
                                          <form id="frmCart">
                                             <input type="hidden" id="qty_<?php echo $row_service['id']; ?>" name="quantity" value="1" size="2" />
                                             <input type="button" id="add_<?php echo $row_service['id']; ?>" class="btn btnAddAction cart-action" onClick="cartAction('add','<?php echo $row_service['id'];; ?>')" <?php if ($in_session != "0") { ?>style="display:none;" <?php }else{ ?> style="background: #f7941f;" <?php 
                                             }  ?> value="Add Cart">
                                             <input type="button" id="added_<?php echo $row_service['id']; ?>" class="btn btnAdded " <?php if ($in_session != "1") { ?>style="display:none ;" <?php } ?> value="Added">
                                          </form>
                                         
                                       </div>
                                    </div>
                          
                              </div>
                           </div>
                     <?php
                        }
                     }
                     ?>

                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--footer-->
   <?php include 'footer.php'; ?>
   <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
   <script>
      function showEditBox(editobj, id) {
         $('#frmAdd').hide();
         $(editobj).prop('disabled', 'true');
         var currentMessage = $("#message_" + id + " .message-content").html();
         var editMarkUp = '<textarea rows="5" cols="80" id="txtmessage_' + id + '">' + currentMessage + '</textarea><button name="ok" onClick="callCrudAction(\'edit\',' + id + ')">Save</button><button name="cancel" onClick="cancelEdit(\'' + currentMessage + '\',' + id + ')">Cancel</button>';
         $("#message_" + id + " .message-content").html(editMarkUp);
      }

      function cancelEdit(message, id) {
         $("#message_" + id + " .message-content").html(message);
         $('#frmAdd').show();
      }

      function cartAction(action, id) {
         var queryString = "";
         if (action != "") {
            switch (action) {
               case "add":
                  queryString = 'action=' + action + '&id=' + id + '&quantity=' + $("#qty_" + id).val();
                  break;
               case "remove":
                  queryString = 'action=' + action + '&id=' + id;
                  break;
               case "empty":
                  queryString = 'action=' + action;
                  break;
            }
         }
         jQuery.ajax({
            url: "cart_action.php",
            data: queryString,
            type: "POST",
            success: function(data) {
               $("#cart-item").html(data);
               if (action != "") {
                  switch (action) {
                     case "add":
                        $("#add_" + id).hide();
                        $("#added_" + id).show();
                        break;
                     case "remove":
                        $("#add_" + id).show();
                        $("#added_" + id).hide();
                        break;
                     case "empty":
                        $(".btnAddAction").show();
                        $(".btnAdded").hide();
                        break;
                  }
               }
            },
            error: function() {}
         });
      }
   </script>

   <!--footer end-->

   <script type="text/javascript">
      jQuery(document).ready(function($) {
         $('.owl-carousel').owlCarousel({
            autoplay: 3000,
            loop: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
               0: {
                  items: 1,
                  nav: true
               },
               400: {
                  items: 1,
                  nav: true
               },
               600: {
                  items: 2,
                  nav: true
               },
               1000: {
                  items: 4,
                  nav: true,
                  loop: true,
                  margin: 20
               }
            }
         })
      })
   </script>
   <script>
      (function() {
         "use strict";

         var carousels = function() {
            $(".owl-carousel1").owlCarousel({
               loop: true,
               center: true,
               margin: 0,
               responsiveClass: true,
               nav: false,
               responsive: {
                  0: {
                     items: 1,
                     nav: false
                  },
                  680: {
                     items: 2,
                     nav: false,
                     loop: false
                  },
                  1000: {
                     items: 3,
                     nav: true
                  }
               }
            });
         };

         (function($) {
            carousels();
         })(jQuery);
      })();
   </script>

   <script src="content/cache/min/11/58dd196d6766c8f69b09f71a10e37cab.js" data-minify="1" defer></script>
   <script src="css/js/owl.carousel.min.js"></script>

</body>