<?php

class PageController {
    public static function home() {
        require "view/welcome.php";
    }

    public static function not_found() {
        require "view/error.php";
    }
}