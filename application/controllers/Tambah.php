<?php

class Tambah extends CI_Controller
{
    public function index()
    {
        $this->load->view('tambah');
    }

    public function penjumlahan()
    {
        $data['bilangan1'] = $this->input->post('bilangan1');
        $data['bilangan2'] = $this->input->post('bilangan2');

        if ($data['bilangan1'] == '' || $data['bilangan2'] == '') {
            $data['hasil'] = 'Please fill both forms.';
        } else {
            $data['hasil'] = $data['bilangan1'] + $data['bilangan2'];
        }
        $this->load->view('tambah', $data);
    }
}
