<?php get_header() ?>

<?php if (have_posts()) : while(have_posts()) : the_post() ?>
<?php the_content();?>

<?php endwhile;
else:
echo "NO MORE JOLLIBEE FOR YOU";
endif; 
?>


<div class="cart">
    <div>
        <h3>Cart</h3>
        <div class="cart__wrapper">
        </div>
    </div>
    <ul>
        <li>Total</li>
        <li id="total"></li>
    </ul>
</div>












  
<?php get_footer() ?>