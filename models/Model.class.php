<?php
abstract class Model
{
    private static $bdd;

    protected static function setBDD()
    {
        self::$bdd = new PDO("mysql:host=localhost;dbname=shop;charset=utf8", "root", "");
    }

    protected function getBDD()
    {
        if (self::$bdd === NULL) {
            self::setBDD();
        }
        return self::$bdd;
    }
}
