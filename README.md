# Gerenciador Logístico

Projeto acadêmico de ADS: sistema de controle de fretes desenvolvido em PHP, MySQL, HTML, CSS, JavaScript e Bootstrap.

## Funcionalidades
- Painel inicial com contadores.
- Cadastro, consulta e edição de produtos, endereços e transportadores.
- Geração de fretes com origem, destino, transportador e vários produtos (quantidade por produto).
- Detalhes de cada frete.
- Consulta de fretes por data e download de relatório CSV (abre no Excel).

## Como executar no XAMPP
1. Inicie **Apache** e **MySQL** no painel do XAMPP.
2. Copie a pasta `gerenciador_logistico` para `C:\xampp\htdocs\`.
3. Acesse `http://localhost/phpmyadmin`.
4. Clique em **Importar**, selecione `database/banco.sql` e execute. O script cria o banco e as tabelas.
5. Abra `http://localhost/gerenciador_logistico/`.
6. Cadastre produto(s), dois endereços e transportador; depois crie um frete e consulte o relatório.

O arquivo `config.php` pressupõe MySQL local com usuário `root` e senha vazia (padrão de muitos ambientes XAMPP). Se necessário, altere as credenciais.

## Organização
- `index.php`: navegação, formulários, operações PHP e relatórios.
- `config.php`: conexão PDO ao MySQL e funções auxiliares.
- `assets/style.css`: aparência das telas.
- `assets/app.js`: adição dinâmica de produtos ao frete.
- `database/banco.sql`: criação do banco e das tabelas.

## Observações
Projeto educacional para execução local. O relatório é exportado em CSV. O Bootstrap é carregado por CDN (é necessária conexão à internet para o estilo externo). Para uso público em produção, acrescentar autenticação, proteção CSRF e validações mais robustas.
