<!--  including header -->


<?php 

    include "../main/header.php";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Kankai Plastics</title>
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
                                <h1>Get In Touch</h1>
                                <p>We'd love to hear from you. Reach out to us anytime.<br>Let's discuss your plastic product needs.</p>
                        </div>
        
                </div>
            </div>




        </div>

    </div>

    <!-- main section -->

    <div class="container">

        <section class="contact-section">

            <!-- Contact Info Cards -->
            <div class="contact-info-grid">

                <!-- Phone -->
                <div class="contact-info-card">
                    <div class="info-icon">📞</div>
                    <h3>Phone</h3>
                    <p>+977-1-XXXXXXX</p>
                    <p class="info-label">Monday - Friday, 9AM - 6PM</p>
                </div>

                <!-- Email -->
                <div class="contact-info-card">
                    <div class="info-icon">✉️</div>
                    <h3>Email</h3>
                    <p><a href="mailto:info@kankaiplastics.com">info@kankaiplastics.com</a></p>
                    <p class="info-label">Response within 24 hours</p>
                </div>

                <!-- Location -->
                <div class="contact-info-card">
                    <div class="info-icon">📍</div>
                    <h3>Location</h3>
                    <p>Kankai Plastics Ltd.</p>
                    <p class="info-label">Kathmandu, Nepal</p>
                </div>

            </div>

            <!-- Contact Form and Info -->
            <div class="contact-container">

                <!-- Contact Form -->
                <div class="contact-form-wrapper">
                    <h2>Send us a Message</h2>
                    <form class="contact-form" method="POST" action="">
                        
                        <div class="form-group">
                            <label for="name">Full Name *</label>
                            <input type="text" id="name" name="name" required placeholder="Your full name">
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" required placeholder="your@email.com">
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" placeholder="+977-XXXXXXXXX">
                        </div>

                        <div class="form-group">
                            <label for="subject">Subject *</label>
                            <input type="text" id="subject" name="subject" required placeholder="What is this about?">
                        </div>

                        <div class="form-group">
                            <label for="product">Product Interest</label>
                            <select id="product" name="product">
                                <option value="">Select a product category</option>
                                <option value="water-tanks">Water Tanks</option>
                                <option value="vertical-horizontal">Vertical & Horizontal Tanks</option>
                                <option value="dustbins">Dustbins</option>
                                <option value="flower-pots">Flower Pots</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" rows="6" required placeholder="Tell us more about your inquiry..."></textarea>
                        </div>

                        <button type="submit" class="submit-btn">Send Message</button>

                    </form>
                </div>

                <!-- Why Contact Us -->
                <div class="contact-benefits">
                    <h2>Why Contact Us?</h2>
                    
                    <div class="benefit-item">
                        <div class="benefit-icon">🎯</div>
                        <h3>Expert Guidance</h3>
                        <p>Our team provides personalized recommendations based on your specific needs.</p>
                    </div>

                    <div class="benefit-item">
                        <div class="benefit-icon">⚡</div>
                        <h3>Quick Response</h3>
                        <p>We respond to inquiries promptly, ensuring you get answers fast.</p>
                    </div>

                    <div class="benefit-item">
                        <div class="benefit-icon">🛠️</div>
                        <h3>Custom Solutions</h3>
                        <p>We can discuss bulk orders and custom product modifications.</p>
                    </div>

                    <div class="benefit-item">
                        <div class="benefit-icon">💼</div>
                        <h3>Business Support</h3>
                        <p>Dedicated support for B2B partnerships and wholesale inquiries.</p>
                    </div>

                    <div class="benefit-item">
                        <div class="benefit-icon">✨</div>
                        <h3>Quality Assurance</h3>
                        <p>Learn about our rigorous quality standards and guarantees.</p>
                    </div>

                    <div class="benefit-item">
                        <div class="benefit-icon">🌍</div>
                        <h3>Wide Availability</h3>
                        <p>Discuss delivery options and availability in your region.</p>
                    </div>

                </div>

            </div>

            <!-- FAQ Section -->
            <div class="faq-section">
                <h2>Frequently Asked Questions</h2>
                
                <div class="faq-container">

                    <div class="faq-item">
                        <div class="faq-header">
                            <h4>What are your bulk order discounts?</h4>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-content">
                            <p>We offer competitive bulk discounts based on order quantity. Contact our sales team for a customized quote.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-header">
                            <h4>Do you offer delivery services?</h4>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-content">
                            <p>Yes, we provide delivery services across Nepal. Delivery charges depend on location and order size.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-header">
                            <h4>What is your warranty policy?</h4>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-content">
                            <p>All Kankai products come with a comprehensive warranty. Contact us for detailed warranty information on specific products.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-header">
                            <h4>Can I customize products to my specifications?</h4>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-content">
                            <p>Yes, we can accommodate custom requests for large orders. Discuss your requirements with our team.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-header">
                            <h4>How long does delivery typically take?</h4>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-content">
                            <p>Standard delivery takes 3-7 business days depending on location. Expedited options are available.</p>
                        </div>
                    </div>

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
