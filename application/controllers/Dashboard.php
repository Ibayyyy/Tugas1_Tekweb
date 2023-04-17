<?php
class Dashboard extends CI_Controller {
    public function index() {
        $this->load->view('dashboard_view');
    }

    public function biodata() {
        $this->load->view('biodata_view');
    }

    public function biodata2() {
        $this->load->view('biodata_view');
    }
    
    public function biodata3() {
            $this->load->view('biodata_view');
    }    
}
?>