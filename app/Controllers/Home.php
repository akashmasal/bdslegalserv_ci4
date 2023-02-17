<?php

namespace App\Controllers;

use App\Models\CareerModel;

class Home extends BaseController
{
    function index()
    {
        $data['page_title'] = "BDSLegalserv";
        $data['page'] = "website/pages/home";
        return view('website/partials/template', $data);
    }

    function company_profile()
    {
        $data['page_title'] = "BDSLegalserv || Company Profile";
        $data['page'] = "website/pages/company_profile";
        return view('website/partials/template', $data);
    }
    function our_clients()
    {
        $data['page_title'] = "BDSLegalserv || Our Clients";
        $data['page'] = "website/pages/our_clients";
        return view('website/partials/template', $data);
    }

    function drafting_of_legal_documents()
    {
        $data['page_title'] = "BDSLegalserv || Drafting Of Legal Documents";
        $data['page'] = "website/pages/drafting_of_legal_documents";
        return view('website/partials/template', $data);
    }

    function private_limited_company()
    {
        $data['page_title'] = "BDSLegalserv || Private Limited Company";
        $data['page'] = "website/pages/private_limited_company";
        return view('website/partials/template', $data);
    }
    function limited_liability_partnership()
    {
        $data['page_title'] = "BDSLegalserv || Limited Liability Partnership";
        $data['page'] = "website/pages/limited_liability_partnership";
        return view('website/partials/template', $data);
    }
    function one_person_company_registration()
    {
        $data['page_title'] = "BDSLegalserv || One Person Company Registration";
        $data['page'] = "website/pages/one_person_company_registration";
        return view('website/partials/template', $data);
    }
    function partnership_firm_online_registration()
    {
        $data['page_title'] = "BDSLegalserv || Partnership Firm Online Registration";
        $data['page'] = "website/pages/partnership_firm_online_registration";
        return view('website/partials/template', $data);
    }
    function roc_compliance()
    {
        $data['page_title'] = "BDSLegalserv || Roc Compliance";
        $data['page'] = "website/pages/roc_compliance";
        return view('website/partials/template', $data);
    }

    function section_registration_fcra_registration()
    {
        $data['page_title'] = "BDSLegalserv || Section 8 Registration-12A/80G Registration and FCRA Registration";
        $data['page'] = "website/pages/section_registration_fcra_registration";
        return view('website/partials/template', $data);
    }
    function trademark()
    {
        $data['page_title'] = "BDSLegalserv || Trademark";
        $data['page'] = "website/pages/trademark";
        return view('website/partials/template', $data);
    }
    function logo_design()
    {
        $data['page_title'] = "BDSLegalserv || Logo Design";
        $data['page'] = "website/pages/logo_design";
        return view('website/partials/template', $data);
    }
    function copyright()
    {
        $data['page_title'] = "BDSLegalserv || Copyright";
        $data['page'] = "website/pages/copyright";
        return view('website/partials/template', $data);
    }

    function itr_filing()
    {
        $data['page_title'] = "BDSLegalserv || ITR Filing";
        $data['page'] = "website/pages/itr_filing";
        return view('website/partials/template', $data);
    }

    function gst_registration_service()
    {
        $data['page_title'] = "BDSLegalserv || GST Registration Service";
        $data['page'] = "website/pages/gst_registration_service";
        return view('website/partials/template', $data);
    }
    function fssai_state()
    {
        $data['page_title'] = "BDSLegalserv || FSSAI State";
        $data['page'] = "website/pages/fssai_state";
        return view('website/partials/template', $data);
    }
    function fssai_basic()
    {
        $data['page_title'] = "BDSLegalserv || FSSAI Basic";
        $data['page'] = "website/pages/fssai_basic";
        return view('website/partials/template', $data);
    }
    function fssai_central()
    {
        $data['page_title'] = "BDSLegalserv || FSSAI Central";
        $data['page'] = "website/pages/fssai_central";
        return view('website/partials/template', $data);
    }
    function iso_certification()
    {
        $data['page_title'] = "BDSLegalserv || ISO Certification";
        $data['page'] = "website/pages/iso_certification";
        return view('website/partials/template', $data);
    }
    function msme_registration()
    {
        $data['page_title'] = "BDSLegalserv || MSME Registration";
        $data['page'] = "website/pages/msme_registration";
        return view('website/partials/template', $data);
    }
    function import_export_code_registration()
    {
        $data['page_title'] = "BDSLegalserv || Import Export Code Registration";
        $data['page'] = "website/pages/import_export_code_registration";
        return view('website/partials/template', $data);
    }

    function contact_us()
    {
        $data['page_title'] = "BDSLegalserv || Contact Us";
        $data['page'] = "website/pages/contact_us";
        return view('website/partials/template', $data);
    }
    function contact_us_data()
    {
        helper(['form', 'url']);
        $model = new CareerModel();
        $session = session();
        $name = $this->request->getVar('name');
        $email = $this->request->getVar('email');
        $phone = $this->request->getVar('phone');
        $message = $this->request->getVar('message');
        $rules = [
            "name" => 'required',
            "email" => 'required',
            "phone" => 'required',
            "message" => 'required'
        ];

        $validation = $this->validate($rules);
        if ($validation) {
            $data = [
                "name" => $name,
                "email" => $email,
                "phone" => $phone,
                "message" => $message,
                "created_at" => date('d-m-Y')
            ];
            $insert = $model->save($data);
            if ($insert) {
                $session->setFlashdata('success', 'Respose Has Been Saved..');
                return redirect()->to('/career');
            } else {
                $session->setFlashdata('error', 'Failed..');
                return redirect()->to('/career');
            }
        } else {
            $data['validation'] = $this->validator;
            $data['page_title'] = "BDSLegalserv || Career";
            $data['page'] = "website/pages/career";
            return view('website/partials/template', $data);

        }
    }

    function pay_now()
    {
        $data['page_title'] = "BDSLegalserv || Pay Now";
        $data['page'] = "website/pages/pay_now";
        return view('website/partials/template', $data);
    }

    function career()
    {
        $data['page_title'] = "BDSLegalserv || Career";
        $data['page'] = "website/pages/career";
        return view('website/partials/template', $data);
    }

    function career_data()
    {
        helper(['form', 'url']);
        $model = new CareerModel();
        $session = session();
        $name = $this->request->getVar('name');
        $email = $this->request->getVar('email');
        $phone = $this->request->getVar('phone');
        $message = $this->request->getVar('message');
        $rules = [
            "name" => 'required',
            "email" => 'required',
            "phone" => 'required',
            "message" => 'required'
        ];

        $validation = $this->validate($rules);
        if ($validation) {
            $data = [
                "name" => $name,
                "email" => $email,
                "phone" => $phone,
                "message" => $message,
                "created_at" => date('d-m-Y')
            ];
            $insert = $model->save($data);
            if ($insert) {
                $session->setFlashdata('success', 'Respose Has Been Saved..');
                return redirect()->to('/career');
            } else {
                $session->setFlashdata('error', 'Failed..');
                return redirect()->to('/career');
            }
        } else {
            $data['validation'] = $this->validator;
            $data['page_title'] = "BDSLegalserv || Career";
            $data['page'] = "website/pages/career";
            return view('website/partials/template', $data);

        }





    }
}