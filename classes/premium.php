<?php 
    require_once __DIR__ . "/user.php";

    class Premium extends User {

        protected $level;

        public function __construct($name, $lastName, $level)
        {
          parent::__construct($name, $lastName);
          $this->setLevel($level);
        }

        public function getLevel()
        {
          return $this->level;
        }

        public function setLevel($level)
  {
    
        $this->level = $level;

        return $this;
  }

        public function setSconto($premium)
    {
        $this->premium = $premium;
        if ($premium == true) {
        $this->sconto = $this->level * 10;
        }
    }
    }

?>