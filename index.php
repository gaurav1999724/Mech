<?php
include 'config.php';
include 'all_function.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en-US">
<body
    class="home page-template-default page page-id-56 wp-embed-responsive  woocommerce-no-js mechaniclane-default mechaniclane-kit-1944 mechaniclane-page mechaniclane-page-56">

     <?php include 'header.php'; ?>


    <div id="pageContent" class="content-area">

 <div id="primary" class="container-fluid">

 <div id="post-56" class="post-56 page type-page status-publish hentry">
                <!-- Block -->
<div class="offset-sm">
                    <div data-mechaniclane-type="wp-page" data-mechaniclane-id="56" class="mechaniclane mechaniclane-56"
                        data-mechaniclane-settings="[]">
                        <div class="mechaniclane-inner">
                            <div class="mechaniclane-section-wrap">
                                <section class="mechaniclane-section mechaniclane-top-section">
                                    <div class="mechaniclane-container">
                                        <div class="mechaniclane-row">
                                            <div class="col-md-12 col-sm-12 col-lg-12" style="padding:0px;">
                                                <video width="100%" autoplay loop muted>
                                                    <source src="video/mechanic-lane.mp4" type="video/mp4" />
                                                </video>
                                            </div>

                                            <!--<div class="col-md-5 col-lg-5 col-sm-5 mobile" style="padding:0px;">
                                                <div class="promo01-layout-right">
                                                    <div class="promo01">
                                                       <div class="new-image-box">
                                                            <img src="images/right-side-image.jpg"
                                                                class="attachment-full size-full" alt="" loading="lazy">
                                                        </div>
                                                        <div class="pt-description" style="position: inherit;">
                                                            <div class="pt-description-wrapper">
                                                                <div class="pt-title"
                                                                    style="font-size: 24px; line-height: 34px; text-transform: UPPERCASE;">
                                                                    Holistic Services for your car</div>
                                                                <ul class="">
                                                                    <li style="color:#fff;">Diagnostics</li>
                                                                    <li style="color:#fff;">Repairs</li>
                                                                    <li style="color:#fff;">Servicing</li>
                                                                    <li style="color:#fff;">Breakdowns</li>
                                                                    <li style="color:#fff;">Tow Services</li>
                                                                </ul>
                                                                <a class="btn btn-border btn-color02" href="appointment.php"
                                                                    style="background-color:#f7941f; color:#fff;"><span>Book
                                                                        an Appointment</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>-->
                                        </div>
                                    </div>
                                </section>

       
         <div class="container-fluid news">
             <div class="container">
                 <div class="col-md-offset-8 col-md-3 banner-search banner-modern" >
                     <h2>The Best Car Service Awaits You</h2>
                       <p>Get instant quotes for your car service</p>
                       <form method="get" action="services.php">
                        <div class="form-group">
                            <div class="select-wrapper">
                                <span class="wpcf7-form-control-wrap select1">
                                    <select name="brand" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required input-custom" aria-required="true" id="brand" name="brand">

                                        <option value="">--Select Brand--</option>
                                        <?php
                                        $x = fetch_brands();
                                        foreach ($x as $value =>$y) {
                                            echo '<option value="'.$y['id'].'">'.$y['name'].'</option>';
                                        }?>
                                    </select>

                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="select-wrapper">
                                <span class="wpcf7-form-control-wrap select1">
                                    <select name="model" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required input-custom" id="model" name="model" aria-required="true" aria-invalid="false">
                                        <option value="">--Select Model--</option>
                                    </select>
                                </span>
                            </div>
                        </div>
                         <br>
                        <div class="form-group">
                            <div class="wrapper">
                                <span class="wpcf7-form-control-wrap">
                                Select Fuel Type<br></span>
                                <input class="form-check-input" type="radio" name="variant" id="inlineRadio1" value="Petrol">
                                <label class="form-check-label" for="inlineRadio1">Petrol</label><input class="form-check-input" type="radio" name="variant" id="inlineRadio1" value="Diesel">
                                <label class="form-check-label" for="inlineRadio1">Diesel</label><input class="form-check-input" type="radio" name="variant" id="inlineRadio1" value="CNG">
                                <label class="form-check-label" for="inlineRadio1">CNG</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-border btn-color02 js-tab-modals" id="get_services" type="submit" name="submit_cars" style="background:#f7941f !important; width:100%">
                                <span>Find Services</span></button>
                           <!--  <a  name="submit_data">
                            Find Services</a> -->
                        </div>
                    </form>
                                             
                 </div>
             </div>
         </div>       
           <script src='ajax.js'></script>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

            <script>
                
                $("#brand").on('change', function(){
                var brand_id = this.value;
               
                if (brand_id) {
                    $.ajax({
                        url: 'fetch_models.php',
                        type: 'POST',
                        data: {id: brand_id},
                        success: function(data) {
                          jQuery('#model').html(data);

                        }
                    })
                }else{
                    $('#model').html('<option value="">--Select Model First--</option>');
                }                
                
            });
            $('#get_services').on('click',function(){
                var brand = $('#brand').val();
                var model = $('#model').val();
                if (brand=="") {
                    $('<span style ="color:red">Select brand first</span>').insertAfter($('#brand'));
                    return false
                }
                else{
                    return true;
                }
              
            });
        </script>                  
 <section
class="mechaniclane-section mechaniclane-top-section mechaniclane-element mechaniclane-element-8cb5cf2 mechaniclane-section-stretched mechaniclane-section-full_width mechaniclane-section-height-default mechaniclane-section-height-default slidertop-space"
data-id="8cb5cf2" data-element_type="section"
 data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
   <div class="mechaniclane-container mechaniclane-column-gap-no">
   <div class="mechaniclane-row">
   <div class="mechaniclane-column mechaniclane-col-100 mechaniclane-top-column mechaniclane-element mechaniclane-element-e655cde"
   data-id="e655cde" data-element_type="column">
   <div class="mechaniclane-column-wrap mechaniclane-element-populated">
<div class="mechaniclane-widget-wrap">
<div class="mechaniclane-element mechaniclane-element-fb8bfb2 mechaniclane-widget mechaniclane-widget-electrician-brands-2"
  data-id="fb8bfb2" data-element_type="widget"
  data-widget_type="electrician-brands-2.default">
          <div class="mechaniclane-widget-container">
 <div class="block">
<div class="container">
 <div class="block-title">
     <h2 class="block-title__title" style="margin-bottom:20px">Say Bye To Your Car Worries!</h2>
   <div class="container">
   <div class="row justify-content-md-center">
    <div class="col col-lg-2"></div>
    <div class="col-lg-8">
   <p>Is your car giving you trouble! Does your busy schedule don't allow you to waste any time at a garage? We have a convenient solution to that. With us, enjoy a hassle-free process of getting your car repaired, washed, towed and more with just one click. </p>
     </div>
    <div class="col col-lg-2"></div>
     </div>
     </div>
                                                                            
                                                                            <div class="block-title__description">
                                                                                These few steps will help return your
                                                                                car to a working condition </div>
                                                                                <div class="row text-center ptb-30">
                                                                                    <div class="col-md-12 col-lg-12">
                                                                                        <div class="pb-30" style="margin-top:30px">
                                                                                            <a class="btn btn-border btn-color02 js-tab-modals" href="appointment.php" style="background:#f7941f !important">
                                                                                                <span>Book your appointment </span></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            <div class="title-separator"></div>
                                                                        </div>
                                                                        <div class="row" id="stepsAnimation">
                                                                            <div class="col-xs-6 col-sm-3">
                                                                                <div class="how-works-circle">
                                                                                    <div class="step step1">
                                                                                        <div class="step-inside-number">
                                                                                            01</div>
                                                                                        <div class="step-inside">
                                                                                            <img src="content/uploads/phone.png"
                                                                                                alt="">
                                                                                            <img src="content/uploads/phone.png"
                                                                                                alt="">
                                                                                            <img src="content/uploads/phone.png"
                                                                                                alt="">
                                                                                            <img src="content/uploads/phone.png"
                                                                                                alt="">
                                                                                            <img src="content/uploads/phone.png"
                                                                                                alt="">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="how-works-text">
                                                                                        Download our App
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xs-6 col-sm-3">
                                                                                <div class="how-works-circle">
                                                                                    <div class="step step2">
                                                                                        <div class="step-inside-number">
                                                                                            02</div>
                                                                                        <div class="step-inside">
                                                                                            <img src="content/uploads/how-works-02-1.png"
                                                                                                alt="">
                                                                                            <img src="content/uploads/how-works-02-2.png"
                                                                                                alt="">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="how-works-text">
                                                                                        Make an APPOINTMENT
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xs-6 col-sm-3">
                                                                                <div class="how-works-circle">
                                                                                    <div class="step step3">
                                                                                        <div class="step-inside-number">
                                                                                            03</div>
                                                                                        <div class="step-inside">
                                                                                            <img src="content/uploads/how-works-03.png" alt="">
                                                                                           
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="how-works-text">
                                                                                        We'll take YOUR CAR for repair
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xs-6 col-sm-3">
                                                                                <div class="how-works-circle">
                                                                                    <div class="step step4">
                                                                                        <div class="step-inside-number">
                                                                                            04</div>
                                                                                        <div class="step-inside">
                                                                                            <img src="content/uploads/how-works-04.png"
                                                                                                alt="">

                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="how-works-text">
                                                                                        Enjoy a Refreshed Drive
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
                                    </div>
                                </section>
                                <section class="mechaniclane-section mechaniclane-top-section mechaniclane-element mechaniclane-element-8716057 mechaniclane-section-stretched mechaniclane-section-full_width mechaniclane-section-height-default mechaniclane-section-height-default" data-id="8716057" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                    <div class="mechaniclane-container mechaniclane-column-gap-default">
                                        <div class="mechaniclane-row">
                                            <div class="mechaniclane-column mechaniclane-col-100 mechaniclane-top-column mechaniclane-element mechaniclane-element-641e71a" data-id="641e71a" data-element_type="column">
                                                <div class="mechaniclane-column-wrap mechaniclane-element-populated">
                                                    <div class="mechaniclane-widget-wrap">
                                                        <div class="mechaniclane-element mechaniclane-element-b2a573a mechaniclane-widget mechaniclane-widget-car_faq_two" data-id="b2a573a" data-element_type="widget" data-widget_type="car_faq_two.default">
                                                            <div class="mechaniclane-widget-container">
                                                                <div class="block">
                                                                    <div class="container">
                                                                        <div class="row">



                                                                            <div class="col-xs-12 col-sm-6 col-md-12 banner-col">
                                                                                <div data-mechaniclane-type="page" data-mechaniclane-id="2357" class="mechaniclane mechaniclane-2357" data-mechaniclane-settings="[]">
                                                                                    <div class="mechaniclane-inner">
                                                                                        <div class="mechaniclane-section-wrap">
                                                                                            <section class="mechaniclane-section mechaniclane-top-section mechaniclane-element mechaniclane-element-327ae0f mechaniclane-section-boxed mechaniclane-section-height-default mechaniclane-section-height-default" data-id="327ae0f" data-element_type="section">
                                                                                                <div class="mechaniclane-container mechaniclane-column-gap-no">
                                                                                                    <div class="mechaniclane-row">
                                                                                                        <div class="mechaniclane-column mechaniclane-col-100 mechaniclane-top-column mechaniclane-element mechaniclane-element-5948e10" data-id="5948e10" data-element_type="column">
                                                                                                            <div class="mechaniclane-column-wrap mechaniclane-element-populated">
                                                                                                                <div class="mechaniclane-widget-wrap">
                                                                                                                    <div class="mechaniclane-element mechaniclane-element-5575f27 mechaniclane-widget mechaniclane-widget-banner_services" data-id="5575f27" data-element_type="widget" data-widget_type="banner_services.default">
                                                                                                                        <div class="mechaniclane-widget-container">

                                                                                                                            <a href="#" class="banner-service">
                                                                                                                                <img height="370" src="content/uploads/block-wrapper01.jpg" class="visible-sm visible-xs" alt="" loading="lazy">
                                                                                                                                <div class="row-flex">
                                                                                                                                    <div class="col-left">
                                                                                                                                        <i class="icon icon-tow-truck"></i>
                                                                                                                                    </div>
                                                                                                                                    <div class="col-center">
                                                                                                                                        <div class="banner-text-1">
                                                                                                                                            Be foolproof in your road trip plans!
                                                                                                                                        </div>
                                                                                                                                        <div class="banner-text-2">
                                                                                                                                            Ready for that long road trip with friends? But is your car also ready for the shenanigans of your trip? To get your car servicing done by experts or to get a quote, please contact us. 
                                                                                                                                        </div>
                                                                                                                                         
                                                                                                                                    </div>
                                                                                                                                    <div class="col-right">
                                                                                                                                        <div class="banner-text-3">
                                                                                                                                            <i class="icon icon-phone"></i>
 1-800-123-4565                                                                                                                                        </div>
                                                                                                                                        <div class="banner-text-4">
                                                                                                                                            Gain freedom from your car troubles as we have got you covered 24x7 & 365 days a year
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    
                                                                                                                                </div>
                                                                                                                                
                                                                                                                            </a>
                                                                                                                            
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </section>
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
                                        </div>
                                    </div>
                                </section>
                            
                            <section id="demos" class="mechaniclane-section mechaniclane-top-section mechaniclane-element mechaniclane-element-2284ba6 mechaniclane-section-stretched mechaniclane-section-full_width mechaniclane-section-height-default mechaniclane-section-height-default" data-id="2284ba6" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                    <div class="mechaniclane-container mechaniclane-column-gap-no">
                                        <div class="mechaniclane-row">
                                            <div class="mechaniclane-column mechaniclane-col-100 mechaniclane-top-column mechaniclane-element mechaniclane-element-ae6db8f" data-id="ae6db8f" data-element_type="column">
                                                <div class="mechaniclane-column-wrap mechaniclane-element-populated">
                                                    <div class="mechaniclane-widget-wrap">
                                                        <div class="mechaniclane-element mechaniclane-element-4ea9ef8 mechaniclane-widget mechaniclane-widget-crs_testimonials_two" data-id="4ea9ef8" data-element_type="widget" data-widget_type="crs_testimonials_two.default">
                                                            <div class="mechaniclane-widget-container">
                                                               <div class="row container-fluid">
                                                                   <div class="container">
                                                                      <div class="mechaniclane-row">
                                                                        <div class="owl-carousel owl-theme">
                                                                                    <div class="item">
                                                                                      <img src="images/First-car-icon-1.png" alt="image">
                                                                                     
                                                                                    </div>
                                                                                    <div class="item">
                                                                                      <img src="images/First-car-icon.png" alt="image">
                                                                                      
                                                                                    </div>
                                                                                    <div class="item">
                                                                                      <img src="images/First-car-icon-2.png" alt="image">
                                                                                      
                                                                                    </div>
                                                                                    <div class="item">
                                                                                      <img src="images/First-car-icon-3.png" alt="image">
                                                                                      
                                                                                    </div>
                                                                                    <div class="item">
                                                                                      <img src="images/First-car-icon-4.png" alt="image">
                                                                                      
                                                                                    </div>
                                                                                    <div class="item">
                                                                                      <img src="images/First-car-icon-5.png" alt="image">
                                                                                     
                                                                                    </div>
                                                                                    <div class="item">
                                                                                      <img src="images/First-car-icon-6.png" alt="image">
                                                                                      
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
 <section class="mechaniclane-section mechaniclane-top-section mechaniclane-element mechaniclane-section-full_width pb-30">
                            <div class="container-fluid bg-color-blue" style="background-color:#f7941e; padding:50px 0px 0px 0px;">
                                <div class="">
                                    <div class="row">
                                        <div class="col-md-1 col-lg-1"></div>
                                        <div class="col-md-2 col-lg-2 pb-30 text-center text-white">
                                            <a href="services.php"><h4 class="text-white">Car Spa</h4></a>
                                        </div>
                                        <div class="col-md-2 col-lg-2 pb-30 text-center text-white">
                                            <a href="breakdowns-service.php"><h4 class="text-white">Breakdowns</h4></a>
                                        </div>
                                        <div class="col-md-2 col-lg-2 pb-30 text-center text-white">
                                            <a href="tow-services.php"><h4 class="text-white">Tow Service</h4></a>
                                        </div>
                                        <div class="col-md-2 col-lg-2 pb-30 text-center text-white">
                                            <a href="repair-services.php"><h4 class="text-white">Repairs</h4></a>
                                        </div>
                                        <div class="col-md-2 col-lg-2 pb-30 text-center text-white">
                                            <a href="auto-spares.php"><h4 class="text-white">Car Spares</h4></a>
                                        </div>
                                        <div class="col-md-1 col-lg-1"></div>
                                    </div>
                                    
                                </div>
                                <div class="row text-center ptb-30">
                                     <div class="col-md-12 col-lg-12">
                                        <div class="pb-30">
                                                <a class="btn btn-border btn-color02 js-tab-modals" href="apointment.php" style="background:#f7941f !important">
                                                    <span>Book Your Appointment</span></a>
                                         </div>
                                         </div>
                                    </div>
                            </div>
                            </section>
 <section class="mechaniclane-section mechaniclane-top-section mechaniclane-element mechaniclane-element-e8a759d mechaniclane-section-full_width mechaniclane-section-stretched slidertop-space mechaniclane-section-height-default mechaniclane-section-height-default"
 data-id="e8a759d" data-element_type="section"
