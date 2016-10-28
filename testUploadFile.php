<?php




if (is_uploaded_file($_FILES['bill']['tmp_name'])) {
    $uploads_dir = './';
    $tmp_name = $_FILES['bill']['tmp_name'];
    $pic_name = $_FILES['bill']['name'];
    move_uploaded_file($tmp_name, $uploads_dir . $pic_name);
    $json = array("status" => TRUE, "msg" => "upload success");
    response($json);
} else {
    header('HTTP/1.1 400 Bad Request', true, 400);
}

function response($json) {
    header('Content-type: application/json');
    echo json_encode($json);
}
?>

