

// change the background color of nav bar when we scroll down 

// getting navbar elements

let navbar = document.querySelector(".nav-bar");  

window.addEventListener("scroll", () => {


        if (window.scrollY > 80) {
            navbar.classList.add("scrolled");
        }
        else {
            navbar.classList.remove("scrolled");
        }
    });


// ======== PRODUCTS PAGE FILTERING ========

// Product filter functionality
document.addEventListener("DOMContentLoaded", function(){
    
    const filterBtns = document.querySelectorAll(".filter-btn");
    const productCards = document.querySelectorAll(".product-card");

    filterBtns.forEach(btn => {
        btn.addEventListener("click", function(){
            const selectedCategory = this.getAttribute("data-category");

            // Remove active class from all buttons and add to clicked button
            filterBtns.forEach(b => b.classList.remove("active"));
            this.classList.add("active");

            // Filter products with animation
            productCards.forEach((card, index) => {
                const cardCategory = card.getAttribute("data-category");
                
                if(selectedCategory === "all" || cardCategory === selectedCategory){
                    // Show card
                    card.classList.remove("hidden");
                    // Stagger animation for smooth reveal
                    card.style.animationDelay = (index * 0.05) + "s";
                } else {
                    // Hide card
                    card.classList.add("hidden");
                }
            });
        });
    });

});


// ======== CONTACT PAGE FAQ ========

// FAQ accordion functionality
document.addEventListener("DOMContentLoaded", function(){
    
    const faqItems = document.querySelectorAll(".faq-item");
    const faqHeaders = document.querySelectorAll(".faq-header");

    faqHeaders.forEach(header => {
        header.addEventListener("click", function(){
            const faqItem = this.parentElement;
            const isActive = faqItem.classList.contains("active");

            // Close all other FAQ items
            faqItems.forEach(item => {
                if(item !== faqItem){
                    item.classList.remove("active");
                }
            });

            // Toggle current FAQ item
            faqItem.classList.toggle("active");
        });
    });

});


// ======== PROCESS PAGE ACCORDION ========

// Process step accordion functionality
function toggleStep(header) {
    const step = header.parentElement;
    const isActive = step.classList.contains("active");

    // Close all other steps
    const allSteps = document.querySelectorAll(".process-step");
    allSteps.forEach(s => {
        if(s !== step){
            s.classList.remove("active");
        }
    });

    // Toggle current step
    step.classList.toggle("active");
}