data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}" style="padding-top: 30px;">
<div class="mechaniclane-container mechaniclane-column-gap-no">
<div class="mechaniclane-row">
<div class="mechaniclane-column mechaniclane-col-100 mechaniclane-top-column mechaniclane-element mechaniclane-element-7d09e0c"
 data-id="7d09e0c" data-element_type="column">
<div class="mechaniclane-column-wrap mechaniclane-element-populated">
 <div class="mechaniclane-widget-wrap">
 <div class="mechaniclane-element mechaniclane-element-446049a mechaniclane-widget mechaniclane-widget-car_featured_services"data-id="446049a" data-element_type="widget"
 data-widget_type="car_featured_services.default">
      <div class="mechaniclane-widget-container">
 <div class="block">
 <div class="container container-fluid-sm">
                                                                        <div class="block-title">
                                                                            <h2 class="block-title__title" style="margin-bottom:20px">Our Featured
                                                                                Services</h2>
                                                                            <div class="row justify-content-md-center">
                                                                                    <div class="col col-lg-2"></div>
                                                                                    <div class="col-lg-8">
                                                                                    <p>Are you tired of relying on your luck for quality car service? Is eyeing car repair shops on the sidewalks not cutting it out anymore? This doesn't need to be the case any longer as we have heard & resolved such woes of yours. All your car troubles end here with our all-around solutions.</p>
                                                                                    </div>
                                                                                    <div class="col col-lg-2"></div>
                                                                                </div>
                                                                            <a class="btn btn-border btn-color02 js-tab-modals" href="services.php" style="background:#f7941f !important">
                                                    <span>Browse Your Services</span></a>
                                                                            <!--<div class="title-separator"></div>-->
                                                                        </div>
                                                                        <div class="overflow-hidden">
                                                                            <div class="services-tabs">
                                                                                <!-- Nav tabs -->
                                                                                <ul class="nav nav-tabs services-tabs-nav"
                                                                                    role="tablist">

                                                                                    <li><a href="#"
                                                                                            data-icon="icon1"><img
                                                                                                src="content/uploads/car-E.PNG"
                                                                                                alt=""><span>Diagnostics</span></a>
                                                                                    </li>

                                                                                    <li><a href="#"
                                                                                            data-icon="icon2"><img
                                                                                                src="content/uploads/car-A.PNG"
                                                                                                alt=""><span>Engine
                                                                                                Repair</span></a></li>

                                                                                    <li><a href="#"
                                                                                            data-icon="icon3"><img
                                                                                                src="content/uploads/car-B.PNG"
                                                                                                alt=""><span>Oil / Lube
                                                                                                / Filters</span></a>
                                                                                    </li>

                                                                                    <li><a href="#"
                                                                                            data-icon="icon4"><img
                                                                                                src="content/uploads/car-F.PNG"
                                                                                                alt=""><span>Tyres</span></a>
                                                                                    </li>

                                                                                    <li><a href="#"
                                                                                            data-icon="icon6"><img
                                                                                                src="content/uploads/car-C.PNG"
                                                                                                alt=""><span>Batteries</span></a>
                                                                                    </li>

                                                                                    <li><a href="#"
                                                                                            data-icon="icon5"><img
                                                                                                src="content/uploads/car-E.PNG"
                                                                                                alt=""><span>Spare
                                                                                                Parts</span></a></li>


                                                                                </ul>
                                                                                <!-- Tab panes -->
                                                                                <div class="services-tabs-content">
                                                                                    <!--<div class="services-tabs-caption">
                            Our Services                        </div>-->
                                                                                    <div
                                                                                        class="services-tabs-content-bg-wrap">
                                                                                        <div
                                                                                            class="services-tabs-content-bg">
                                                                                            <img width="814"
                                                                                                height="330"
                                                                                                src="content/uploads/service-tab.png"
                                                                                                class="attachment-full size-full"
                                                                                                alt="" loading="lazy" />
                                                                                            <div
                                                                                                class="services-tabs-icons">
                                                                                                <span
                                                                                                    class="services-tabs-icon icon1"
                                                                                                    style="left:29.3%;top:47.3%"><img
                                                                                                        src="content/uploads/car-E.PNG"
                                                                                                        alt=""></span>
                                                                                                <span
                                                                                                    class="services-tabs-icon icon2"
                                                                                                    style="left:8%;top:42%"><img
                                                                                                        src="content/uploads/car-A.PNG"
                                                                                                        alt=""></span>
                                                                                                <span
                                                                                                    class="services-tabs-icon icon3"
                                                                                                    style="left:13%;top:28%"><img
                                                                                                        src="content/uploads/car-B.PNG"
                                                                                                        alt=""></span>
                                                                                                <span
                                                                                                    class="services-tabs-icon icon4"
                                                                                                    style="left:82%;top:59%"><img
                                                                                                        src="content/uploads/car-F.PNG"
                                                                                                        alt=""></span>
                                                                                                <span
                                                                                                    class="services-tabs-icon icon5"
                                                                                                    style="left:38%;top:67%"><img
                                                                                                        src="content/uploads/car-C.PNG"
                                                                                                        alt=""></span>
                                                                                                <span
                                                                                                    class="services-tabs-icon icon6"
                                                                                                    style="left:25%;top:28%"><img
                                                                                                        src="content/uploads/car-C.PNG"
                                                                                                        alt=""></span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                            class="services-tabs-modal">
                                                                                            <div class="container">
                                                                                                <div
                                                                                                    class="services-modal icon1">
                                                                                                    <div
                                                                                                        class="services-modal-wrapper">
                                                                                                        <div
                                                                                                            class="services-modal__close-wrapper">
                                                                                                            <button
                                                                                                                type="button"
                                                                                                                class="services-modal__close"></button>
                                                                                                        </div>
                                                                                                        <div data-mechaniclane-type="section"
                                                                                                            data-mechaniclane-id="2740"
                                                                                                            class="mechaniclane mechaniclane-2740"
                                                                                                            data-mechaniclane-settings="[]">
                                                                                                            <div
                                                                                                                class="mechaniclane-inner">
                                                                                                                <div
                                                                                                                    class="mechaniclane-section-wrap">
                                                                                                                    <section
                                                                                                                        class="mechaniclane-section mechaniclane-top-section mechaniclane-element mechaniclane-element-548ae060 mechaniclane-section-boxed mechaniclane-section-height-default mechaniclane-section-height-default"
                                                                                                                        data-id="548ae060"
                                                                                                                        data-element_type="section">
                                                                                                                        <div
                                                                                                                            class="mechaniclane-container mechaniclane-column-gap-default">
                                                                                                                            <div
                                                                                                                                class="mechaniclane-row">
                                                                                                                                <div class="mechaniclane-column mechaniclane-col-100 mechaniclane-top-column mechaniclane-element mechaniclane-element-3dbd390a"
                                                                                                                                    data-id="3dbd390a"
                                                                                                                                    data-element_type="column">
                                                                                                                                    <div
                                                                                                                                        class="mechaniclane-column-wrap mechaniclane-element-populated">
                                                                                                                                        <div
                                                                                                                                            class="mechaniclane-widget-wrap">
                                                                                                                                            <div class="mechaniclane-element mechaniclane-element-45aac47b mechaniclane-widget mechaniclane-widget-service_modal"
                                                                                                                                                data-id="45aac47b"
                                                                                                                                                data-element_type="widget"
                                                                                                                                                data-widget_type="service_modal.default">
                                                                                                                                                <div
                                                                                                                                                    class="mechaniclane-widget-container">


                                                                                                                                                    <div
                                                                                                                                                        class="row">
                                                                                                                                                        <div
                                                                                                                                                            class="col-md-6">
                                                                                                                                                            <h6
                                                                                                                                                                class="services-modal__title-large">
                                                                                                                                                                Diagnostics
                                                                                                                                                            </h6>
                                                                                                                                                            At
                                                                                                                                                            the
                                                                                                                                                            heart
                                                                                                                                                            of
                                                                                                                                                            every
                                                                                                                                                            automobile
                                                                                                                                                            is
                                                                                                                                                            the
                                                                                                                                                            engine.
                                                                                                                                                            The
                                                                                                                                                            engine
                                                                                                                                                            is
                                                                                                                                                            what
                                                                                                                                                            creates
                                                                                                                                                            the
                                                                                                                                                            power
                                                                                                                                                            and
                                                                                                                                                            makes
                                                                                                                                                            the
                                                                                                                                                            car
                                                                                                                                                            move.
                                                                                                                                                            Just
                                                                                                                                                            like
                                                                                                                                                            the
                                                                                                                                                            human
                                                                                                                                                            heart,
                                                                                                                                                            the
                                                                                                                                                            engine
                                                                                                                                                            requires
                                                                                                                                                            proper
                                                                                                                                                            maintenance
                                                                                                                                                            and
                                                                                                                                                            care.
                                                                                                                                                            As
                                                                                                                                                            your
                                                                                                                                                            automobile
                                                                                                                                                            is
                                                                                                                                                            driven
                                                                                                                                                            and
                                                                                                                                                            the
                                                                                                                                                            engine
                                                                                                                                                            experiences
                                                                                                                                                            normal
                                                                                                                                                            wear
                                                                                                                                                            and
                                                                                                                                                            tear,
                                                                                                                                                            problems
                                                                                                                                                            will
                                                                                                                                                            inevitably
                                                                                                                                                            arise
                                                                                                                                                            that
                                                                                                                                                            require
                                                                                                                                                            repair.

                                                                                                                                                            Whether
                                                                                                                                                            you
                                                                                                                                                            come
                                                                                                                                                            in
                                                                                                                                                            for
                                                                                                                                                            your
                                                                                                                                                            check
                                                                                                                                                            engine
                                                                                                                                                            light,
                                                                                                                                                            maintenance
                                                                                                                                                            or
                                                                                                                                                            repairs,
                                                                                                                                                            you
                                                                                                                                                            can
                                                                                                                                                            count
                                                                                                                                                            on
                                                                                                                                                            us
                                                                                                                                                            to
                                                                                                                                                            properly
                                                                                                                                                            diagnose
                                                                                                                                                            your
                                                                                                                                                            engine
                                                                                                                                                            and
                                                                                                                                                            offer
                                                                                                                                                            services
                                                                                                                                                            like:
                                                                                                                                                            <ul
                                                                                                                                                                class="marker-list-sm">
                                                                                                                                                                <li>Standard
                                                                                                                                                                    tune-up
                                                                                                                                                                </li>
                                                                                                                                                                <li>Filter
                                                                                                                                                                    replacement
                                                                                                                                                                </li>
                                                                                                                                                                <li>Fuel
                                                                                                                                                                    system
                                                                                                                                                                    cleaning
                                                                                                                                                                    and
                                                                                                                                                                    more
                                                                                                                                                                </li>
                                                                                                                                                            </ul>
                                                                                                                                                            <a class="btn btn-top btn-border btn-invert btn-wide"
                                                                                                                                                                href="#"
                                                                                                                                                                data-toggle="modal"
                                                                                                                                                                data-target="#appointmentForm"><span>Appointment</span></a>
                                                                                                                                                        </div>
                                                                                                                                                        <div
                                                                                                                                                            class="divider-lg visible-sm visible-xs">
                                                                                                                                                        </div>
                                                                                                                                                        <div
                                                                                                                                                            class="col-md-6">
                                                                                                                                                            <h6
                                                                                                                                                                class="services-modal__title-small">
                                                                                                                                                                Pricing
                                                                                                                                                            </h6>
                                                                                                                                                            <div
                                                                                                                                                                class="services-modal__table">
                                                                                                                                                                <table>
                                                                                                                                                                    <tbody>

                                                                                                                                                                        <tr>
                                                                                                                                                                            <td>Engine
                                                                                                                                                                                Complete
                                                                                                                                                                                6-cylinder
                                                                                                                                                                            </td>
                                                                                                                                                                            <td>$229.99
                                                                                                                                                                            </td>
                                                                                                                                                                        </tr>

                                                                                                                                                                        <tr>
                                                                                                                                                                            <td>Engine
                                                                                                                                                                                Complete
                                                                                                                                                                                8-cylinder
                                                                                                                                                                            </td>
                                                                                                                                                                            <td>$249.99
                                                                                                                                                                            </td>
                                                                                                                                                                        </tr>

                                                                                                                                                                        <tr>
                                                                                                                                                                            <td>Engine
                                                                                                                                                                                Complete
                                                                                                                                                                                4-cylinder
                                                                                                                                                                            </td>
                                                                                                                                                                            <td>$199.99
                                                                                                                                                                            </td>
                                                                                                                                                                        </tr>

                                                                                                                                                                        <tr>
                                                                                                                                                                            <td>Engine
                                                                                                                                                                                Cradle
                                                                                                                                                                            </td>
                                                                                                                                                                            <td>$100.99
                                                                                                                                                                            </td>
                                                                                                                                                                        </tr>

                                                                                                                                                                        <tr>
                                                                                                                                                                            <td>Engine
                                                                                                                                                                                Short
                                                                                                                                                                                Block
                                                                                                                                                                            </td>
                                                                                                                                                                            <td>$119.99
                                                                                                                                                                            </td>
                                                                                                                                                                        </tr>

                                                                                                                                                                        <tr>
                                                                                                                                                                            <td>Engine
                                                                                                                                                                                Wire
                                                                                                                                                                                Harness
                                                                                                                                                                            </td>
                                                                                                                                                                            <td>$33.99
                                                                                                                                                                            </td>
                                                                                                                                                                        </tr>
                                                                                                                                                                    </tbody>
                                                                                                                                                                </table>
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
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="services-modal icon2">
                                                                                                    <div
                                                                                                        class="services-modal-wrapper">
                                                                                                        <div
                                                                                                            class="services-modal__close-wrapper">
                                                                                                            <button
                                                                                                                type="button"
                                                                                                                class="services-modal__close"></button>
                                                                                                        </div>
                                                                                                        <div data-mechaniclane-type="section"
                                                                                                            data-mechaniclane-id="2740"
                                                                                                            class="mechaniclane mechaniclane-2740"
                                                                                                            data-mechaniclane-settings="[]">
                                                                                                            <div
                                                                                                                class="mechaniclane-inner">
                                                                                                                <div
                                                                                                                    class="mechaniclane-section-wrap">
                                                                                                                    <section
                                                                                                                        class="mechaniclane-section mechaniclane-top-section mechaniclane-element mechaniclane-element-548ae060 mechaniclane-section-boxed mechaniclane-section-height-default mechaniclane-section-height-default"
                                                                                                                        data-id="548ae060"
                                                                                                                        data-element_type="section">
                                                                                                                        <div
                                                                                                                            class="mechaniclane-container mechaniclane-column-gap-default">
                                                                                                                            <div
                                                                                                                                class="mechaniclane-row">
                                                                                                                                <div class="mechaniclane-column mechaniclane-col-100 mechaniclane-top-column mechaniclane-element mechaniclane-element-3dbd390a"
                                                                                                                                    data-id="3dbd390a"
                                                                                                                                    data-element_type="column">
                                                                                                                                    <div
                                                                                                                                        class="mechaniclane-column-wrap mechaniclane-element-populated">
                                                                                                                                        <div
                                                                                                                                            class="mechaniclane-widget-wrap">
                                                                                                                                            <div class="mechaniclane-element mechaniclane-element-45aac47b mechaniclane-widget mechaniclane-widget-service_modal"
                                                                                                                                                data-id="45aac47b"
                                                                                                                                                data-element_type="widget"
                                                                                                                                                data-widget_type="service_modal.default">
                                                                                                                                                <div
                                                                                                                                                    class="mechaniclane-widget-container">


                                                                                                                                                    <div
                                                                                                                                                        class="row">
                                                                                                                                                        <div
                                                                                                                                                            class="col-md-6">
                                                                                                                                                            <h6
                                                                                                                                                                class="services-modal__title-large">
                                                                                                                                                                Diagnostics
                                                                                                                                                            </h6>
                                                                                                                                                            At
                                                                                                                                                            the
                                                                                                                                                            heart
                                                                                                                                                            of
                                                                                                                                                            every
                                                                                                                                                            automobile
                                                                                                                                                            is
                                                                                                                                                            the
                                                                                                                                                            engine.
                                                                                                                                                            The
                                                                                                                                                            engine
                                                                                                                                                            is
                                                                                                                                                            what
                                                                                                                                                            creates
                                                                                                                                                            the
                                                                                                                                                            power
                                                                                                                                                            and
                                                                                                                                                            makes
                                                                                                                                                            the
                                                                                                                                                            car
                                                                                                                                                            move.
                                                                                                                                                            Just
                                                                                                                                                            like
                                                                                                                                                            the
                                                                                                                                                            human
                                                                                                                                                            heart,
                                                                                                                                                            the
                                                                                                                                                            engine
                                                                                                                                                            requires
                                                                                                                                                            proper
                                                                                                                                                            maintenance
                                                                                                                                                            and
                                                                                                                                                            care.
                                                                                                                                                            As
                                                                                                                                                            your
                                                                                                                                                            automobile
                                                                                                                                                            is
                                                                                                                                                            driven
                                                                                                                                                            and
                                                                                                                                                            the
                                                                                                                                                            engine
                                                                                                                                                            experiences
                                                                                                                                                            normal
                                                                                                                                                            wear
                                                                                                                                                            and
                                                                                                                                                            tear,
                                                                                                                                                            problems
                                                                                                                                                            will
                                                                                                                                                            inevitably
                                                                                                                                                            arise
                                                                                                                                                            that
                                                                                                                                                            require
                                                                                                                                                            repair.

                                                                                                                                                            Whether
                                                                                                                                                            you
                                                                                                                                                            come
                                                                                                                                                            in
                                                                                                                                                            for
                                                                                                                                                            your
                                                                                                                                                            check
                                                                                                                                                            engine
                                                                                                                                                            light,
                                                                                                                                                            maintenance
                                                                                                                                                            or
                                                                                                                                                            repairs,
                                                                                                                                                            you
                                                                                                                                                            can
                                                                                                                                                            count
                                                                                                                                                            on
                                                                                                                                                            us
                                                                                                                                                            to
                                                                                                                                                            properly
                                                                                                                                                            diagnose
                                                                                                                                                            your
                                                                                                                                                            engine
                                                                                                                                                            and
                                                                                                                                                            offer
                                                                                                                                                            services
                                                                                                                                                            like:
                                                                                                                                                            <ul
                                                                                                                                                                class="marker-list-sm">
                                                                                                                                                                <li>Standard
                                                                                                                                                                    tune-up
                                                                                                                                                                </li>
                                                                                                                                                                <li>Filter
                                                                                                                                                                    replacement
                                                                                                                                                                </li>
                                                                                                                                                                <li>Fuel
                                                                                                                                                                    system
                                                                                                                                                                    cleaning
                                                                                                                                                                    and
                                                                                                                                                                    more
                                                                                                                                                                </li>
                                                                                                                                                            </ul>
                                                                                                                                                            <a class="btn btn-top btn-border btn-invert btn-wide"
                                                                                                                                                                href="#"
                                                                                                                                                                data-toggle="modal"
                                                                                                                                                                data-target="#appointmentForm"><span>Appointment</span></a>
                                                                                                                                                        </div>
                                                                                                                                                        <div
                                                                                                                                                            class="divider-lg visible-sm visible-xs">
                                                                                                                                                        </div>
                                                                                                                                                        <div
                                                                                                                                                            class="col-md-6">
                                                                                                                                                            <h6
                                                                                                                                                                class="services-modal__title-small">
                                                                                                                                                                Pricing
                                                                                                                                                            </h6>
                                                                                                                                                            <div
                                                                                                                                                                class="services-modal__table">
                                                                                                                                                                <table>
                                                                                                                                                                    <tbody>

                                                                                                                                                                        <tr>
                                                                                                                                                                            <td>Engine
                                                                                                                                                                                Complete
                                                                                                                                                                                6-cylinder
                                                                                                                                                                            </td>
                                                                                                                                                                            <td>$229.99
                                                                                                                                                                            </td>
                                                                                                                                                                        </tr>

                                                                                                                                                                        <tr>
                                                                                                                                                                            <td>Engine
                                                                                                                                                                                Complete
                                                                                                                                                                                8-cylinder
                                                                                                                                                                            </td>
                                                                                                                                                                            <td>$249.99
                                                                                                                                                                            </td>
                                                                                                                                                                        </tr>

                                                                                                                                                                        <tr>
                                                                                                                                                                            <td>Engine
                                                                                                                                                                                Complete
                                                                                                                                                                                4-cylinder
                                                                                                                                                                            </td>
                                                                                                                                                                            <td>$199.99
                                                                                                                                                                            </td>
                                                                                                                                                                        </tr>

                                                                                                                                                                        <tr>
                                                                                                                                                                            <td>Engine
                                                                                                                                                                                Cradle
                                                                                                                                                                            </td>
                                                                                                                                                                            <td>$100.99
                                                                                                                                                                            </td>
                                                                                                                                                                        </tr>

                                                                                                                                                                        <tr>
                                                                                                                                                                            <td>Engine
                                                                                                                                                                                Short
                                                                                                                                                                                Block
                                                                                                                                                                            </td>
                                                                                                                                                                            <td>$119.99
                                                                                                                                                                            </td>
                                                                                                                                                                        </tr>

                                                                                                                                                                        <tr>
                                                                                                                                                                            <td>Engine
                                                                                                                                                                                Wire
                                                                                                                                                                                Harness
                                                                                                                                                                            </td>
                                                                                                                                                                            <td>$33.99
                                                                                                                                                                            </td>
                                                                                                                                                                        </tr>
                                                                                                                                                                    </tbody>
                                                                                                                                                                </table>
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
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="services-modal icon3">
                                                                                                    <div
                                                                                                        class="services-modal-wrapper">
                                                                                                        <div
                                                                                                            class="services-modal__close-wrapper">
                                                                                                            <button
                                                                                                                type="button"
                                                                                                                class="services-modal__close"></button>
                                                                                                        </div>
                                                                                                        <div data-mechaniclane-type="section"
                                                                                                            data-mechaniclane-id="2740"
                                                                                                            class="mechaniclane mechaniclane-2740"
                                                                                                            data-mechaniclane-settings="[]">
                                                                                                            <div
                                                                                                                class="mechaniclane-inner">
                                                                                                                <div
                                                                                                                    class="mechaniclane-section-wrap">
                                                                                                                    <section
                                                                                                                        class="mechaniclane-section mechaniclane-top-section mechaniclane-element mechaniclane-element-548ae060 mechaniclane-section-boxed mechaniclane-section-height-default mechaniclane-section-height-default"
                                                                                                                        data-id="548ae060"
                                                                                                                        data-element_type="section">
                                                                                                                        <div
                                                                                                                            class="mechaniclane-container mechaniclane-column-gap-default">
                                                                                                                            <div
                                                                                                                                class="mechaniclane-row">
                                                                                                                                <div class="mechaniclane-column mechaniclane-col-100 mechaniclane-top-column mechaniclane-element mechaniclane-element-3dbd390a"
                                                                                                                                    data-id="3dbd390a"
                                                                                                                                    data-element_type="column">
                                                                                                                                    <div
                                                                                                                                        class="mechaniclane-column-wrap mechaniclane-element-populated">
                                                                                                                                        <div
                                                                                                                                            class="mechaniclane-widget-wrap">
                                                                                                                                            <div class="mechaniclane-element mechaniclane-element-45aac47b mechaniclane-widget mechaniclane-widget-service_modal"
                                                                                                                                                data-id="45aac47b"
                                                                                                                                                data-element_type="widget"
                                                                                                                                                data-widget_type="service_modal.default">
                                                                                                                                                <div
                                                                                                                                                    class="mechaniclane-widget-container">


                                                                                                                                                    <div
                                                                                                                                                        class="row">
                                                                                                                                                        <div
                                                                                                                                                            class="col-md-6">
                                                                                                                                                            <h6
                                                                                                                                                                class="services-modal__title-large">
                                                                                                                                                                Diagnostics
                                                                                                                                                            </h6>
                                                                                                                                                            At
                                                                                                                                                            the
                                                                                                                                                            heart
                                                                                                                                                            of
                                                                                                                                                            every
                                                                                                                                                            automobile
                                                                                                                                                            is
                                                                                                                                                            the
                                                                                                                                                            engine.
                                                                                                                                                            The
                                                                                                                                                            engine
                                                                                                                                                            is
                                                                                                                                                            what
                                                                                                                                                            creates
                                                                                                                                                            the
                                                                                                                                                            power
                                                                                                                                                            and
                                                                                                                                                            makes
                                                                                                                                                            the
                                                                                                                                                            car
                                                                                                                                                            move.
                                                                                                                                                            Just
                                                                                                                                                            like
                                                                                                                                                            the
                                                                                                                                                            human
                                                                                                                                                            heart,
                                                                                                                                                            the
                                                                                                                                                            engine
                                                                                                                                                            requires
                                                                                                                                                            proper
                                                                                                                                                            maintenance
                                                                                                                                                            and
                                                                                                                                                            care.
                                                                                                                                                            As
                                                                                                                                                            your
                                                                                                                                                            automobile
                                                                                                                                                            is
                                                                                                                                                            driven
                                                                                                                                                            and
                                                                                                                                                            the
                                                                                                                                                            engine
                                                                                                                                                            experiences
                                                                                                                                                            normal
                                                                                                                                                            wear
                                                                                                                                                            and
                                                                                                                                                            tear,
                                                                                                                                                            problems
                                                                                                                                                            will
                                                                                                                                                            inevitably
                                                                                                                                                            arise
                                                                                                                                                            that
                                                                                                                                                            require
                                                                                                                                                            repair.

                                                                                                                                                            Whether
                                                                                                                                                            you
                                                                                                                                                            come
                                                                                                                                                            in
                                                                                                                                                            for
                                                                                                                                                            your
                                                                                                                                                            check
                                                                                                                                                            engine
                                                                                                                                                            light,
                                                                                                                                                            maintenance
                                                                                                                                                            or
                                                                                                                                                            repairs,
                                                                                                                                                            you
                                                                                                                                                            can
                                                                                                                                                            count
                                                                                                                                                            on
                                                                                                                                                            us
                                                                                                                                                            to
                                                                                                                                                            properly
                                                                                                                                                            diagnose
                                                                                                                                                            your
                                                                                                                                                            engine
                                                                                                                                                            and
                                                                                                                                                            offer
                                                                                                                                                            services
                                                                                                                                                            like:
                                                                                                                                                            <ul
                                                                                                                                                                class="marker-list-sm">
                                                                                                                                                                <li>Standard
                                                                                                                                                                    tune-up
                                                                                                                                                                </li>
                                                                                                                                                                <li>Filter
                                                                                                                                                                    replacement
                                                                                                                                                                </li>
                                                                                                                                                                <li>Fuel
                                                                                                                                                                    system
                                                                                                                                                                    cleaning
                                                                                                                                                                    and
                                                                                                                                                                    more
                                                                                                                                                                </li>
                                                                                                                                                            </ul>
                                                                                                                                                            <a class="btn btn-top btn-border btn-invert btn-wide"
                                                                                                                                                                href="#"
                                                                                                                                                                data-toggle="modal"
                                                                                                                                                                data-target="#appointmentForm"><span>Appointment</span></a>
                                                                                                                                                        </div>
                                                                                                                                                        <div
                                                                                                                                                            class="divider-lg visible-sm visible-xs">
                                                                                                                                                        </div>
                                                                                                                                                        <div
                                                                                                                                                            class="col-md-6">
                                                                                                                                                            <h6
                                                                                                                                                                class="services-modal__title-small">
                                                                                                                                                                Pricing
                                                                                                                                                            </h6>
                                                                                                                                                            <div
                                                                                                                                                                class="services-modal__table">
                                                                                                                                                                <table>
                                                                                                                                                                    <tbody>

                                                                                                                                                                        <tr>
                                                                                                                                                                            <td>Engine
                                                                                                                                                                                Complete
                                                                                                                                                                                6-cylinder
                                                                                                                                                                            </td>
                                                                                                                                                                            <td>$229.99
                                                                                                                                                                            </td>
                                                                                                                                                                        </tr>

                                                                                                                                                                        <tr>
                                                                                                                                                                            <td>Engine
                                                                                                                                                                                Complete
                                                                                                                                                                                8-cylinder
                                                                                                                                                                            </td>
                                                                                                                                                                            <td>$249.99
                                                                                                                                                                            </td>
                                                                                                                                                                        </tr>

                                                                                                                                                                        <tr>
                                                                                                                                                                            <td>Engine
                                                                                                                                                                                Complete
                                                                                                                                                                                4-cylinder
                                                                                                                                                                            </td>
                                                                                                                                                                            <td>$199.99
                                                                                                                                                                            </td>
                                                                                                                                                                        </tr>

                                                                                                                                                                        <tr>
                                                                                                                                                                            <td>Engine
                                                                                                                                                                                Cradle
                                                                                                                                                                            </td>
                                                                                                                                                                            <td>$100.99
                                                                                                                                                                            </td>
                                                                                                                                                                        </tr>

                                                                                                                                                                        <tr>
                                                                                                                                                                            <td>Engine
                                                                                                                                                                                Short
                                                                                                                                                                                Block
                                                                                                                                                                            </td>
                                                                                                                                                                            <td>$119.99
                                                                                                                                                                            </td>
                                                                                                                                                                        </tr>

                                                                                                                                                                        <tr>
                                                                                                                                                                            <td>Engine
                                                                                                                                                                                Wire
                                                                                                                                                                                Harness
                                                                                                                                                                            </td>
                                                                                                                                                                            <td>$33.99
                                                                                                                                                                            </td>
                                                                                                                                                                        </tr>
                                                                                                                                                                    </tbody>
                                                                                                                                                                </table>
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
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="services-modal icon4">
                                                                                                    <div
                                                                                                        class="services-modal-wrapper">
                                                                                                        <div
                                                                                                            class="services-modal__close-wrapper">
                                                                                                            <button
                                                                                                                type="button"
                                                                                                                class="services-modal__close"></button>
                                                                                                        </div>
                                                                                                        <div data-mechaniclane-type="section"
                                                                                                            data-mechaniclane-id="2740"
                                                                                                            class="mechaniclane mechaniclane-2740"
                                                                                                            data-mechaniclane-settings="[]">
                                                                                                            <div
                                                                                                                class="mechaniclane-inner">
                                                                                                                <div
                                                                                                                    class="mechaniclane-section-wrap">
                                                                                                                    <section
                                                                                                                        class="mechaniclane-section mechaniclane-top-section mechaniclane-element mechaniclane-element-548ae060 mechaniclane-section-boxed mechaniclane-section-height-default mechaniclane-section-height-default"
                                                                                                                        data-id="548ae060"
                                                                                                                        data-element_type="section">
                                                                                                                        <div
                                                                                                                            class="mechaniclane-container mechaniclane-column-gap-default">
                                                                                                                            <div
                                                                                                                                class="mechaniclane-row">
                                                                                                                                <div class="mechaniclane-column mechaniclane-col-100 mechaniclane-top-column mechaniclane-element mechaniclane-element-3dbd390a"
                                                                                                                                    data-id="3dbd390a"
                                                                                                                                    data-element_type="column">
                                                                                                                                    <div
                                                                                                                                        class="mechaniclane-column-wrap mechaniclane-element-populated">
                                                                                                                                        <div
                                                                                                                                            class="mechaniclane-widget-wrap">
                                                                                                                                            <div class="mechaniclane-element mechaniclane-element-45aac47b mechaniclane-widget mechaniclane-widget-service_modal"
                                                                                                                                                data-id="45aac47b"
                                                                                                                                                data-element_type="widget"
                                                                                                                                                data-widget_type="service_modal.default">
                                                                                                                                                <div
                                                                                                                                                    class="mechaniclane-widget-container">


                                                                                                                                                    <div
                                                                                                                                                        class="row">
                                                                                                                                                        <div
                                                                                                                                                            class="col-md-6">
                                                                                                                                                            <h6
                                                                                                                                                                class="services-modal__title-large">
                                                                                                                                                                Diagnostics
                                                                                                                                                            </h6>
                                                                                                                                                            At
                                                                                                                                                            the
                                                                                                                                                            heart
                                                                                                                                                            of
                                                                                                                                                            every
                                                                                                                                                            automobile
                                                                                                                                                            is
                                                                                                                                                            the
                                                                                                                                                            engine.
                                                                                                                                                            The
                                                                                                                                                            engine
                                                                                                                                                            is
                                                                                                                                                            what
                                                                                                                                                            creates
                                                                                                                                                            the
                                                                                                                                                            power
                                                                                                                                                            and
                                                                                                                                                            makes
                                                                                                                                                            the
                                                                                                                                                            car
                                                                                                                                                            move.
                                                                                                                                                            Just
                                                                                                                                                            like
                                                                                                                                                            the
                                                                                                                                                            human
                                                                                                                                                            heart,
                                                                                                                                                            the
                                                                                                                                                            engine
                                                                                                                                                            requires
                                                                                                                                                            proper
                                                                                                                                                            maintenance
                                                                                                                                                            and
                                                                                                                                                            care.
                                                                                                                                                            As
                                                                                                                                                            your
                                                                                                                                                            automobile
                                                                                                                                                            is
                                                                                                                                                            driven
                                                                                                                                                            and
                                                                                                                                                            the
                                                                                                                                                            engine
                                                                                                                                                            experiences
                                                                                                                                                            normal
                                                                                                                                                            wear
                                                                                                                                                            and
                                                                                                                                                            tear,
                                                                                                                                                            problems
                                                                                                                                                            will
                                                                                                                                                            inevitably
                                                                                                                                                            arise
                                                                                                                                                            that
                                                                                                                                                            require
                                                                                                                                                            repair.

                                                                                                                                                            Whether
                                                                                                                                                            you
                                                                                                                                                            come
                                                                                                                                                            in
                                                                                                                                                            for
                                                                                                                                                            your
                                                                                                                                                            check
                                                                                                                                                            engine
                                                                                                                                                            light,
                                                                                                                                                            maintenance
                                                                                                                                                            or
                                                                                                                                                            repairs,
                                                                                                                                                            you
                                                                                                                                                            can
                                                                                                                                                            count
                                                                                                                                                            on
                                                                                                                                                            us
                                                                                                                                                            to
                                                                                                                                                            properly
                                                                                                                                                            diagnose
                                                                                                                                                            your
                                                                                                                                                            engine
                                                                                                                                                            and
                                                                                                                                                            offer
                                                                                                                                                            services
                                                                                                                                                            like:
                                                                                                                                                            <ul
                                                                                                                                                                class="marker-list-sm">
                                                                                                                                                                <li>Standard
                                                                                                                                                                    tune-up
                                                                                                                                                                </li>
                                                                                                                                                                <li>Filter
                                                                                                                                                                    replacement
                                                                                                                                                                </li>
                                                                                                                                                                <li>Fuel
                                                                                                                                                                    system
                                                                                                                                                                    cleaning
                                                                                                                                                                    and
                                                                                                                                                                    more
                                                                                                                                                                </li>
                                                                                                                                                            </ul>
                                                                                                                                                            <a class="btn btn-top btn-border btn-invert btn-wide"
                                                                                                                                                                href="#"
                                                                                                                                                                data-toggle="modal"
                                                                                                                                                                data-target="#appointmentForm"><span>Appointment</span></a>
                                                                                                                                                        </div>
                                                                                                                                                        <div
                                                                                                                                                            class="divider-lg visible-sm visible-xs">
                                                                                                                                                        </div>
                                                                                                                                                        <div
                                                                                                                                                            class="col-md-6">
                                                                                                                                                            <h6
                                                                                                                                                                class="services-modal__title-small">
                                                                                                                                                                Pricing
                                                                                                                                                            </h6>
                                                                                                                                                            <div
                                                                                                                                                                class="services-modal__table">
                                                                                                                                                                <table>
                                                                                                                                                                    <tbody>

                                                                                                                                                                        <tr>
                                                                                                                                                                            <td>Engine
                                                                                                                                                                                Complete
                                                                                                                                                                                6-cylinder
                                                                                                                                                                            </td>
                                                                                                                                                                            <td>$229.99
                                                                                                                                                                            </td>
                                                                                                                                                                        </tr>

                                                                                                                                                                        <tr>
                                                                                                                                                                            <td>Engine
                                                                                                                                                                                Complete
                                                                                                                                                                                8-cylinder
                                                                                                                                                                            </td>
                                                                                                                                                                            <td>$249.99
                                                                                                                                                                            </td>
                                                                                                                                                                        </tr>

                                                                                                                                                                        <tr>
                                                                                                                                                                            <td>Engine
                                                                                                                                                                                Complete
                                                                                                                                                                                4-cylinder
                                                                                                                                                                            </td>
                                                                                                                                                                            <td>$199.99
                                                                                                                                                                            </td>
                                                                                                                                                                        </tr>

                                                                                                                                                                        <tr>
                                                                                                                                                                            <td>Engine
                                                                                                                                                                                Cradle
                                                                                                                                                                            </td>
                                                                                                                                                                            <td>$100.99
                                                                                                                                                                            </td>
                                                                                                                                                                        </tr>

                                                                                                                                                                        <tr>
                                                                                                                                                                            <td>Engine
                                                                                                                                                                                Short
                                                                                                                                                                                Block
                                                                                                                                                                            </td>
                                                                                                                                                                            <td>$119.99
                                                                                                                                                                            </td>
                                                                                                                                                                        </tr>

                                                                                                                                                                        <tr>
                                                                                                                                                                            <td>Engine
                                                                                                                                                                                Wire
                                                                                                                                                                                Harness
                                                                                                                                                                            </td>
                                                                                                                                                                            <td>$33.99
                                                                                                                                                                            </td>
                                                                                                                                                                        </tr>
                                                                                                                                                                    </tbody>
                                                                                                                                                                </table>
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
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
<div class="services-modal icon5">
<div class="services-modal-wrapper">
                                                                                                        <div
                                                                                                            class="services-modal__close-wrapper">
                                                                                                            <button
                                                                                                                type="button"
                                                                                                                class="services-modal__close"></button>
                                                                                                        </div>
                                                                                                        <div data-mechaniclane-type="section"
                                                                                                            data-mechaniclane-id="2740"
                                                                                                            class="mechaniclane mechaniclane-2740"
                                                                                                            data-mechaniclane-settings="[]">
                                                                                                            <div
                                                                                                                class="mechaniclane-inner">
                                                                                                                <div
                                                                                                                    class="mechaniclane-section-wrap">
                                                                                                                    <section
                                                                                                                        class="mechaniclane-section mechaniclane-top-section mechaniclane-element mechaniclane-element-548ae060 mechaniclane-section-boxed mechaniclane-section-height-default mechaniclane-section-height-default"
                                                                                                                        data-id="548ae060"
                                                                                                                        data-element_type="section">
                                                                                                                        <div
                                                                                                                            class="mechaniclane-container mechaniclane-column-gap-default">
                                                                                                                            <div
                                                                                                                                class="mechaniclane-row">
                                                                                                                                <div class="mechaniclane-column mechaniclane-col-100 mechaniclane-top-column mechaniclane-element mechaniclane-element-3dbd390a"
                                                                                                                                    data-id="3dbd390a"
                                                                                                                                    data-element_type="column">
                                                                                                                                    <div
                                                                                                                                        class="mechaniclane-column-wrap mechaniclane-element-populated">
                                                                                                                                        <div
                                                                                                                                            class="mechaniclane-widget-wrap">
                                                                                                                                            <div class="mechaniclane-element mechaniclane-element-45aac47b mechaniclane-widget mechaniclane-widget-service_modal"
                                                                                                                                                data-id="45aac47b"
                                                                                                                                                data-element_type="widget"
                                                                                                                                                data-widget_type="service_modal.default">
                                                                                                                                                <div
                                                                                                                                                    class="mechaniclane-widget-container">


                                                                                                                                                    <div
                                                                                                                                                        class="row">
                                                                                                                                                        <div
                                                                                                                                                            class="col-md-6">
                                                                                                                                                            <h6
                                                                                                                                                                class="services-modal__title-large">
                                                                                                                                                                Diagnostics
                                                                                                                                                            </h6>
                                                                                                                                                            At
                                                                                                                                                            the
                                                                                                                                                            heart
                                                                                                                                                            of
                                                                                                                                                            every
                                                                                                                                                            automobile
                                                                                                                                                            is
                                                                                                                                                            the
                                                                                                                                                            engine.
                                                                                                                                                            The
                                                                                                                                                            engine
                                                                                                                                                            is
                                                                                                                                                            what
                                                                                                                                                            creates
                                                                                                                                                            the
                                                                                                                                                            power
                                                                                                                                                            and
                                                                                                                                                            makes
                                                                                                                                                            the
                                                                                                                                                            car
                                                                                                                                                            move.
                                                                                                                                                            Just
                                                                                                                                                            like
                                                                                                                                                            the
                                                                                                                                                            human
                                                                                                                                                            heart,
                                                                                                                                                            the
                                                                                                                                                            engine
                                                                                                                                                            requires
                                                                                                                                                            proper
                                                                                                                                                            maintenance
                                                                                                                                                            and
                                                                                                                                                            care.
                                                                                                                                                            As
                                                                                                                                                            your
                                                                                                                                                            automobile
                                                                                                                                                            is
                                                                                                                                                            driven
                                                                                                                                                            and
                                                                                                                                                            the
                                                                                                                                                            engine
                                                                                                                                                            experiences
                                                                                                                                                            normal
                                                                                                                                                            wear
                                                                                                                                                            and
                                                                                                                                                            tear,
                                                                                                                                                            problems
                                                                                                                                                            will
                                                                                                                                                            inevitably
                                                                                                                                                            arise
                                                                                                                                                            that
                                                                                                                                                            require
                                                                                                                                                            repair.

                                                                                                                                                            Whether
                                                                                                                                                            you
                                                                                                                                                            come
                                                                                                                                                            in
                                                                                                                                                            for
                                                                                                                                                            your
                                                                                                                                                            check
                                                                                                                                                            engine
                                                                                                                                                            light,
                                                                                                                                                            maintenance
                                                                                                                                                            or
                                                                                                                                                            repairs,
                                                                                                                                                            you
                                                                                                                                                            can
                                                                                                                                                            count
                                                                                                                                                            on
                                                                                                                                                            us
                                                                                                                                                            to
                                                                                                                                                            properly
                                                                                                                                                            diagnose
                                                                                                                                                            your
                                                                                                                                                            engine
                                                                                                                                                            and
                                                                                                                                                            offer
                                                                                                                                                            services
                                                                                                                                                            like:
                                                                                                                                                            <ul
                                                                                                                                                                class="marker-list-sm">
                                                                                                                                                                <li>Standard
                                                                                                                                                                    tune-up
                                                                                                                                                                </li>
                                                                                                                                                                <li>Filter
                                                                                                                                                                    replacement
                                                                                                                                                                </li>
                                                                                                                                                                <li>Fuel
                                                                                                                                                                    system
                                                                                                                                                                    cleaning
                                                                                                                                                                    and
                                                                                                                                                                    more
                                                                                                                                                                </li>
                                                                                                                                                            </ul>
                                                                                                                                                            <a class="btn btn-top btn-border btn-invert btn-wide"
                                                                                                                                                                href="#"
                                                                                                                                                                data-toggle="modal"
                                                                                                                                                                data-target="#appointmentForm"><span>Appointment</span></a>
                                                                                                                                                        </div>
                                                                                                                                                        <div
                                                                                                                                                            class="divider-lg visible-sm visible-xs">
                                                                                                                                                        </div>
                                                                                                                                                        <div
                                                                                                                                                            class="col-md-6">
                                                                                                                                                            <h6
                                                                                                                                                                class="services-modal__title-small">
                                                                                                                                                                Pricing
                                                                                                                                                            </h6>
                                                                                                                                                            <div
                                                                                                                                                                class="services-modal__table">
                                                                                                                                                                <table>
                                                                                                                                                                    <tbody>

                                                                                                                                                                        <tr>
                                                                                                                                                                            <td>Engine
                                                                                                                                                                                Complete
                                                                                                                                                                                6-cylinder
                                                                                                                                                                            </td>
                                                                                                                                                                            <td>$229.99
                                                                                                                                                                            </td>
                                                                                                                                                                        </tr>

                                                                                                                                                                        <tr>
                                                                                                                                                                            <td>Engine
                                                                                                                                                                                Complete
                                                                                                                                                                                8-cylinder
                                                                                                                                                                            </td>
                                                                                                                                                                            <td>$249.99
                                                                                                                                                                            </td>
                                                                                                                                                                        </tr>

                                                                                                                                                                        <tr>
                                                                                                                                                                            <td>Engine
                                                                                                                                                                                Complete
                                                                                                                                                                                4-cylinder
                                                                                                                                                                            </td>
                                                                                                                                                                            <td>$199.99
                                                                                                                                                                            </td>
                                                                                                                                                                        </tr>

                                                                                                                                                                        <tr>
                                                                                                                                                                            <td>Engine
                                                                                                                                                                                Cradle
                                                                                                                                                                            </td>
                                                                                                                                                                            <td>$100.99
                                                                                                                                                                            </td>
                                                                                                                                                                        </tr>

                                                                                                                                                                        <tr>
                                                                                                                                                                            <td>Engine
                                                                                                                                                                                Short
                                                                                                                                                                                Block
                                                                                                                                                                            </td>
                                                                                                                                                                            <td>$119.99
                                                                                                                                                                            </td>
                                                                                                                                                                        </tr>

                                                                                                                                                                        <tr>
                                                                                                                                                                            <td>Engine
                                                                                                                                                                                Wire
                                                                                                                                                                                Harness
                                                                                                                                                                            </td>
                                                                                                                                                                            <td>$33.99
                                                                                                                                                                            </td>
                                                                                                                                                                        </tr>
                                                                                                                                                                    </tbody>
                                                                                                                                                                </table>
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
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="services-modal icon6">
                                                                                                    <div
                                                                                                        class="services-modal-wrapper">
                                                                                                        <div
                                                                                                            class="services-modal__close-wrapper">
                                                                                                            <button
                                                                                                                type="button"
                                                                                                                class="services-modal__close"></button>
                                                                                                        </div>
                                                                                                        <div data-mechaniclane-type="section"
                                                                                                            data-mechaniclane-id="2740"
                                                                                                            class="mechaniclane mechaniclane-2740"
                                                                                                            data-mechaniclane-settings="[]">
                                                                                                            <div
                                                                                                                class="mechaniclane-inner">
                                                                                                                <div
                                                                                                                    class="mechaniclane-section-wrap">
                                                                                                                    <section
                                                                                                                        class="mechaniclane-section mechaniclane-top-section mechaniclane-element mechaniclane-element-548ae060 mechaniclane-section-boxed mechaniclane-section-height-default mechaniclane-section-height-default"
                                                                                                                        data-id="548ae060"
                                                                                                                        data-element_type="section">
                                                                                                                        <div
                                                                                                                            class="mechaniclane-container mechaniclane-column-gap-default">
                                                                                                                            <div
                                                                                                                                class="mechaniclane-row">
                                                                                                                                <div class="mechaniclane-column mechaniclane-col-100 mechaniclane-top-column mechaniclane-element mechaniclane-element-3dbd390a"
                                                                                                                                    data-id="3dbd390a"
                                                                                                                                    data-element_type="column">
                                                                                                                                    <div
                                                                                                                                        class="mechaniclane-column-wrap mechaniclane-element-populated">
                                                                                                                                        <div
                                                                                                                                            class="mechaniclane-widget-wrap">
                                                                                                                                            <div class="mechaniclane-element mechaniclane-element-45aac47b mechaniclane-widget mechaniclane-widget-service_modal"
                                                                                                                                                data-id="45aac47b"
                                                                                                                                                data-element_type="widget"
                                                                                                                                                data-widget_type="service_modal.default">
                                                                                                                                                <div
                                                                                                                                                    class="mechaniclane-widget-container">


                                                                                                                                                    <div
                                                                                                                                                        class="row">
                                                                                                                                                        <div
                                                                                                                                                            class="col-md-6">
                                                                                                                                                            <h6
                                                                                                                                                                class="services-modal__title-large">
                                                                                                                                                                Diagnostics
                                                                                                                                                            </h6>
                                                                                                                                                            At
                                                                                                                                                            the
                                                                                                                                                            heart
                                                                                                                                                            of
                                                                                                                                                            every
                                                                                                                                                            automobile
                                                                                                                                                            is
                                                                                                                                                            the
                                                                                                                                                            engine.
                                                                                                                                                            The
                                                                                                                                                            engine
                                                                                                                                                            is
                                                                                                                                                            what
                                                                                                                                                            creates
                                                                                                                                                            the
                                                                                                                                                            power
                                                                                                                                                            and
                                                                                                                                                            makes
                                                                                                                                                            the
                                                                                                                                                            car
                                                                                                                                                            move.
                                                                                                                                                            Just
                                                                                                                                                            like
                                                                                                                                                            the
                                                                                                                                                            human
                                                                                                                                                            heart,
                                                                                                                                                            the
                                                                                                                                                            engine
                                                                                                                                                            requires
                                                                                                                                                            proper
                                                                                                                                                            maintenance
                                                                                                                                                            and
                                                                                                                                                            care.
                                                                                                                                                            As
                                                                                                                                                            your
                                                                                                                                                            automobile
                                                                                                                                                            is
                                                                                                                                                            driven
                                                                                                                                                            and
                                                                                                                                                            the
                                                                                                                                                            engine
                                                                                                                                                            experiences
                                                                                                                                                            normal
                                                                                                                                                            wear
                                                                                                                                                            and
                                                                                                                                                            tear,
                                                                                                                                                            problems
                                                                                                                                                            will
                                                                                                                                                            inevitably
                                                                                                                                                            arise
                                                                                                                                                            that
                                                                                                                                                            require
                                                                                                                                                            repair.

                                                                                                                                                            Whether
                                                                                                                                                            you
                                                                                                                                                            come
                                                                                                                                                            in
                                                                                                                                                            for
                                                                                                                                                            your
                                                                                                                                                            check
                                                                                                                                                            engine
                                                                                                                                                            light,
                                                                                                                                                            maintenance
                                                                                                                                                            or
                                                                                                                                                            repairs,
                                                                                                                                                            you
                                                                                                                                                            can
                                                                                                                                                            count
                                                                                                                                                            on
                                                                                                                                                            us
                                                                                                                                                            to
                                                                                                                                                            properly
                                                                                                                                                            diagnose
                                                                                                                                                            your
                                                                                                                                                            engine
                                                                                                                                                            and
                                                                                                                                                            offer
                                                                                                                                                            services
                                                                                                                                                            like:
                                                                                                                                                            <ul
                                                                                                                                                                class="marker-list-sm">
                                                                                                                                                                <li>Standard
                                                                                                                                                                    tune-up
                                                                                                                                                                </li>
                                                                                                                                                                <li>Filter
                                                                                                                                                                    replacement
                                                                                                                                                                </li>
                                                                                                                                                                <li>Fuel
                                                                                                                                                                    system
                                                                                                                                                                    cleaning
                                                                                                                                                                    and
                                                                                                                                                                    more
                                                                                                                                                                </li>
                                                                                                                                                            </ul>
                                                                                                                                                            <a class="btn btn-top btn-border btn-invert btn-wide"
                                                                                                                                                                href="#"
                                                                                                                                                                data-toggle="modal"
                                                                                                                                                                data-target="#appointmentForm"><span>Appointment</span></a>
                                                                                                                                                        </div>
                                                                                                                                                        <div
                                                                                                                                                            class="divider-lg visible-sm visible-xs">
                                                                                                                                                        </div>
                                                                                                                                                        <div
                                                                                                                                                            class="col-md-6">
                                                                                                                                                            <h6
                                                                                                                                                                class="services-modal__title-small">
                                                                                                                                                                Pricing
                                                                                                                                                            </h6>
                                                                                                                                                            <div
                                                                                                                                                                class="services-modal__table">
                                                                                                                                                                <table>
                                                                                                                                                                    <tbody>

                                                                                                                                                                        <tr>
                                                                                                                                                                            <td>Engine
                                                                                                                                                                                Complete
                                                                                                                                                                                6-cylinder
                                                                                                                                                                            </td>
                                                                                                                                                                            <td>$229.99
                                                                                                                                                                            </td>
                                                                                                                                                                        </tr>

                                                                                                                                                                        <tr>
                                                                                                                                                                            <td>Engine
                                                                                                                                                                                Complete
                                                                                                                                                                                8-cylinder
                                                                                                                                                                            </td>
                                                                                                                                                                            <td>$249.99
                                                                                                                                                                            </td>
                                                                                                                                                                        </tr>

                                                                                                                                                                        <tr>
                                                                                                                                                                            <td>Engine
                                                                                                                                                                                Complete
                                                                                                                                                                                4-cylinder
                                                                                                                                                                            </td>
                                                                                                                                                                            <td>$199.99
                                                                                                                                                                            </td>
                                                                                                                                                                        </tr>

                                                                                                                                                                        <tr>
                                                                                                                                                                            <td>Engine
                                                                                                                                                                                Cradle
                                                                                                                                                                            </td>
                                                                                                                                                                            <td>$100.99
                                                                                                                                                                            </td>
                                                                                                                                                                        </tr>

                                                                                                                                                                        <tr>
                                                                                                                                                                            <td>Engine
                                                                                                                                                                                Short
                                                                                                                                                                                Block
                                                                                                                                                                            </td>
                                                                                                                                                                            <td>$119.99
                                                                                                                                                                            </td>
                                                                                                                                                                        </tr>

                                                                                                                                                                        <tr>
                                                                                                                                                                            <td>Engine
                                                                                                                                                                                Wire
                                                                                                                                                                                Harness
                                                                                                                                                                            </td>
                                                                                                                                                                            <td>$33.99
                                                                                                                                                                            </td>
                                                                                                                                                                        </tr>
                                                                                                                                                                    </tbody>
                                                                                                                                                                </table>
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
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--<div class="services-tab-info">
                                                                <p class="services-tabs-text icon1">If your engine is sick or tired we have the equipment to check, diagnose and efficiently fix any problem you may have.</p>
                                                                        <p class="services-tabs-text icon2">Morbi vitae nibh eu enim convallis porttitor. Etiam sit amet fermentum diam, in aliquam erat. In nisi neque, pretium in quam.</p>
                                                                        <p class="services-tabs-text icon3">Pellentesque urna urna, rhoncus vitae elit id, maximus dictum arcu. Nulla malesuada dui eu efficitur aliquet. In nisi neque.</p>
                                                                        <p class="services-tabs-text icon4">Ut vitae quam et urna ultrices volutpat. Sed scelerisque tristique posuere. Praesent dapibus ligula eget sollicitudin congue.</p>
                                                                        <p class="services-tabs-text icon5">Donec massa nibh, placerat eu lobortis ut, ornare in massa. Quisque pellentesque, turpis sit amet ullamcorper mollis.</p>
                                                                        <p class="services-tabs-text icon6">Nunc porttitor in tellus a rutrum. Curabitur in ante dui. Sed id erat eget libero egestas mollis et id dolor.</p>
                                                            </div>-->
                                                                                    <div class="services-tab-button">
                                                                                        <a class="btn btn-border btn-color02 js-tab-modals" href="apointment.php" style="background:#f7941f !important">
                                                    <span>Book Your Appointment</span></a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- // Services Tabs -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            <section id="services" class="bg-light pt-100 pb-70">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-5">
            <!--<h2 class="title">About Us</h2>-->
            <h3>You will be pleasantly surprised by how easy car servicing is with us!</h3>
            <p class=" mt-3 ">We are a one-stop solution to all your car care needs! We empower you to enjoy an unhindered driving experience without having to get down and dirty yourself. Be it your valuable time during any working day or your precious Sundays, you don't have to spend any extra second sighing about the fate of your car. We make your car a smooth ride for you again with our comprehensive solutions that you get to choose by just moving your fingers.</p>
            <p class=" mt-3 ">So, next time, rather than venturing alone in search of a repair shop, only to worry about its credibility, sit back and contact us.</p>
            <a class="btn btn-border btn-color02 js-tab-modals" href="whyus.php" style="background:#f7941f !important">
                                                    <span>More</span></a>
         </div>
         <div class="col-lg-7">
            <div class="row card-items">
               <img src="images/about-us.jpg" alt="mechanic lane" width="100%"/>
            </div>
         </div>
      </div>
   </div>
