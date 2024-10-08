<?php
    if(isset($_POST['submit']))
    
        //print_r('NOME: '.$_POST['nome'] );
       //print_r('<br>');
        //print_r('CPF:'.$_POST['CPF'] );
        //print_r('<br>');
        //print_r('RG:'.$_POST['RG'] );
       //print_r('<br>');
        //print_r('E-mail:'.$_POST['email'] );
        //print_r('<br>');
        //print_r('Telefone 1:'.$_POST['telefone1'] );
        //print_r('<br>');
        //print_r('Telefone 2'.$_POST["telefone 2"] );
        //print_r('<br>');
       //print_r('Data de Nascimento:'.$_POST['ano de nascimento'] );
        //print_r('<br>');
        //print_r('Cidade:'.$_POST['cidade'] );
       //print_r('<br>');
        //print_r('Estado:'.$_POST['estado'] );
        //print_r('<br>');
        //print_r('Endereço:'.$_POST['endereço'] ); corrigir telefones

        include_once ('config.php');

        //$nome = $_POST['nome'];
        //$cpf = $_POST['CPF'];
        //$rg = $_POST['RG'];
        //$email = $_POST['email'];
        //$data = $_POST['']; corrigir
        //$cidade = $_POST['cidade'];
        //$estado = $_POST['estado'];
        //$endereço = $_POST['endereço']

        //$result = mysli_query($conexao,"INSERT INTO usoario(nome,cpf,rg,email,datac,cidade,estado,endereço) 
        //VALUES( '$nome','$cpf','$rg','$email','$data','$cidade','$estado')") corrigir
        
    
?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULÁRIO|KB!</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgba(240, 169, 99, 0.911));
        }
        .box{
            color: white;
            position:absolute;
            top: 10%;
            left:10%;
            transform: translate (-10%, -10%);
            background-color: rgba(0, 0, 0, 0.8);
            padding: 15px;
            border-radius: 15px;
        }
        fieldset{
            border: 3px solid rgba(14, 158, 224, 0.753);
        }
        legend{
            border:1px solid rgb(231, 241, 241);
            padding: 10px;
            text-align: center;
            background-color: rgb(22, 169, 214);
            border-radius: 6px;

        }
        .inputbox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            color:white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 1px;
        }
    .labelinput{
        position:none;
        top: 0px;
        left: 0px;
        pointer-events: none;
        transition: .5px;
    }    
    .inputUser:focus ~ .labelinput,
    .inputUser:valid ~ .labelinput{
        top:-20px;
        font-size: 12px;
        color: dodgerblue;
    }
    #data_naciemnto{
        outline: none;
    }
    #sbmit{
        background-color: rgb(238, 186, 89);
        width: 100%;
        border: none;
        padding:12px;
        cursor: pointer;
        color:<b> black\b>;
    }
    
    </style>
</head>
<body>
<a href ="formulario.php" > Cadastro</a>
<a href ="home.php" > Voltar</a>
<a href ="teladelogin.php" >Login</a>
 <div class="box">
 <form action="formulario.php" method = "post">
<fieldset>
     <legend><b>Formulário para Novos Clientes</legend</b></legend>
    <br>
   
    <div class="inputBox">
         <input type="text" name="nome" id="nome" class="inputUser" required>
         <label for="nome"class="labelinput">Nome Completo</label>
            <br><br>   

        <div class="inputBox">
         <input type="CPF" name="CPF" id="CPF" class="inputUser" required>
        <label for="CPF"class="labelinput"> CPF</label>
            <br><br>

        <div class="inputBox">
         <input type="RG" name="RG" id="RG" class="inputUser" required>
         <label for="RG"class="labelinput"> RG</label>
            <br><br>

        <div class="inputBox">
        <input type="text" name="email" id="email" class="inputUser" required>
        <label for="email"class="labelinput">E-mail </label>
            <br><br>

         <input type="password" name="Senha" id="Senha" class="inputUser" required>
         <label for="Senha"class="labelinput">Criar senha</label>
            <br><br>   

        <div class="inputBox">
        <input type="text" name="telefone1" id="telefone1" class="inputUser" required>
        <label for="telefone1" class="labelinput"> Telefone 1 </label>
            <br><br>

        <div class="inputBox">
        <input type="text" name="telefone2" id="telefone 2" class="inputUser" required>
         <label for="telefone 2"class="labelinput"> Telefone 2 </label>
            <br><br>

        <div class="inputBox">
        <input type="text" name="ano de nascimento" id="ano de nascimento" class="inputUser" required>
        <label for="ano de nascimento"class="labelinput"><b> Data de nascimento </b> </label>
            <br><br>

        <div class="inputBox">
        <input type="text " name="cidade" id="cidade" class="inputUser" required>
        <label for="cidade"class="labelinput"> Cidade </label>
             <br><br>

         <div class="inputBox">
        <input type="text" name="estado" id="estado" class="inputUser" required>
         <label for="estado"class="labelinput"> Estado </label>
            <br><br>

        <div class="inputBox">
         <input type="text" name="endereço" id="endereço" class="inputUser" required>
        <label for="endereço"class="labelinput"> Endereço </label>
        </div>
        <br><br>
        <input type="submit" name= "submit" id="sbmit"
    



            </fieldset>
        </form>
    </div>
</body>
</html>