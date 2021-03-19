<?php
  require_once("./banco.php");

  session_start();

?>

<?php
    //echo"passei";
  
    if(empty($_POST["email"]) || empty($_POST["cpf"])){
      echo "Preencha todos os campos.";
    }else{
      //consulta 
      $email = $_POST['email'];
      $cpf = $_POST['cpf'];
      $query = ' SELECT * FROM dbinvest WHERE email = "'.$email.'" and cpf = "'.$cpf.'"';
      $result = mysqli_query($conexao1, $query);
      $informacao = mysqli_fetch_assoc($result);
      //se retornar informacao
      if(!empty($informacao)){
        //echo json_encode($informacao);
        echo "<script>location.href='dashboard.php'</script>";
      }else{
        //usuário não existe
        echo "Usuário não existe";
      }
    }   

 ?>