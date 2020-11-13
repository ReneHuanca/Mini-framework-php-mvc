<?php
require_once 'model/Customer.php';

class CustomerController{
    
    private $model;
    
    public function __construct() {
        $this->model = new Customer();
    }
    
    public function index() {
        $customers = $this->model->all();
        require_once 'view/customer/index.php';
    }

    public function show() {
        if( !isset($_GET['id']) ) {
            header('Location: index.php?c=customer&a=index');
        }
        
        $this->model->id = $_GET['id'];
        $customer = $this->model->find();
        require_once 'view/customer/show.php';
    }
    
    public function edit(){    
        if( !isset($_GET['id']) ) {
            header('Location: index.php?c=customer&a=index');
        }
        
        $this->model->id = $_GET['id'];
        $customer = $this->model->find();
        require_once 'view/customer/edit.php';
        
    }
    
    public function create(){
        require_once 'view/customer/create.php';
    }
    
    public function update(){    
        if( !isset($_GET['id']) ) {
            header('Location: index.php?c=customer&a=index');
        }
        
        $this->model->id = $_GET['id'];
        $this->model->name = $_POST['name'];
        $this->model->email = $_POST['email']; 
        $this->model->update();

        header('Location: index.php?c=customer&a=index');
    }
    
    public function store(){
        $this->model->name = $_POST['name'];
        $this->model->email = $_POST['email']; 
        $this->model->save();

        header('Location: index.php?c=customer&a=index');
    }
    
    public function destroy(){
        $this->model->id = $_GET['id'];
        $this->model->delete();

        header('Location: index.php?c=customer&a=index');
    }
}