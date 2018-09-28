<?php

$link = mysqli_connect('localhost', 'root', '', 'by_emily_decor');

if(mysqli_connect_errno()) {
    echo 'Error (' . mysqli_connect_errno() . ')' . mysqli_connect_error();
    exit();
}