<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\StudentModel;

class Sites extends BaseController
{
    private $studentObject;

    public function __construct()
    {
        $this->studentObject = new StudentModel();
    }
    public function insertStudent()
    {
        $data = [
            "name" => "Bejak Bartek",
            "email" => "bejakbartek@vp.pl",
            "phone" => "987654321",
        ];

        if($this->studentObject->insert($data))
        {
            echo "<h3>Student created!<h3>";
        } else {
            echo "<h3>Faild to create Student!<h3>";
        }
    }

    public function updateStudent() 
    {
        $student_Id = 3;

        $updated_data = [
            "phone" => "2233445566"
        ];

        if ($this->studentObject->update($student_Id, $updated_data))
        {
            echo "<h3>Student updated!<h3>";
        } else {
            echo "<h3>Faild to update sudent</h3>";
        }
    }

    public function deleteStudent()
    {
        $student_Id = 4;

        if($this->studentObject->delete($student_Id))
        {
            echo "<h3>Student deleted!<h3>";
        } else {
            echo "<h3>Faild to delete sudent</h3>";
        }
    }

    public function selectStudents()
    {
        $students = $this->studentObject->findAll();

        echo "<pre>";

        print_r($students);
    }
}
