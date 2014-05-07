<?php
class Campaigns extends CI_Controller {

  public function index()
  {
    $this->load->model('clients_model');
    $data['clients'] = $this->clients_model->get_all_clients();
    $this->load->view('campaigns_index', $data);
  }

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

  public function create() {
    $clientid = intval($this->input->post('clientid')) + 1;
    $data = array(
      'name' => $this->input->post('name'),
      'notes' => $this->input->post('notes'),
      'clientid' => $clientid
    );

    $this->campaigns_model->add_record($data);
    $this->index();
  }
}