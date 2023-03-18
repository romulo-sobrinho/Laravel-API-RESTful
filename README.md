![logo](https://user-images.githubusercontent.com/68918326/193332767-8248edfa-cf76-4032-8eed-05bf3037838c.PNG)

<hr>
<h1 align="center">🎖️API RESTful - Laravel🎖️</h1>
<hr>
<br>


<h2 align="center">Objetivo</h2>
<p align="center">
  Desenvolver uma API com o padrão REST, com todos os métodos CRUD para dados do seu cão doméstico. A aplicação foi construída com alguns diferenciais: uso de form request para validações, utilização de softdelete para não excluir permanentemente um registro, bem como tratamento de exceções.
  Além disso foi feita a tradução da aplicação para português brasileiro, isso impacta as mensagens de validações do form request.
</p>
<br>
<br>


<h2 align="center">🚨Diferenciais da API🚨</h2>
<br> 

  #### Validação com form request
    ✔️ Mensagens personalizadas para as validações
    ✔️ Mensagem personalizada para erro status code 422
  #### Handler.php
    ✔️ Sobrescrita do método render para mensagem personalizada de erro status code 404

  #### Rota resource
    ✔️ Em vez de uma rota para cada método, é utilizado a rota resource
    
<br>
<br>


<h2 align="center">💡Form Request💡</h2>
<br> 

  #### Regras de validação
![RegrasValidação](https://user-images.githubusercontent.com/68918326/225944501-ef95a0ad-d110-466b-8801-0b36f5d69fed.PNG)
  #### Mensagens Personalizadas
![MensagemPersonalizada](https://user-images.githubusercontent.com/68918326/225944623-98221568-1efc-4d4e-b48c-3f69e7cb6b40.PNG)
  #### Tratamento de erros
![TratamentoErros](https://user-images.githubusercontent.com/68918326/225944725-82ca5566-d0a8-465d-9625-93815b82368c.PNG)

<br>
<br> 


<h2 align="center">Preview</h2>

<br>
<h3 align="center">Realizando a busca de dados (INDEX) com Postman - Método GET</h3>

![index](https://user-images.githubusercontent.com/68918326/225948520-4ebcb603-d575-4eb6-9660-7084f37a8642.gif)

<br>
<h3 align="center">Realizando a busca de um dado específico (SHOW) com Postman - Método GET</h3>

![show](https://user-images.githubusercontent.com/68918326/225948899-af2afdfd-2c55-4dd9-af5f-32aabdb6b0ae.gif)

<br>
<h3 align="center">Realizando inserção de dados (STORE) com Postman - Método POST</h3>

![store](https://user-images.githubusercontent.com/68918326/225948030-09a9b229-91f2-4eee-bb2f-df67a43d20d6.gif)

<br>
<h3 align="center">Realizando a atualização de dados (UPDATE) com Postman - Método PATCH</h3>

![update](https://user-images.githubusercontent.com/68918326/225949518-b42adb03-1db6-41dd-b124-b94109a5c7c4.gif)

<br>
<h3 align="center">Realizando a exclusão (desativação) de dados (DELETE) com Postman - Método DELETE</h3>

![delete](https://user-images.githubusercontent.com/68918326/225950004-fd33b0a9-5b59-4473-acd9-695664df1510.gif)

<br>
<br>


<h2 align="center">🚀Testando a API🚀</h2>
<br> 

  #### Inicie o servidor do laravel
    ✔️ php artisan serve
  #### Acesse as rotas localmente
    ✔️ http://127.0.0.1:8000/api
  #### Endereço local das rotas da API - Utilizado rota resource
    ✔️ index: http://127.0.0.1:8000/api/dogs/
    ✔️ show:  http://127.0.0.1:8000/api/dogs/{id}
    ✔️ store: http://127.0.0.1:8000/api/dogs/
    ✔️ patch: http://127.0.0.1:8000/api/dogs/{id}
    ✔️ delete: http://127.0.0.1:8000/api/dogs/{id}


<br>
<br> 

<hr>
<h3 align="center">🎖️PROJETO EM CONCLUÍDO🎖️</h3>
<hr>
