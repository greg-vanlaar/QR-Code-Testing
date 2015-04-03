<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Generate extends CI_Controller {

	public function index()
	{
		header("Content-Type: image/png");
    $params['data'] = 'http://sipepdesign.com';
    $this->ciqrcode->generate($params);
	}
}

/* End of file generate.php */
/* Location: ./application/controllers/generate.php */