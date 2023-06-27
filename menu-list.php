<?php
/** Template Name: Menu List */
?>

<?php get_header ()?>

<?php if (have_posts()) : while(have_posts()) :the_post() ?>
<?php $category = get_field('category'); ?>
<section class="single__header text--center py--2">
      <div class="wrapper">
        <h1 class="clr--accent"><?php the_title() ?></h1>
        <?php the_content();?>
      </div>
    </section>

    <?php endwhile;
            else : 
                echo "NO MORE POST";
            endif; 

            wp_reset_postdata();         
            ?>

    <section class="list">
      <div class="container">
        <div class="list__grid">
        <?php $menu = new WP_Query(array(
            'post_type' => 'foods',
            'meta_query' => array(
                array(
                    'key' => 'category',
                    'value' => $category,
                    'compare' => 'LIKE',
                )
            )

          )) ?>
            <?php if ($menu->have_posts()) : while($menu->have_posts()) : $menu->the_post() ?>
          <div class="card">
            <div class="card__wrapper">
            <img src="<?php echo get_field('image') ?>" alt="" />

              <div class="grid bg--accent clr--light p--2">
                <div class="card__content">
                <ul class = "rating flex">
            <?php $rating = get_field('rating')?>

            <?php for($x = 1; $x <= $rating; $x++){ ?>
                <li><i class= "fas fa-star"></i></li>
              <?php  }?>
            </ul>
                  <h4>
                  <?php the_title(); ?>
                  </h4>
                </div>

                <div class="card__price">
                <p>Start at <br /><span> <?php the_field('price')?> </span></p>
                </div>
              </div>
            </div>
          </div>
          <?php endwhile;
            else : 
                echo "NO MORE JOLLIBEE FOR YOU";
            endif; 

            wp_reset_postdata();         
            ?>
          <!-- <div class="card">
            <div class="card__wrapper">
              <img src="./images/hamburger.png" alt="" />

              <div class="grid bg--accent clr--light p--2">
                <div class="card__content">
                  <ul class="flex">
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                  </ul>
                  <h4>
                    8 - pc. Chickenjoy Bucket w/ Jolly Spaghetti Family Pan
                  </h4>
                </div>

                <div class="card__price">
                  <p>
                    Start at <br />
                    <span>850</span>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card__wrapper">
              <img src="./images/hamburger.png" alt="" />

              <div class="grid bg--accent clr--light p--2">
                <div class="card__content">
                  <ul class="flex">
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                  </ul>
                  <h4>
                    8 - pc. Chickenjoy Bucket w/ Jolly Spaghetti Family Pan
                  </h4>
                </div>

                <div class="card__price">
                  <p>
                    Start at <br />
                    <span>850</span>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card__wrapper">
              <img src="./images/hamburger.png" alt="" />

              <div class="grid bg--accent clr--light p--2">
                <div class="card__content">
                  <ul class="flex">
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                  </ul>
                  <h4>
                    8 - pc. Chickenjoy Bucket w/ Jolly Spaghetti Family Pan
                  </h4>
                </div>

                <div class="card__price">
                  <p>
                    Start at <br />
                    <span>850</span>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card__wrapper">
              <img src="./images/hamburger.png" alt="" />

              <div class="grid bg--accent clr--light p--2">
                <div class="card__content">
                  <ul class="flex">
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                  </ul>
                  <h4>
                    8 - pc. Chickenjoy Bucket w/ Jolly Spaghetti Family Pan
                  </h4>
                </div>

                <div class="card__price">
                  <p>
                    Start at <br />
                    <span>850</span>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card__wrapper">
              <img src="./images/hamburger.png" alt="" />

              <div class="grid bg--accent clr--light p--2">
                <div class="card__content">
                  <ul class="flex">
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                  </ul>
                  <h4>
                    8 - pc. Chickenjoy Bucket w/ Jolly Spaghetti Family Pan
                  </h4>
                </div>

                <div class="card__price">
                  <p>
                    Start at <br />
                    <span>850</span>
                  </p>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </section>

<?php get_footer ()?>