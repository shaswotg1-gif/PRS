<!--  including header -->


<?php 

    include "../main/header.php";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Products</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <!-- herosection  -->

    <div class="herosection">

        <!-- herosection images -->

        <div class="herosection-images">

            <div class="herosectionImage ">

                <!-- images -->

                
                    <img src="../Photos/herosection1.jpg" alt="" class="image">
                
                


                <!--  all container -->
    
                <div class="container">

                    <!-- text on top of images -->
        
                        <div class="herosection-text-content">
                                <h1>Our Products</h1>
                                <p>High-quality plastic products for every need.<br>Durable, eco-conscious, and reliable solutions.</p>
                        </div>
        
                </div>
            </div>




        </div>

    </div>

    <!-- main section and products -->

    <div class="container">

        <section class="products-section">

            <!-- Category Filter Buttons -->
            <div class="filter-buttons">
                <button class="filter-btn active" data-category="all">All Products</button>
                <button class="filter-btn" data-category="water-tanks">Water Tanks</button>
                <button class="filter-btn" data-category="vertical-horizontal">Vertical & Horizontal</button>
                <button class="filter-btn" data-category="dustbins">Dustbins</button>
                <button class="filter-btn" data-category="flower-pots">Flower Pots</button>
            </div>

            <!-- Products Grid -->
            <div class="products-grid">

                <!-- WATER TANKS -->
                <div class="product-card" data-category="water-tanks">
                    <div class="product-image">
                        <img src="../Photos/Products/Watertank1.png" alt="300L Water Tank" class="product-img">
                    </div>
                    <h3>Water Tank - 300L</h3>
                    <p class="capacity">Capacity: 300 Liters</p>
                    <p class="description">Compact and durable water storage solution for residential use.</p>
                </div>

                <div class="product-card" data-category="water-tanks">
                    <div class="product-image">
                        <img src="../Photos/Products/Watertank1.png" alt="500L Water Tank" class="product-img">
                    </div>
                    <h3>Water Tank - 500L</h3>
                    <p class="capacity">Capacity: 500 Liters</p>
                    <p class="description">Reliable storage for medium-sized households and small businesses.</p>
                </div>

                <div class="product-card" data-category="water-tanks">
                    <div class="product-image">
                        <img src="../Photos/Products/Watertank1.png" alt="1000L Water Tank" class="product-img">
                    </div>
                    <h3>Water Tank - 1000L</h3>
                    <p class="capacity">Capacity: 1000 Liters</p>
                    <p class="description">Large-capacity tank ideal for commercial and residential applications.</p>
                </div>

                <div class="product-card" data-category="water-tanks">
                    <div class="product-image">
                        <img src="../Photos/Products/Watertank1.png" alt="2000L Water Tank" class="product-img">
                    </div>
                    <h3>Water Tank - 2000L</h3>
                    <p class="capacity">Capacity: 2000 Liters</p>
                    <p class="description">Heavy-duty industrial-grade tank for large-scale water storage.</p>
                </div>

                <!-- VERTICAL & HORIZONTAL TANKS -->
                <div class="product-card" data-category="vertical-horizontal">
                    <div class="product-image">
                        <div class="product-placeholder">Vertical Tank</div>
                    </div>
                    <h3>Vertical Water Tank - 1000L</h3>
                    <p class="capacity">Capacity: 1000 Liters</p>
                    <p class="description">Space-saving vertical design for optimal storage efficiency.</p>
                </div>

                <div class="product-card" data-category="vertical-horizontal">
                    <div class="product-image">
                        <img src="../Photos/Products/HorizontalTank1.png" alt="Horizontal Water Tank 1000L" class="product-img horizontal-tank-img">
                    </div>
                    <h3>Horizontal Water Tank - 1000L</h3>
                    <p class="capacity">Capacity: 1000 Liters</p>
                    <p class="description">Stable horizontal layout perfect for ground placement and underground installation.</p>
                </div>

                <!-- DUSTBINS -->
                <div class="product-card" data-category="dustbins">
                    <div class="product-image">
                        <div class="product-placeholder">Dustbin</div>
                    </div>
                    <h3>Dustbin - 60L</h3>
                    <p class="capacity">Capacity: 60 Liters</p>
                    <p class="description">Compact waste management solution for homes and offices.</p>
                </div>

                <div class="product-card" data-category="dustbins">
                    <div class="product-image">
                        <div class="product-placeholder">Dustbin</div>
                    </div>
                    <h3>Dustbin - 80L</h3>
                    <p class="capacity">Capacity: 80 Liters</p>
                    <p class="description">Medium-sized bin for residential and commercial waste disposal.</p>
                </div>

                <div class="product-card" data-category="dustbins">
                    <div class="product-image">
                        <div class="product-placeholder">Dustbin</div>
                    </div>
                    <h3>Dustbin - 100L</h3>
                    <p class="capacity">Capacity: 100 Liters</p>
                    <p class="description">Large-capacity bin ideal for businesses and public spaces.</p>
                </div>

                <!-- FLOWER POTS -->
                <div class="product-card" data-category="flower-pots">
                    <div class="product-image">
                        <div class="product-placeholder">Flower Pot</div>
                    </div>
                    <h3>Flower Pot - Standard</h3>
                    <p class="capacity">Available in Multiple Sizes</p>
                    <p class="description">Elegant and durable flower pots for indoor and outdoor gardening.</p>
                </div>

                <div class="product-card" data-category="flower-pots">
                    <div class="product-image">
                        <div class="product-placeholder">Flower Pot</div>
                    </div>
                    <h3>Flower Pot - Decorative</h3>
                    <p class="capacity">Available in Multiple Sizes</p>
                    <p class="description">Beautiful decorative pots to enhance your garden and home aesthetics.</p>
                </div>

            </div>

        </section>

    </div>

    <script src="../javaScript/script.js"></script>
    
</body>
</html>



<!-- inlcuding footer  -->

<?php

    include "../main/footer.php";

?>
