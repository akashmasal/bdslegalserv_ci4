<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override(
    function () {
        $data['page_title'] = "BDSLegal Services || Page Not Found";
        $data['page'] = "website/pages/404";
        return view('website/partials/template', $data);
    }
);
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/company-profile', 'Home::company_profile');
$routes->get('/our-clients', 'Home::our_clients');
$routes->get('/drafting-of-legal-documents', 'Home::drafting_of_legal_documents');
$routes->get('/private-limited-company-registration', 'Home::private_limited_company');
$routes->get('/limited-liablity-partnership', 'Home::limited_liability_partnership');
$routes->get('/one-person-company-registration', 'Home::one_person_company_registration');
$routes->get('/partnership-firm-online-registration', 'Home::partnership_firm_online_registration');
$routes->get('/roc-compliance', 'Home::roc_compliance');
$routes->get('/Section-8-Registration–12A/80G-Registration-and-FCRA-Registration', 'Home::section_registration_fcra_registration');
$routes->get('/trademark', 'Home::trademark');
$routes->get('/logo-design', 'Home::logo_design');
$routes->get('/copyright', 'Home::copyright');
$routes->get('/itr-filling', 'Home::itr_filing');
$routes->get('/gst-registration-service', 'Home::gst_registration_service');
$routes->get('/fssai-state', 'Home::fssai_state');
$routes->get('/fssa-basic', 'Home::fssai_basic');
$routes->get('/fssai-central', 'Home::fssai_central');
$routes->get('/iso-certification', 'Home::iso_certification');
$routes->get('/msme-registration', 'Home::msme_registration');
$routes->get('/import-export-code-registration', 'Home::import_export_code_registration');
$routes->get('/contact-us', 'Home::contact_us');
$routes->get('/pay-now', 'Home::pay_now');
$routes->get('/career', 'Home::career');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}