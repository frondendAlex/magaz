<?php require_once("components/header.php"); ?>
<?php require_once("function/products.php"); ?>

<?php
    // echo "<pre>";       
    // print_r ();    
    // echo "</pre>";           
    
    
?>
    

    <div class="mt-5">
        <div class="container">

            <a class="btn btn-primary" href="/admin/index.php">Таблица</a>

            <div class="row">
                <?php foreach($products_array as $product): ?>
                    
                    <?php if ($product['product_view'] != 0): ?>

                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-3 h-100 card__item">
                            <div class="card" style="width: 100%;">
                                <picture>
                                    <source srcset="<?= $product["image"] ?>">
                                    <img src="<?= $product["image"] ?>" class="card-img-top" alt="Авто">
                                </picture>
                            
                                <div class="card-body">
                                    <h5 class="card-title"><?= $product["title"] ?></h5>
                                    <p class="card-text"><?= $product["description"] ?></p>
                                    <p><?= $product["price"] ?> ₽</p>
                                    <a href="/page/product.php?id=<?= $product['id'] ?>" class="btn btn-primary">Смотреть</a>
                                </div>

                                <div class="card__view">
                                    <p>Просмотров: <span><?= $product["view"] ?></span></p>
                                </div>
                            </div>
                        </div>

                    <?php endif; ?>
                    
                <?php endforeach; ?>
                
            </div>
        </div>
    </div>






<?php require_once("components/footer.php"); ?>