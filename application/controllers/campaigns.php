<?php
class Campaigns extends CI_Controller {
  public function show($id) {
    $this->load->model('campaigns_model');
    $campaign = $this->Campaigns_model->get_campaigns($id);
    $data['name'] = $campaign['name'];
    $data['clientid'] = $campaign['clientid'];
    $data['notes'] = $campaign['notes'];
    $this->load->view('campaign', $data);
  }

  public function all() {
    $this->load->model('campaigns_model');
    $data['campaigns'] = $this->campaigns_model->get_all_campaigns();
    $this->load->view('campaigns', $data);
  }
}