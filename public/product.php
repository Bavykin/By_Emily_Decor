<?php include( 'header.php') ?>

<?php
    require_once 'app/include/database.php';
    require_once 'app/include/functions.php';
?>
<?php $id = $_GET['id'] ?>

<?php $item = get_mobiles_item ($link, $id); ?>
<?php $comments = get_comments ($link, $id); ?>

    <?php foreach ($item as $it) {?>

<section class="content">
    <div class="container">

        <div class="product-wrapper">
            <div class="product__img">
                <img src="<?php echo $it['img']; ?>" alt="<?php echo $it['title']; ?>">
            </div>
            <div class="description-wrapper">
                <div class="product__title">
                    <h1><?php echo $it['title']; ?></h1>
                </div>
                <div class="price">
                    <p>$<?php echo $it['price']; ?>.00 <span class="css_1rem">standard equipment</span></p><button class="animate__button custom__btn">Customize</button>
                </div>
                <div class="product__description">
                    <p><?php echo $it['description']; ?></p>
                </div>
                <div class="order">
                    <button class="animate__button" data-item_id="<?php echo $id; ?>">Order</button>
                </div>
            </div>
        </div>
    </div>
</section>

    <?php }?>

    <section class="comments">
        <div class="container">
            <div class="comments-wrapper">
                <div class="title">
                    <p>Comments</p>
                </div>

                <?php foreach ($comments as $key => $comment) { ?>

                    <div class="comments__wrapper" data-current="<?php echo $key + 1 ?>">

                        <div class="comments__img">
                            <img src=" <?php echo $comment['img']; ?>" alt="<?php echo $comment['author']; ?>">
                        </div>
                        <div class="comments__text">
                            <div class="comments__info">
                                <h2> <?php echo $comment['author']; ?></h2>
                                <h3> <?php echo $comment['added']; ?></h3>
                                <p class="comments__text_p">
                                    <?php echo $comment['text']; ?>
                                </p>
                            </div>
                            <div class="comments__btn-wrapper" data-current="<?php echo $key + 1 ?>">
                                <div class="comments__prev"></div>
                                <div class="comments__next"></div>
                                <div class="comments__count">
                            <span class="comments__current"
                                  data-current="<?php echo $key + 1 ?>"><?php echo $key + 1 ?></span>/
                                    <span class="comments__maximum"
                                          data-max="<?php echo count($comments) ?>"><?php echo count($comments) ?></span>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php } ?>

                <form class="comments__form">
                    <textarea name="comment" placeholder="Enter Your Message"></textarea>
                    <input type="text" name="name" placeholder="Enter Your Name" class="comments__input">
                    <input type="email" name="email" placeholder="Enter Your Email" class="comments__input">
                    <input type="file" name="photo" class="comments__input">

                </form>

                <button class="animate__button comment_btn js-comment-btn">Write Comment</button>

            </div>
    </section>
<?php include( 'footer.php'); ?>