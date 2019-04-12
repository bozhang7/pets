
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pets</title>
</head>
    <h2>Friday 12 April</h2>
</body>
</html>
<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once('vendor/autoload.php');
$f3 = Base::instance();
$f3->set('DEBUG',3);
//Define a default route
$f3->route('GET /', function(){
    //echo '<h1>via GET Wed. 04-10</h1>';
    echo '<h1>Pets!</h1>';
    //display a view
    $view = new View();
    //echo $view->render('views/home2.html');

});
//Run fat free
$f3->run();