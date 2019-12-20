<?php
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['judul'] = "Login | Project";
            $this->load->view('templates/t_header', $data);
            $this->load->view('login', $data);
            $this->load->view('templates/t_footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        // jika usernya ada
        if ($user) {
            // jika usernya aktif
            if ($user['is_active'] == 1) {
                // cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'nama' => $user['nama'],
                        'email' => $user['email'],
                        'image' => $user['image'],
                        'role_id' => $user['role_id'],
                        'date_created' => $user['date_created']
                    ];

                    $this->session->set_userdata($data);
                    $this->dash();
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger rounded-0" role="alert">
                    Terjadi Kesalahan!</div>');
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger rounded-0" role="alert">
                Email ini belum diaktivasi!</div>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger rounded-0" role="alert">
            Terjadi Kesalahan!</div>');
            redirect('login');
        }
    }

    public function dash()
    {
        $data['judul'] = "Dashboard | Project";
        $this->load->view('templates/t_header', $data);
        $this->load->view('admin/index');
        $this->load->view('templates/t_footer');
    }
}
