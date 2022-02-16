<?php 

    class User {
       protected $name_user;
       protected $lastname_user;
       protected $email; 


       public function __construct($name_user, $lastname_user) {
        $this->name_user = $name_user;
        $this->lastname_user = $lastname_user;
       }

       public function setName_user($name_user)
  {
   
    $this->name_user = $name_user;
  }

  public function getName_user()
  {
    return $this->name_user;
  }

  public function setLastname_user($lastname_user)
  {
   
    $this->name_user = $lastname_user;
  }

  public function getLastname_user()
  {
    return $this->lastname_user;
  }

  public function setEmail($email)
  {
   
    $this->email = $email;
  }

  public function getEmail()
  {
    return $this->email;
  }
    }

?>
