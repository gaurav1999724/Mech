


<style>

.header_cart_page {
  border-bottom: 1px solid #ededed;
}

.other_bread {
  padding-top: 41px;
  padding-bottom: 41px;
}

.table_desc {
  border: 1px solid #ededed;
  margin-bottom: 60px;
  margin-top: 2px;
}
.table_desc .cart_page table {
  width: 100%;
}
.table_desc .cart_page table thead tr th {
  border-bottom: 3px solid #d52121;
  border-right: 1px solid #ededed;
  font-size: 16px;
  font-weight: 500;
  text-transform: capitalize;
  padding: 10px;
  text-align: center;
}
.table_desc .cart_page table tbody tr td {
  border-bottom: 1px solid #ededed;
  border-right: 1px solid #ededed;
  text-align: center;
  padding: 10px;
}
.table_desc .cart_page table tbody tr td.product_remove {
  min-width: 100px;
}
.table_desc .cart_page table tbody tr td.product_remove a {
  font-size: 20px;
  color: #333;
}
.table_desc .cart_page table tbody tr td.product_remove a:hover {
  color: #d52121;
}
.table_desc .cart_page table tbody tr td.product_thumb {
  max-width: 180px;
}
.table_desc .cart_page table tbody tr td.product_thumb a img {
  width: 100px;
}
.table_desc .cart_page table tbody tr td.product_name {
  min-width: 180px;
}
.table_desc .cart_page table tbody tr td.product_name a {
  color: #333;
  text-transform: capitalize;
  font-size: 14px;
  font-weight: 400;
}
.table_desc .cart_page table tbody tr td.product_name a:hover {
  color: #d52121;
}
.table_desc .cart_page table tbody tr td.product-price {
  min-width: 130px;
  color: #333;
  font-size: 16px;
  font-weight: 500;
}
.table_desc .cart_page table tbody tr td.product_quantity {
  min-width: 180px;
}
.table_desc .cart_page table tbody tr td.product_quantity label {
  font-weight: 500;
  margin-right: 5px;
}
.table_desc .cart_page table tbody tr td.product_quantity input {
  width: 60px;
  height: 40px;
  padding: 0 5px 0 10px;
  background: none;
  border: 1px solid #ededed;
}
.table_desc .cart_page table tbody tr td .product_total {
  min-width: 120px;
}

.cart_page table thead tr:last-child th, .table_desc table tbody tr td:last-child {
  border-right: 0;
}

.cart_submit {
  text-align: right;
  padding: 12px;
}
@media only screen and (max-width: 767px) {
  .cart_submit {
    text-align: center;
  }
}
.cart_submit button {
  background: #333;
  border: 0;
  color: #ffffff;
  display: inline-block;
  font-size: 12px;
  font-weight: 500;
  height: 38px;
  line-height: 18px;
  padding: 10px 15px;
  text-transform: uppercase;
  cursor: pointer;
  -webkit-transition: 0.3s;
  transition: 0.3s;
  border-radius: 3px;
}
.cart_submit button:hover {
  background: #d52121;
}

