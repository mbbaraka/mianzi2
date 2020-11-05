            <!-- .block-products-carousel -->
            <div class="block block-products-carousel" data-layout="grid-5">
               <div class="container">
                  <div class="block-header">
                     <h3 class="block-header__title">Related Products</h3>
                     <div class="block-header__divider"></div>
                     <div class="block-header__arrows-list">
                        <button class="block-header__arrow block-header__arrow--left" type="button">
                            <i style="width: 7px; height: 11px;" class="fa fa-angle-left"></i>
                        </button>
                        <button class="block-header__arrow block-header__arrow--right" type="button">
                            <i style="width: 7px; height: 11px;" class="fa fa-angle-right"></i>
                        </button>
                     </div>
                  </div>
                  <div class="block-products-carousel__slider">
                     <div class="block-products-carousel__preloader"></div>
                     <div class="owl-carousel">
                        <?php $__currentLoopData = Products::related($product->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <div class="block-products-carousel__column">
                              <div class="block-products-carousel__cell">
                                 <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                       <svg width="16px" height="16px">
                                          <i style="width: 16px; height: 16px;" class="fa fa-expand"></i>
                                       </svg>
                                       <span class="fake-svg-icon"></span>
                                    </button>
                                    <div class="product-card__badges-list">
                                    <?php if(($products->sale_price != "") && ($products->sale_price < $products->price)): ?>
                                       <div class="product-card__badge product-card__badge--new">
                                          <?php echo e(number_format((($products->price - $products->sale_price)/$products->price)* 100).'%'); ?>

                                       </div>
                                    <?php endif; ?>
                                    </div>
                                    <div class="product-card__image"><a href="<?php echo e(url($products->slug.'.html')); ?>"><img style="width: 180px; height: 180px;" src="<?php echo e(asset('app/product/'.$products->cover)); ?>" alt="<?php echo e($products->title); ?>"></a></div>
                                    <div class="product-card__info">
                                       <div class="product-card__name"><a href="<?php echo e(url($products->slug.'.html')); ?>"><?php echo e($products->title); ?></a></div>
                                       <div class="product-card__rating">
                                          <div class="rating">
                                             <div class="rating__body">
                                                <small style="color: #ffd333; font-size: 10px;">
                                                   <i class="fa fa-star"></i>
                                                   <i class="fa fa-star"></i>
                                                   <i class="fa fa-star"></i>
                                                   <i class="fa fa-star"></i>
                                                   <i class="fa fa-star-half"></i>
                                               </small>
                                             </div>
                                          </div>
                                          <div class="product-card__rating-legend">9 Reviews</div>
                                       </div>
                                       <ul class="product-card__features-list">
                                          <li>Speed: 750 RPM</li>
                                          <li>Power Source: Cordless-Electric</li>
                                          <li>Battery Cell Type: Lithium</li>
                                          <li>Voltage: 20 Volts</li>
                                          <li>Battery Capacity: 2 Ah</li>
                                       </ul>
                                    </div>
                                    <div class="product-card__actions">
                                       <div class="product-card__availability">Availability: <span class="text-success">In Stock</span></div>
                                       <div class="product-card__prices">
                                          <span style="text-decoration: line-through;"><small><?php echo e(config('shop.symbol').' '.number_format($products->price)); ?></small></span>
                                          <span class="float-right"><?php echo e(config('shop.symbol').' '.number_format($products->sale_price)); ?></span>
                                       </div>
                                       <div class="product-card__buttons">
                                          <form action="<?php echo e(route('cart.add', $products->id)); ?>" method= 'post'>
                                             <?php echo csrf_field(); ?>
                                             <input type="hidden" name="qty" value="1">
                                             <input type="hidden" name="price" value="<?php if($products->sale_price != ""): ?>
                                                <?php echo e($products->sale_price); ?>

                                             <?php else: ?> <?php echo e($products->price); ?> <?php endif; ?>">
                                             <button class="btn btn-primary product-card__addtocart" type="submit">Add To Cart</button> <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="submit">Add To Cart</button> 
                                          </form>
                                          <a class="btn btn-light product-card__wishlist" href="<?php echo e(route('add-to-wishlist',  $products->id)); ?>" title="Add to wishlist">
                                             <i style="width: 16px; height: 16px;" class="fas fa-heart"></i>
                                             <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                                          </a>
                                          <a class="btn btn-light product-card__compare" href="<?php echo e(route('add-to-compare', $products->id)); ?>" title="Add to compare">
                                             <i style="width: 16px; height: 16px;" class="fas fa-exchange-alt"></i>
                                             <span class="fake-svg-icon fake-svg-icon--compare-16"></span>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </div>
                  </div>
               </div>
            </div>
            <!-- .block-products-carousel / end --><?php /**PATH C:\xampp\htdocs\mianzi\resources\views/home/product/related.blade.php ENDPATH**/ ?>