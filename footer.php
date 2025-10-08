<footer class="section-dark">
    <div class="container">
        <div class="row gx-5">

            <div class="col-lg-5 col-sm-12 mb-4">
                <h4>Explore ElizaLIMS</h4>
                <!-- Spacer hidden on mobile -->
                <div class="spacer-20"></div>

                <div class="row gx-0 gy-0">
                    <div class="col-md-6 mb-0 pb-0">
                        <div class="widget mb-0 pb-0">
                            <ul class="mb-0 pb-0">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="elizalims-lims.php">ElizaLIMS LIMS</a></li>
                                <li><a href="elizalimsconnect.php">ElizaLIMS Connect</a></li>
                                <li><a href="industries.php">Industries</a></li>
                                <li><a href="pricing.php">Pricing</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 mb-0 pb-0">
                        <div class="widget mb-0 pb-0">
                            <ul class="mb-0 pb-0">
                                <li><a href="contact.php">Contact Us</a></li>
                                <li><a href="blog.php">Blogs</a></li>
                                <li><a href="news.php">News</a></li>
                                <li><a href="#">Installation</a></li>
                                <li><a href="privacy-policy.php">Privacy Policy</a></li>
                                <li><a href="terms-condition.php">Terms and Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-sm-6 order-lg-1 order-sm-2">
                <h4>Contact Details</h4>
                <div class="spacer-20"></div>
                <div class="widget mb-1">
                    <div class="row">
                        <div class="col-1">
                            <i class="icofont-location-pin "></i>
                        </div>
                        <div class="col-11">
                            <a href="#" class="">USA 4359 Maud Street, Delaware, Zipcode 19801</a>
                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col-1">
                            <i class="icofont-location-pin "></i>
                        </div>
                        <div class="col-11">
                            <a href="#" class="">85/27, K. P. Koil Street, Saidapet, Chennai, India. Pincode - 600015.</a>
                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col-1">
                            <i class="icofont-envelope"></i>
                        </div>
                        <div class="col-11">
                            <a class="" href="mailto:contact@elizalims.com">contact@elizalims.com</a>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-lg-3 col-sm-6 order-lg-2 order-sm-1">
                <h4>Business Hours</h4>
                <div class="spacer-20"></div>
                <div class="widget pb-0">
                    <ul class="list-unstyled">
                        <li>Monday - Friday: 9am - 6pm</li>
                    </ul>
                </div>
                <div class="spacer-20"></div>
                <h4>Follow Us</h4>
                <div class="social-icons d-flex mb-sm-30 pt-3">
                    <a href="#" class="px-0" >
                        <img src="images/ui/linkedin.webp" alt="" width="30px" loading="lazy">
                    </a>
                    <a href="#" >
                        <img src="images/ui/youtube.webp" alt="" width="30px" loading="lazy">
                    </a>
                    <a href="#" >
                        <img src="images/ui/facebook.webp" alt="" width="30px" loading="lazy">
                    </a>
                    <a href="#" >
                        <img src="images/ui/instagram.webp" alt="" width="30px" loading="lazy">
                    </a>
                    <a href="#" >
                        <img src="images/ui/twitter.webp" alt="" width="30px" loading="lazy">
                    </a>
                </div>


            </div>
        </div>
    </div>
    <div class="subfooter mt-0 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <p class="mb-0 text-dark">
                            Copyright © <span id="currentYear"></span> ElizaLIMS. All rights reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var yearSpan = document.getElementById('currentYear');
        if (yearSpan) {
            yearSpan.textContent = new Date().getFullYear();
        }
    });
</script>
<script src="js/plugins.js"></script>
<script src="js/designesia.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<style>
.social-icons a img {
    transition: transform 0.3s ease, filter 0.3s ease;
    display: inline-block;
}

