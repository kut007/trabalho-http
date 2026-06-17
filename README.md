# Projeto Web II — URL, QueryString e Métodos HTTP (GET e POST)

## Integrantes

-Heder de souza Silva
-Erick Piacente
-Antônio
-Heitor pedroni

## Tema do Projeto

O projeto foi feito com o foco de apresentar e explicar sobre:

* URL
* QueryString
* Métodos HTTP GET e POST
* Envio de dados entre páginas com PHP

## Objetivo

Criar um sistemas simples usando os metodos **Get** e **Post** e mostrar usando um formulário como as informações são enviadas e recebidas

## Conceitos abordados

## URL

A URL (Uniform Resource Locator) é o endereço utilizado para acessar páginas na web.

Exemplo:

```text
http://localhost/trabalgo-http/index.php
```

ela mostra onde algo esta localizado

## QueryString

A QueryString é a parte da URL que envia parâmetros para outra página usando o metodo GET

Exemplo:

```text
get.php?nome=Heder&idade=16
```

Neste exemplo:

* nome = Heder
* idade = 16

esses dados são pegos pelo PHP usando:

```php
$_GET["nome"]
$_GET["idade"]
```

## Método GET

O método GET envia dados pela própria URL.

Exemplo:

```html
<form method="GET">
```

### Vantagens:

* simples de usar
* rápido
* permite compartilhar links com parâmetros

### Desvantagens:

* os dados ficam visíveis
* menos seguro para informações sensíveis

## Método POST

O método POST envia dados no corpo da requisição(não podem ser pegos na url)

Exemplo:

```html
<form method="POST">
```

Captura em PHP:

```php
$_POST["nome"]
$_POST["senha"]
```

### Vantagens:

* mais seguro
* ideal para senhas e dados importantes
* não expõe dados na URL

### Desvantagens:

* não pode ser compartilhado facilmente por link

## Estrutura do Projeto

```text
trabalho-http/
│── index.php
│── get.php
│── post.php
│── README.md
```

## Demonstração do Projeto

### Tela inicial
<img width="672" height="971" alt="image" src="https://github.com/user-attachments/assets/dc673f36-421e-4a9b-9b19-41147bec1f7b" />

### Formulário GET

<img width="680" height="721" alt="image" src="https://github.com/user-attachments/assets/9a903072-cf89-487a-b698-7f7ac473ae9d" />

### Resultado GET

<img width="583" height="575" alt="image" src="https://github.com/user-attachments/assets/e03764cd-a356-4106-93d6-362e3f45d976" />

### Formulário POST

<img width="687" height="727" alt="image" src="https://github.com/user-attachments/assets/b99e6c14-2952-480c-8ffc-303da9cf055e" />

### Resultado POST

<img width="622" height="611" alt="image" src="https://github.com/user-attachments/assets/02131c3a-25fc-4328-b0ed-5ff80b3d418c" />

## Vídeo Explicativo

https://youtu.be/u6U4hr4GfQY?si=xVU3ClP2H94oLXwk

## Conclusão

Com este projeto foi possível compreender como funcionam as URLs, QueryStrings e os métodos HTTP GET e POST.

A prática mostrou que:

* GET é útil para dados mais simples e que possam ser compartilhados
* POST é melhor quando os dados precisam ser protegidos e precisar de mais segurança
