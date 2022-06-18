<?php

include('config.php');

session_start();

function logout(){

    if(isset($_SESSION['name'])){
    session_destroy();
    header('Location: log-in-form.php');

} else {

    header('Location: index.php');
}

}
logout();