</section>
                                <!--<section
                                    class="mechaniclane-section mechaniclane-top-section mechaniclane-element mechaniclane-element-c2a26a9 mechaniclane-section-stretched mechaniclane-section-full_width mechaniclane-section-height-default mechaniclane-section-height-default"
                                    data-id="c2a26a9" data-element_type="section"
                                    data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                    <div class="mechaniclane-container mechaniclane-column-gap-no">
                                        <div class="mechaniclane-row">
                                            <div class="mechaniclane-column mechaniclane-col-100 mechaniclane-top-column mechaniclane-element mechaniclane-element-eb8c78d"
                                                data-id="eb8c78d" data-element_type="column">
                                                <div class="mechaniclane-column-wrap mechaniclane-element-populated">
                                                    <div class="mechaniclane-widget-wrap">
                                                        <div class="mechaniclane-element mechaniclane-element-44e282d mechaniclane-widget mechaniclane-widget-expert_service"
                                                            data-id="44e282d" data-element_type="widget"
                                                            data-widget_type="expert_service.default">
                                                            <div class="mechaniclane-widget-container">
                                                                <div class="block">
                                                                    <div class="block-title">
                                                                        <h2 class="block-title__title">Car Care =
                                                                            Mechanic Lane</h2>
                                                                        <div class="block-title__description">
                                                                            We understand your love for your car. Come
                                                                            to us for anything automobile.
                                                                        </div>
                                                                        <div class="title-separator"></div>
                                                                    </div>
                                                                    <div class="overflow-hidden">
                                                                        <div class="icons-tabs">
                                                                            <ul class="nav nav-tabs">
                                                                                <li class="active">
                                                                                    <a href="#tab1" data-toggle="tab"><i
                                                                                            class=" icon-gear"></i><span>Car
                                                                                            care and repairs</span></a>
                                                                                </li>
                                                                                <li class="">
                                                                                    <a href="#tab12"
                                                                                        data-toggle="tab"><i
                                                                                            class=" icon-452814"></i><span>Why
                                                                                            choose us</span></a>
                                                                                </li>
                                                                                <li class="">
                                                                                    <a href="#tab3" data-toggle="tab"><i
                                                                                            class=" icon-wrech1"></i><span>About
                                                                                            Mechanic Lane</span></a>
                                                                                </li>
                                                                            </ul>

                                                                            <div class="tab-content tab-pane-nomargin">
                                                                                <div class="tab-pane active" id="tab1">
                                                                                    <div data-mechaniclane-type="section"
                                                                                        data-mechaniclane-id="2311"
                                                                                        class="mechaniclane mechaniclane-2311"
                                                                                        data-mechaniclane-settings="[]">
                                                                                        <div class="mechaniclane-inner">
                                                                                            <div
                                                                                                class="mechaniclane-section-wrap">
                                                                                                <section
                                                                                                    class="mechaniclane-section mechaniclane-top-section mechaniclane-element mechaniclane-element-dec7607 mechaniclane-section-full_width mechaniclane-section-height-default mechaniclane-section-height-default">
                                                                                                    <div
                                                                                                        class="mechaniclane-container mechaniclane-column-gap-default">
                                                                                                        <div
                                                                                                            class="mechaniclane-row">
                                                                                                            <div class="mechaniclane-column mechaniclane-col-100 mechaniclane-top-column mechaniclane-element mechaniclane-element-3d7a399"
                                                                                                                data-id="3d7a399"
                                                                                                                data-element_type="column">
                                                                                                                <div
                                                                                                                    class="mechaniclane-column-wrap mechaniclane-element-populated">
                                                                                                                    <div
                                                                                                                        class="mechaniclane-widget-wrap">
                                                                                                                        <div class="mechaniclane-element mechaniclane-element-3fba89e mechaniclane-widget mechaniclane-widget-additional_service"
                                                                                                                            data-id="3fba89e"
                                                                                                                            data-element_type="widget"
                                                                                                                            data-widget_type="additional_service.default">
                                                                                                                            <div
                                                                                                                                class="mechaniclane-widget-container">

                                                                                                                                <div
                                                                                                                                    class="tabs-layout01">
                                                                                                                                    <div
                                                                                                                                        class="tt-col-50">
                                                                                                                                        <div class="img-bg-col bg-col-1"
                                                                                                                                            style="background-image: url(images/car-repair-mechaniclane.jpg)">
                                                                                                                                        </div>
                                                                                                                                        <img width="960"
                                                                                                                                            height="586"
                                                                                                                                            src="images/car-repair-mechaniclane.jpg"
                                                                                                                                            class="attachment-full size-full"
                                                                                                                                            alt=""
                                                                                                                                            loading="lazy" />
                                                                                                                                    </div>
                                                                                                                                    <div
                                                                                                                                        class="tt-col-50 tabs-layout01__bg01 content-center tabs-layout01__bg-color">
                                                                                                                                        <div
                                                                                                                                            class="tabs-layout01__box">
                                                                                                                                            <div class="tabs-layout01__caption">
                                                                                                                                                Car Care
                                                                                                                                            </div>
                                                                                                                                            <p> 
                                                                                                                                                Below are some of the many repair service we offer:
                                                                                                                                            </p>
                                                                                                                                            <ul class="">
                                                                                                                                                <?php
                                                                                                                                                $sql = "SELECT * FROM tbl_servicecharge ORDER BY id DESC";
                                                                                                                                                $run = mysqli_query($con,$sql);

                                                                                                                                                if ($run) {
                                                                                                                                                $i=0;
                                                                                                                                                while ($row =mysqli_fetch_assoc($run)) {
                                                                                                                                                    
                                                                                                                                                ?>
                                                                                                                                                <li><?php echo $row['service']; ?>
                                                                                                                                                </li>
                                                                                                                                                <?php
                                                                                                                                                }
                                                                                                                                                }
                                                                                                                                                ?>

                                                                                                                                                <!-- <li>General
                                                                                                                                                    Car
                                                                                                                                                    Repair
                                                                                                                                                    &amp;
                                                                                                                                                    Maintenance</li>
                                                                                                                                                <li>Transmission
                                                                                                                                                    Repair
                                                                                                                                                    &amp;
                                                                                                                                                    Replacement</li>
                                                                                                                                                <li
                                                                                                                                                    class="li-hide li-hide02">
                                                                                                                                                    Fuel
                                                                                                                                                    System
                                                                                                                                                    Repair</li>
                                                                                                                                                <li
                                                                                                                                                    class="li-hide li-hide02">
                                                                                                                                                    Exhaust
                                                                                                                                                    System
                                                                                                                                                    Repair</li>
                                                                                                                                                <li
                                                                                                                                                    class="li-hide li-hide02">
                                                                                                                                                    Engine
                                                                                                                                                    Cooling
                                                                                                                                                    System
                                                                                                                                                    Maintenance</li>
                                                                                                                                                <li
                                                                                                                                                    class="li-hide li-hide02">
                                                                                                                                                    Electrical
                                                                                                                                                    Diagnostics</li>
                                                                                                                                                <li
                                                                                                                                                    class="li-hide">
                                                                                                                                                    Battery
                                                                                                                                                    repairs
                                                                                                                                                    and
                                                                                                                                                    replacements</li>
                                                                                                                                                <li
                                                                                                                                                    class="li-hide">
                                                                                                                                                    Wheel
                                                                                                                                                    Alignment</li>
                                                                                                                                                <li
                                                                                                                                                    class="li-hide">
                                                                                                                                                    Manufacturer
                                                                                                                                                    Recommended
                                                                                                                                                    Service</li>
                                                                                                                                                <li
                                                                                                                                                    class="li-hide">
                                                                                                                                                    Brake
                                                                                                                                                    Repair
                                                                                                                                                    and
                                                                                                                                                    Replacement</li>
                                                                                                                                                <li
                                                                                                                                                    class="li-hide">
                                                                                                                                                    Air
                                                                                                                                                    Conditioning
                                                                                                                                                    A/C
                                                                                                                                                    Repair</li>
                                                                                                                                                <li
                                                                                                                                                    class="li-hide">
                                                                                                                                                    Tire
                                                                                                                                                    Repair
                                                                                                                                                    and
                                                                                                                                                    Replacement</li>
                                                                                                                                                <li
                                                                                                                                                    class="li-hide">
                                                                                                                                                    Oil
                                                                                                                                                    Change</li> 

                                                                                                                                            </ul>
                                                                                                                                            <a href="#"
                                                                                                                                                class="js-add-li btn-add btn-top">+
                                                                                                                                                More
                                                                                                                                                Services</a>
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
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="tab-pane " id="tab12">
                                                                                    <div data-mechaniclane-type="section"
                                                                                        data-mechaniclane-id="2307"
                                                                                        class="mechaniclane mechaniclane-2307"
                                                                                        data-mechaniclane-settings="[]">
                                                                                        <div class="mechaniclane-inner">
                                                                                            <div
                                                                                                class="mechaniclane-section-wrap">
                                                                                                <section
                                                                                                    class="mechaniclane-section mechaniclane-top-section mechaniclane-element mechaniclane-element-d85e215 mechaniclane-section-stretched mechaniclane-section-full_width mechaniclane-section-height-default mechaniclane-section-height-default"
                                                                                                    data-id="d85e215"
                                                                                                    data-element_type="section"
                                                                                                    data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                                                                                    <div
                                                                                                        class="mechaniclane-container mechaniclane-column-gap-default">
                                                                                                        <div
                                                                                                            class="mechaniclane-row">
                                                                                                            <div class="mechaniclane-column mechaniclane-col-100 mechaniclane-top-column mechaniclane-element mechaniclane-element-23fd394"
                                                                                                                data-id="23fd394"
                                                                                                                data-element_type="column">
                                                                                                                <div
                                                                                                                    class="mechaniclane-column-wrap mechaniclane-element-populated">
                                                                                                                    <div
                                                                                                                        class="mechaniclane-widget-wrap">
                                                                                                                        <div class="mechaniclane-element mechaniclane-element-56aafba mechaniclane-widget mechaniclane-widget-our_advantage"
                                                                                                                            data-id="56aafba"
                                                                                                                            data-element_type="widget"
                                                                                                                            data-widget_type="our_advantage.default">
                                                                                                                            <div class="mechaniclane-widget-container">
                                                                                                                                <div class="tabs-layout01 tabs-layout01__bg-color tabs-layout01__bg02">
                                                                                                                                    <div class="container">
                                                                                                                                        <div class="tt-col-100 content-center">
                                                                                                                                            <div class="tabs-layout02__box">
                                                                                                                                                <!--<div class="tabs-layout01__caption">Advantages</div>
                                                                                                                                                <div class="row box-custom01-wrapper">
                                                                                                                                                    <?php
                                                                                                                                                    $sql = "SELECT * FROM tbl_whychooseus ORDER BY id DESC";
                                                                                                                                                    $run = mysqli_query($con,$sql);

                                                                                                                                                    if ($run) {
                                                                                                                                                    $i=0;
                                                                                                                                                    while ($row =mysqli_fetch_assoc($run)) {
                                                                                                                                                        
                                                                                                                                                    ?>
                                                                                                                                                    <div class="col-sm-6">
                                                                                                                                                        <div class="box-custom01">
                                                                                                                                                            <div class="box-custom01__icon">
                                                                                                                                                                <span class="icon icon-ok"></span>
                                                                                                                                                            </div>
                                                                                                                                                            <div class="box-custom01__content">
                                                                                                                                                                <h6 class="box-custom01__title">
                                                                                                                                                                    <?php echo $row['title'] ?>
                                                                                                                                                                </h6>
                                                                                                                                                                <p>
                                                                                                                                                                    <?php echo $row['description'] ?>
                                                                                                                                                                </p>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                    <?php
                                                                                                                                                    }
                                                                                                                                                    }
                                                                                                                                                    ?>
                                                                                                                                                    <!-- <div
                                                                                                                                                        class="col-sm-6">
                                                                                                                                                        <div
                                                                                                                                                            class="box-custom01">
                                                                                                                                                            <div
                                                                                                                                                                class="box-custom01__icon">
                                                                                                                                                                <span
                                                                                                                                                                    class="icon icon-ok"></span>
                                                                                                                                                            </div>
                                                                                                                                                            <div
                                                                                                                                                                class="box-custom01__content">
                                                                                                                                                                <h6
                                                                                                                                                                    class="box-custom01__title">
                                                                                                                                                                    OEM
                                                                                                                                                                    Factory
                                                                                                                                                                    Parts
                                                                                                                                                                    Warranty
                                                                                                                                                                </h6>
                                                                                                                                                                <p>
                                                                                                                                                                    OEM
                                                                                                                                                                    parts
                                                                                                                                                                    are
                                                                                                                                                                    parts
                                                                                                                                                                    that
                                                                                                                                                                    are
                                                                                                                                                                    specifically
                                                                                                                                                                    made
                                                                                                                                                                    by
                                                                                                                                                                    the
                                                                                                                                                                    vehicle's
                                                                                                                                                                    manufacturer
                                                                                                                                                                    and
                                                                                                                                                                    therefore
                                                                                                                                                                    make
                                                                                                                                                                    finding
                                                                                                                                                                    parts
                                                                                                                                                                    for
                                                                                                                                                                    the
                                                                                                                                                                    specific
                                                                                                                                                                    vehicle
                                                                                                                                                                    much
                                                                                                                                                                    easier.
                                                                                                                                                                </p>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                    <div
                                                                                                                                                        class="col-sm-6">
                                                                                                                                                        <div
                                                                                                                                                            class="box-custom01">
                                                                                                                                                            <div
                                                                                                                                                                class="box-custom01__icon">
                                                                                                                                                                <span
                                                                                                                                                                    class="icon icon-ok"></span>
                                                                                                                                                            </div>
                                                                                                                                                            <div
                                                                                                                                                                class="box-custom01__content">
                                                                                                                                                                <h6
                                                                                                                                                                    class="box-custom01__title">
                                                                                                                                                                    Fair
                                                                                                                                                                    And
                                                                                                                                                                    Transparent
                                                                                                                                                                    Pricing
                                                                                                                                                                </h6>
                                                                                                                                                                <p>
                                                                                                                                                                    We
                                                                                                                                                                    offer
                                                                                                                                                                    fair
                                                                                                                                                                    and
                                                                                                                                                                    transparent
                                                                                                                                                                    pricing
                                                                                                                                                                    and
                                                                                                                                                                    provide
                                                                                                                                                                    estimates
                                                                                                                                                                    upfront
                                                                                                                                                                    for
                                                                                                                                                                    hundreds
                                                                                                                                                                    of
                                                                                                                                                                    services
                                                                                                                                                                    on
                                                                                                                                                                    thousands
                                                                                                                                                                    of
                                                                                                                                                                    cars.
                                                                                                                                                                    Book
                                                                                                                                                                    with
                                                                                                                                                                    confidence.
                                                                                                                                                                </p>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                    <div
                                                                                                                                                        class="col-sm-6">
                                                                                                                                                        <div
                                                                                                                                                            class="box-custom01">
                                                                                                                                                            <div
                                                                                                                                                                class="box-custom01__icon">
                                                                                                                                                                <span
                                                                                                                                                                    class="icon icon-ok"></span>
                                                                                                                                                            </div>
                                                                                                                                                            <div
                                                                                                                                                                class="box-custom01__content">
                                                                                                                                                                <h6
                                                                                                                                                                    class="box-custom01__title">
                                                                                                                                                                    Happiness
                                                                                                                                                                    Guaranteed
                                                                                                                                                                </h6>
                                                                                                                                                                <p>
                                                                                                                                                                    We
                                                                                                                                                                    only
                                                                                                                                                                    work
                                                                                                                                                                    with
                                                                                                                                                                    highly
                                                                                                                                                                    rated
                                                                                                                                                                    mechanics.
                                                                                                                                                                    All
                                                                                                                                                                    services
                                                                                                                                                                    are
                                                                                                                                                                    backed
                                                                                                                                                                    by
                                                                                                                                                                    our
                                                                                                                                                                    12-month
                                                                                                                                                                    /
                                                                                                                                                                    12,000-mile
                                                                                                                                                                    warranty.
                                                                                                                                                                </p>
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
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </section>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="tab-pane " id="tab3">
                                                                                    <div data-mechaniclane-type="section"
                                                                                        data-mechaniclane-id="2307"
                                                                                        class="mechaniclane mechaniclane-2307"
                                                                                        data-mechaniclane-settings="[]">
                                                                                        <div class="mechaniclane-inner">
                                                                                            <div
                                                                                                class="mechaniclane-section-wrap">
                                                                                                <section
                                                                                                    class="mechaniclane-section mechaniclane-top-section mechaniclane-element mechaniclane-element-d85e215 mechaniclane-section-stretched mechaniclane-section-full_width mechaniclane-section-height-default mechaniclane-section-height-default"
                                                                                                    data-id="d85e215"
                                                                                                    data-element_type="section"
                                                                                                    data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                                                                                    <div
                                                                                                        class="mechaniclane-container mechaniclane-column-gap-default">
                                                                                                        <div
                                                                                                            class="mechaniclane-row">
                                                                                                            <div class="mechaniclane-column mechaniclane-col-100 mechaniclane-top-column mechaniclane-element mechaniclane-element-23fd394"
                                                                                                                data-id="23fd394"
                                                                                                                data-element_type="column">
                                                                                                                <div
                                                                                                                    class="mechaniclane-column-wrap mechaniclane-element-populated">
                                                                                                                    <div
                                                                                                                        class="mechaniclane-widget-wrap">
                                                                                                                        <div class="mechaniclane-element mechaniclane-element-56aafba mechaniclane-widget mechaniclane-widget-our_advantage"
                                                                                                                            data-id="56aafba"
                                                                                                                            data-element_type="widget"
                                                                                                                            data-widget_type="our_advantage.default">
                                                                                                                            <div
                                                                                                                                class="mechaniclane-widget-container">

                                                                                                                                <div
                                                                                                                                    class="tabs-layout01 tabs-layout01__bg-color tabs-layout01__bg02">

                                                                                                                                    <div
                                                                                                                                        class="container">
                                                                                                                                        <div
                                                                                                                                            class="tt-col-100 content-center">
                                                                                                                                            <div
                                                                                                                                                class="tabs-layout02__box">
                                                                                                                                                <!--<div class="tabs-layout01__caption">Advantages</div>
                                                                                                                                                <div
                                                                                                                                                    class="row box-custom01-wrapper">
                                                                                                                                                    <div
                                                                                                                                                        class="col-sm-6 col-md-6 col-lg-6">
                                                                                                                                                        <img src="images/about-mechanic-lane-car.png"
                                                                                                                                                            class="img-responsive">
                                                                                                                                                    </div>
                                                                                                                                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                                                                                                                                        <div class="wrapper-parallax-left02">
                                                                                                                                                            <div class="col-description">
                                                                                                                                                                <?php 
                                                                                                                                                                $sql1 = "SELECT * FROM tbl_about";
                                                                                                                                                                $run1 = mysqli_query($con,$sql1);
                                                                                                                                                                $row1 =mysqli_fetch_assoc($run1);
                                                                                                                                                                ?>
                                                                                                                                                                <div class="block-title text-left">
                                                                                                                                                                    <h3 class="block-title__title">
                                                                                                                                                                        <span class="text-white">A Reputation
                                                                                                                                                                        </span>
                                                                                                                                                                        <?php echo $row1['title'] ?>
                                                                                                                                                                    </h3>
                                                                                                                                                                    <div class="title-separator">
                                                                                                                                                                    </div>
                                                                                                                                                                </div>
                                                                                                                                                                <p> <?php echo $row1['description'] ?>
                                                                                                                                                                </p>
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
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </section>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!--<div class="tab-pane " id="tab3">
                                        <div data-mechaniclane-type="section" data-mechaniclane-id="2303" class="mechaniclane mechaniclane-2303" data-mechaniclane-settings="[]">
                        <div class="mechaniclane-inner">
                            <div class="mechaniclane-section-wrap">
                            <section class="mechaniclane-section mechaniclane-top-section mechaniclane-element mechaniclane-element-433e698 mechaniclane-section-full_width mechaniclane-section-height-default mechaniclane-section-height-default" data-id="433e698" data-element_type="section">
                        <div class="mechaniclane-container mechaniclane-column-gap-default">
                            <div class="mechaniclane-row">
                    <div class="mechaniclane-column mechaniclane-col-100 mechaniclane-top-column mechaniclane-element mechaniclane-element-41eeafb" data-id="41eeafb" data-element_type="column">
            <div class="mechaniclane-column-wrap mechaniclane-element-populated">
                            <div class="mechaniclane-widget-wrap">
                        <div class="mechaniclane-element mechaniclane-element-e88907c mechaniclane-widget mechaniclane-widget-about_company" data-id="e88907c" data-element_type="widget" data-widget_type="about_company.default">
                <div class="mechaniclane-widget-container">
            
        <div class="tabs-layout02 tabs-layout01__bg-color">
            <div class="tt-col-50 content-center">
                <div class="tabs-layout01__box">
                    <div class="tabs-layout01__caption">About Company</div>
                    <div class="block-title text-left">
                        <div class="block-title__title">About Car Repair Services</div>
                        <div class="title-separator"></div>
                    </div>
                    <p>We use the latest diagnostic equipment to guarantee your vehicle is repaired or serviced properly and in a timely fashion. We are a member of Professional Auto Service, an elite performance network, where independent service facilities share common goals of being world-class automotive service centers.</p>
