<?php

    if(isset($_POST["submit"]) ) 
    {

    
   //print_r('Nome: ' .$_POST['nome']);
    //print_r('<br>');
    //print_r('Email: ' .$_POST['email']);
    //print_r('<br>');
    //print_r('Telefone: ' .$_POST['telefone']);
    //print_r('<br>');
    //print_r('Sexo: ' .$_POST['genero']);
    //print_r('<br>');
    //print_r('Data de nascimento: ' .$_POST['data_nascimento']);
    //print_r('<br>');
    //print_r('Cidade: ' .$_POST['cidade']);
    //print_r('<br>');
    //print_r('Estado: ' .$_POST['estado']);
    //print_r('<br>');
    //print_r('Endereço: ' .$_POST['endereço']); 
    
        include_once("config.php");

        $idp = $_POST["id"];
        $idv = $_POST["id"];
        $nomep = $_POST["nome"];
        $nomev = $_POST["nome"];
        $preco = $_POST["preco"];
        $quant_parcelas = $_POST["quant_parcelas"];
        $quant_vendida = $_POST["quant_vendida"];
        $vendedor_id = $_POST["vendedor_id"];
        $tempo_garantia = $_POST["tempo_garantia"];
        $entrega = $_POST["entrega"];
        $atendimento = $_POST["atendimento"];
        $quant_vendas = $_POST["quant_vendas"];
        $nivel_perfil = $_POST["nivel_perfil"];
        

        $result = mysqli_query($conexao,"INSERT INTO usuarios(id,id,nome,nome,preco,quant_parcelas,quant_vendida,vendedor_id,tempo_garantia,entrega,atendimento,quant_vendas,nivel_perfil) 
        VALUES ('$idp','$idv','$nomep','$nomev','$preco','$quant_parcelas','$quant_vendida','$vendedor_id','$tempo_garantia,'$entrega','$atendimento',$quant_vendas,'$nivel_perfil')"); 
    } 


?>
