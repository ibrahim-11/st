<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/rest/Db.php';


switch ($_SERVER["REQUEST_METHOD"]) {
    case 'GET':
        $_get = validate_request($_GET);
        //table obligatoire
        /* ... */
        $table =  $_get['table'];
        echo Db::select($table);
        break;
    case 'POST':
        $_post = validate_request($_POST);
        //table obligatoire
        /* ... */
        echo json_encode($_post);
        break;
    case 'PUT':
        // $_del = json_decode(file_get_contents('php://input'), true);
        //table et id obligatoire
        /* ... */
        $_put = validate_request($_PUT);
         echo json_encode($_put);
        break;
    case 'DELETE':
        $_del = json_decode(file_get_contents('php://input'), true);
        //table et id obligatoire
        /* ... */
        break;
}

function validate_request($request)
{
    /* ... */
    foreach ($request as $k => $v) {
        $request[$k] = htmlspecialchars(strip_tags(stripslashes(trim($v))));
    }
    return $request;
}





?>