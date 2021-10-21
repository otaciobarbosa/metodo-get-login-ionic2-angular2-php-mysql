# Metodo-GET-Login-Ionic2-Angular2-PHP-MySQL
Criar a base de dados em seu servidor contido na pasta db

Colocar no seu servidor php a pasta api-php onde contem o arquivo login.php, e se necessário alterar as configurações de conexão:

---> $Mysqli = new mysqli('127.0.0.1', 'root', '', 'super');

No arquivo: 
login\src\pages\home\home.service.ts alterar o urlDest para o caminho que consta a sua pasta api-php:

---> urlDest = "http://127.0.0.1/api-php/login.php?username=" + user.username + "&password=" + user.password;

Observações:
Ionic Version: 2.2.1
Angular: 2.0.0
Node Version:v7.5.0
