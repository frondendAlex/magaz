<?php

    require_once("../../function/bd.php");

    $data = json_decode(file_get_contents('php://input'), true);
    
    var_dump($data);
    if (!empty($data['id'])) {
        // Извлекаем нужные значения
        $idCard = $data['id'];
        $view_product = $data['view'];

        $sql = "UPDATE `products` SET `view` = '$view_product' WHERE `products`.`id` = '$idCard'";

        $conn->query($sql);
    }
    

?>