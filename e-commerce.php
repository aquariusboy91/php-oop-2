<?php 

require_once __DIR__ . '/classes/product.php';
require_once __DIR__ . '/classes/user.php'; 
require_once __DIR__ . '/classes/premium.php'; 

try {

    $product = new Product ('Mastrolindo', 'Casalingo', 2, 'Procter & Gamble', 'ciaobello');

    $user = new User ('Gino', 'Spazzino', true);

    $premium = new Premium ('Gino' , 'Spazzino', true, 2, 2);
    $premium->setLevel(2);
    
    

    var_dump($product);
    var_dump($user);
    var_dump($premium);

}  catch (Exception $error) {
    echo $error->getMessage();
  }

 

?>

