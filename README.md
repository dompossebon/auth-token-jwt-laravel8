# auth-token-jwt-laravel8 + API
 Projeto Laravel Framework 8.35.0, Token, tymon/jwt-auth 1.0.2

## Descrição do Projeto

<p align="center">
Esse Projeto Trata-se de uma Autenticação usando JWT para uma API. Nada Além disso.<p align="center">


### 🛠 Tecnologias

As seguintes ferramentas foram usadas na construção do projeto:

- [Laravel v7.30.4](https://laravel.com/docs/8.x)
- [PHP 7.4.3](https://www.php.net/downloads.php#v7.4.3)
- [jwt-auth](https://jwt-auth.readthedocs.io/en/develop/) ex: composer require tymon/jwt-auth  (Usando 1.0.2)
- [tymon/jwt-auth](https://packagist.org/packages/tymon/jwt-auth#1.0.2)

Funciona com servidor próprio do laravel(php artisan serve).
Modelo Feito e Testado em Linux Ubunto 20.4

## Começando

Clone o repositório do projeto:

Caso você use HTTPS:

git clone https://github.com/dompossebon/auth-token-jwt-laravel8.git

---------------------------------------------------------

Após a clonagem, entre no diretório da aplicação:

cd auth-token-jwt-laravel8

em seguida execute o comandos abaixo:

composer install

Na raiz do projeto localize e Duplique o arquivo .env.example e em seguida renomeie-o para .env usando o comando:

cp .env.example .env

Atenção, o usuário deverá configurar o atributos do banco de Dados em .env

- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=laravel
- DB_USERNAME=root
- DB_PASSWORD=suasenha

entao, após realizar tal tarefa, o usuário deverá rodar os comandos:

---------------------------------------------------------

Então rode o comando:

- php artisan key:generate

- php artisan jwt:secret

dentro do seu .env localize o JWT_SECRET e substitua pela chave abaixo
ps: esta chave nao deverá ser pública

- JWT_SECRET=NBkyWl66aC5q8W6CD16OheZzz9XdqDa3SLPgNl8Z5bxUcRkF9j4FQWYZcy8E2eTn

então siga digitando os comandos...

- php artisan cache:clear

- php artisan config:clear

- php artisan migrate

---------------------------------------------------------

## COLOCANDO O SERVIDOR LARAVEL EM AÇÃO

UTILIZE O COMANDO:

- php artisan serve

Agora basta DIGITAR em seu Brownser e acessar:

-  http://127.0.0.1:8000/

Para Testar a API em ação.
Sugestão é acessar utilizado POSTMAN ou similiar como Insomnia

---------------------------------------------------------

## Para Utilizar com POSTMAN

- Na raiz do Projeto temos uma Pasta Nomeada como postman_collection, acesse esta pasta e importe o arquivo:

- Carrinho-Laravel8.postman_collection.json

Para maiores detalhes consulte o arquivo supracitado

---------------------------------------------------------
## Manual Básico

Primeiro ponto é criar o Usuario, sem ele nada vai funcionar:

(em body/form-data entre com seu usuário e senha)

POST: http://127.0.0.1:8000/api/auth/new/user

Segundo ponto é Obter o Token, sem ele nada vai funcionar:

POST: http://127.0.0.1:8000/api/auth/login

(em body/form-data entre com seu usuário e senha) novamente

copie o token recebido, ele será utilizado em todos os acessos.
Utilize o Token clicando em "Authorization" e em TYPE escolha "Bearer Token".
na Caixa TOKEN cole o seu token.


---------------------------------------------------------

## Construído com
Laravel - O framework PHP para artesãos da Web

## by Possebon
## Contato dompossebon@gmail.com

:+1: ## By Possebon

