<?php
    class Siteinfo_model extends CI_Model{

/*siteinfo DATA*/
        public function getsiteinfo_by_id(){
            $this->db->select('*');
            $this->db->from('tb_ci_project1_site');
            $this->db->where('id',1);
            $qresult = $this->db->get();
            $result = $qresult->row();
            return $result; 
        }

    }
?>