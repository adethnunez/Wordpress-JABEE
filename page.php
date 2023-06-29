<?php get_header ()?>



<!-- <section class = "full__width">
    <div class="container">
        <div class="full__width__wrapper">
            <p>Jollibee is the largest fast food chain brand in the Philippines, operating a network of more than 1,500 stores in 17 countries. A dominant market leader in the Philippines, Jollibee enjoys the lion’s share of the local market that is more than all the other multinational fast food brands in PH combined. With a strict adherence to the highest standards of food quality, service and cleanliness, Jollibee serves great-tasting, high-quality and affordable food products to include its superior-tasting Chickenjoy, mouth-watering Yumburger, and deliciously satisfying Jolly Spaghetti among other delicious products.</p>
            <p>Jollibee has embarked on an aggressive international expansion plan, with more than 270 international branches in the United States, Canada, Hong Kong, Macau, Brunei, Vietnam, Singapore, Malaysia, Saudi Arabia, United Arab Emirates, Qatar, Oman, Kuwait, Bahrain, Italy, Spain, and in the United Kingdom.</p>
        </div>
    </div>
</section> -->

<!-- <section class ="two__cols ">
    <div class="container">
        <div class="two__cols__grid">
            <div class="col__1">
                <img src="https://queen.jollibee.com.ph/2022/05/8Z1R62ze-About-Jollibee-BGC-Store-min.jpg" alt="">
            </div>
            <div class="col__2">
                <h3>Our Business</h3>
                <p>Jollibee Foods Corporation’s (“JFC” or the “Company”) core business is the development, operation and franchising of its quick-service restaurant brands. It offers a wide variety of affordable and delicious dishes and great tasting food prepared to satisfy customers of all ages and from all walks of life.</p>
                <p>Food quality, service, price-value relationship, store location and ambiance, and efficient operations continue to be critical elements of the Company’s success in the quick-service restaurant industry.</p>
            </div>
        </div>
    </div>
</section> -->

<!-- <section class ="two__cols row__reverse">
    <div class="container">
        <div class="two__cols__grid">
            <div class="col__1">
                <img src="https://queen.jollibee.com.ph/2022/05/FSC-STANDARD-min-scaled-1.jpg" alt="">
            </div>
            <div class="col__2">
                <h3>Our Food, Service, and Cleanliness (FSC) Standard</h3>
                <p>Jollibee’s phenomenal growth owes much to its strict and committed adherence to high standards as symbolized by “F.S.C.”: Food (F) served to the public must meet the company’s excellence standards or it will not be served at all; the Service (S) must be fast and courteous; Cleanliness (C), from kitchen to utensils, must always be maintained. Jollibee is proud of its employees who carry out their jobs.</p>
            </div>
        </div>
    </div>
</section> -->


<!-- <section class="cta">
    <div class="container">
        <div class="cta__wrapper">
        <h3>Have a question? </h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore vitae ipsam dolorum nemo dicta modi dignissimos nam fuga sed cum!</p>
        <button id= "btnModal">Contact</button>
        </div>
    </div>

</section> -->



<?php if (have_posts()) : while(have_posts()) :the_post() ?>

<section class="page__hero">
<h1><?php the_title()?></h1>
</section>

<div class="full__width">
    <div class="container">
    <?php the_content(); ?>
    </div>
</div>

<?php
endwhile;
            else : 
                echo "NO MORE POST";
            endif;        
?>


<div class="modal">
    <div class="backdrop"></div>
        <div class="modal__main">
            <div class="modal__header">
                <h2>Contact US</h2>
                <Button id="btnClose"><i class= "fas fa-times"></i></Button>
            </div>
            <div class="modal__body">
                <?php echo do_shortcode('[contact-form-7 id="77" title="Contact form 1"]')?>

            </div>
        </div>
</div>

<?php get_footer ()?>