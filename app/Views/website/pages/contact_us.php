<!-- Start Breadcrumb 
    ============================================= -->
<div class="breadcrumb-area shadow theme-hard bg-fixed text-light"
    style="background-image: url('<?= base_url(); ?>/assets/website/img/banner/6.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Contact Us</h1>
                <ul class="breadcrumb">
                    <li><a href="<?= base_url(); ?>">Home</a></li>
                    <!-- <li><a href="#">Pages</a></li> -->
                    <li class="active">Contact Us</li>
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
                    <form action="" method="POST" class="contact-form">
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
                                    <textarea class="form-control" id="comments" name="comments"
                                        placeholder="Tell Us About Project *"></textarea>
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

<!-- Start Google Maps 
    ============================================= -->
<div class="google-maps-area full-width">
    <div class="google-maps">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14767.262289338461!2d70.79414485000001!3d22.284975!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1424308883981"></iframe>
    </div>
</div>
<!-- End Google Maps -->