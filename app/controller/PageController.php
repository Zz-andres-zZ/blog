<?php

class PageController {
    public static function home() {
        require "views/welcome.php";
    }

    public static function comment() {
        require "views/comment.php";
    }

    public static function contact() {
        require "views/contact.php";
    }

    public static function not_found() {
        require "views/error.php";
    }
}