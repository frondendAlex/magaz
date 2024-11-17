<?php 
    require_once("../components/header.php"); 
    require_once("../function/get_product.php");
?>

    <div class="mt-5">
        <div class="container">
            <div class="row">

                <?php foreach($product as $item): ?>
                    <div class="col-12 col-lg-6">
                        <picture>
                            <source srcset="../<?= $item['image'] ?>">
                                <img src="../<?= $item['image'] ?>" class="card-img-top" alt="<?= $item['title'] ?>">
                        </picture>
                    </div>

                    <div class="col-12 col-lg-6">
                        <h2>Название: <span><?= $item['title'] ?></span></h2>
                        <h5>Характеристики:</h5>
                        <p><?= $item['description'] ?></p>
                        <p><?= number_format($item['price'], 0, 3) ?> ₽</p>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>

    


<?php require_once("../components/footer.php"); ?>