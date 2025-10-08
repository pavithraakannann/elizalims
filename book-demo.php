<?php include 'header.php'; ?>

<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    <!-- section begin -->
    <section id="subheader" class="jarallax text-light">
        <img src="images/banner/banner.webp" class="jarallax-img" alt="">
        <div class="container relative z-index-1000">
            <div class="container relative z-index-1000">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h1>Book a Demo</h1>
                        <ul class="crumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Book a Demo</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                    </div>
                </div>
            </div>
        </div>
        <div class="de-overlay"></div>
    </section>

    <section>
        <div class="container">
            <div class="row g-4 gx-5">
                <div class="col-lg-6">
                    <div class="shadow p-md-5 p-2">
                        <h4>Ready to transform your lab ?</h4>
                        <form id="contactForm" action="contact-mail" method="post" class="p-4">
                            <input type="hidden" name="form_type" value="book_demo">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                                    pattern="[A-Za-z ]+" required>
                            </div>

                            <div class="mb-3">
                                <label for="designation" class="form-label">Designation <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="designation" name="designation" placeholder="Designation"
                                    pattern="[A-Za-z ]+" required>
                            </div>

                            <div class="mb-3">
                                <label for="labname" class="form-label">Lab Name <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="labname" name="labname" placeholder="Lab Name"
                                    pattern="[A-Za-z ]+" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email <span style="color: red;">*</span></label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                    pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" required>
                                <div id="email_error" style="color:red;"></div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Phone </label>
                                <div class="row g-2">
                                    <div class="col-md-6">
                                        <select class="form-select" id="country_code" name="country_code" >
                                            <option value="+1" selected>+1 (United States)</option>
                                            <option value="+44">+44 (United Kingdom)</option>
                                            <option value="+91">+91 (India)</option>
                                            <option value="+61">+61 (Australia)</option>
                                            <option value="+81">+81 (Japan)</option>
                                            <option value="+49">+49 (Germany)</option>
                                            <option value="+33">+33 (France)</option>
                                            <option value="+39">+39 (Italy)</option>
                                            <option value="+86">+86 (China)</option>
                                            <option value="+7">+7 (Russia)</option>
                                            <option value="+65">+65 (Singapore)</option>
                                            <option value="+27">+27 (South Africa)</option>
                                            <option value="+34">+34 (Spain)</option>
                                            <option value="+41">+41 (Switzerland)</option>
                                            <option value="+31">+31 (Netherlands)</option>
                                            <option value="+47">+47 (Norway)</option>
                                            <option value="+46">+46 (Sweden)</option>
                                            <option value="+82">+82 (South Korea)</option>
                                            <option value="+852">+852 (Hong Kong)</option>
                                            <option value="+60">+60 (Malaysia)</option>
                                            <option value="+966">+966 (Saudi Arabia)</option>
                                            <option value="+971">+971 (United Arab Emirates)</option>
                                            <option value="+55">+55 (Brazil)</option>
                                            <option value="+63">+63 (Philippines)</option>
                                            <option value="+90">+90 (Turkey)</option>
                                            <option value="+30">+30 (Greece)</option>
                                            <option value="+351">+351 (Portugal)</option>
                                            <option value="+48">+48 (Poland)</option>
                                            <option value="+43">+43 (Austria)</option>
                                            <option value="+353">+353 (Ireland)</option>
                                            <option value="+420">+420 (Czech Republic)</option>
                                            <option value="+386">+386 (Slovenia)</option>
                                            <option value="+372">+372 (Estonia)</option>
                                            <option value="+358">+358 (Finland)</option>
                                            <option value="+380">+380 (Ukraine)</option>
                                            <option value="+62">+62 (Indonesia)</option>
                                            <option value="+64">+64 (New Zealand)</option>
                                            <option value="+234">+234 (Nigeria)</option>
                                            <option value="+213">+213 (Algeria)</option>
                                            <option value="+998">+998 (Uzbekistan)</option>
                                            <option value="+974">+974 (Qatar)</option>
                                            <option value="+84">+84 (Vietnam)</option>
                                            <option value="+856">+856 (Laos)</option>
                                            <option value="+95">+95 (Myanmar)</option>
                                            <option value="+92">+92 (Pakistan)</option>
                                            <option value="+964">+964 (Iraq)</option>
                                            <option value="+977">+977 (Nepal)</option>
                                            <option value="+880">+880 (Bangladesh)</option>
                                            <option value="+94">+94 (Sri Lanka)</option>
                                            <option value="+20">+20 (Egypt)</option>
                                            <option value="+254">+254 (Kenya)</option>
                                            <option value="+56">+56 (Chile)</option>
                                            <option value="+593">+593 (Ecuador)</option>
                                            <option value="+591">+591 (Bolivia)</option>
                                            <option value="+505">+505 (Nicaragua)</option>
                                            <option value="+52">+52 (Mexico)</option>
                                            <option value="+598">+598 (Uruguay)</option>
                                            <option value="+66">+66 (Thailand)</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="tel" class="form-control" id="telephone" name="telephone" placeholder="Phone Number"
                                            pattern="[0-9]{7,15}" >
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label">Message <span style="color: red;">*</span></label>
                                <textarea class="form-control" id="message" name="message" placeholder="Your message here" rows="3" required></textarea>
                            </div>

                            <div class="login_form ">
                                <label for="captcha_input" class="form-label">Captcha <span style="color: red;">*</span></label>
                                <div id="captcha" class="form_div">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="preview">O T E 2 N z</div>
                                            <div class="captcha_form">
                                                <input type="text" id="captcha_input" name="captcha_input" class="form_input_captcha"
                                                    placeholder=" Enter Captcha" required>
                                                <button type="button" class="captcha_refersh rounded bg-black">
                                                    <i class="fa fa-refresh"></i>
                                                </button>
                                            </div>
                                            <div id="captcha_error" style="color:red;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id='submit' class="mt20">
                                <button type="submit" class="btn-main" id="contactSubmit">
                                    <span id="submitText">Submit</span>
                                    <span id="submitSpinner" style="display:none;">
                                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                        Submitting...
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="img-with-cap mb20">
                        <img src="images/misc/5.webp" class="img-fullwidth rounded-1" alt="">
                    </div>
                    <div class="fw-bold text-dark pt-4"><a href="#" class="text-dark"><i class="icofont-location-pin me-2 id-color-2"></i> USA -<span class="px-2 ">4359 Maud Street, Delaware, Zipcode 19801</span></a></div>
                    <div class="fw-bold text-dark pt-4"><a href="#" class="text-dark"><i class="icofont-location-pin me-2 id-color-2"></i> India -<span class="px-2">85/27, K. P. Koil Street, Saidapet, Chennai, India. Pincode - 600015.</span></a></div>
                    <div class="fw-bold text-dark pt-4"><a href="#" class="text-dark"><i class="icofont-envelope me-2 id-color-2"></i> <span>contact@elizalims.com</span></a></div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Thank You Popup Modal -->
