<?php
  session_start();
  require_once("includes/conexao.php");
  $strNumero     = $_SESSION["chat"]["numero"];
  $idAtendimento = $_SESSION["chat"]["id_atendimento"];
	// Finalizando o Atendimento //
  $qryaux = mysqli_query(
    $conexao,
    "UPDATE tbatendimento SET situacao = 'F', 
      finalizado_por = 'CHAT WEB', 
      dt_fim = now()
      WHERE id = '".trim($idAtendimento)."' AND numero = '".trim($strNumero)."' AND canal = '0'" ) or die(mysqli_error($conexao));

  unset($_SESSION["chat"]);
  header("Location:index.php");
  ?>