<?php

function insert_all($conn, $table_name, $post)
{
    $key = array(); //for storing all the key of the post request
    $data = array(); //for storing the all data of the post request
    foreach ($post as $p => $value) {
        array_push($key, '`' . $p . '`');
    }
    foreach ($post as $p) {
        array_push($data, "'" . $p . "'");
    }
    print_r($key);
    $query = "INSERT INTO `$table_name`(" . implode(',', $key) . ") VALUES (" . implode(',', $data) . ")";
    if (mysqli_query($conn, $query)) {
        return "success";
    } else {
        return $conn->error;
    }
}
