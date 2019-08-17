<?php
    class UserModel extends CI_Model{
        private $tableuser = "tableuser";
    
        public function insert($data){
            $this->db->insert($this->tableuser,$data);
            return $this->db->affected_rows();
        }
        public function viewall(){
            $query = $this->db->get($this->tableuser);
            return $query->result_array();
        }

        public function update($id,$data){
            $this->db->where('id', $id);
            $this->db->update($this->tableuser,$data);
            return $this->db->affected_rows();
        }
        public function delete($id){
            $this->db->where('id',$id);
            $this->db->delete($this->tableuser);
            return $this->db->affected_rows();     
        }
    }
?>