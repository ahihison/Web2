<!-- Shopping Cart Section Begin -->
<section class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="shopping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>SIZE</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="dsgh">
                            <?php 
                            if(!empty($dsgh)){
                            foreach($dsgh as $sp): ?>
                            <tr class="ghsp">
                                <td class="product__cart__item">
                                    <div class="product__cart__item__pic">
                                        <img src="img/shopping-cart/cart-1.jpg" alt="">
                                    </div>
                                    <div class="product__cart__item__text">
                                        <h6><?php echo $sp['tensp']." - ".$sp['name'] ?></h6>
                                        <h5>$<?php echo $sp['sale'] ?></h5>
                                    </div>
                                </td>
                                <td class="quantity__item">
                                    <div class="quantity">
                                        <div class="pro-qty-2">
                                            <input class="slg" type="text" value="<?php echo $sp['tsl'] ?>">

                                        </div>
                                        <input class="idsp" type="hidden" value="<?php echo $sp['product_id'] ?>">
                                        <input class="idsize" type="hidden" value="<?php echo $sp['idSize'] ?>">
                                    </div>
                                </td>

                                <td class="cart__price">$<?php echo ($sp['sale']*$sp['tsl'])  ?></td>
                                <td><?php echo $sp["name"]  ?></td>

                                <td onclick="remove(<?php echo $sp['product_id'] ?>,<?php echo $sp['idSize'] ?>)"
                                    class="cart__close"><i class="fa fa-close"></i></td>

                            </tr>
                            <?php endforeach;} ?>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn">
                            <a href="<?php echo HOST_ROOT ?>/shop">Continue Shopping</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn update__btn">
                            <a onclick="updateCart()"><i class="fa fa-spinner"></i> Update cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cart__discount">
                    <h6>Discount codes</h6>
                    <form action="#">
                        <input type="text" placeholder="Coupon code">
                        <button type="submit">Apply</button>
                    </form>
                </div>
                <div class="cart__total">
                    <h6>Cart total</h6>
                    <ul>
                        <li>Subtotal <span>$ 169.50</span></li>
                        <li>Total <span id="tongTienGH">$ <?php echo $tongTien ?></span></li>
                    </ul>
                    <a href="#" class="primary-btn">Proceed to checkout</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shopping Cart Section End -->