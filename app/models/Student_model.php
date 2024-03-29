<?php

class Student_model {

    private $table = "students";
    private $db;

    public function __construct()
    {
        
        $this->db = new Database;

    }

    public function getStudentById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
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

    public function deleteStudent($id)
    {
        
        $query = "DELETE FROM students WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();

    }

    public function editDataStudent($data)
    {
        
        $query = "UPDATE students SET
                    name = :name,
                    nipd = :nipd,
                    email = :email,
                    majors = :majors
                    WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('nipd', $data['nipd']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('majors', $data['majors']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();

    }

}