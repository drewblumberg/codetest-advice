<?php
class Campaigns_model extends CI_Model {
  public function __construct() {
    $this->load->database();
  }

  public function get_campaigns($id) {
    if($id != FALSE) {
      $query = $this->db->get_where('campaigns', array('id' => $id));
      return $query->row_array();
    }
    else {
      return FALSE;
    }
  }

  public function get_all_campaigns() {
    $query = $this->db->get('campaigns');
    return $query->result();
  }
}