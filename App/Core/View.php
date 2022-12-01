<?php

namespace Staditek\App\Core;

class View
{
    public static function render(string $view, $data)
    {
        require_once __DIR__ . '/../View/template/navbar.php';
        require_once __DIR__ . '/../View/' . $view . '.php';
        require_once __DIR__ . '/../View/template/footer.php';
    }
    public static function renderlogin(string $view, $data)
    {
        //require_once __DIR__ . '/../View/header.php';
        require_once __DIR__ . '/../View/' . $view . '.php';
        //require_once __DIR__ . '/../View/footer.php';
    }
    public static function renderview(string $view, $data)
    {
        require_once __DIR__ . '/../View/template/navbar.php';
        require_once __DIR__ . '/../View/' . $view . '.php';
        require_once __DIR__ . '/../View/template/footer.php';
    }
}
