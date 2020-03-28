<?php

class Student_model {

    private $table = "students";
    private $db;

    public function __construct()
    {
        
        $this->db = new Database;

    }

    public function getAllStudent()
    {

        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();

    }

    public function addStudent($data)
    {
        
        $query = "INSERT INTO students VALUES (NULL, :name, :nipd, :email, :majors);";

        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('nipd', $data['nipd']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('majors', $data['majors']);

        $this->db->execute();

        return $this->db->rowCount();

    }

}