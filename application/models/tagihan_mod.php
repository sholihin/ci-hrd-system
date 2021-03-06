<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tagihan_mod extends CI_Model{

	function tagihan_mod()
	{
		parent::__construct();
	}

	function add($data=null)
    {
        $return = 0;
        if($data != null){
            $this->db->insert('ds_tagihan',$data);

            $return = $this->db->insert_id();
        }

        return $return;
    }
    function update($data,$id=0)
    {
        $this->db->where('id', mysql_real_escape_string($id));
        $this->db->update('ds_tagihan', $data);
    }
    function get_tagihan($rows=false,$where=null,$limit=false,$skip=0,$take=10)
    {
        $this->db->select("ds_tagihan.*,ds_client.nama_client,ds_client.surname_client");
        $this->db->order_by('ds_tagihan.date','desc');

        if($limit) {
            $this->db->limit($take,$skip);
        }

        if(!empty ($where)){
            if(count($where)){
                foreach ($where as $key=>$val){
                    if(!empty ($val)){
                        $this->db->where($key, mysql_real_escape_string($val));
                    }else{
                        $this->db->where($key, NULL, FALSE);
                    }
                }
            }
        }
        $this->db->join('ds_client','ds_tagihan.id_client = ds_client.id');
        $i = $this->db->get('ds_tagihan');

        if($rows){
            return $i->num_rows();
        }else{
            return $var = ($i->num_rows() > 0) ? $i->result_array() : FALSE;
        }
    }
    function get($id=0)
    {
        $this->db->select('*');
        $this->db->where('id', mysql_real_escape_string($id));
        $i = $this->db->get('ds_tagihan', 1, 0);

        return $var = ($i->num_rows() > 0) ? $i->row() : false;
    }
    function delete($id=0)
    {
        $this->db->where('id', mysql_real_escape_string($id));
        $this->db->delete('ds_tagihan');
    }
}