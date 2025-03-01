<?php
class Login {
    use Controller ;
    public function index(){
        $data = [] ;
        if($_SERVER['REQUEST_METHOD'] === "POST"){
            $user = new User ;
            $arr['email'] = $_POST['email'] ;
            $row = $user->first($arr);
            if($row){
                if($row->password === $_POST['password']){
                    $_SESSION['USER'] = $row ;
                    Redirect('home') ;
                }
            }
            $user->errors['email'] = "Please Enter Valid Email Or Password" ;
            $data['errors'] = $user->errors  ;
        }
        $this->view('login',$data);
    }
    
}
