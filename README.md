# HoneyPOT from winnie
- Isen med thales student project  
- Project duraction: 5 days 
- Project programming: 1day

Prouve of concepte of security solution for protect and time loss in regard of hack (or bad personn)


## Installation

Have [docker](https://docs.docker.com/engine/install/)

```bash
  docker build --pull --rm -f "DOCKERFILE" -t honeypot:latest "."
  docker build --pull --rm -f "DOCKERFILE.attack" -t attack:latest "."
  docker build --pull --rm -f "DOCKERFILE.generator" -t generator:latest "."
```
    
## Usage/Examples

```bash
docker compose -f "docker-compose.yml" up -d --build
```
```bash
docker exec -it honeypot-attack-1 bash
```
Inside the container to "enumerat" the attacked web site
```bash
./feroxbuster -u http://web -x js,html -x php
```
Inside the container to attack the data base of the attacked web site
```bash
sqlmap -u http://web/account/login.php --data="name=iron&password=man" --method POST --dump
```


## Explanation
In french, because "la flemme"  
Nous avons voulu explorer une autre partie de la sécurité, c'est a dire (perdre) le temps.  
Dans cette idée étrange nous avons imaginé un système où en cas d'attaque détécté, nous ne disons rien et jouons les idiots.  
Nous redirigeons notament les requetes sql dite "injection" vers une base de donnée "fake" afin de piéger les hackers, et notament un outils connu, sqlmap.  
Nous avions aussi prévu de rendre une énumeration plus compliqué à exploiter en rajoutant des pages "fake" afin de faire tourner en rond les attaquants.

Le docker compose lance 5 conteneurs :
- honeypot, qui est notre site de demonstration (apache + php + pdo postgres)
- attack, qui reprensente notre attaquant possèdant 2 outils, [sqlmap](https://sqlmap.org/) et [feroxbuster](https://github.com/epi052/feroxbuster)
- generate, qui nous génére les 2 bases de donnée (la fake et la normal). La fake à comme particularité de ne posséder que des utilisateurs ayant le nom "jean"
et 2 bases de donnée, l'une fake et l'autre non sous postgres 


## Authors

- [@Hugo-creator-dev](https://github.com/Hugo-creator-dev)
- [@Victoria-Remont](https://github.com/Victoria-Remont)
- [@Julie-Pages](https://github.com/Julie-Pages)
- [@Blanc-Numa](https://github.com/Blanc-Numa)
- [@Hivanhoe438](https://github.com/Hivanhoe438)
- [@](https://github.com/)