<?php

class   Controller {
    function View($view, $data=null) {
        include_once "view/header.php";
        include_once "view/".$view.".php";
        include_once "view/footer.php";
    }
}