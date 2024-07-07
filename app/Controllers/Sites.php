<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\StudentModel;

class Sites extends BaseController
{
    // List all students from db
    // Method GET
    public function listStudent()
    {
        echo json_encode(array(
            "status" => true,
            "message" => "List of students API call"
        ));
    }

    // POST data to database
    // Method POST
    // potected
    public function saveStudent()
    {
        echo json_encode(array(
            "status" => true,
            "message" => "Save student API call"
        ));
    }

    // Update data od data base
    // Method: PUT / PATCH
    public function updateStudent()
    {
        echo json_encode(array(
            "status" => true,
            "message" => "Update student API call"
        ));
    }

    // Dalete data od data base
    // Method: DELETE
    public function deleteStudent()
    {
        echo json_encode(array(
            "status" => true,
            "message" => "Delete student API call"
        ));
    }

    public function login()
    {
        $session = session();

        $session->set("isLoggedIn", 1);
    }

    public function logout()
    {
        $session = session();

        $session->remove("isLoggedIn");
    }

    public function accessDenied()
    {
        echo "You are not allowed to access this page.";
    }
}
