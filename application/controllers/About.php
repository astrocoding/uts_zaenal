<?php

class About extends CI_Controller {
  public function __construct()
        {
                parent::__construct();
                $this->load->model('about_model');
                $this->load->helper('url_helper');
        }
        public function index() {
          $data['about'] = $this->about_model->get_about();
          $this->load->view('frontend/header', $data);
          $this->load->view('frontend/about', $data);
          $this->load->view('frontend/footer');
  }
}