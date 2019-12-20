<?php
class Forgot extends CI_Controller
{
    public function index()
    {
        $data['judul'] = "Forgot Password";
        $this->load->view('templates/t_header', $data);
        $this->load->view('forgot-password', $data);
        $this->load->view('templates/t_footer');
    }
}
