
# Teste Conecta Lá

Este é um projeto simples desenvolvido em CodeIgniter 3, destinado a gerenciar usuários de forma básica.

## Pré-requisitos

- PHP >= 5.4
- MySQL
- Servidor web (XAMPP, WAMP, MAMP ou PHP Built-in Server)

## Instalação

1. **Clone o repositório:**

 ```bash
 git clone https://github.com/erichfr/teste-conecta-ci
 ```
2. **Acesse a pasta do projeto:**

 ```bash
cd teste-conecta-ci
```
3. **Crie o banco de dados:**

 ```bash
 No MySQL, crie um banco de dados chamado teste_conecta.
```
4. **Configure as credenciais do banco de dados:**

 ```bash
Edite o arquivo application/config/database.php com suas credenciais:

$db['default'] = array(
		'hostname' => 'localhost',
		'username' => '',
		'password' => '',
		'database' => 'teste_conecta',
		'dbdriver' => 'mysqli',
);
```
5. **Configure a URL base:**

 ```bash
Edite o arquivo application/config/config.php e defina a base URL:

$config['base_url'] = 'http://localhost/seu_projeto/';
```
6. **Crie a tabela:**

 ```bash
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE
);
```
7. **Inicie o servidor:**

 ```bash
No caso abaixo usei o PHP Built-in Server
php -S localhost:8000
```
## Endpoints

| Método | URL                         	| Descrição                                      | Parâmetros                   | Body (JSON)                                      |
|--------|-----------------------------	|------------------------------------------------|------------------------------|--------------------------------------------------|
| GET    | `/users/index`              	| Retorna todos os usuários                      | N/A                          | N/A                                              |
| GET    | `/users/show/{id}`          	| Retorna um usuário específico                  | `id`: ID do usuário          | N/A                                              |
| POST   | `/users/create`        			| Insere um novo usuário                         | N/A                          | `{"name": "Nome do Usuário", "email": "email@exemplo.com"}` |
| PUT    | `/users/update/{id}`   | Atualiza um usuário existente                  | `id`: ID do usuário          | `{"name": "Nome Atualizado", "email": "email@exemplo.com"}` |
| DELETE | `/users/delete/{id}`   | Deleta um usuário                              | `id`: ID do usuário          | N/A                                              |
