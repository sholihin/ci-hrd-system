<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Penilaian extends MY_Controller {



    function Penilaian()

    {

        parent::__construct();

        $this->load->model('penilaian_mod');

        

    }



    function index()

    {

    	redirect(base_url());

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

                redirect(base_url().'penilaian');

            }

        }

        

    }



    function add($id=null){

        $this->cek_login();

        $i = $this->penilaian_mod->get_user($id);

        if (!$i) {

            redirect(base_url().'teamlist');

        }

        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="alert"><button type="button" class="close" data-dismiss="alert">&times;</button>', '</div>');



        $this->form_validation->set_rules('soal1', 'Soal Pemahaman Terhadap Tugas 1', 'required');

        $this->form_validation->set_rules('soal2', 'Soal Pemahaman Terhadap Tugas 2', 'required');

        $this->form_validation->set_rules('soal3', 'Soal Pemahaman Terhadap Tugas 3', 'required');

        $this->form_validation->set_rules('soal4', 'Soal Pemahaman Terhadap Tugas 4', 'required');

        $this->form_validation->set_rules('soal5', 'Soal Pemahaman Terhadap Tugas 5', 'required');

        $this->form_validation->set_rules('soal6', 'Soal Pemahaman Terhadap Tugas 6', 'required');



        $this->form_validation->set_rules('soal7', 'Soal Pelaksanaan Tugas 1', 'required');

        $this->form_validation->set_rules('soal8', 'Soal Pelaksanaan Tugas 2', 'required');

        $this->form_validation->set_rules('soal9', 'Soal Pelaksanaan Tugas 3', 'required');

        $this->form_validation->set_rules('soal10', 'Soal Pelaksanaan Tugas 4', 'required');

        $this->form_validation->set_rules('soal11', 'Soal Pelaksanaan Tugas 5', 'required');

        $this->form_validation->set_rules('soal12', 'Soal Pelaksanaan Tugas 6', 'required');



        $this->form_validation->set_rules('soal13', 'Soal Penampilan Diri 1', 'required');

        $this->form_validation->set_rules('soal14', 'Soal Penampilan Diri 2', 'required');



        $this->form_validation->set_rules('soal15', 'Soal Sikap Kerja 1', 'required');

        $this->form_validation->set_rules('soal16', 'Soal Sikap Kerja 2', 'required');

        $this->form_validation->set_rules('soal17', 'Soal Sikap Kerja 3', 'required');

        $this->form_validation->set_rules('soal18', 'Soal Sikap Kerja 4', 'required');

        $this->form_validation->set_rules('soal19', 'Soal Sikap Kerja 5', 'required');

        $this->form_validation->set_rules('soal20', 'Soal Sikap Kerja 6', 'required');



        /*$this->form_validation->set_rules('catatankhusus', 'Catatan Khusus', 'required');

        $this->form_validation->set_rules('areadiperbaiki', 'Area yang Harus Diperbaiki', 'required');

        $this->form_validation->set_rules('areadipertahankan', 'Area yang Harus Dipertahankan', 'required');

        $this->form_validation->set_rules('rekomendasi', 'Rekomendasi', 'required');*/



        $data['msg']='';

        if ($this->form_validation->run() == TRUE)

        {

            $soal1 = $this->input->post("soal1");

            $soal2 = $this->input->post("soal2");

            $soal3 = $this->input->post("soal3");

            $soal4 = $this->input->post("soal4");

            $soal5 = $this->input->post("soal5");

            $soal6 = $this->input->post("soal6");

            $soal7 = $this->input->post("soal7");

            $soal8 = $this->input->post("soal8");

            $soal9 = $this->input->post("soal9");

            $soal10 = $this->input->post("soal10");

            $soal11 = $this->input->post("soal11");

            $soal12 = $this->input->post("soal12");

            $soal13 = $this->input->post("soal13");

            $soal14 = $this->input->post("soal14");

            $soal15 = $this->input->post("soal15");

            $soal16 = $this->input->post("soal16");

            $soal17 = $this->input->post("soal17");

            $soal18 = $this->input->post("soal18");

            $soal19 = $this->input->post("soal19");

            $soal20 = $this->input->post("soal20");



            $catatankhusus = $this->input->post('catatankhusus');

            $areadiperbaiki = $this->input->post('areadiperbaiki');

            $areadipertahankan = $this->input->post('areadipertahankan');

            $rekomendasi = $this->input->post('rekomendasi');



            $add_data = array(

                'id_user' => $id,

                'pemahaman_tugas1' =>  $soal1,

                'pemahaman_tugas2' =>  $soal2,

                'pemahaman_tugas3' =>  $soal3,

                'pemahaman_tugas4' =>  $soal4,

                'pemahaman_tugas5' =>  $soal5,

                'pemahaman_tugas6' =>  $soal6,

                'pelaksanaan_tugas1' =>  $soal7,

                'pelaksanaan_tugas2' =>  $soal8,

                'pelaksanaan_tugas3' =>  $soal9,

                'pelaksanaan_tugas4' =>  $soal10,

                'pelaksanaan_tugas5' =>  $soal11,

                'pelaksanaan_tugas6' =>  $soal12,

                'penampilan_diri1' =>  $soal13,

                'penampilan_diri2' =>  $soal14,

                'sikap_kerja1' =>  $soal15,

                'sikap_kerja2' =>  $soal16,

                'sikap_kerja3' =>  $soal17,

                'sikap_kerja4' =>  $soal18,

                'sikap_kerja5' =>  $soal19,

                'sikap_kerja6' =>  $soal20,

                'catatan_khusus' =>  $catatankhusus,

                'area_ygharusdiperbaiki' =>  $areadiperbaiki,

                'area_ygharusdipertahankan' =>  $areadipertahankan,

                'rekomendasi' =>  $rekomendasi



            );



            $tambah_penilaian = $this->penilaian_mod->add($add_data);

            if ($tambah_penilaian != 0) {

                redirect(base_url().'dashboard/team/'.$id);

            }

            else{

                $data['msg'] = 'There is a problem, please try again later';

            }

        }



        $this->load->view('penilaian',$data);

    }



    function detail($id = null){

        $this->cek_login();

        $i = $this->penilaian_mod->get_penilaian($id);

        if (!$i) {

            redirect(base_url().'teamlist');

        }

        $data['row'] = $this->penilaian_mod->get_penilaian($id);

        $this->load->view('penilaian_detail', $data);

    }



    function edit($id=0){

        $this->cek_login();

        $i = $this->penilaian_mod->get_penilaian_byid($id);

        if (!$i) {

            redirect(base_url().'dashboard');

        }



        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="alert"><button type="button" class="close" data-dismiss="alert">&times;</button>', '</div>');



        $this->form_validation->set_rules('soal1', 'Soal Pemahaman Terhadap Tugas 1', 'required');

        $this->form_validation->set_rules('soal2', 'Soal Pemahaman Terhadap Tugas 2', 'required');

        $this->form_validation->set_rules('soal3', 'Soal Pemahaman Terhadap Tugas 3', 'required');

        $this->form_validation->set_rules('soal4', 'Soal Pemahaman Terhadap Tugas 4', 'required');

        $this->form_validation->set_rules('soal5', 'Soal Pemahaman Terhadap Tugas 5', 'required');

        $this->form_validation->set_rules('soal6', 'Soal Pemahaman Terhadap Tugas 6', 'required');



        $this->form_validation->set_rules('soal7', 'Soal Pelaksanaan Tugas 1', 'required');

        $this->form_validation->set_rules('soal8', 'Soal Pelaksanaan Tugas 2', 'required');

        $this->form_validation->set_rules('soal9', 'Soal Pelaksanaan Tugas 3', 'required');

        $this->form_validation->set_rules('soal10', 'Soal Pelaksanaan Tugas 4', 'required');

        $this->form_validation->set_rules('soal11', 'Soal Pelaksanaan Tugas 5', 'required');

        $this->form_validation->set_rules('soal12', 'Soal Pelaksanaan Tugas 6', 'required');



        $this->form_validation->set_rules('soal13', 'Soal Penampilan Diri 1', 'required');

        $this->form_validation->set_rules('soal14', 'Soal Penampilan Diri 2', 'required');



        $this->form_validation->set_rules('soal15', 'Soal Sikap Kerja 1', 'required');

        $this->form_validation->set_rules('soal16', 'Soal Sikap Kerja 2', 'required');

        $this->form_validation->set_rules('soal17', 'Soal Sikap Kerja 3', 'required');

        $this->form_validation->set_rules('soal18', 'Soal Sikap Kerja 4', 'required');

        $this->form_validation->set_rules('soal19', 'Soal Sikap Kerja 5', 'required');

        $this->form_validation->set_rules('soal20', 'Soal Sikap Kerja 6', 'required');



        /*$this->form_validation->set_rules('catatankhusus', 'Catatan Khusus', 'required');

        $this->form_validation->set_rules('areadiperbaiki', 'Area yang Harus Diperbaiki', 'required');

        $this->form_validation->set_rules('areadipertahankan', 'Area yang Harus Dipertahankan', 'required');

        $this->form_validation->set_rules('rekomendasi', 'Rekomendasi', 'required');*/



        $data['msg']='';

        if ($this->form_validation->run() == TRUE)

        {

            $soal1 = $this->input->post("soal1");

            $soal2 = $this->input->post("soal2");

            $soal3 = $this->input->post("soal3");

            $soal4 = $this->input->post("soal4");

            $soal5 = $this->input->post("soal5");

            $soal6 = $this->input->post("soal6");

            $soal7 = $this->input->post("soal7");

            $soal8 = $this->input->post("soal8");

            $soal9 = $this->input->post("soal9");

            $soal10 = $this->input->post("soal10");

            $soal11 = $this->input->post("soal11");

            $soal12 = $this->input->post("soal12");

            $soal13 = $this->input->post("soal13");

            $soal14 = $this->input->post("soal14");

            $soal15 = $this->input->post("soal15");

            $soal16 = $this->input->post("soal16");

            $soal17 = $this->input->post("soal17");

            $soal18 = $this->input->post("soal18");

            $soal19 = $this->input->post("soal19");

            $soal20 = $this->input->post("soal20");



            $catatankhusus = $this->input->post('catatankhusus');

            $areadiperbaiki = $this->input->post('areadiperbaiki');

            $areadipertahankan = $this->input->post('areadipertahankan');

            $rekomendasi = $this->input->post('rekomendasi');



            $edit_data = array(

                'pemahaman_tugas1' =>  $soal1,

                'pemahaman_tugas2' =>  $soal2,

                'pemahaman_tugas3' =>  $soal3,

                'pemahaman_tugas4' =>  $soal4,

                'pemahaman_tugas5' =>  $soal5,

                'pemahaman_tugas6' =>  $soal6,

                'pelaksanaan_tugas1' =>  $soal7,

                'pelaksanaan_tugas2' =>  $soal8,

                'pelaksanaan_tugas3' =>  $soal9,

                'pelaksanaan_tugas4' =>  $soal10,

                'pelaksanaan_tugas5' =>  $soal11,

                'pelaksanaan_tugas6' =>  $soal12,

                'penampilan_diri1' =>  $soal13,

                'penampilan_diri2' =>  $soal14,

                'sikap_kerja1' =>  $soal15,

                'sikap_kerja2' =>  $soal16,

                'sikap_kerja3' =>  $soal17,

                'sikap_kerja4' =>  $soal18,

                'sikap_kerja5' =>  $soal19,

                'sikap_kerja6' =>  $soal20,

                'catatan_khusus' =>  $catatankhusus,

                'area_ygharusdiperbaiki' =>  $areadiperbaiki,

                'area_ygharusdipertahankan' =>  $areadipertahankan,

                'rekomendasi' =>  $rekomendasi



            );



            $tambah_penilaian = $this->penilaian_mod->update($edit_data,$id);

            redirect(base_url().'dashboard/team/'.$i->id_user);

        }



        $data['row'] = $this->penilaian_mod->get_penilaian_byid($id);



        $this->load->view('penilaian_edit',$data);

    }

}