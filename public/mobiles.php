<?php include( 'header.php') ?>

<?php
    require_once 'app/include/database.php';
    require_once 'app/include/functions.php';
?>

    <section class="content">
        <div class="container">

            <?php $mobiles = get_mobiles ($link); ?>

            <div class="filters">
                <ul class="filters_ul">
                    <li class="filters_li active">all <span><sup>(<?php echo count($mobiles); ?>)</sup></span></li>
                    <li class="filters_li">number of toys <span><sub>(20)</sub></span></li>
                    <li class="filters_li">price <span><sub>(20)</sub></span></li>
                    <li class="filters_li">preparation time <span><sub>(20)</sub></span></li>
                </ul>
            </div>


            <?php foreach ($mobiles as $mobile) { ?>

                <a class="item" href="<?php echo 'product.php?id=' . $mobile['item_id'] ?>">
                    <div class="item__content">
                        <img src="<?php echo $mobile['img'] ?>" alt="<?php echo $mobile['title'] ?>" class="item__img">
                    </div>
                    <p class="item__title"><?php echo $mobile['title'] ?></p>
                </a>

            <?php } ?>

        </div>
    </section>

<?php include( 'footer.php') ?>