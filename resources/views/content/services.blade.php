@extends('templates.main')

@section('content')

<!-- Services Page Content -->

<div class="container my-5">
    <div class="row">
        <!-- Service Details -->
        <div class="col-md-8">
            <h1>Our Services</h1>
            <p class="lead">Discover what we offer to meet your needs.</p>

            <hr>

            <!-- Service 1 -->
            <div class="mb-4">
                <h3>Service 1</h3>
                <p>Our tailored business solutions are designed to deliver measurable results. From strategic planning to operational optimization, Service 1 ensures your company thrives in a competitive market with innovative and efficient strategies.</p>
            </div>

            <!-- Service 2 -->
            <div class="mb-4">
                <h3>Service 2</h3>
                <p>Experience the next level of support and innovation with Service 2. We provide cutting-edge technology solutions and 24/7 support to ensure your business operations are always running smoothly and effectively.</p>
            </div>

            <!-- Service 3 -->
            <div class="mb-4">
                <h3>Service 3</h3>
                <p>Service 3 sets a new standard in the industry by combining rapid response times, advanced customization, and seamless client onboarding. Compare us to the competition and see how we consistently outperform with a client satisfaction rate of 98%.</p>
            </div>

            <!-- Frequently Asked Questions (Accordion) -->
            <div class="accordion" id="faqAccordion">
                <!-- FAQ 1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeadingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseOne" aria-expanded="true" aria-controls="faqCollapseOne">
                            What payment methods do you accept?
                        </button>
                    </h2>
                    <div id="faqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqHeadingOne" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            We accept all major credit cards and PayPal for payment.
                        </div>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeadingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo">
                            How can I contact customer support?
                        </button>
                    </h2>
                    <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadingTwo" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            You can reach our customer support team via email or phone during business hours.
                        </div>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeadingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree">
                            Do you offer customized solutions?
                        </button>
                    </h2>
                    <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqHeadingThree" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes, we provide tailored solutions based on specific client requirements.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar with Contact Information -->
        <div class="col-md-4">
            <div class="bg-light p-4">
                <h4>Contact Us</h4>
                <p>For inquiries and more information:</p>
                <ul class="list-unstyled">
                    <li>Email: info@example.com</li>
                    <li>Phone: +123 456 7890</li>
                    <li>Address: 123 Street, City, Country</li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection
