<?php

class Images extends CI_Model {
    
    function _construct(){
        parent:: __construct();
    }
    
    function all(){
        $this->db->order_by("id","desc");
        $query = $this->db->get('images');
        return $query->result_array();
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

