<?php

class Bagi extends CI_Controller
{
	public function index()
	{
		$this->load->view('bagi');
	}

	public function pembagian()
	{
		$data['bilangan1'] = $this->input->post('bilangan1');
		$data['bilangan2'] = $this->input->post('bilangan2');

		if ($data['bilangan1'] == '' || $data['bilangan2'] == '') {
			$data['hasil'] = 'Please fill both forms.';
		} elseif ($data['bilangan2'] == 0) {
			$data['hasil'] = 'Division by zero.';
		} else {
			$data['hasil'] = $data['bilangan1'] / $data['bilangan2'];
		}
		$this->load->view('bagi', $data);
	}
}
