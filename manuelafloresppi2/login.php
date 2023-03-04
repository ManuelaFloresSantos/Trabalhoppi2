<?php 
 
   $nomecolocado = $_POST["nome"];
   $nomecerto = "manu";
   $senhacolocada = $_POST["senha"];
   $senhacerta = "123";



   if( $nomecolocado != $nomecerto && $senhacolocada != $senhacerta  ) {

    header("Location: erro.html");
    
  }else{

   header("Location: cadastro.php");
}


//    if( $nomecolocado == $nomecerto && $senhacolocada == $senhacerta  ) {

//      header("Location: cadastro.html");
     
//    }else{

//     header("Location: erro.html");
// }

?>

