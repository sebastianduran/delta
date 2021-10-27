<?php



/**
 * @file
 * Contains \Drupal\cuadrados\Controller\MyModuleController
 * 
 */
namespace Drupal\cuadrados\Controller;



class CuadradosController {

  public function page() {
    $servidor="localhost";
    $usuario="root";
    $clave="";
    $db="delta";
    
    $enlace = mysqli_connect($servidor, $usuario, $clave, $db);
    
    if(!$enlace){
      echo '<div class="homepage"><h2 class="title">Error</h2>';
    }
    $categorias = "SELECT * FROM `taxonomy_term_field_data`";
   $result = mysqli_query($enlace, $categorias);


if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo  " - Tag: " . $row["name"].  "<br>";
  }
} else {
  echo "0  results ".$enlace;
}


    $items = array(
      array('name' => 'Article one'),
      array('name' => 'Article two'),
      array('name' => 'Article three'),
      array('name' => 'Article four'),
    );

    return array(
      '#theme' => 'cuadrados',
      '#items' => $items,
      '#title' => 'test'
    );

  }
}