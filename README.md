<h1>Código Aberto - Temporada 01</h1>

<h2>Sobre o Projeto</h2>
Este repositório apresenta um projeto desenvolvido como parte do curso [Código Aberto](https://youtube.com/playlist?list=PLi_gvjv-JgXpyYOJA-8TDQ0BLLugiX4jO&si=_C-rlG0bUt2X-e2i). O objetivo principal do projeto é a criação de um sistema de login em PHP, implementado com as melhores práticas de programação, e com recursos de autenticação através das plataformas Facebook e Google.

<h2>Instalação</h2>
Para instalar o projeto em sua máquina siga o passo a passo.

1. Construa o ambiente Docker executando:

```sh
docker build .
docker-compose up -d
```

2. Instale o composer com o comando:

```sh
docker-compose exec app composer install
```

3. Copie o arquivo Source/Config.example.php e edite ele com as suas preferências de projeto:

```sh
cp source/Config.example.php  source/Config.php
```
