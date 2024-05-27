<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['userName'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $cell = $_POST['cell'];
    $senha = $_POST['password'];
    $confirmar = $_POST['confirmar'];

    $erroNome = $erroSobrenome = $erroEmail = $erroCell = $erroSenha = $erroConfirma = "Nenhum";

    // Validação de nome
    if (empty($nome)) {
        $erroNome = "Favor informar nome";
    } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $nome)) {
        $erroNome = "Apenas letras";
    }

    // Validação de email
    if (empty($email)) {
        $erroEmail = "Favor informar um email";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erroEmail = "Favor informar um email válido";
    }

    // Validação de sobrenome
    if (empty($sobrenome)) {
        $erroSobrenome = "Favor informar sobrenome";
    } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $sobrenome)) {
        $erroSobrenome = "Apenas letras";
    }

    // Validação de telefone
    if (empty($cell)) {
        $erroCell = "Favor informar um número de celular";
    } elseif (!preg_match("/^\d{2}-\d{5}-\d{4}$/", $cell)) {
        $erroCell = "Insira um número de telefone válido no formato 99-99999-9999";
    }

    // Validação de senha
    if (empty($senha)) {
        $erroSenha = "Por favor, insira uma senha.";
    } elseif (strlen($senha) < 6) {
        $erroSenha = "Por favor, insira uma senha com pelo menos 06 dígitos";
    }

    // Validação de confirmação de senha
    if (empty($confirmar)) {
        $erroConfirma = "Por favor, repita a senha anterior.";
    } elseif ($confirmar != $senha) {
        $erroConfirma = "As senhas precisam ser iguais.";
    }

    if ($erroConfirma == "Nenhum" && $erroSenha == "Nenhum" && $erroCell == "Nenhum" && $erroSobrenome == "Nenhum" && $erroEmail == "Nenhum" && $erroNome == "Nenhum") {
        echo "<script>alert('Cadastro enviado com sucesso! $nome $sobrenome, você será redirecionado à página inicial.');
        window.location.href = './index.php';</script>";
    }
}
?>
