<?php
	require"../../RaseController/usuarios.php";
	include ('conexao.php');
	session_start();
	if(!isset($_SESSION['carrinho'])){ 
        $_SESSION['carrinho'] = array(); 
    }

	$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

	if($acao == 'logar'){//LOGAR
		if(empty($_POST['clogin']) || empty($_POST['csenha'])) {
			header('Location: index.php');
			exit();
		}

		$cLogin = mysqli_real_escape_string($conexao, $_POST['clogin']);
		$cSenha = mysqli_real_escape_string($conexao, $_POST['csenha']);

		foreach ($usuario as $user){
			if($user['login'] == $cLogin && $user['senha'] == $cSenha){
				$_SESSION['autenticado']='SIM';
				$_SESSION['login']=$cLogin;
				header('Location: home.php');
			}else{
				$_SESSION['autenticado']='NAO';
				header('Location: index.php?login=erro');
			}
		}
	}else if($acao == 'cadastrar'){//cadastrar produtos		
		$cnome = mysqli_real_escape_string($conexao, $_POST['cnome']);
		$cvalor = mysqli_real_escape_string($conexao, $_POST['cvalor']);
		$cvenda = mysqli_real_escape_string($conexao, $_POST['cvenda']);
		$cquantidade = mysqli_real_escape_string($conexao, $_POST['cquantidade']);

		$query = "insert into produtos(nome, valor, venda, quantidade) values ('$cnome', '$cvalor', '$cvenda', '$cquantidade')";

		$result = mysqli_query($conexao, $query);

		header('Location: novo.php?produto=criado');
	}else if($acao == 'recuperar'){//listar produtos

		if (empty($_GET)) {
			$query = "select * from produtos";
		}else{
		$query = "select * from produtos where nome LIKE '%".$_GET['busca']."%'";
		}
		$result = mysqli_query($conexao, $query);

	}else if($acao == 'sair'){//desloga
		session_destroy();
		header('Location: index.php?');
	}else if($acao == 'alterar'){//alterar os produtos

		$id = mysqli_real_escape_string($conexao, $_POST['id']);
		$cnome = mysqli_real_escape_string($conexao, $_POST['cnome']);
		$cvalor = mysqli_real_escape_string($conexao, $_POST['cvalor']);
		$cvenda = mysqli_real_escape_string($conexao, $_POST['cvenda']);
		$cquantidade = mysqli_real_escape_string($conexao, $_POST['cquantidade']);

		$query = "UPDATE produtos SET valor='$cvalor', venda='$cvenda', quantidade='$cquantidade' WHERE id='$id'";
		$result = mysqli_query($conexao, $query);
		header('Location: alterar.php');
	}else if($acao == 'buscar'){//alterar os produtos
		$produto = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);

		$query = "SELECT * FROM produtos WHERE nome LIKE '%$produto%' LIMIT 8";
		$result = mysqli_query($conexao, $query);

		if(($result) AND ($result->num_rows != 0 )){
			while($row_user = mysqli_fetch_assoc($result)){
				echo "<a class='nav  text-white' href='controller.php?acao=add&id='row_user['id']'>".$row_user['nome'].' - R$'.$row_user['venda']."</a>";
			}
		}else{
			echo "<div class='nav text-white'>Nenhum produto encontrado encontrado ...</div>";
		}
	}else if($acao == 'add'){//alterar os produtos

            $id = intval($_GET['id']); 
            if(!isset($_SESSION['carrinho'][$id])){ 
                $_SESSION['carrinho'][$id] = 1;
                header('Location: venda.php');
            } else { 
                $_SESSION['carrinho'][$id] += 1; 
                header('Location: venda.php');
            } 
        }
?>