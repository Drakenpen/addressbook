<?php
require_once 'inc/connection.php';
require_once 'inc/blade.php';
require_once 'views/header.blade.php';



 echo $blade->view()->make('addressbook')->render();

  ?>