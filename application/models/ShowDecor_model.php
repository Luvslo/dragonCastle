<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class ShowDecor_model extends CI_Model{
    function _construct()
    {
        parent:: _Construct();
    }
    public function showDecor()
    {
        $query= $this->db->query("select * from decor");
        foreach($query->result() as $rows)
        {
            $data[]=$rows;
        }
        return $data;
    }
}