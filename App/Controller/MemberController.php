<?php

namespace Staditek\App\Controller;

use Staditek\App\Model\Member;
use Staditek\App\Core\View;

class MemberController
{
    public $akun;
    private static $model;

    public function __construct()
    {
        //$this->akun = new Akun();
        self::$model = new Member();
    }
    public function index()
    {
        echo 'Hello World';
    }
    public function view()
    {
        $Tampildata = self::$model->all();
        View::render('Librarian', $Tampildata);
    }
}
