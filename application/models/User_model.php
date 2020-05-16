<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class User_model extends CI_Model{
  

 public function login_user($username, $password) {
     $this->db->where('username',$username);
     $this->db->where('password',$password);
    $result = $this->db->get('users');
 
    if($result->num_rows() == 1){
     return $result->row(0)->id;
     }else{

     return false;
 }
}


}