.coupon_inner {
  padding: 10px 20px 25px;
}
.coupon_inner p {
  font-size: 14px;
  margin-bottom: 20px;
}
.coupon_inner button {
  background: #333;
  border: 0;
  color: #ffffff;
  display: inline-block;
  font-size: 12px;
  font-weight: 500;
  height: 38px;
  line-height: 20px;
  padding: 10px 15px;
  text-transform: uppercase;
  cursor: pointer;
  -webkit-transition: 0.3s;
  transition: 0.3s;
  border-radius: 3px;
}
.coupon_inner button:hover {
  background: #d52121;
}
.coupon_inner input {
  border: 1px solid #ededed;
  height: 42px;
  background: none;
  padding: 0 20px;
  margin-right: 20px;
  font-size: 12px;
  color: #333;
}
@media only screen and (max-width: 767px) {
  .coupon_inner input {
    margin-bottom: 24px;
    width: 100%;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .coupon_inner input {
    margin-bottom: 24px;
    width: 100%;
  }
}
.coupon_inner a {
  display: block;
  text-align: right;
  font-size: 14px;
  font-weight: 500;
  margin-bottom: 20px;
  border-bottom: 1px solid #ededed;
  padding-bottom: 10px;
  border-radius: 3px;
}
.coupon_inner a:hover {
  color: #d52121;
}

.coupon_code {
  border: 1px solid #ededed;
}
@media only screen and (max-width: 767px) {
  .coupon_code.left {
    margin-bottom: 59px;
  }
}
.coupon_code h3 {
  color: #ffffff;
  line-height: 36px;
  padding: 5px 15px;
  background: #333;
  text-transform: uppercase;
  font-size: 16px;
  font-weight: 500;
}
@media only screen and (max-width: 767px) {
  .coupon_code h3 {
    line-height: 28px;
    padding: 5px 15px;
    font-size: 15px;
  }
}

.cart_subtotal {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
}
.cart_subtotal p {
  font-weight: 600;
  font-size: 14px;
}
.cart_subtotal p.cart_amount {
  font-size: 18px;
  font-weight: 500;
}
@media only screen and (max-width: 767px) {
  .cart_subtotal p.cart_amount {
    font-size: 14px;
  }
}
.cart_subtotal p span {
  margin-right: 30px;
}

.checkout_btn {
  text-align: right;
}
.checkout_btn a {
  background: #d52121;
  color: #ffffff;
  font-size: 15px;
  padding: 3px 14px;
  line-height: 30px;
  font-weight: 500;
  display: inline-block;
  text-transform: capitalize;
  margin-bottom: 0;
}
.checkout_btn a:hover {
  background: #333;
  color: #ffffff;
}

.coupon_area {
  margin-bottom: 60px;
}

.footer_widgets.other_widgets .footer_top {
  padding-bottom: 0;
  border-bottom: 0;
}
.footer_widgets.other_widgets .footer_top_inner {
  padding: 55px 0 53px;
  border-top: 1px solid #ededed;
  border-bottom: 1px solid #ededed;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .footer_widgets.other_widgets .footer_top_inner {
    padding: 55px 0 59px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .footer_widgets.other_widgets .footer_top_inner {
    padding: 55px 0 40px;
  }
}
@media only screen and (max-width: 767px) {
  .footer_widgets.other_widgets .footer_top_inner {
    padding: 55px 0 35px;
  }
}
</style>




  <body class="home page-template-default page page-id-56 wp-embed-responsive layout-2 theme-car-repair-services woocommerce-no-js mechaniclane-default mechaniclane-kit-1944 mechaniclane-page mechaniclane-page-56">
      <!-- mobile menu -->
    
    
    
 
    <?php include 'header.php'; ?>




<div class="shopping_cart_area">
        <div class="container">
            <form action="#">
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="cart_page table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product_remove">Delete</th>
                                            <th class="product_thumb">Image</th>
                                            <th class="product_name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product_quantity">Quantity</th>
                                            <th class="product_total">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                            <td class="product_thumb"><a href="#"><img src="assets/img/s-product/product.jpg" alt=""></a></td>
                                            <td class="product_name"><a href="#">Handbag fringilla</a></td>
                                            <td class="product-price">£65.00</td>
                                            <td class="product_quantity"><label>Quantity</label> <input min="1" max="100" value="1" type="number"></td>
                                            <td class="product_total">£130.00</td>


                                        </tr>

                                        <tr>
                                            <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                            <td class="product_thumb"><a href="#"><img src="assets/img/s-product/product2.jpg" alt=""></a></td>
                                            <td class="product_name"><a href="#">Handbags justo</a></td>
                                            <td class="product-price">£90.00</td>
                                            <td class="product_quantity"><label>Quantity</label> <input min="1" max="100" value="1" type="number"></td>
                                            <td class="product_total">£180.00</td>


                                        </tr>
                                        <tr>
                                            <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                            <td class="product_thumb"><a href="#"><img src="assets/img/s-product/product3.jpg" alt=""></a></td>
                                            <td class="product_name"><a href="#">Handbag elit</a></td>
                                            <td class="product-price">£80.00</td>
                                            <td class="product_quantity"><label>Quantity</label> <input min="1" max="100" value="1" type="number"></td>
                                            <td class="product_total">£160.00</td>


                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="cart_submit">
                                <button type="submit">update cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--coupon code area start-->
                <div class="coupon_area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code left">
                                <h3>Coupon</h3>
                                <div class="coupon_inner">
                                    <p>Enter your coupon code if you have one.</p>
                                    <input placeholder="Coupon code" type="text">
                                    <button type="submit">Apply coupon</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code right">
                                <h3>Cart Totals</h3>
                                <div class="coupon_inner">
                                    <div class="cart_subtotal">
                                        <p>Subtotal</p>
                                        <p class="cart_amount">£215.00</p>
                                    </div>
                                    <div class="cart_subtotal ">
                                        <p>Shipping</p>
                                        <p class="cart_amount"><span>Flat Rate:</span> £255.00</p>
                                    </div>
                                    <a href="#">Calculate shipping</a>

                                    <div class="cart_subtotal">
                                        <p>Total</p>
                                        <p class="cart_amount">£215.00</p>
                                    </div>
                                    <div class="checkout_btn">
                                        <a href="#">Proceed to Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--coupon code area end-->
            </form>
        </div>
    </div>


<!--<div id="cart1">
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h5 class="media-heading"><a href="#">Product name</a></h5>
                                <h6 class="media-heading"> by <a href="#">Brand name</a></h6>
                                <span>Status: </span><span class="text-success"><strong>In Stock</strong></span>
                            </div>
                        </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        <input type="email" class="form-control" id="exampleInputEmail1" value="3">
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>$4.87</strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>$14.61</strong></td>
                        <td class="col-sm-1 col-md-1">
                        <button type="button" class="btn btn-danger" style="background-color: #d9534f;
border-color: #d43f3a; padding: 6px 12px;">
                         <span>   <i class="fa fa-times" aria-hidden="true"></i>
 Remove</span>
                        </button></td>
                    </tr>
                    <tr>
                        <td class="col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h5 class="media-heading"><a href="#">Product name</a></h5>
                                <h6 class="media-heading"> by <a href="#">Brand name</a></h6>
                                <span>Status: </span><span class="text-warning"><strong>Leaves warehouse in 2 - 3 weeks</strong></span>
                            </div>
                        </div></td>
                        <td class="col-md-1" style="text-align: center">
                        <input type="email" class="form-control" id="exampleInputEmail1" value="2">
                        </td>
                        <td class="col-md-1 text-center"><strong>$4.99</strong></td>
                        <td class="col-md-1 text-center"><strong>$9.98</strong></td>
                        <td class="col-md-1">
                         <button type="button" class="btn btn-danger" style="background-color: #d9534f;
border-color: #d43f3a; padding: 6px 12px;">
                         <span>   <i class="fa fa-times" aria-hidden="true"></i>
 Remove</span>
                        </button></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Subtotal</h5></td>
                        <td class="text-right"><h5><strong>$24.59</strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Estimated shipping</h5></td>
                        <td class="text-right"><h5><strong>$6.94</strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong>$31.53</strong></h3></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                        <button type="button" class="btn btn-default" style="background: transparent; color: #000;">
                          <span>  <i class="fa fa-cart-plus" aria-hidden="true"></i>
 Continue Shopping</span>
                        </button></td>
                        <td>
                        <button type="button" class="btn btn-success" style="background: green; ">
                      <span>      Checkout  <i class="fa fa-forward" aria-hidden="true"></i></span>

                        </button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>-->



<?php include 'footer.php';?>   

  

    <!--  <div class="back-to-top" style="bottom: 15px;"><a href="#top">
            <span class="icon icon-arrow_up"></span>
       </a></div>-->
  


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 

  <script src="content/cache/min/11/58dd196d6766c8f69b09f71a10e37cab.js" data-minify="1" defer></script>

  </body>

 