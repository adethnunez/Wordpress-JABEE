<?php get_header() ?>

<section class="food py--3">
      <div class="container">
        <div class="food__header flex justify--between align--center">
          <h2>Best Seller</h2>
          <span></span>
          <a href="<?php echo site_url('/bestseller')?>">View All</a>
        </div>
      </div>
      <div class="container with--overflow">
        <div class="food__wrapper">
          <div class="food__slider" id="bestseller">


          <?php $BestSeller = new WP_Query(array(
            'post_type' => 'foods',
            'meta_query' => array(
                array(
                    'key' => 'category',
                    'value' => 'Best Seller',
                    'compare' => 'LIKE',
                )
            )

          )) ?>
            <?php if ($BestSeller->have_posts()) : while($BestSeller->have_posts()) : $BestSeller->the_post() ?>
            <div class="food__slider__wrapper">
              <div class="inner">
                <figure>
                  <img src="<?php echo get_field('image') ?>" alt="" />
                </figure>
                <div class="content bg--accent text--center clr--light">

                    <a href="<?php the_permalink()?>">
                  <h4>

                    <?php the_title(); ?></a>
                  </h4>
                  </a>
                  
                </div>
                <div class="price">
                  <p>Start at <br /><span> <?php the_field('price')?> </span></p>
                  <!-- <p><span> <?php the_field('category')?></p> -->
                </div>
              </div>
              <button class="btnAddtoCart">Add to Cart</button>
            </div>

            <?php endwhile;
            else : 
                echo "NO MORE JOLLIBEE FOR YOU";
            endif; 

            wp_reset_postdata();         
            ?>
            </section>


<section class="food py--3">
      <div class="container">
        <div class="food__header flex justify--between align--center">
          <h2>Chicken Joy</h2>
          <span></span>
          <a href="<?php echo site_url('/Chicken Joy')?>">View All</a>
        </div>
      </div>
      <div class="container with--overflow">
        <div class="food__wrapper">
          <div class="food__slider" id="chickenjoy">


          <?php $chickenjoy = new WP_Query(array(
            'post_type' => 'foods',
            'meta_query' => array(
                array(
                    'key' => 'category',
                    'value' => 'ChickenJoy',
                    'compare' => 'LIKE',
                )
            )

          )) ?>
            <?php if ($chickenjoy->have_posts()) : while($chickenjoy->have_posts()) : $chickenjoy->the_post() ?>
            <div class="food__slider__wrapper">
              <div class="inner">
                <figure>
                  <img src="<?php echo get_field('image') ?>" alt="" />
                </figure>
                <div class="content bg--accent text--center clr--light">

                    <a href="<?php the_permalink()?>">
                    <h4>
                  <?php the_title(); ?>
                  </h4>
                  </a>

                </div>
                <div class="price">
                  <p>Start at <br /><span> <?php the_field('price')?> </span></p>
                  <!-- <p><span> <?php the_field('category')?></p> -->
                </div>
              </div>
            </div>

            <?php endwhile;
            else : 
                echo "NO MORE JOLLIBEE FOR YOU";
            endif; 

            wp_reset_postdata();         
            ?>
            </section>

<section class="food py--3">
      <div class="container">
        <div class="food__header flex justify--between align--center">
          <h2>Yum Burger</h2>
          <span></span>
          <a href="#">View All</a>
        </div>
      </div>
      <div class="container with--overflow">
        <div class="food__wrapper">
          <div class="food__slider" id="burger">


          <?php $yumburger = new WP_Query(array(
            'post_type' => 'foods',
            'meta_query' => array(
                array(
                    'key' => 'category',
                    'value' => 'Yum Burger',
                    'compare' => 'LIKE',
                )
            )

          )) ?>
            <?php if ($yumburger->have_posts()) : while($yumburger->have_posts()) : $yumburger->the_post() ?>
            <div class="food__slider__wrapper">
              <div class="inner">
                <figure>
                  <img src="<?php echo get_field('image') ?>" alt="" />
                </figure>
                <div class="content bg--accent text--center clr--light">

                    <a href="<?php the_permalink()?>">
                    <h4>
                  <?php the_title(); ?>
                  </h4>
                  </a>

                </div>
                <div class="price">
                  <p>Start at <br /><span> <?php the_field('price')?> </span></p>
                  <!-- <p><span> <?php the_field('category')?></p> -->
                </div>
              </div>
            </div>

            <?php endwhile;
            else : 
                echo "NO MORE JOLLIBEE FOR YOU";
            endif; 

            wp_reset_postdata();         
            ?>
            </section>


<section class="food py--3">
      <div class="container">
        <div class="food__header flex justify--between align--center">
          <h2>Breakfast</h2>
          <span></span>
          <a href="#">View All</a>
        </div>
      </div>
      <div class="container with--overflow">
        <div class="food__wrapper">
          <div class="food__slider" id="breakfast">


          <?php $breakfast = new WP_Query(array(
            'post_type' => 'foods',
            'meta_query' => array(
                array(
                    'key' => 'category',
                    'value' => 'Break Fast',
                    'compare' => 'LIKE',
                )
            )

          )) ?>
            <?php if ($breakfast->have_posts()) : while($breakfast->have_posts()) : $breakfast->the_post() ?>
            <div class="food__slider__wrapper">
              <div class="inner">
                <figure>
                  <img src="<?php echo get_field('image') ?>" alt="" />
                </figure>
                <div class="content bg--accent text--center clr--light">

                    <a href="<?php the_permalink()?>">
                    <h4>
                  <?php the_title(); ?>
                  </h4>
                  </a>

                </div>
                <div class="price">
                  <p>Start at <br /><span> <?php the_field('price')?> </span></p>
                  <!-- <p><span> <?php the_field('category')?></p> -->
                </div>
              </div>
            </div>

            <?php endwhile;
            else : 
                echo "NO MORE JOLLIBEE FOR YOU";
            endif; 

            wp_reset_postdata();         
            ?>
            </section>



          <div class="cart">
            <h3>Cart</h3>
            <button class="cart_close"><i class= "fas fa-times"></i></button>
            <div class="cart__wrapper">
          </div>
      </div>





















          <!-- </div>
        </div>
      </div>
    </section> -->
  
<?php get_footer() ?>