 <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se todos os campos estão preenchidos, tem que estar preenchidos(Usuario gosta de complicar)
    if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
        // Recebe os dados do formulário
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        // Destinatário do e-mail
        $destinatario = "fonsecacandida67@gmail.com"; 

        // Constrói o corpo do e-mail
        $corpo_email = "Nome: " . $name . " " . $surname . "\n";
        $corpo_email .= "E-mail: " . $email . "\n";
        $corpo_email .= "Assunto: " . $subject . "\n";
        $corpo_email .= "Mensagem: \n" . $message;

        // Envia o e-mail
        if (mail($destinatario, $subject, $corpo_email)) {
            echo "Obrigado por entrar em contato!"; // Mensagem de sucesso
        } else {
            echo "Desculpe, houve um problema no envio da mensagem."; // Mensagem de erro caso tenha tenha
        }
    } else {
        echo "Por favor, preencha todos os campos do formulário."; // Mensagem de erro caso outro
    }
}
?>