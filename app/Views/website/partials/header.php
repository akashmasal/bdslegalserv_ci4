<!-- Header 
    ============================================= -->
<header id="home">
    <!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-sticky bootsnav">
        <div class="container">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?= base_url(); ?>">
                    <img src="<?= base_url(); ?>/assets/website/img/logo.png" class="logo" alt="Logo">
                </a>
            </div>
            <!-- End Header Navigation -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                    <li class="dropdown">
                        <a href="<?= base_url(); ?>">Home</a>
                    </li>
                    <li class="dropdown">
                    <!-- class="dropdown-toggle active" => use this property to enable toggle button in mobile screen -->
                        <a data-toggle="dropdown">About Us <i
                                class="bi bi-caret-down-fill"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?= base_url('/company-profile'); ?>">Company Profile</a></li>
                            <li><a href="<?= base_url('/our-clients'); ?>">Our Clients</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <!-- class="dropdown-toggle active" => use this property to enable toggle button in mobile screen -->
                        <a data-toggle="dropdown">Services <i
                                class="bi bi-caret-down-fill"></i></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown">
                                <a class="dropdown-toggle active" data-toggle="dropdown">Legal Services</a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?= base_url('/drafting-of-legal-documents'); ?>">Drafting Of legal
                                            Documents</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle active" data-toggle="dropdown">Company Registration</a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?= base_url('/private-limited-company'); ?>">Private Limited
                                            Company</a></li>
                                    <li><a href="<?= base_url('/limited-liablity-partnership'); ?>">Limited Liability
                                            Partnership</a></li>
                                    <li><a href="<?= base_url('/one-person-company-registration'); ?>">One Person Company
                                            Registration</a></li>
                                    <li><a href="<?= base_url('/partnership-firm-online-registration'); ?>">Partnership
                                            Firm Online Registration</a></li>
                                    <li><a href="<?= base_url('/roc-compliance'); ?>">ROC Compliance</a></li>
                                    <li><a
                                            href="<?= base_url('/Section-8-Registration–12A/80G-Registration-and-FCRA-Registration'); ?>">Section
                                            8 Registration - 12A/80G Registration & FCRA
                                            Registration</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle active" data-toggle="dropdown">Intellectual Property
                                    Rights</a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?= base_url('/trademark'); ?>">Trademark</a></li>
                                    <li><a href="<?= base_url('/logo-design'); ?>">Logo Design</a></li>
                                    <li><a href="<?= base_url('/copyright'); ?>">Copyright</a></li>

                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle active" data-toggle="dropdown">Tax</a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?= base_url('/itr-filling'); ?>">ITR Filling</a></li>
                                    <li><a href="<?= base_url('/gst-registration-service'); ?>">GST Registration
                                            Service</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle active" data-toggle="dropdown">Fssai</a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?= base_url('/fssai-state'); ?>">FSSAI State</a></li>
                                    <li><a href="<?= base_url('/fssa-basic'); ?>">FSSAI Basic</a></li>
                                    <li><a href="<?= base_url('/fssai-central'); ?>">FSSAI Central</a></li>
                                </ul>
                            </li>
                            <li><a href="<?= base_url('/iso-certification'); ?>">ISO Certification</a></li>
                            <li><a href="<?= base_url('/msme-registration'); ?>">MSME Registration</a></li>
                            <li><a href="<?= base_url('/import-export-code-registration'); ?>">Import-Export Code
                                    Registration</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= base_url('/contact-us'); ?>">Contact Us</a>
                    </li>
                    <li>
                        <a href="<?= base_url('/pay-now'); ?>">Pay Now</a>
                    </li>
                    <li>
                        <a href="<?= base_url('/career'); ?>">Career</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>

    </nav>
    <!-- End Navigation -->

</header>
<!-- End Header -->