<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        $this->forge->addFiled([
            "id" => [
                "type" => "INT",
                "constraint" => 5,
                "auto_increment" => true,
                "unsigned" => true,
            ],
            "name" => [
                "type" => "VARCHAR",
                "constraint" => 120,
                "null" => false
            ],
            "email" => [
                "type" => "VARCHAR",
                "constraint" => 50,
                "null" => true
            ],
            "phone" => [
                "type" => "VARCHAR",
                "constraint" => 50,
                "null" => true
            ]
            ]);

        $this->forge->addPrimaryKey("id");

        $this->forge->createTable("students");
    }

    public function down()
    {
        $this->forge->dropTable("students");
    }
}
