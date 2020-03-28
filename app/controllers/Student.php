<?php

class Student extends Controller {

    

    public function index()
    {
        
        $data['judul'] = "Page Student";
        $data['student'] = $this->model('Student_model')->getAllStudent();
        $this->view('templates/header', $data);
        $this->view('student/index', $data);
        $this->view('templates/footer');
        
    }

    public function add()
    {
        if ( $this->model('Student_model')->addStudent($_POST) > 0 ) {
            header('Location: ' . base_url . '/student');
            exit;
        }
    }

}