<!-- Start Breadcrumb 
    ============================================= -->
<div class="breadcrumb-area shadow theme-hard bg-fixed text-light"
    style="background-image: url('<?= base_url(); ?>/assets/website/img/banner/12.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Career</h1>
                <ul class="breadcrumb">
                    <li><a href="<?= base_url(); ?>">Home</a></li>
                    <!-- <li><a href="#">Page</a></li> -->
                    <li class="active">Career</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Contact 
    ============================================= -->
<div class="contact-form-area default-padding-top">
    <div class="container">
        <div class="row">
            <!-- Start Contact Form -->
            <div class="col-md-7 contact-form-content default-padding-bottom">
                <div class="content">
                    <h3>Committed to promote a diverse and inclusive workforce</h3>
                    <h4>Hello, Nice to Meet You...<br>
                        Leave your message and we will contact you…</h4>
                    <?php
                    $session = session();
                    if ($session->getFlashdata('success')) {
                        echo $session->getFlashdata('success');

                    } else {
                        echo $session->getFlashdata('error');
                    }
                    ?>
                    <?= \Config\Services::validation()->listErrors(); ?>
                    <form id="career_form">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email*"
                                        type="email">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group comments">
                                    <textarea class="form-control" id="message" name="message"
                                        placeholder="Message *"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <button type="submit" name="submit" id="submit">
                                    Send Message <i class="fa fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Alert Message -->
                        <div class="col-md-12 alert-notification">
                            <div id="message" class="alert-msg"></div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Contact Form -->
            <div class="col-md-5 thumb">
                <img src="<?= base_url(); ?>/assets/website/img/about/contact.png" alt="Thumb">
            </div>
        </div>
    </div>
</div>
<!-- End Contact -->