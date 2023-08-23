<?php

class About_model extends CI_Model {
  public function __construct()
  {
      $this->load->database();
  }
  public function get_about() {
    $query = $this->db->get('about');
    return $query->result_array();
  }
}