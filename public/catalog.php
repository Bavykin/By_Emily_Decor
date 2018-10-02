<?php include( 'header.php') ?>

<?php
    require_once 'app/include/database.php';
    require_once 'app/include/functions.php';
?>


<section class="content">
    <div class="container">
        <div class="flex-wrapper">
            <?php $caregories = get_categories ($link); ?>
            <?php foreach ($caregories as $category) { ?>

                <a class="item" href="<?php echo $category['href'] ?>">
                    <div class="item__content">
                        <img src="<?php echo $category['img'] ?>" alt="<?php echo $category['title'] ?>" class="item__img">
                    </div>
                    <p class="item__title"><?php echo $category['title'] ?></p>
                </a>

            <?php } ?>
        </div>
    </div>
</section>

<?php include( 'footer.php') ?>