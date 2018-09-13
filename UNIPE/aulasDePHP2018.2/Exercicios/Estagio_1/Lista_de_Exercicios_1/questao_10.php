<?php

  $nome = $_REQUEST['nome'];
  $email = $_REQUEST['email'];
  $senha = $_REQUEST['senha'];
  $telefone = $_REQUEST['telefone'];
  $cpf = $_REQUEST['cpf'];
  $rg = $_REQUEST['rg'];

  $para = "professo@danielbrandao.com.br";
  $assunto = "Informações";
  $mensagem = "Nome: $nome <br /> Email: $email <br /> Senha: $senha
  <br /> Telefone: $telefone <br /> CPF: $cpf <br /> RG: $rg";

  if (mail($para, $assunto, $mensagem)) {
    echo "Mensagem enviada com sucesso.<br />";
  } else {
    echo "Erro no envio da mensagem.<br />";
  }

  echo $mensagem;
?>
