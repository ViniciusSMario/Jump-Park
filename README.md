## Sobre
Teste de desenvolvimento realizado para empresa Jump Park, utilizando a linguagem PHP(versão: 7.4.19) e o Framework Laravel(versão: 8.83.27), além de banco de dados SQL.

## Desafio
O Teste consiste em criar uma API REST com apenas um método de criação e um método de listagem com
filtro e paginação para as tabelas "Users" e "Service Orders" já disponibilizadas.

## Rodando o projeto
Após baixar o projeto é necessário realizar algumas etapas.
    <ul>
        <li>Instalando dependências: Rode o comando "composer install" no terminal dentro do projeto. </li>
        <li>Utilize o comando "php artisan serve" para iniciar o servidor. </li>
        <li><strong>(OPCIONAL)</strong>Utilize o comando "php artisan db:seed" para que os seeders sejam inseridos no banco de dados </li>
    </ul>
    
## Funcionalidades
- Listagem das service_orders com filtro por placa(vehiclePlate) e paginação com 5 itens por página trazendo o usuário atrelado ao registro.
- Criação de service_orders com validação de campos e apresentação de mensagens de erros(fora utilizada a mensagem padrão do framework para apresentá-las).
- Listagem de todos os users.
- Criação de users.
- Seed para users.
- Seed para service_orders.

## Observações
O arquivo Jump Park.postman_collection.json se refere ao arquivo de importação para o POSTMAN que foi utilizado para testes.

