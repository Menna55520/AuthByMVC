<?php
class Home {
    use Controller ;
    public function index(){
        $userEmail = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->email ;
        $data['userEmail'] = $userEmail ;
        $this->view('home',$data);
    }
    
}
