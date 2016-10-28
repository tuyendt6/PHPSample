<?php

//request : http://localhost/HTTPStringParamsRequestTest.php?username=tuyen&&password=123
$userName = $_GET['username'];
$password = $_GET['password'];


if ($userName == '' || $password == '') {
    echo 'HTTP request string is not working';
    $json = array("status" => false, "msg" => "params is in valid");
    header("HTTP/1.1 400 Bad Request");
    response($json);
} else {
    header("HTTP/1.1 200 OK");
    $json = array("status" => TRUE, "msg" => "http get string testcase passed");
    response($json);
}

function response($json) {
    header('Content-type: application/json');
    echo json_encode($json);
}

?>
