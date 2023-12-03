<?php
    include('../config/db_connect.php');
    class PlantasController {
        private $conn;

        public function __construct()
        {
            $conn = new DBConnect ();
        }

        public function index (){
            $plantas = $this->conn->link->query ("select * from registroplantas");
            return $plantas;
        }

        public function addPlantas (){

        }

        public function updatePlantas (){

        }

        public function deletePlantas ($id){

        }


    }