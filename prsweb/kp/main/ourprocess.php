<!--  including header -->


<?php 

    include "../main/header.php";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Process - Kankai Plastics</title>
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
                                <h1>Our Production Process</h1>
                                <p>Advanced Biaxial Rotomoulding Technology<br>Creating Superior Quality Plastic Products</p>
                        </div>
        
                </div>
            </div>




        </div>

    </div>

    <!-- main section -->

    <div class="container">

        <section class="process-section">

            <!-- Process Intro -->
            <div class="process-intro">
                <h2>Biaxial Rotomoulding Process</h2>
                <p>
                    We use advanced biaxial rotomoulding technology to create durable, high-quality plastic products. 
                    Our machines rotate on two axes simultaneously, ensuring uniform wall thickness and superior structural integrity.
                </p>
            </div>

            <!-- Process Steps -->
            <div class="process-steps">

                <!-- Step 1: Material Selection -->
                <div class="process-step step-1">
                    <div class="step-header" onclick="toggleStep(this)">
                        <div class="step-number">01</div>
                        <div class="step-content-header">
                            <h3>Material Selection</h3>
                            <span class="step-toggle">+</span>
                        </div>
                    </div>
                    <div class="step-details">
                        <p>High-quality plastic polymers (HDPE, LDPE, PP) are carefully selected and tested for purity and consistency. The plastic powder is ground to precise specifications and pre-dried to remove moisture that could affect product quality.</p>
                    </div>
                </div>

                <!-- Step 2: Mold Loading -->
                <div class="process-step step-2">
                    <div class="step-header" onclick="toggleStep(this)">
                        <div class="step-number">02</div>
                        <div class="step-content-header">
                            <h3>Mold Loading</h3>
                            <span class="step-toggle">+</span>
                        </div>
                    </div>
                    <div class="step-details">
                        <p>Precisely calculated amounts of plastic powder are loaded into custom-designed steel molds. Multiple molds can be loaded simultaneously to increase production efficiency. Molds are custom-manufactured to exact product specifications.</p>
                    </div>
                </div>

                <!-- Step 3: Biaxial Rotation -->
                <div class="process-step step-3">
                    <div class="step-header" onclick="toggleStep(this)">
                        <div class="step-number">03</div>
                        <div class="step-content-header">
                            <h3>Heating & Rotation</h3>
                            <span class="step-toggle">+</span>
                        </div>
                    </div>
                    <div class="step-details">
                        <p>Molds rotate simultaneously on two perpendicular axes while heating to 200-300°C. This biaxial rotation ensures plastic powder melts and distributes uniformly throughout the mold, coating every surface evenly and preventing uneven accumulation.</p>
                    </div>
                </div>

                <!-- Step 4: Cooling -->
                <div class="process-step step-4">
                    <div class="step-header" onclick="toggleStep(this)">
                        <div class="step-number">04</div>
                        <div class="step-content-header">
                            <h3>Cooling Phase</h3>
                            <span class="step-toggle">+</span>
                        </div>
                    </div>
                    <div class="step-details">
                        <p>Molds are moved to a cooling chamber where controlled cooling with air circulation and water spray solidifies the plastic gradually. Slow, controlled cooling is crucial for minimizing internal stress, preventing warping, and ensuring product durability.</p>
                    </div>
                </div>

                <!-- Step 5: Demolding -->
                <div class="process-step step-5">
                    <div class="step-header" onclick="toggleStep(this)">
                        <div class="step-number">05</div>
                        <div class="step-content-header">
                            <h3>Demolding</h3>
                            <span class="step-toggle">+</span>
                        </div>
                    </div>
                    <div class="step-details">
                        <p>Once fully cooled and solidified, molds are opened and finished products are carefully removed. Products retain the exact shape and specifications of the mold. Molds are then inspected, cleaned, and prepared for the next production cycle.</p>
                    </div>
                </div>

                <!-- Step 6: Quality Control -->
                <div class="process-step step-6">
                    <div class="step-header" onclick="toggleStep(this)">
                        <div class="step-number">06</div>
                        <div class="step-content-header">
                            <h3>Quality Inspection</h3>
                            <span class="step-toggle">+</span>
                        </div>
                    </div>
                    <div class="step-details">
                        <p>Each product undergoes rigorous quality control checks including structural integrity, dimensional accuracy, surface finish, and UV resistance. Products are tested for leak-proof design, durability under stress, and impact resistance. Only products meeting strict standards proceed.</p>
                    </div>
                </div>

                <!-- Step 7: Finishing -->
                <div class="process-step step-7">
                    <div class="step-header" onclick="toggleStep(this)">
                        <div class="step-number">07</div>
                        <div class="step-content-header">
                            <h3>Packaging</h3>
                            <span class="step-toggle">+</span>
                        </div>
                    </div>
                    <div class="step-details">
                        <p>Products are trimmed, edge-smoothed, and drilling performed as per specifications. They are thoroughly cleaned and carefully packaged. All products are labeled with quality certifications and manufacturing details for safe transportation.</p>
                    </div>
                </div>

            </div>

            <!-- Advantages Section -->
            <div class="advantages-section">
                <h2>Why Biaxial Rotomoulding?</h2>
                
                <div class="advantages-grid">
                    <div class="advantage-card">
                        <div class="advantage-icon">🎯</div>
                        <h4>Uniform Wall Thickness</h4>
                        <p>The biaxial rotation ensures consistent wall thickness throughout the product, eliminating weak points.</p>
                    </div>

                    <div class="advantage-card">
                        <div class="advantage-icon">💪</div>
                        <h4>Superior Strength</h4>
                        <p>Products are stronger and more durable due to controlled stress distribution and material flow.</p>
                    </div>

                    <div class="advantage-card">
                        <div class="advantage-icon">🔒</div>
                        <h4>Leak-Proof Design</h4>
                        <p>The seamless molding process creates products with zero leakage, perfect for water storage.</p>
                    </div>

                    <div class="advantage-card">
                        <div class="advantage-icon">🌡️</div>
                        <h4>Temperature Resistant</h4>
                        <p>Products withstand extreme temperature variations without cracking or deforming.</p>
                    </div>

                    <div class="advantage-card">
                        <div class="advantage-icon">☀️</div>
                        <h4>UV Protection</h4>
                        <p>Additives and quality materials protect products from UV degradation and extend lifespan.</p>
                    </div>

                    <div class="advantage-card">
                        <div class="advantage-icon">♻️</div>
                        <h4>Eco-Friendly</h4>
                        <p>Minimal waste production, recyclable materials, and energy-efficient process.</p>
                    </div>
                </div>
            </div>

            <!-- Technology Specs -->
            <div class="technology-specs">
                <h2>Machine Specifications</h2>
                
                <div class="specs-grid">
                    <div class="spec-item">
                        <h4>🔄 Biaxial Rotation</h4>
                        <p>Dual-axis rotation for perfect weight distribution</p>
                    </div>

                    <div class="spec-item">
                        <h4>🌡️ Temperature</h4>
                        <p>Precise heating at 200-300°C with ±5°C accuracy</p>
                    </div>

                    <div class="spec-item">
                        <h4>⏱️ Cycle Time</h4>
                        <p>15-45 minutes per cycle</p>
                    </div>

                    <div class="spec-item">
                        <h4>📏 Capacity</h4>
                        <p>Molds up to 2000L capacity</p>
                    </div>

                    <div class="spec-item">
                        <h4>🎨 Materials</h4>
                        <p>HDPE, LDPE, PP, and specialty polymers</p>
                    </div>

                    <div class="spec-item">
                        <h4>✅ Certified</h4>
                        <p>ISO certified with continuous monitoring</p>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="process-cta">
                <h2>Experience Superior Quality</h2>
                <p>Our biaxial rotomoulding process guarantees products that exceed expectations in durability, functionality, and reliability.</p>
                <div class="cta-buttons">
                    <a href="products.php" class="btn process-cta-btn">View Products</a>
                    <a href="contact.php" class="btn process-cta-btn-secondary">Get in Touch</a>
                </div>
            </div>

        </section>

    </div>

    <script src="../javaScript/script.js"></script>
    
</body>
</html>



<!-- including footer  -->

<?php

    include "../main/footer.php";

?>
