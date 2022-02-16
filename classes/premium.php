<?php 
    require_once __DIR__ . "/user.php";

    class Premium extends User {

        protected $level;

        public function __construct($name_user, $lastname_user,$premium, $sconto, $level)
        {
            parent::__construct($name_user, $lastname_user, $premium);
            $this->setLevel($level);
            $this->setSconto($sconto);
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
        if ($premium == true) {
        $this->sconto = $this->level * 10;
        }
    }
    }

?>