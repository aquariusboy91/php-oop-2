<?php 

    class User {
       protected $name_user;
       protected $lastname_user; 
       protected $premium;
       protected $email;
       protected $sconto = 0;


       public function __construct($name_user, $lastname_user, $premium) {
        $this->name_user = $name_user;
        $this->lastname_user = $lastname_user;
        $this->premium = $premium;
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

  public function setPremium($premium)
  {
   
    $this->premium = $premium;
  }

  public function getPremium()
  {
    return $this->premium;
  }

  public function setEmail($email)
  {
   
    $this->email = $email;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setSconto($sconto)
  {
   
    $this->sconto = $sconto;
  }

  public function getSconto()
  {
    return $this->sconto;
  }

}

?>
