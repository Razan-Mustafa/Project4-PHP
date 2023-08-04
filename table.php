<?php
 session_start();
if (isset($_GET['name'])) {
    $newProduct = array(
        'name' => $_GET['name'],
        'price' => $_GET['price'],
        'details' => $_GET['details'],
        'ava' => $_GET['ava'],
        'dateInput' => $_GET['dateInput'],
        'photo' => $_GET['photo'],
    );

    if (!isset($_SESSION['products'])) {
        $_SESSION['products'] = array();
        header("location: Home.php" );
    }else{
        header("location: Home.php" );
    };

    $_SESSION['products'][] = $newProduct;
}

if (isset($_GET['del'])) {
    session_unset();
    $_SESSION['products'] = array();
}


if (isset($_GET['view'])) {
    header(" location: Product.php");
}
?>