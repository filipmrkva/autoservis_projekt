<?php
class autoservis_controller extends CI_Controller {
public function menu() {
 $data['polozky'] = $this->autoservis_model->get_menu_polozky();
 $this->load->view('layout/layout_main', $data);
}
}

