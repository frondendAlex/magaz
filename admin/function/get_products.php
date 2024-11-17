<?php
    require_once("../function/bd.php");

    $products = "SELECT 
            `products`.`id`, `products`.`title`, `products`.`description`, `products`.`price`, `products`.`sale`, `products`.`view` AS `view_product`,
            SUM(`view_product`.`view`) AS `view_table`
        FROM 
            `products`
        LEFT JOIN 
            `view_product` ON `view_product`.`id_product` = `products`.`id`
        GROUP BY
            `products`.`id`";

    $result = $conn->query($products);

    $products_array = [];

    while ($row = $result->fetch_assoc()) {
        $products_array[] = $row;
    }
?>