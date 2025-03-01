<?php
class User{
    use Model ;
    protected $table = 'users' ;
    protected $allowedColumns = [
        'email' , 
        'password'
    ];
    public function Validate($data){
        $this->errors = [] ;
        if(empty($data['email'])){
            $this->errors['email'] = "Email Is Required" ;
        }
        elseif(!filter_var($data['email'],FILTER_VALIDATE_EMAIL)){
            $this->errors['email'] = "Email Is Not Valid" ;
        }

        if(empty($data['password'])){
            $this->errors['password'] = "Password Is Required" ;
        }

        if(empty($data['terms'])){
            $this->errors['terms'] = "Please Accept Terms And Conditions" ;
        }
        // check errors
        if(empty($this->errors)){
            return true ;
        }
        return false ;
    }
}