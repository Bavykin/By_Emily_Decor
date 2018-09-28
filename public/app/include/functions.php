<?php

function get_categories ($link) {
    $sql = "SELECT * FROM `categories`";

    $result = mysqli_query($link, $sql);

    $caregories = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $caregories;
};



function get_mobiles ($link) {
    $sql = "SELECT * FROM `mobiles`";

    $result = mysqli_query($link, $sql);

    $mobiles = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $mobiles;
};


function get_mobiles_item ($link, $id) {
    $sql = "SELECT * FROM `mobiles` WHERE `item_id` = $id";

    $result = mysqli_query($link, $sql);

    $item = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $item;
};


function set_cart ($link) {
    $sql = "INSERT INTO `cart`(`order_id`, `item_id`) VALUES (NULL, item_id)";

    $result = mysqli_query($link, $sql);

    $cart= mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $cart;
};

function get_comments ($link, $id) {
    $sql = "SELECT * FROM `comments` WHERE `product_id` = $id";

    $result = mysqli_query($link, $sql);

    $comments = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $comments;
};

