# Segurança Da Informação

## Integrantes

* Caíque Santos
* Fabiola Siqueira
* Jair Aragão 
* Nache Matos
* Rafael Rezende
* Robson Martins

## Proposta

Software que mostrará e solicitará permissão quando as políticas de uso de informações forem atualizadas e enviará um documento via email informando de maneira simples o uso e os responsáveis pelos dados assim como exigido na LGPD.
O documento será gerado com base nas informações passadas através de uma interface utilizada pelo responsavél da empresa.
A integridade da informação passada será garantida por um hash.

## 1° Entrega
* Hash ainda não implementado
* Front-end POP-UPs usuário final

## 2° Entrega
* Envio automático de email

## 3° Entrega
* Criação do questionario a ser preenchido pelos controladores de dados

## 4° Entrega
* Algoritmo de hash aplicado

* Alteração do envio automático de emails, passando a usar javax.email

* Passagem de respostas dadas no questionário para arquivo PDF usando PHP
![gifqpdf1](https://github.com/JairAragao/SegurancaDaInformacao/blob/master/imagens/entrega_4/gifqpdf2.gif)
![gifpdf2](https://github.com/JairAragao/SegurancaDaInformacao/blob/master/imagens/entrega_4/gifpdf2.gif)


## Tecnologias e Requisitos necessários para o funcionamento dos códigos

Transformação do questionario html em pdf com PHP
1.	Instalar o composer https://getcomposer.org/download/
2.	Abrir o cmd no diretório da pasta dentro do xampp
3.	No cmd, digitar o comando:  composer require mpdf/mpdf
4.	Adicionar em mpdf.php:  require_once __DIR__ . '/vendor/autoload.php';

