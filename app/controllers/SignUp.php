<?php
class SignUP {
    use Controller ;
    public function index(){
        $data = [];
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $user = new User ;
            if($user->Validate($_POST)){
                $user->insert($_POST);
                Redirect('login');
            }
            $data['errors'] = $user->errors ;
            $data['InputEmail'] = $_POST['email'] ;
        }
        $this->view('signup',$data);
    }
    
}
