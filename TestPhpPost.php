<?php
$url ="http://192.168.11.92/HTTPStringParamsPost.php";
$fields = array("username" => "","password" => "123");
echo post_data($url, $fields, NULL);
function post_data($url, $fields, $optional_headers) {
    $postdata = http_build_query($fields);
    $params = array('http' => array(
            'method' => 'POST',
            'content' => $postdata
    ));
    if ($optional_headers !== null) {
        $params['http']['header'] = $optional_headers;
    }
    $ctx = stream_context_create($params);
    $fp = @fopen($url, 'rb', false, $ctx);
    if (!$fp) {
        throw new Exception("Problem with $url, $php_errormsg");
    }
    $response = @stream_get_contents($fp);
    if ($response === false) {
        throw new Exception("Problem reading data from $url, $php_errormsg");
    }
    return $response;
}

?>