.social-icons a:hover img {
    transform: translateY(-6px);
    filter: brightness(1.2);
}

    .scroll-top-btn {
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 50px;
        height: 50px;
        background: #6f00ff;
        color: #fff;
        border-radius: 50%;
        border: none;
        cursor: pointer;
        z-index: 9999;
        display: none;
        transition: all 0.3s ease;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .scroll-top-btn:hover {
        opacity: 1;
        transform: translateY(-5px);
    }

    .scroll-top-btn i {
        font-size: 24px;
        line-height: 50px;
    }

    .phone-float-btn {
        position: fixed;
        bottom: 90px;
        /* above scroll to top */
        right: 30px;
        width: 50px;
        height: 50px;
        background: #17cc7e;
        color: #fff;
        border-radius: 50%;
        border: none;
        cursor: pointer;
        z-index: 9999;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        text-decoration: none;
    }

    .phone-float-btn:hover {
        transform: translateY(-5px);
        background-color: #13a665;
    }

    .phone-float-btn i {
        font-size: 22px;
    }
</style>
<script>
    jQuery(document).ready(function($) {
        setTimeout(function() {
            var $carousel = $('.testimonial-carousel');

            $carousel.on('initialized.owl.carousel', function() {
                $(this).find('.owl-nav button').attr('tabindex', '0');
                $(this).find('.owl-nav button.owl-prev').attr('aria-label', 'Previous testimonial');
                $(this).find('.owl-nav button.owl-next').attr('aria-label', 'Next testimonial');
            });

            $(document).keydown(function(e) {
                if (e.keyCode === 37) { // Left arrow
                    $carousel.trigger('prev.owl.carousel');
                } else if (e.keyCode === 39) { // Right arrow
                    $carousel.trigger('next.owl.carousel');
                }
            });

            $carousel.owlCarousel({
                center: true,
                items: 4,
                loop: true,
                margin: 30,
                nav: true,
                dots: false,
                autoplay: true,
                autoplayTimeout: 2000, // Reduced to 3 seconds for smoother scrolling
                autoplayHoverPause: true,
                autoplaySpeed: 2000, // Added smooth transition speed
                smartSpeed: 2000, // Increased for smoother transitions
                touchDrag: true,
                mouseDrag: true,
                navText: [
                    '<img src="images/icons/left-arrow.png" alt="Previous" style="width: 30px; height: 30px;">',
                    '<img src="images/icons/right-arrow.png" alt="Next" style="width: 30px; height: 30px;">'
                ],
                responsive: {
                    0: {
                        items: 1,
                        margin: 10
                    },
                    768: {
                        items: 2,
                        margin: 20
                    },
                    992: {
                        items: 3,
                        margin: 25
                    },
                    1200: {
                        items: 4,
                        margin: 30
                    }
                },
                onInitialized: function() {
                    $carousel.find('.owl-item').attr('aria-hidden', 'true');
                    $carousel.find('.owl-item.active.center').attr('aria-hidden', 'false');
                    // Start autoplay immediately
                    $carousel.trigger('play.owl.autoplay', [3000]);
                },
                onTranslated: function() {
                    $carousel.find('.owl-item').attr('aria-hidden', 'true');
                    $carousel.find('.owl-item.active.center').attr('aria-hidden', 'false');
                }
            });
        }, 1000);
    });
</script>
<script src="js/swiper.js"></script>
<script src="js/custom-marquee.js"></script>
<script src="js/custom-swiper-1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<a href="book-demo.php" class="phone-float-btn text-center" aria-label="Call ElizaLIMS">
    <i class="fas fa-comments"></i>
</a>

<div class="scroll-top-btn text-center">
    <i class="fas fa-arrow-up"></i>
</div>
<script>
    // Scroll to top button functionality
    const scrollBtn = document.querySelector('.scroll-top-btn');

    // Show/hide button based on scroll position
    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 300) {
            scrollBtn.style.display = 'block';
        } else {
            scrollBtn.style.display = 'none';
        }
    });

    // Smooth scroll to top
    scrollBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
</script>
<script>
    function toggleReadMore(el) {
        const paragraph = el.previousElementSibling;
        paragraph.classList.toggle('line-clamp-3');
        el.textContent = paragraph.classList.contains('line-clamp-3') ? 'Read more' : 'Read less';
    }
</script>
<script>
    // Email and message validation on form submit
    document.addEventListener('DOMContentLoaded', function() {
        // Replace '#yourFormId' with the actual form ID or selector
        var form = document.querySelector('form');
        if (form) {
            form.addEventListener('submit', function(e) {
                var emailInput = form.querySelector('input[type="email"], input[name="email"]');
                var messageInput = form.querySelector('textarea[name="message"], textarea');
                var valid = true;
                var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                var errorMsg = '';

                if (emailInput && !emailPattern.test(emailInput.value.trim())) {
                    valid = false;
                    errorMsg += 'Please enter a valid email address.\n';
                    emailInput.style.borderColor = 'red';
                } else if (emailInput) {
                    emailInput.style.borderColor = '';
                }

                if (messageInput) {
                    var msg = messageInput.value.trim();
                    // Check if message is only asterisks or too short
                    if (msg.length < 10 || /^[*]+$/.test(msg)) {
                        valid = false;
                        errorMsg += 'Please enter a meaningful message.\n';
                        messageInput.style.borderColor = 'red';
                    } else {
                        messageInput.style.borderColor = '';
                    }
                }

                if (!valid) {
                    alert(errorMsg);
                    e.preventDefault();
                }
            });
        }
    });
</script>
<script>
    // Hide loader when page is fully loaded
    window.addEventListener('load', function() {
        var loader = document.getElementById('de-loader');
        if (loader) loader.classList.add('hide');
    });

    // Show loader instantly on navigation (for same-site links)
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('a[href]').forEach(function(link) {
            link.addEventListener('click', function(e) {
                // Only for same-origin navigation and not for anchor/hash links
                if (
                    link.hostname === window.location.hostname &&
                    link.getAttribute('href').charAt(0) !== '#' &&
                    !link.hasAttribute('target')
                ) {
                    var loader = document.getElementById('de-loader');
                    if (loader) loader.classList.remove('hide');
                }
            });
        });
    });
</script>

</body>

</html>