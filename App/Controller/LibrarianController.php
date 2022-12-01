<?php

namespace Staditek\App\Controller;

use Staditek\App\Model\Librarian;
use Staditek\App\Core\View;

class LibrarianController
{
    public $akun;
    private static $model;

    public function __construct()
    {
        //$this->akun = new Akun();
        self::$model = new Librarian();
    }
    public function index()
    {
        echo 'Hello World';
    }
    public function login()
    {
        //echo 'Tambah';

        $Tampildata = self::$model->all();
        View::renderlogin('login', $Tampildata);
    }
    public function view()
    {
        $Tampildata = self::$model->all();
        View::renderview('Librarian', $Tampildata);
    }

    // public function add()
    // {
    //     $Tampildata = self::$model->add();
    //     View::renderadd('Data', $Tampildata);
    // }
}
