<?php
    $say = htmlspecialchars($_POST["myname"]);
    $lesson = htmlspecialchars($_POST["clear"]);
    echo $say;
    echo $lesson;

    $json = file_get_contents('php://input');
    $data = json_decode($json);
    $data->Smth_new = "There";
    $data = json_encode($data);
    echo $data;
?>