<ul class="marker-list-sm-1">
    <li>24 Month / 24,000km Nationwide Warranty</li>
    <li>Courtesy Local Shuttle Service</li>
    <li>Customer Rewards Program</li>
    <li>ASE Certified Technicians</li>
    <li>24-Hour Roadside Assistance</li>
    <li>Courtesy Loaner Vehicle</li>
</ul>               </div>
            </div>
            <div class="tt-col-50 tt-col-img">
                <div class="img-bg-col bg-col-2 video-wrapper" style="background-image: url(content/uploads/sites/11/2020/03/tabs-img02.jpg)">
                    <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="video-block__icon js-popup">
                        <span class="icon">
                            <svg version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 191.255 191.255" style="enable-background:new 0 0 191.255 191.255;" xml:space="preserve">
                                <path d="M162.929,66.612c-2.814-1.754-6.514-0.896-8.267,1.917s-0.895,6.513,1.917,8.266c6.544,4.081,10.45,11.121,10.45,18.833
                                    s-3.906,14.752-10.45,18.833l-98.417,61.365c-6.943,4.329-15.359,4.542-22.512,0.573c-7.154-3.97-11.425-11.225-11.425-19.406
                                    V34.262c0-8.181,4.271-15.436,11.425-19.406c7.153-3.969,15.569-3.756,22.512,0.573l57.292,35.723
                                    c2.813,1.752,6.513,0.895,8.267-1.917c1.753-2.812,0.895-6.513-1.917-8.266L64.512,5.247c-10.696-6.669-23.661-7-34.685-0.883
                                    C18.806,10.48,12.226,21.657,12.226,34.262v122.73c0,12.605,6.58,23.782,17.602,29.898c5.25,2.913,10.939,4.364,16.616,4.364
                                    c6.241,0,12.467-1.754,18.068-5.247l98.417-61.365c10.082-6.287,16.101-17.133,16.101-29.015S173.011,72.899,162.929,66.612z"></path>
                                <g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                <g></g><g></g><g></g><g></g><g></g>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="video-block">
                    <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="video-block__icon js-popup">
                        <span class="icon">
                            <svg version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 191.255 191.255" style="enable-background:new 0 0 191.255 191.255;" xml:space="preserve">
                                <path d="M162.929,66.612c-2.814-1.754-6.514-0.896-8.267,1.917s-0.895,6.513,1.917,8.266c6.544,4.081,10.45,11.121,10.45,18.833
                                    s-3.906,14.752-10.45,18.833l-98.417,61.365c-6.943,4.329-15.359,4.542-22.512,0.573c-7.154-3.97-11.425-11.225-11.425-19.406
                                    V34.262c0-8.181,4.271-15.436,11.425-19.406c7.153-3.969,15.569-3.756,22.512,0.573l57.292,35.723
                                    c2.813,1.752,6.513,0.895,8.267-1.917c1.753-2.812,0.895-6.513-1.917-8.266L64.512,5.247c-10.696-6.669-23.661-7-34.685-0.883
                                    C18.806,10.48,12.226,21.657,12.226,34.262v122.73c0,12.605,6.58,23.782,17.602,29.898c5.25,2.913,10.939,4.364,16.616,4.364
                                    c6.241,0,12.467-1.754,18.068-5.247l98.417-61.365c10.082-6.287,16.101-17.133,16.101-29.015S173.011,72.899,162.929,66.612z"></path>
                                <g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                            </svg>
                        </span>
                    </a>
                    <img src="content/uploads/sites/11/2020/03/tabs-img02.jpg" alt="">
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
                                            </div>
                                        </div>
                                    </div>
                                </section>-->



                                
                                
                                <section
                                    class="mechaniclane-section mechaniclane-top-section mechaniclane-element mechaniclane-element-8a0ca05 mechaniclane-section-stretched mechaniclane-section-full_width mechaniclane-section-height-default mechaniclane-section-height-default"
                                    data-id="8a0ca05" data-element_type="section"
                                    data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                    <div class="mechaniclane-container mechaniclane-column-gap-no">
                                        <div class="mechaniclane-row">
                                            <div class="mechaniclane-column mechaniclane-col-100 mechaniclane-top-column mechaniclane-element mechaniclane-element-0c092ad"
                                                data-id="0c092ad" data-element_type="column">
                                                <div class="mechaniclane-column-wrap mechaniclane-element-populated">
                                                    <div class="mechaniclane-widget-wrap">
                                                        <div class="mechaniclane-element mechaniclane-element-b7351e6 mechaniclane-widget mechaniclane-widget-CounterBlock"
                                                            data-id="b7351e6" data-element_type="widget"
                                                            data-widget_type="CounterBlock.default">
                                                            <div class="mechaniclane-widget-container">

                                                                <div class="block box02-wrapper01 block__nomargin">

                                                                    <div class="row" id="counterBlock">
                                                                        <div class="col-xs-12 col-sm-6 col-lg-3">
                                                                            <div class="start-box02">
                                                                                <div class="start-box02__number">
                                                                                    <span class="number">
                                                                                        <span class="count"
                                                                                            data-to="1000"
                                                                                            data-speed="1000">1000</span>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="start-box02__text">
                                                                                    Service Centers
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-6 col-lg-3">
                                                                            <div class="start-box02">
                                                                                <div class="start-box02__number">
                                                                                    <span class="number">
                                                                                        <span class="count"
                                                                                            data-to="55000"
                                                                                            data-speed="1000">55000</span>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="start-box02__text">
                                                                                    Vehicle<br>Repaired
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-6 col-lg-3">
                                                                            <div class="start-box02">
                                                                                <div class="start-box02__number">
                                                                                    <span class="number">
                                                                                        <span class="count"
                                                                                            data-to="800"
                                                                                            data-speed="1000">800</span>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="start-box02__text">
                                                                                    Technicians &amp; Workers
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-6 col-lg-3">
                                                                            <div class="start-box02">
                                                                                <div class="start-box02__number">
                                                                                    <span class="number">
                                                                                        <span class="count"
                                                                                            data-to="99.3"
                                                                                            data-speed="1000">99.3</span>%
                                                                                    </span>
                                                                                </div>
                                                                                <div class="start-box02__text">
                                                                                    Satisfied<br>Customers
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                
                                                                <div class="row text-center ptb-30">
                                     <div class="col-md-12 col-lg-12">
                                        <div class="pt-30">
                                                <a class="btn btn-border btn-color02 js-tab-modals" href="appointment.php" style="background:#f7941f !important">
                                                    <span>Book your appointment </span></a>
                                         </div>
                                         </div>
                                    </div></div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>



                                <section
                                    class="mechaniclane-section mechaniclane-top-section mechaniclane-element mechaniclane-element-2284ba6 mechaniclane-section-stretched mechaniclane-section-full_width mechaniclane-section-height-default mechaniclane-section-height-default"
                                    data-id="2284ba6" data-element_type="section"
                                    data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                    <div class="mechaniclane-container mechaniclane-column-gap-no">
                                        <div class="mechaniclane-row">
                                            <div class="mechaniclane-column mechaniclane-col-100 mechaniclane-top-column mechaniclane-element mechaniclane-element-ae6db8f"
                                                data-id="ae6db8f" data-element_type="column">
                                                <div class="mechaniclane-column-wrap mechaniclane-element-populated">
                                                    <div class="mechaniclane-widget-wrap">
                                                        <div class="mechaniclane-element mechaniclane-element-4ea9ef8 mechaniclane-widget mechaniclane-widget-crs_testimonials_two"
                                                            data-id="4ea9ef8" data-element_type="widget"
                                                            data-widget_type="crs_testimonials_two.default">
                                                            <div class="mechaniclane-widget-container">

                                                                <div class="block">
                                                                    <div class="gtco-testimonials">
                                                                      <h2 class="text-center">Customer Reviews</h2>
                                                                      <div class="owl-carousel owl-carousel1 owl-theme">
                                                                        <div>
                                                                          <div class="card text-center"><img class="card-img-top img-circle" src="images/castomer1.png" alt="">
                                                                            <div class="card-body">
                                                                              <h5 style="margin-top:10px">Shweta Rana
                                                                                <!--<span> Project Manager </span>-->
                                                                              </h5>
                                                                              <p class="card-text">“ I hired MechanicLane to tow my car when it broke down on the expressway. They immediately inspected my vehicle, explained the issue, quoted me a reasonable price, and got me back on the road in a matter of hours.” </p>
                                                                            </div>
                                                                          </div>
                                                                        </div>
                                                                        <div>
                                                                          <div class="card text-center"><img class="card-img-top img-circle" src="images/castomer2.png" alt="">
                                                                            <div class="card-body">
                                                                              <h5 style="margin-top:10px">Rahul Mehta
                                                                                <!--<span> Engineer </span>-->
                                                                              </h5>
                                                                              <p class="card-text">“ Always willing to assist, whether it's for a scheduled appointment or a last-minute emergency like my dead battery! I appreciate the excellent customer service and vehicle upkeep.”<br><br> </p>
                                                                            </div>
                                                                          </div>
                                                                        </div>
                                                                        <div>
                                                                          <div class="card text-center"><img class="card-img-top img-circle" src="images/castomer4.jpg" alt="">
                                                                            <div class="card-body">
                                                                              <h5 style="margin-top:10px">Vikas Sharma
                                                                                <!--<span> Project Manager </span>-->
                                                                              </h5>
                                                                              <p class="card-text">“ I had an issue with the brakes. I dropped off my automobile, and they swiftly detected the issue. It was fixed in a timely manner and I was ready to get back on the road.The best auto repair shop I have visited so far.”<br><br> </p>
                                                                            </div>
                                                                          </div>
                                                                        </div>
                                                                        <div>
                                                                          <div class="card text-center"><img class="card-img-top img-circle" src="images/castomer3.png" alt="">
                                                                            <div class="card-body">
                                                                              <h5 style="margin-top:10px">Ishita Raj
                                                                                <!--<span> Project Manager </span>-->
                                                                              </h5>
                                                                              <p class="card-text">“ They'll let you know what the issue is before they fix it. I booked for car repair through the app and they were pretty quick on picking it up & fixing it. ” <br><br><br></p>
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
                                    </div>
                                </section>




                                <section
                                    class="mechaniclane-section mechaniclane-top-section mechaniclane-element mechaniclane-element-8716057 mechaniclane-section-stretched mechaniclane-section-full_width mechaniclane-section-height-default mechaniclane-section-height-default"
                                    data-id="8716057" data-element_type="section"
                                    data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                    <div class="mechaniclane-container mechaniclane-column-gap-default">
                                        <div class="mechaniclane-row">
                                            <div class="mechaniclane-column mechaniclane-col-100 mechaniclane-top-column mechaniclane-element mechaniclane-element-641e71a"
                                                data-id="641e71a" data-element_type="column">
                                                <div class="mechaniclane-column-wrap mechaniclane-element-populated">
                                                    <div class="mechaniclane-widget-wrap">
                                                        <div class="mechaniclane-element mechaniclane-element-b2a573a mechaniclane-widget mechaniclane-widget-car_faq_two"
                                                            data-id="b2a573a" data-element_type="widget"
                                                            data-widget_type="car_faq_two.default">
                                                            <div class="mechaniclane-widget-container">
                                                                <div class="block">
                                                                    <div class="container">
                                                                        <div class="row">

                                                                            <div class="col-md-12 col-lg-12">
                                                                                <div class="block-title text-center pb-30">
                                                                                    <h4 class="block-title__title">Auto
                                                                                        Maintenance FAQs</h4>
                                                                                </div>
                                                                                <div class="faq-accordion">
                                                                                    <?php
                                                                                    $sql = "SELECT * FROM tbl_faq ORDER BY id DESC";
                                                                                    $run = mysqli_query($con,$sql);
                                                                                    if ($run) {
                                                                                    $i=1;
                                                                                    while ($row =mysqli_fetch_assoc($run)) {
                                                                                    ?>
                                                                                    <div class="faq__item <?php if($i==1){
                                                                                        echo "active";
                                                                                    } ?>">
                                                                                        <div class="faq__title">
                                                                                            <?php echo $row['question']; ?>
                                                                                            <div class="icon"></div>
                                                                                        </div>
                                                                                        <div class="faq__content">
                                                                                            <?php echo $row['answer']; ?>
                                                                                        </div>
                                                                                    </div>
                                                                                    <?php
                                                                                     $i++;
                                                                                    }
                                                                                   
                                                                                    }
                                                                                    ?> 
                                                                                    <!-- <div class="faq__item">
                                                                                        <div class="faq__title">
                                                                                            Is MechanicLane comparable to authorized dealers or car garages?
                                                                                            <div class="icon"></div>
                                                                                        </div>
                                                                                        <div class="faq__content">
                                                                                            With its unique and transparent approach and vital collaborations, and a network of multi brand car workshops, MechanicLane fulfills the requirements of car services, breakdowns, washes and care, right in the local neighborhoods of Delhi NCR. Way more affordable and efficient compared to garages and authorized centers, MechanicLane has all the answers to car care needs.
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="faq__item">
                                                                                        <div class="faq__title">
                                                                                            Mechaniclane claims to offer up to 50% off on car servicing? Is that even possible?
                                                                                            <div class="icon"></div>
                                                                                        </div>
                                                                                        <div class="faq__content">
                                                                                            With an extensive dealer network for the genuine/ OEM spares and optimized labor costs being transferred to customers as a benefit, MechanicLane offers affordable real solutions with a promise of quality, genuine products and the conveneience of doorstep pick up and drop offs.</div>
                                                                                    </div>
                                                                                    <div class="faq__item">
                                                                                        <div class="faq__title">
                                                                                            Does MechanicLane offer doorstep pick and drop offs from home or office?
                                                                                            <div class="icon"></div>
                                                                                        </div>
                                                                                        <div class="faq__content">
                                                                                            Of course, MechanicLane offer you the convenience of doorstep pick up and drop offs. We encourage you to save time and energy and go on about your regular lives, while our team helps pick the car, service it and drop off.</div>
                                                                                    </div> -->

                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="divider-xl visible-sm visible-xs">
                                                                            </div>
                                                                            <!--<div class="col-xs-12 col-sm-6 col-md-6">
                                                                                <div class="promo01-layout-right">
                                                                                    <div class="promo01">
                                                                                        <div class="image-box">
                                                                                            <img width="650"
                                                                                                height="530"
                                                                                                src="content/uploads/home-page-faq.jpg"
                                                                                                class="attachment-full size-full"
                                                                                                alt="" loading="lazy" />
                                                                                        </div>
                                                                                        <div
                                                                                            class="pt-description">
                                                                                            <div
                                                                                                class="pt-description-wrapper">
                                                                                                <div class="pt-title">
                                                                                                    Diagnostics,<br>Repairs
                                                                                                    &amp; Servicing
                                                                                                </div>
                                                                                                <ul class="">
                                                                                                    <li style="color:#fff;">Diagnostics</li>
                                                                                                    <li style="color:#fff;">Repairs</li>
                                                                                                    <li style="color:#fff;">Servicing</li>
                                                                                                    <li style="color:#fff;">Breakdowns</li>
                                                                                                    <li style="color:#fff;">Tow Services</li>
                                                                                                </ul>
                                                                                                <a class="btn btn-border btn-color02" href="#" data-toggle="modal" data-target="#appointmentForm" style="background-color:#f7941f; color:#fff;"><span>Book an Appointment</span></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>-->
                                                                            


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

                                <section
                                    class="mechaniclane-section mechaniclane-top-section mechaniclane-element mechaniclane-element-0279c30 mechaniclane-section-stretched mechaniclane-section-full_width mechaniclane-section-height-default mechaniclane-section-height-default"
                                    data-id="0279c30" data-element_type="section"
                                    data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                    <div class="mechaniclane-container mechaniclane-column-gap-no">
                                        <div class="mechaniclane-row">
                                            <div class="mechaniclane-column mechaniclane-col-100 mechaniclane-top-column mechaniclane-element mechaniclane-element-868c82f"
                                                data-id="868c82f" data-element_type="column">
                                                <div class="mechaniclane-column-wrap mechaniclane-element-populated">
                                                    <div class="mechaniclane-widget-wrap">
                                                        <div class="mechaniclane-element mechaniclane-element-84986e1 mechaniclane-widget mechaniclane-widget-car_price_slider"
                                                            data-id="84986e1" data-element_type="widget"
                                                            data-widget_type="car_price_slider.default">
                                                            <div class="mechaniclane-widget-container">

                                                                <div class="block custom-bg-4">
                                                                    <div class="container">
                                                                        <div class="block-title">
                                                                            <h5 class="block-title__title">Our Pricing
                                                                                Plans</h5>
                                                                            <!--<div class="block-title__description">-->
                                                                            <!--    Fixed price car servicing packages-->
                                                                            <!--</div>-->
                                                                        </div>
                                                                     <div class="demo">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <img src="images/1500-package.jpg" class="pb-30">
                
                <!--<div class="pricingTable">
                    <div class="pricingTable-header">
                        <svg x="0px" y="0px" viewBox="0 0 260 180">
                            <path fill="#34454d" stroke-dasharray="5,5" stroke="#fff" d="M0,180.928c0,0,0-108.489,0-143.333C1.637,23.582,8.907,0,42.088,0C75.271,0,260,0,260,0v72.841
                            c0,0-2.667,37.424-43.877,45.563C177.693,125.992,6.26,130.42,0,180.928z"></path>
                            <text transform="matrix(1.0078 0 0 1 75.9497 33.8887)" fill="#fff" font-size="23.726">BRONZE</text>
                            <g>
                                <text transform="matrix(1.0078 0 0 1 98.5996 65.9434)" fill="#fff" font-size="23.726">₹</text>
                                <text transform="matrix(1.076 0 0 1 112.0176 88.458)" fill="#fff" font-size="42" font-weight="600">999/</text>
                                <text transform="matrix(1.0078 0 0 1 107.9326 106.832)" fill="#fff" font-size="16.2415">/month</text>
                            </g>
                        </svg>
                    </div>
                    <ul class="pricing-content">
                        <li>Lorem Ipsum is simply dummy text </li>
                        <li>Lorem Ipsum is simply dummy text </li>
                        <li>Lorem Ipsum is simply dummy text </li>
                       
                    </ul>
                    <div class="pricingTable-signup">
                        <svg x="0" y="0" viewBox="-35 0 160 30">
                            <a href="#">
                                <path fill="#fff" d="M13.12,5.867c17.786-0.834,68.654-5.473,68.654-5.473s8.203-1.945,7.445,5.473
                                c-0.757,7.417-4.037,16.782-4.037,16.782s-1.667,5.881-9.719,6.932c-8.961,0.852-50.858-0.983-67.771,0
                                c-2.718,0.158-9.935,0.256-7.446-7.66c2.736-9.18,3.408-10.459,3.408-10.459S5.647,5.86,13.12,5.867z"></path>
                                <text transform="matrix(1 0 0 1 15.5055 21.0098)" fill="#34454D" font-size="8" font-weight="700">View Plan & Price</text>
                            </a>
                        </svg>
                    </div>
                </div>-->
            </div>
            <div class="col-md-4 col-sm-6">
                <img src="images/gold-package.jpg" class="pb-30">
                <!--<div class="pricingTable">
                    <div class="pricingTable-header">
                        <svg x="0px" y="0px" viewBox="0 0 260 180">
                            <path fill="#34454d" stroke-dasharray="5,5" stroke="#fff" d="M0,180.928c0,0,0-108.489,0-143.333C1.637,23.582,8.907,0,42.088,0C75.271,0,260,0,260,0v72.841
                            c0,0-2.667,37.424-43.877,45.563C177.693,125.992,6.26,130.42,0,180.928z"></path>
                            <text transform="matrix(1.0078 0 0 1 75.9497 33.8887)" fill="#fff" font-size="23.726">SILVER</text>
                            <g>
                                <text transform="matrix(1.0078 0 0 1 98.5996 65.9434)" fill="#fff" font-size="23.726">₹
                                </text>
                                <text transform="matrix(1.076 0 0 1 112.0176 88.458)" fill="#fff" font-size="42" font-weight="600">1999</text>
                                <text transform="matrix(1.0078 0 0 1 107.9326 106.832)" fill="#fff" font-size="16.2415">/month</text>
                            </g>
                        </svg>
                    </div>
                    <ul class="pricing-content">
                       <li>Lorem Ipsum is simply dummy text </li>
                        <li>Lorem Ipsum is simply dummy text </li>
                        <li>Lorem Ipsum is simply dummy text </li>
                       
                    </ul>
                    <div class="pricingTable-signup">
                        <svg x="0" y="0" viewBox="-35 0 160 30">
                            <a href="#">
                                <path fill="#fff" d="M13.12,5.867c17.786-0.834,68.654-5.473,68.654-5.473s8.203-1.945,7.445,5.473
                                c-0.757,7.417-4.037,16.782-4.037,16.782s-1.667,5.881-9.719,6.932c-8.961,0.852-50.858-0.983-67.771,0
                                c-2.718,0.158-9.935,0.256-7.446-7.66c2.736-9.18,3.408-10.459,3.408-10.459S5.647,5.86,13.12,5.867z"></path>
                                <text transform="matrix(1 0 0 1 15.5055 21.0098)" fill="#34454D" font-size="8" font-weight="700">View Plan & Price</text>
                            </a>
                        </svg>
                    </div>
                </div>-->
            </div>
             <div class="col-md-4 col-sm-6">
             <img src="images/diamond-package.jpg" class="pb-30">
                <!--<div class="pricingTable">
                    <div class="pricingTable-header">
                        <svg x="0px" y="0px" viewBox="0 0 260 180">
                            <path fill="#34454d" stroke-dasharray="5,5" stroke="#fff" d="M0,180.928c0,0,0-108.489,0-143.333C1.637,23.582,8.907,0,42.088,0C75.271,0,260,0,260,0v72.841
                            c0,0-2.667,37.424-43.877,45.563C177.693,125.992,6.26,130.42,0,180.928z"></path>
                            <text transform="matrix(1.0078 0 0 1 75.9497 33.8887)" fill="#fff" font-size="23.726">GOLD</text>
                            <g>
                                <text transform="matrix(1.0078 0 0 1 98.5996 65.9434)" fill="#fff" font-size="23.726">₹</text>
                                <text transform="matrix(1.076 0 0 1 112.0176 88.458)" fill="#fff" font-size="42" font-weight="600">2999</text>
                                <text transform="matrix(1.0078 0 0 1 107.9326 106.832)" fill="#fff" font-size="16.2415">/month</text>
                            </g>
                        </svg>
                    </div>
                    <ul class="pricing-content">
                       <li>Lorem Ipsum is simply dummy text </li>
                        <li>Lorem Ipsum is simply dummy text </li>
                        <li>Lorem Ipsum is simply dummy text </li>
                       
                    </ul>
                    <div class="pricingTable-signup">
                        <svg x="0" y="0" viewBox="-35 0 160 30">
                            <a href="#">
                                <path fill="#fff" d="M13.12,5.867c17.786-0.834,68.654-5.473,68.654-5.473s8.203-1.945,7.445,5.473
                                c-0.757,7.417-4.037,16.782-4.037,16.782s-1.667,5.881-9.719,6.932c-8.961,0.852-50.858-0.983-67.771,0
                                c-2.718,0.158-9.935,0.256-7.446-7.66c2.736-9.18,3.408-10.459,3.408-10.459S5.647,5.86,13.12,5.867z"></path>
                                <text transform="matrix(1 0 0 1 15.5055 21.0098)" fill="#34454D" font-size="8" font-weight="700">View Plan & Price</text>
                            </a>
                        </svg>
                    </div>
                </div>-->
            </div>
        </div>
        <div class="row text-center ptb-30">
            <div class="col-md-12 col-lg-12">
                <div class="pt-30">
                    <a class="btn btn-border btn-color02 js-tab-modals" href="appointment.php" style="background:#f7941f !important">
                                                    <span>Book Your Appointment </span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .btn2{
    padding: 17px 34px;
    min-width: inherit;
    text-transform: inherit;
    font-size: 16px!important;
    font-weight: 500;
    color:#fff;
    border-color: #f7941f;
    border: 2px solid #fede00;
}
.btn2:hover{
    color:#fff;
    background:#f7941f !important;
}
    }
