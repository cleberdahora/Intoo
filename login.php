
<?php

/*
 * Avalia��o de conhecimentos para vaga: �Desenvolvedor Front-End�
 * Arquivo 'login.php'
 */

// Capturando dados de acesso
$username = filter_input(INPUT_POST, "username");
$password = filter_input(INPUT_POST, "password");

$Login = new Login($username, $password);
echo json_encode($Login->auth());

// Classe de Login
class Login {

    // Atributos Principais
    private $username;
    private $password;

    // Construtor
    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    // M�todo de Aut�ntica��o
    public function auth() {
        $answer = array();
        try {
            $validacao = $this->validateAccess();
            if (empty($this->username) || empty($this->password)) {
                throw new Exception("error", 10);
            } else if ($this->username != $validacao["username"]) {
                throw new Exception("error", 1);
            } else if ($this->password != $validacao["password"]) {
                throw new Exception("error", 2);
            } else {
                $answer = array("type" => "success", "nome" => $validacao["nome"]);
            }
        } catch (Exception $e) {
            $message_id = $e->getCode();
            $answer = array("type" => $e->getMessage(), "message" => $this->getMessage($message_id));
        }
        return $answer;
    }

    // M�todos de Apoio
    private function getMessage($message_id) {
        $answer = "";
        switch ($message_id) {
            case 1:
                $answer = "Usuario preenchido nao e valido";
                break;
            case 2:
                $answer = "Usuario e senha invalidos";
                break;
            case 10:
                $answer = "Voce deve settar via POST [username] & [password]";
                break;
            default:
                $answer = "Ops.. Ocorreu um erro inexperado";
                break;
        }
        return $answer;
    }

    private function validateAccess() {
        return array("username" => "intoo", "password" => "intoo", "nome" => "Fulado Deltal");
    }

}



