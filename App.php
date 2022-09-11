<?php

require_once __DIR__ . "/Entity/Todolist.php";
require_once __DIR__ . '/Helper/InputHelper.php';
require_once __DIR__ . "/Repository/TodolistRepository.php";
require_once __DIR__ . "/Service/TodolistService.php";
require_once __DIR__ . "/View/TodolistView.php";


use \Repository\TodolistRepostoryImpl;
use \View\Todolistview;
use \Service\TodolistServiceImpl;

echo "APLIKASI TODOLIST OOP";

$todolistRepo = new TodolistRepostoryImpl();
$todolistServ = new TodolistServiceImpl($todolistRepo);
$todolistView = new Todolistview($todolistServ);


$todolistView->showTodolist();