<?php
    require_once("bd.php");

    $products = "SELECT 
            `products`.`id`, `products`.`title`, `products`.`description`, `products`.`price`, `products`.`image`,  `products`.`view` AS `product_view`,
            SUM(`view_product`.`view`) AS `view`
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