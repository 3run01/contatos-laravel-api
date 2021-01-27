## Sobre

API sistema de contatos

## Requisitos
- PHP 7.2 ou versão posterior.
- Database (ex. MySQL, PostgreSQL, SQLite)
- Web Server (eg: Apache, Nginx)
- [Composer](https://getcomposer.org/).

## Instalação

Rodar o seguinte comando para a instalação dos pacotes:

```
composer install
```

## Configuração
Configurar as variáveis de ambiente do arquivo .env, exemplo:

Banco de dados:
```
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=e-social
DB_USERNAME=docker
DB_PASSWORD=docker
```

Rodar o seguinte comando após configurar o banco de dados:
```
php artisan migrate
```

Configuração de e-mail:
```
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=teste@teste.com
MAIL_FROM_NAME="${APP_NAME}"
```

Rodando projeto em modo de desenvolvimento:
```
php artisan serve
```

## Rodando testes

```
vendor/bin/phpunit
```

## Deploy produção
O domínio deverá apontar para pasta /public NGINX ou APACHE.



