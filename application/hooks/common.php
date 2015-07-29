<?php

defined ('BASEPATH') or exit ('No direct script access allowed');

class Common
{
	public function DisplayHeader () {
		$ci =& get_instance ();
		if (!$ci->input->is_ajax_request ())
		{
			$ci->load->view('common/header');
        }
	}

	public function DisplayFooter ()
	{
		$ci =& get_instance();
		if (!$ci->input->is_ajax_request ())
		{
			$ci->load->view('common/footer');
		}
	}
}