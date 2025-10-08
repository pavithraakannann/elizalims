<?php include 'header.php'; ?>



<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    <section id="subheader" class="jarallax text-light">
        <img src="images/background/11.webp" class="jarallax-img" alt="" loading="lazy">
        <div class="container relative z-index-1000">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1>Pricing Plans</h1>
                    <ul class="crumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Pricing Plans</li>
                    </ul>
                </div>
                <div class="col-lg-6 text-lg-end">
                </div>
            </div>
        </div>
        <div class="de-overlay"></div>
    </section>
    <section>
        <div class="container">
            <div class="row g-4">

                <!-- Card 1 -->
                <div class="col-lg-4 col-sm-6">
                    <div class="relative pricing-rel bg-white shadow p-4 rounded-20px">
                        <div class="text-center">
                            <div class="spacer-30"></div>
                            <div class="ms-5 fw-bold">
                                <span>$</span>
                                <span class="fs-64 fw-bold text-dark">19</span>
                                <span>/monthly</span>
                            </div>
                            <div class="spacer-20"></div>
                            <p class="fw-500 fs-16 text-dark">Yearly tune up</p>
                        </div>

                        <h5>Features</h5>
                        <ul class="ul-style-2">
                            <li>Reminder Service</li>
                            <li>3 Months Services Waranty</li>
                            <li>No Overtime Fees</li>
                            <li>Receive Priority Scheduling</li>
                            <li class="extra-item d-none">Services Waranty</li>
                            <li class="extra-item d-none">Save <span class="fw-bold id-color">5%</span> On Accessories</li>
                        </ul>

                        <div class="spacer-20"></div>
                        <div class="text-center">
                            <button class="toggle-btn border-0 py-2 shadow bg-grey text-dark  w-100 rounded-20 fw-bold">Show more</button>
                        </div>
                        <div class="spacer-20"></div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-4 col-sm-6">
                    <div class="relative pricing-rel bg-white shadow  p-4 rounded-20px">
                        <div class="text-center">
                            <div class="spacer-30"></div>
                            <div class="ms-5 fw-bold">
                                <span>$</span>
                                <span class="fs-64 fw-bold text-dark">33</span>
                                <span>/monthly</span>
                            </div>
                            <div class="spacer-20"></div>
                            <p class="fw-500 fs-16 text-dark">Two visits yearly</p>
                        </div>

                        <h5>Features</h5>
                        <ul class="ul-style-2">
                            <li>Reminder Service</li>
                            <li>6 Months Services Waranty</li>
                            <li>No Overtime Fees</li>
                            <li>Receive Priority Scheduling</li>
                            <li class="extra-item d-none">Services Waranty</li>
                            <li class="extra-item d-none">Save <span class="fw-bold id-color-2">10%</span> On Accessories</li>
                        </ul>

                        <div class="spacer-20"></div>
                        <div class="text-center">
                            <button class="toggle-btn border-0 py-2 shadow bg-grey text-dark  w-100 rounded-20 fw-bold">Show more</button>
                        </div>
                        <div class="spacer-20"></div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-4 col-sm-6">
                    <div class="relative pricing-rel bg-white shadow p-4 rounded-20px">
                        <div class="text-center">
                            <div class="spacer-30"></div>
                            <div class="ms-5 fw-bold">
                                <span>$</span>
                                <span class="fs-64 fw-bold text-dark">41</span>
                                <span>/monthly</span>
                            </div>
                            <div class="spacer-20"></div>
                            <p class="fw-500 fs-16 text-dark">Three visits yearly</p>
                        </div>

                        <h5>Features</h5>
                        <ul class="ul-style-2">
                            <li>Reminder Service</li>
                            <li>1 Year Services Waranty</li>
                            <li>No Overtime Fees</li>
                            <li>Receive Priority Scheduling</li>
                            <li class="extra-item d-none">Services Waranty</li>
                            <li class="extra-item d-none">Save <span class="fw-bold id-color">5%</span> On Accessories</li>
                        </ul>

                        <div class="spacer-20"></div>
                        <div class="text-center">
                            <button class="toggle-btn border-0 py-2 shadow bg-grey text-dark  w-100 rounded-20 fw-bold">Show more</button>
                        </div>
                        <div class="spacer-20"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</div>

<script>
    const toggleButtons = document.querySelectorAll('.toggle-btn');

    toggleButtons.forEach(button => {
        button.addEventListener('click', () => {
            const card = button.closest('.relative');
            const extraItems = card.querySelectorAll('.extra-item');
            extraItems.forEach(item => item.classList.toggle('d-none'));
            button.textContent = button.textContent.includes('more') ? 'Show less' : 'Show more';
        });
    });
</script>
<?php include 'footer.php'; ?>