<!-- Thank You Popup Modal -->
<div class="modal " id="thankYouModal" tabindex="-1" aria-labelledby="thankYouModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content"> <!-- Correctly placed modal-content -->
            <div class="modal-header">
                <h5 class="modal-title" id="thankYouModalLabel">Thank You</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Your message has been sent successfully. We will get back to you soon!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class=" btn-main" id="closeModalBtn">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    // Only allow numbers in phone number field
    document.getElementById('telephone').addEventListener('input', function() {
        this.value = this.value.replace(/[^0-9]/g, '');
    });

    // Only allow letters and spaces in these fields
    ['name', 'designation', 'labname'].forEach(function(fieldId) {
        document.getElementById(fieldId).addEventListener('input', function() {
            this.value = this.value.replace(/[^A-Za-z ]/g, '');
        });
    });

    // Stricter email validation on input and form submit
    var emailInput = document.getElementById('email');
    var emailError = document.getElementById('email_error');
    // Improved regex: no consecutive dots, no leading/trailing dot, valid domain, etc.
    // Enhanced: TLD must be at least 2 letters, domain must not start/end with hyphen or dot, no numbers-only TLDs
    var emailPattern = /^(?!.*\.\.)(?!\.)(?!.*\.$)[a-zA-Z0-9._%+-]+@([a-zA-Z0-9-]+\.)+[a-zA-Z]{2,}$/;

    emailInput.addEventListener('input', function() {
        var emailValue = emailInput.value.trim();
        // Extra check: domain and TLD validity
        var valid = emailPattern.test(emailValue);
        if (valid) {
            // Check for invalid TLD (numbers only, or too short)
            var domainParts = emailValue.split('@')[1]?.split('.') || [];
            var tld = domainParts[domainParts.length - 1] || '';
            if (!/^[a-zA-Z]{2,}$/.test(tld)) valid = false;
        }
        if (!valid) {
            emailError.textContent = "Please enter a valid email address.";
        } else {
            emailError.textContent = "";
        }
    });

    document.getElementById('contactForm').addEventListener('submit', function(e) {
        var emailValue = emailInput.value.trim();
        var valid = emailPattern.test(emailValue);
        if (valid) {
            var domainParts = emailValue.split('@')[1]?.split('.') || [];
            var tld = domainParts[domainParts.length - 1] || '';
            if (!/^[a-zA-Z]{2,}$/.test(tld)) valid = false;
        }
        if (!valid) {
            e.preventDefault();
            emailError.textContent = "Please enter a valid email address.";
            emailInput.focus();
            return false;
        } else {
            emailError.textContent = "";
        }
        // ...existing code for captcha validation and AJAX...
    });
