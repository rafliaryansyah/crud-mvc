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
            Flasher::setFlash('success', 'to add', 'success');
            header('Location: ' . base_url . '/student');
            exit;
        } else {
            Flasher::setFlash('failed', 'to add', 'danger');
            header('Location: ' . base_url . '/student');
            exit;
        }
    }

    public function delete($id)
    {
        if ( $this->model('Student_model')->deleteStudent($id) > 0 ) {
            Flasher::setFlash('success', 'to delete', 'success');
            header('Location: ' . base_url . '/student');
            exit;
        } else {
            Flasher::setFlash('failed', 'to delete', 'danger');
            header('Location: ' . base_url . '/student');
            exit;
        }
    }

    public function getedit()
    {
        echo json_encode($this->model('Student_model')->getStudentById($_POST['id']));
    }

    public function edit()
    {
        if ( $this->model('Student_model')->editDataStudent($_POST) > 0 ) {
            Flasher::setFlash('success', 'to edit', 'success');
            header('Location: ' . base_url . '/student');
            exit;
        } else {
            Flasher::setFlash('failed', 'to edit', 'danger');
            header('Location: ' . base_url . '/student');
            exit;
        }
    }

}