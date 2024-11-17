<?php
    require_once("../function/bd.php"); 

    if (isset($_GET['id'])) {
        $id_product = $_GET['id'];

        $sql = "SELECT * FROM `products` WHERE `products`.`id` = $id_product";

        $sql_view = "SELECT 
                    `view_product`.`view` 
                FROM 
                    `products`
                LEFT JOIN 
                    `view_product`
                ON
                    `view_product`.`id_product` = `products`.`id`
                WHERE 
                    `view_product`.`id_product` = $id_product";

        // $result_view = $conn->query($sql_view);
        // $array_view = [];
        // while($row = $result_view->fetch_assoc()) {
        //     $array_view[] = $row;
        // }

        // print_r($array_view[0]);

        $result = $conn->query($sql);

        $product = [];

        while($row = $result->fetch_assoc()) {
            $product[] = $row;
        }
       
    }
?>