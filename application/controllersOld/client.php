<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client extends MY_Controller {

	function client(){
		parent::__construct();
		$this->load->model('client_mod');
	}

	function cek_login(){
        $id = $this->session->userdata('user_id');
        if (empty($id)) {
            $url = 'login?url='.uri_string();
            $url .= (!empty($_SERVER['QUERY_STRING'])) ? '?'.$_SERVER['QUERY_STRING'] : '';
            redirect(base_url().$url);
        }
    }

    function cek_rule(){
        $id = $this->session->userdata('user_id');
        if (empty($id)) {
            $url = 'login?url='.uri_string();
            $url .= (!empty($_SERVER['QUERY_STRING'])) ? '?'.$_SERVER['QUERY_STRING'] : '';
            redirect(base_url().$url);
        }
        else{
            $rule = $this->session->userdata('rule');
            if ($rule != 1 && $rule != 2) {
                redirect(base_url().'teamlist/detail/'.$this->session->userdata('user_id'));
            }
        }
        
    }

	function _set_pagination()
    {
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Prev';
        $config['next_tag_open'] = '<li class="custompagination paginate_button page-item next">';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li class="custompagination paginate_button page-item previous">';
        $config['prev_tag_close'] = '</li>';
        $config['full_tag_open'] = '<ul class="pagination" style="justify-content: flex-end;">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li class="custompagination paginate_button page-item">';
        $config['num_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li class="custompagination paginate_button page-item previous">';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="custompagination paginate_button page-item next">';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="paginate_button page-item active"><a class="page-link">';
        $config['cur_tag_close'] = '</a></li>';

        return $config;
    }

	function index(){
		$this->cek_login();
        $where = null;

        $id = $this->input->get('per_page');

        $url = '?';


        $config['base_url'] = base_url(FALSE).'client?';

        $config['total_rows'] = $this->client_mod->get_client(true,$where);

        $config['per_page'] = 5;

        $config['cur_page'] = empty($id) ? 0 : $id;

        $config['page_query_string'] = TRUE;

        foreach ($this->_set_pagination() as $key=>$val){

            $config[$key] = $val;

        }

        $this->pagination->initialize($config);

        $skip = $config['cur_page'];

        $take = $config['per_page'];

        $data['number'] = $config['cur_page'];

        $data['datacount'] = $this->client_mod->get_client(true,$where);

        $data['pagination'] = $this->pagination->create_links();

        $data['row'] = $this->client_mod->get_client(false,$where,true,$skip,$take);

		$this->load->view('client',$data);
	}

	function add(){
		$this->cek_login();
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger error">', '</div>');

        $this->form_validation->set_rules('name', 'Client Name', 'required');
        $this->form_validation->set_rules('address', 'Client Address', 'required');
        $this->form_validation->set_rules('phone', 'Client Phone Number', 'required');
        $this->form_validation->set_rules('email', 'Client Email', 'required');
        $data['msg'] = '';
        if ($this->form_validation->run() == TRUE)
        {
        	$nama = $this->input->post('name');
        	$surnama = $this->input->post('surname');
        	$alamat = $this->input->post('address');
        	$telepon = $this->input->post('phone');
        	$email = $this->input->post('email');

        	$add_data = array(
        		'nama_client' => $nama,
        		'surname_client' => $surnama,
        		'alamat_client' => $alamat,
        		'telepon_client' => $telepon,
        		'email_client' => $email
        	);

        	$i = $this->client_mod->add($add_data);
        	if (!$i) {
        		$data['msg'] = 'There is some trouble, please try again later !!';
        	}
        	elseif ($i) {
        		redirect(base_url().'client');
        	}
        }

        $this->load->view('client_add',$data);
	}

	function edit($id=0){
		$row = $this->client_mod->get($id);
		if (!$row) {
			redirect(base_url().'client');
		}

		$this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger error">', '</div>');

        $this->form_validation->set_rules('name', 'Client Name', 'required');
        $this->form_validation->set_rules('address', 'Client Address', 'required');
        $this->form_validation->set_rules('phone', 'Client Phone Number', 'required');
        $this->form_validation->set_rules('email', 'Client Email', 'required');
        $data['msg'] = '';
        if ($this->form_validation->run() == TRUE)
        {
        	$nama = $this->input->post('name');
        	$surnama = $this->input->post('surname');
        	$alamat = $this->input->post('address');
        	$telepon = $this->input->post('phone');
        	$email = $this->input->post('email');

        	$add_data = array(
        		'nama_client' => $nama,
        		'surname_client' => $surnama,
        		'alamat_client' => $alamat,
        		'telepon_client' => $telepon,
        		'email_client' => $email
        	);

        	$this->client_mod->update($add_data,$id);
        	redirect(base_url().'client');
        }

		$data['row'] = $row;
		$this->load->view('client_edit',$data);
	}

	function delete($id=0){
		$this->cek_login();
		$row = $this->client_mod->get($id);
		if ($row) {
			$this->client_mod->delete($id);
		}
		redirect(base_url().'client');
	}
}