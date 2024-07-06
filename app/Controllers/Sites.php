<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Sites extends BaseController
{
    private $db;
    private $table;

    public function __construct()
    {
        $this->db = db_connect();
        $this->table = $this->db->table("students");
    }
    public function insertStudent()
    {
        $data = [
            "name" => "Pejak Paweł",
            "email" => "pejakpawel@wp.pl", 
            "phone" => "123456798"
        ];

        if($this->table->insert($data)){
            echo "<h3>Student created!<h3>";
        } else {
            echo "<h3>Faild to create sudent</h3>";
        };
    }
    public function updateStudent() 
    {
        $student_Id = 2;

        $updated_data = [
            "email" => "pejakpawel@onet.pl"
        ];

        if ($this->table->update($updated_data, [
            "id" => $student_Id
        ]))
        {
            echo "<h3>Student updated!<h3>";
        } else {
            echo "<h3>Faild to update sudent</h3>";
        }
    }

    public function deleteStudent()
    {
        $sudent_id = 2;

        if($this->table->delete([
            "id" => $sudent_id
            ]))
        {
            echo "<h3>Student deleted!<h3>";
        } else {
            echo "<h3>Faild to delete sudent</h3>";
        }
    }

    public function selectStudents()
    {
        $students = $this->table->get()->getResultArray();

        echo "<pre>";

        print_r($students);
    }
}
