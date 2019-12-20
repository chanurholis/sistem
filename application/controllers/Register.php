<?php
class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', ['matches' => 'Terjadi Kesalahan', 'min_length' => 'Terlalu Pendek']);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['judul'] = "Register | Project";
            $this->load->view('templates/t_header', $data);
            $this->load->view('register', $data);
            $this->load->view('templates/t_footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama')),
                'email' => htmlspecialchars($this->input->post('email')),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => date('')
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success rounded-0" role="alert">
            Selamat akun anda telah terdaftar, Silahkan masuk!</div>');
            redirect('login');
        }
    }
}
