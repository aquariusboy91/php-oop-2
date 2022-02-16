<?php 

require_once __DIR__ . '/classes/product.php';
require_once __DIR__ . '/classes/user.php'; 
require_once __DIR__ . '/classes/premium.php'; 

try {

    $product = new Product ('Mastrolindo', 'Casalingo', 2, 'Procter & Gamble', 'Mastro Lindo è stato creato da Linwood Burton, un imprenditore statunitense nel settore dei prodotti di pulizia per le navi, e dal suo amico, Mathusan Chandramohan, un ricco imprenditore proveniente dallo Sri Lanka. In passato, le navi erano pulite con abrasivi o solventi capaci di sciogliere grasso e sporcizia');

    $user = new User ('Gino', 'Spazzino', true , 'ginolospazzino@gmail.com');

    $premium = new Premium (2);
    $premium->setLevel(2);
    

    var_dump($product);
    var_dump($user);
    var_dump($premium);

}  catch (Exception $error) {
    echo $error->getMessage();
  }

 

?>

