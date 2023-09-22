<?php
session_start();
if(isset($_POST['titl']) && isset($_POST['sbTitl']) && isset($_POST['pub'])){
    $titl = $_POST['titl'];
    $sbTitl = $_POST['sbTitl'];
    $pub = $_POST['pub'];

    $titls = Array();
    $sbTitls = Array();
    $pubs = Array();

    if(isset($_SESSION['titls']) && isset($_SESSION['sbTitls']) && isset($_SESSION['pubs'])){
        $titls = $_SESSION['titls'];
        $sbTitls = $_SESSION['sbTitls'];
        $pubs = $_SESSION['pubs'];
    }

    array_push($titls, $titl);
    $_SESSION['titls'] = $titls;
    array_push($sbTitls, $sbTitl);
    $_SESSION['sbTitls'] = $sbTitls;
    array_push($pubs, $pub);
    $_SESSION['pubs'] = $pubs;
    header('location: blog.php');

}
?>