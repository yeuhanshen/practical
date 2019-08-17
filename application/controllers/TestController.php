<?php
    class TestController extends CI_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->model("UserModel","um");
        }

        public function testinsert(){
            $data = array(
                "cust_name" => "John",
                "cust_add" => "Cebu",
            );
            $result = $this->um->insert($data);
            if($result==0){
                echo "Test insert fail";
            }else{
                echo "Test insert Success";
            }   
        }

        public function testview(){
            $result = $this->um->viewAll();
            echo"<pre>";
            var_dump($result);
            echo"</pre>";
        } 

        public function testupdate(){
            $id = '1';
            $data = array(
                "cust_name" => "John Flores",
            );
            $result = $this->um->update($id,$data);
            if($result==0){
                echo "Test update fail";
            }else{
                echo "Test update Success";
            } 

        }

        public function testdelete(){
            $id = '1';
        
            $result = $this->um->delete($id);
            if($result==0){
                echo "Test Delete fail";
            }else{
                echo "Test Delete Success";
            } 

        }
    }

?>