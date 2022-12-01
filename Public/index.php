<?php

use Staditek\App\Controller\PetugasController;
use Staditek\App\Controller\LibrarianController;
use Staditek\App\Controller\MemberController;
use Staditek\App\Core\Router;
session_start();

require_once __DIR__ . '/../vendor/autoload.php';
// Router::addRoute('GET', '/', MemberController::class, 'index', []);
// Router::addRoute('GET', '/view', MemberController::class, 'view', []);
Router::addRoute('GET', '/', LibrarianController::class, 'index', []);
Router::addRoute('GET', '/view', LibrarianController::class, 'view', []);
//Router::addRoute('GET', '/login', PetugasController::class, 'login', []);
Router::addRoute('GET', '/login', PetugasController::class, 'login', []);
Router::addRoute('POST', '/loginuser', PetugasController::class, 'postlogin', []);
Router::run();