</script>



<script>
    (function() {
        // Remove font styling for captcha (use default font)
        // const fonts = ["cursive"];
        let captchaValue = "";

        function gencaptcha() {
            // Generate a random numeric captcha (length 5-7 digits)
            let length = 5 + Math.floor(Math.random() * 3); // 5, 6, or 7 digits
            let value = '';
            for (let i = 0; i < length; i++) {
                value += Math.floor(Math.random() * 10); // 0-9
            }
            captchaValue = value;

            // Store the captcha value in session using AJAX
            fetch('store_captcha', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    captchaValue: captchaValue
                }),
            });
        }

        function setcaptcha() {
            let html = captchaValue.split("").map((char) => {
                const rotate = -20 + Math.trunc(Math.random() * 30);
                // No font-family, just normal text
                return `<span
                style="
                transform:rotate(${rotate}deg);
                "
            >${char} </span>`;
            }).join("");
            document.querySelector(".login_form #captcha .preview").innerHTML = html;
        }

        function reloadCaptcha() {
            gencaptcha();
            setcaptcha();
            document.getElementById("captcha_input").value = "";
        }

        function initCaptcha() {
            document.querySelector(".login_form #captcha .captcha_refersh").addEventListener("click", function() {
                reloadCaptcha();
            });

            reloadCaptcha();
        }
        initCaptcha();

        // Remove the old submit handler here

        // Add a flag to control AJAX submission only if captcha is valid
        let captchaValid = false;

        document.addEventListener("DOMContentLoaded", function() {
            const contactForm = document.getElementById('contactForm');
            const submitBtn = document.getElementById('contactSubmit');
            const closeModalBtn = document.getElementById('closeModalBtn');

            contactForm.addEventListener('submit', function(e) {
                // Captcha validation first
                let inputcaptchavalue = document.querySelector("#captcha_input").value;
                if (inputcaptchavalue !== captchaValue) {
                    e.preventDefault();
                    document.getElementById("captcha_error").innerText = "Captcha is incorrect. Please try again.";
                    reloadCaptcha();
                    return false;
                } else {
                    document.getElementById("captcha_error").innerText = "";
                }

                // If captcha is valid, proceed with AJAX
                e.preventDefault();
                submitBtn.disabled = true;
                document.getElementById('submitText').style.display = 'none';
                document.getElementById('submitSpinner').style.display = 'inline-block';

                fetch(this.action, {
                        method: 'POST',
                        body: new FormData(this)
                    })
                    .then(response => response.text())
                    .then(data => {
                        this.reset();
                        submitBtn.disabled = false;
                        // Keep spinner for 3-4 seconds before showing thank you modal
                        setTimeout(function() {
                            document.getElementById('submitText').style.display = 'inline';
                            document.getElementById('submitSpinner').style.display = 'none';

                            var thankYouModal = new bootstrap.Modal(document.getElementById('thankYouModal'));
                            thankYouModal.show();
                        }, 3000 + Math.floor(Math.random() * 1000)); // 3-4 seconds
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        submitBtn.disabled = false;
                        document.getElementById('submitText').style.display = 'inline';
                        document.getElementById('submitSpinner').style.display = 'none';
                        alert('An error occurred while sending your message. Please try again.');
                    });

                // Close button handler with redirect
                closeModalBtn.onclick = function() {
                    var thankYouModalInstance = bootstrap.Modal.getInstance(document.getElementById('thankYouModal'));
                    thankYouModalInstance.hide();

                    setTimeout(function() {
                        window.location.href = 'index.php';
                    }, 500);
                };
            });
        });
    })();
</script>


<?php include 'footer.php'; ?>