</style>
                                                                      
                                                                      
                                                                      
                                                                      
                                                                      
                                                                      
                                                                      
                                                                      
                                                                      
                                                                      
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

                                <section
                                    class="mechaniclane-section mechaniclane-top-section mechaniclane-element mechaniclane-element-8716057 mechaniclane-section-stretched mechaniclane-section-full_width mechaniclane-section-height-default mechaniclane-section-height-default"
                                    data-id="8716057" data-element_type="section"
                                    data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                    <div class="mechaniclane-container mechaniclane-column-gap-default">
                                        <div class="mechaniclane-row">
                                            <div class="mechaniclane-column mechaniclane-col-100 mechaniclane-top-column mechaniclane-element mechaniclane-element-641e71a"
                                                data-id="641e71a" data-element_type="column">
                                                <div class="mechaniclane-column-wrap mechaniclane-element-populated">
                                                    <div class="mechaniclane-widget-wrap">
                                                        <div class="mechaniclane-element mechaniclane-element-b2a573a mechaniclane-widget mechaniclane-widget-car_faq_two"
                                                            data-id="b2a573a" data-element_type="widget"
                                                            data-widget_type="car_faq_two.default">
                                                            <div class="mechaniclane-widget-container">
                                                                <div class="block">
                                                                    <div class="container">
                                                                        <div class="row">



                                                                            <div class="col-xs-12 col-sm-6 col-md-12 banner-col">
                                                                                <div data-mechaniclane-type="page" data-mechaniclane-id="2357" class="mechaniclane mechaniclane-2357" data-mechaniclane-settings="[]">
                                                                                    <div class="mechaniclane-inner">
                                                                                        <div class="mechaniclane-section-wrap">
                                                                                            <section class="mechaniclane-section mechaniclane-top-section mechaniclane-element mechaniclane-element-327ae0f mechaniclane-section-boxed mechaniclane-section-height-default mechaniclane-section-height-default" data-id="327ae0f" data-element_type="section">
                                                                                                <div class="mechaniclane-container mechaniclane-column-gap-no">
                                                                                                    <div class="mechaniclane-row">
                                                                                                        <div class="mechaniclane-column mechaniclane-col-100 mechaniclane-top-column mechaniclane-element mechaniclane-element-5948e10" data-id="5948e10" data-element_type="column">
                                                                                                            <div class="mechaniclane-column-wrap mechaniclane-element-populated">
                                                                                                                <div class="mechaniclane-widget-wrap">
                                                                                                                    <div class="mechaniclane-element mechaniclane-element-5575f27 mechaniclane-widget mechaniclane-widget-banner_services" data-id="5575f27" data-element_type="widget" data-widget_type="banner_services.default">
                                                                                                                        <div class="mechaniclane-widget-container">

                                                                                                                            <a href="#" class="banner-service">
                                                                                                                                <img height="370" src="content/uploads/block-wrapper01.jpg" class="visible-sm visible-xs" alt="" loading="lazy" />
                                                                                                                                <div class="row-flex">
                                                                                                                                    <div class="col-left">
                                                                                                                                        <img src="car-icon.png" alt="car service" style="background: #fff; border-radius: 50%;">
                                                                                                                                    </div>
                                                                                                                                    <div
                                                                                                                                        class="col-center">
                                                                                                                                        <div class="banner-text-1" style="font-size:20px">
                                                                                                                                            Stuck with your car repair & servicing worries!
                                                                                                                                        </div>
                                                                                                                                        <div class="banner-text-2">
                                                                                                                                            Be it for a single car or a large fleet, our range of comprehensive car care services are just one click away! If you need any help with car repair, wash, towing & spare parts, please contact us.
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div
                                                                                                                                        class="col-right">
                                                                                                                                        <div
                                                                                                                                            class="banner-text-3">
                                                                                                                                            <i class="icon icon-phone"></i><?php $data = get_alldetails();
                                                                                                                                            echo $data['contact']; ?>
                                                                                                                                        </div>
                                                                                                                                        <div class="banner-text-4">
                                                                                                                                            Gain freedom from your car troubles as we have got you covered 24x7 & 365 days a year.
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </a>

                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </section>
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
                                        </div>
                                    </div>
                                </section>

                                <section
                                    class="mechaniclane-section mechaniclane-top-section mechaniclane-element mechaniclane-element-f63a25d mechaniclane-section-stretched mechaniclane-section-full_width mechaniclane-section-height-default mechaniclane-section-height-default"
                                    data-id="f63a25d" data-element_type="section"
                                    data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                    <div class="mechaniclane-container mechaniclane-column-gap-default">
                                        <div class="mechaniclane-row">
                                            <div class="mechaniclane-column mechaniclane-col-100 mechaniclane-top-column mechaniclane-element mechaniclane-element-6fe9764"
                                                data-id="6fe9764" data-element_type="column">
                                                <div class="mechaniclane-column-wrap mechaniclane-element-populated">
                                                    <div class="mechaniclane-widget-wrap">
                                                        <div class="mechaniclane-element mechaniclane-element-0b51bb2 mechaniclane-widget mechaniclane-widget-car_blogs"
                                                            data-id="0b51bb2" data-element_type="widget"
                                                            data-widget_type="car_blogs.default">
                                                            <div class="mechaniclane-widget-container">

                                                                <!-- Nes -->
                                                                <div class="block">
                                                                    <div class="container">
                                                                        <div class="row custom-news-layout">
                                                                            <div class="tt-col-575 col-xs-6 col-sm-4 col-xl-4">
                                                                                <div class="newsbox-caption show767">
                                                                                    News</div>
                                                                                <div class="block-title text-left">
                                                                                    <h5 class="block-title__title">News
                                                                                        & Update</h5>
                                                                                    <div class="title-separator"></div>
                                                                                </div>
                                                                                <div class="newslist">
                                                                                    <?php
                                                                                    $sql2 = "SELECT * FROM tbl_blog ORDER BY id DESC LIMIT 3";
                                                                                    $run2 = mysqli_query($con,$sql2);

                                                                                    if ($run2) {
                                                                                        $i=0;
                                                                                      while ($row2 =mysqli_fetch_assoc($run2)) {
                                                                                        
                                                                                    ?>

                                                                                    <a href="#" class="newslist__item">
                                                                                        <div class="newslist__data">
                                                                                            <?php $date = $row2['updated_at'];
                                                                                            $newdate = date("Y-m-d", strtotime($date));
                                                                                            echo $newdate;   
                                                                                             ?></div>
                                                                                        <div class="newslist__title">
                                                                                            <?php echo $row2['title'] ?></div>
                                                                                        <div
                                                                                            class="newslist__description">
                                                                                            <p><?php echo $row2['title'] ?></p>
                                                                                        </div>
                                                                                    </a>
                                                                                    <?php
                                                                                    }
                                                                                    }
                                                                                    ?>
                                                                                    <!-- <a href="2017/04/08/abs-has-become-pretty-much-standard-equipment-on-most-vehicles/index.html"
                                                                                        class="newslist__item">
                                                                                        <div class="newslist__data">
                                                                                            08.04.2017</div>
                                                                                        <div class="newslist__title">ABS
                                                                                            has become pretty much
                                                                                            standard equipment on most
                                                                                            vehicles</div>
                                                                                        <div
                                                                                            class="newslist__description">
                                                                                            <p>From parking in a garage
                                                                                                to driving other cars,
                                                                                                discover the truth
                                                                                                behind some
                                                                                                common&#8230;</p>
                                                                                        </div>
                                                                                    </a>

                                                                                    <a href="2017/04/07/car-power-self-test-every-time-cycle-ignition/index.html"
                                                                                        class="newslist__item">
                                                                                        <div class="newslist__data">
                                                                                            07.04.2017</div>
                                                                                        <div class="newslist__title">How
                                                                                            to Diagnose Car Problems If
                                                                                            You Don&#8217;t Know Much
                                                                                            About Cars</div>
                                                                                        <div
                                                                                            class="newslist__description">
                                                                                            <p>With mixed messages from
                                                                                                government, does it
                                                                                                still make sense to buy
                                                                                                a diesel?</p>
                                                                                        </div>
                                                                                    </a> -->
                                                                                </div>
                                                                            </div>
                                                                            <div class="divider-lg hidden-575"></div>
                                                                            <div
                                                                                class="tt-col-575 col-xs-6 col-sm-8 col-xl-8">
                                                                                <div class="newsbox-caption hide767">
                                                                                    News</div>
                                                                                <div class="newsbox js-newsbox slick-arrow-t-r">
                                                                                    <?php
                                                                                    $sql1 = "SELECT * FROM tbl_blog ORDER BY id DESC LIMIT 2";
                                                                                    $run1 = mysqli_query($con,$sql1);

                                                                                    if ($run1) {
                                                                                        $i=0;
                                                                                      while ($row1 =mysqli_fetch_assoc($run1)) {
                                                                                        
                                                                                    ?>
                                                                                    <div>
                                                                                        <div class="newsbox__item">
                                                                                            <div class="newsbox__img">
                                                                                                <img width="370"
                                                                                                    height="411"
                                                                                                    src="mechanical_admin/uploads/blog/<?php echo $row1['image'] ?>"
                                                                                                    class="attachment-car-repair-services-post-grid size-car-repair-services-post-grid wp-post-image"
                                                                                                    alt=""
                                                                                                    loading="lazy" />
                                                                                            </div>
                                                                                            <div
                                                                                                class="newsbox-content">
                                                                                                <div
                                                                                                    class="newsbox__data">
                                                                                                    <?php $date = date($row1['updated_at']);
                                                                                                    $newdate = date('Y-m-d', strtotime($date));
                                                                                                    echo $newdate;

                                                                                                     ?> <span
                                                                                                        class="icon-marker"></span>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="newsbox__title">
                                                                                                    <a
                                                                                                        href="#">
                                                                                                        <?php echo $row1['title']; ?>
                                                                                                    </a>
                                                                                                </div>
                                                                                                <a href="#"
                                                                                                    class="newsbox__link">Read
                                                                                                    More</a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <?php
                                                                                    }
                                                                                    }
                                                                                    ?>
                                                                                    <!-- <div>
                                                                                        <div class="newsbox__item">
                                                                                            <div class="newsbox__img">
                                                                                                <img width="370"
                                                                                                    height="411"
                                                                                                    src="content/uploads/blog-post-img-02-370x411.jpg"
                                                                                                    class="attachment-car-repair-services-post-grid size-car-repair-services-post-grid wp-post-image"
                                                                                                    alt=""
                                                                                                    loading="lazy" />
                                                                                            </div>
                                                                                            <div
                                                                                                class="newsbox-content">
                                                                                                <div
                                                                                                    class="newsbox__data">
                                                                                                    08.04.2017 <span
                                                                                                        class="icon-marker"></span>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="newsbox__title">
                                                                                                    <a
                                                                                                        href="2017/04/08/abs-has-become-pretty-much-standard-equipment-on-most-vehicles/index.html">
                                                                                                        ABS has become
                                                                                                        pretty much
                                                                                                        standard
                                                                                                        equipment on
                                                                                                        most vehicles
                                                                                                    </a>
                                                                                                </div>
                                                                                                <a href="2017/04/08/abs-has-become-pretty-much-standard-equipment-on-most-vehicles/index.html"
                                                                                                    class="newsbox__link">Read
                                                                                                    More</a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div>
                                                                                        <div class="newsbox__item">
                                                                                            <div class="newsbox__img">
                                                                                                <img width="370"
                                                                                                    height="411"
                                                                                                    src="content/uploads/blog-post-img-03-370x411.jpg"
                                                                                                    class="attachment-car-repair-services-post-grid size-car-repair-services-post-grid wp-post-image"
                                                                                                    alt=""
                                                                                                    loading="lazy" />
                                                                                            </div>
                                                                                            <div
                                                                                                class="newsbox-content">
                                                                                                <div
                                                                                                    class="newsbox__data">
                                                                                                    07.04.2017 <span
                                                                                                        class="icon-marker"></span>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="newsbox__title">
                                                                                                    <a
                                                                                                        href="2017/04/07/car-power-self-test-every-time-cycle-ignition/index.html">
                                                                                                        How to Diagnose
                                                                                                        Car Problems If
                                                                                                        You Don&#8217;t
                                                                                                        Know Much About
                                                                                                        Cars </a>
                                                                                                </div>
                                                                                                <a href="2017/04/07/car-power-self-test-every-time-cycle-ignition/index.html"
                                                                                                    class="newsbox__link">Read
                                                                                                    More</a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div> -->
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
                                                                                    <p>Our comprehensive car care solutions are available for all makes of automobiles to make them readily accessible to all. Whether it be brand-specific spare parts or repairs that require the right skills & expertise, we are equipped to support all your car needs. </p>
                                                                                    </div>
                                                                                    <div class="col col-lg-2"></div>
                                                                                </div>
                                                    <img src="images/car-brands.jpg" width="100%">
                                                
                                            </div>
                                            <div class="row text-center ptb-30">
                                     <div class="col-md-12 col-lg-12">
                                        <div class="pb-30">
                                                <a class="btn btn-border btn-color02 js-tab-modals" href="appointment.php" style="background:#f7941f !important">
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
        </div>
    </section>
    <!--bramd section-->
                                
                                
                                
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //Block -->
            </div>
        </div><!-- #primary -->
    </div><!-- #pageContent -->
    <section class="mechaniclane-section">
        <div class="container-fluid">
             <img src="images/car-repair-service-vector.jpg" class="img-fluid img-responsive" width="100%">
        </div>
    </section>
  
  <!--footer-->
  
<?php include 'footer.php';?>
  
  <!--footer end-->
  
    <!-- Footer -->
    
    <script type="text/javascript">
        jQuery(document).ready(function ($){
            $('.owl-carousel').owlCarousel({
             autoplay:3000,
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
        (function () {
              "use strict";
            
              var carousels = function () {
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
            
              (function ($) {
                carousels();
              })(jQuery);
            })();

        </script>

    <script src="content/cache/min/11/58dd196d6766c8f69b09f71a10e37cab.js" data-minify="1" defer></script>
    <script src="css/js/owl.carousel.min.js"></script>

</body>


</html>