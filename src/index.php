<?php header('Access-Control-Allow-Origin: *'); ?>
<?php header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept"); ?>
<?php header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT'); ?>
<?php

$postdata = file_get_contents("php://input");

if(isset($postdata) && !empty($postdata))
{
  // Extract the data.
  echo 'aqui';
  $request = json_decode($postdata);
    print_r($request);
}


    if($_SERVER['REQUEST_METHOD'] == 'PUT') {
        echo "this is a put request\n";
        parse_str(file_get_contents("php://input"),$post_vars);
        print_r(json_decode($post_vars));
    } else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo 'sadf';
        print_r($_POST);
        print_r($_REQUEST);
        parse_str(file_get_contents("php://input"),$post_vars);
        print_r(json_decode($post_vars));
    }
    $array = [
        [ 'id' => 11, 'name' => 'Di' ],
        [ 'id' => 12, 'name' => 'Rodo' ],
    ];

    echo json_encode($array);

?>