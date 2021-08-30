<?php
include "includes/header.php";
include "includes/db.php";
?>
    <body>
        <!-- Navigation-->

       <?php include "includes/navigation.php"?>

        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Shop in style</h1>
                    <p class="lead fw-normal text-white-50 mb-0">This is the homepage</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">



<!--                    <div class="col mb-5">-->
<!--                        <div class="card h-100">-->
<!--                            &lt;!&ndash; Product image&ndash;&gt;-->
<!--                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />-->
<!--                            &lt;!&ndash; Product details&ndash;&gt;-->
<!--                            <div class="card-body p-4">-->
<!--                                <div class="text-center">-->
<!--                                    &lt;!&ndash; Product name&ndash;&gt;-->
<!--                                    <h5 class="fw-bolder">Fancy Product</h5>-->
<!--                                    &lt;!&ndash; Product price&ndash;&gt;-->
<!--                                    $40.00 - $80.00-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            &lt;!&ndash; Product actions&ndash;&gt;-->
<!--                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">-->
<!--                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->



                    <?php
                    $query = "SELECT * FROM items";
                    $select_all_items_query = mysqli_query($connection, $query);

                    while ($row = mysqli_fetch_assoc($select_all_items_query)) {
                        $item_name = $row['item_name'];
                        $image = $row['image'];
                        $price = $row['price'];

                        ?>


                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>




                            <!-- Product image-->
                            <img class="card-img-top" src="images/<?php echo $image;?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo $item_name ;?></h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$20.00</span>
                                    $<?php echo $price ;?>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>







                          <?php  } ?>





















                </div>
            </div>
        </section>
        <!-- Footer-->
        <?php include "includes/footer.php"; ?>
    </body>
</html>
