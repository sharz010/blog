<?php
/*Require de Smarty class die nodig is om smarty te laden*/
include_once ('smarty/libs/Smarty.class.php');
include_once ("database.php");

/*Maakt een nieuw smarty object aan*/
$smarty = new Smarty();

if(isset($_GET['action'])){
  $action = $_GET['action'];
}else{
  $action = NULL;
}

switch ($action)  {
  case "create":
  //formulier om wat toe te voegen
    break;

  case "store":
  //opvangen van formulier. insert in database
    break;
  case "edit":
  //ingevuld formulier van gekozen item
    break;

  case "update":
  //opvangen formulier en wijzigen gegevens
    break;

  case "destroy":
  //opvangen formulier en vewijderen gegevens
  break;
  default:

  $selectBlog = $conn->prepare("SELECT * FROM blog");
  $selectBlog->execute();
  $blogs = $selectBlog->fetchAll();

  $smarty->assign("blogs", $blogs);
  $smarty->display("template/index.tpl");
}


/*Voegt de waarde "john doe" toe aan de variabele 'naam'*/


/*Verwijst door naar index.tpl in de template folder zodat
deze kan worden getoond
*/
