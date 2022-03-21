<?php

session_start();
session_destroy();

if(!isset($_SESSION['kadi'])){
    die('Giriş yetkiniz yoktur');
}
?>