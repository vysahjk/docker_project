# docker_project

Ce project consiste au deploiement d'un proxy Swag (<https://docs.linuxserver.io/general/swag>) capable de servir plusieurs applications à l'aide de duckdns.org (<https://www.duckdns.org/>).

Toutes les applications sont dockeriser.

1. swag
2. heimdall
3. mattermost
4. gitea
5. plik
6. bookstack
7. wordpress
8. portainer
9. phpmyadmin
10. mariadb
11. nextcloud
12. mongodb
13. server nodejs (code tp2 - mongodb)

Le code de tp#2 est un serveur nodejs express

```bash
https://github.com/vysahjk/dockerizing_node_server
```

## Vérifier Docker service est en cours d'éxecution

---

```bash
sudo service docker start
```

## Créer l'image de projet personnel

```bash
git clone https://github.com/vysahjk/dockerizing_node_server.git
cd dockerizing_node_server
docker build . -t toto-server
```

## Initier le fichier docker compose

```bash
docker compose up -d

```

Une fois terminé, aller sur <https://heimdall.nibiynov.duckdns.org>

## Arrêter les containers

---

```bash
docker compose down
```

## Images

---

### Heimdall

![Heimdaal](https://i.imgur.com/d7Tylr5.png)

### Mattermost

![Mattermost](https://i.imgur.com/x6lMQ56.png)

### Nextcloud

![Nextcloud](https://i.imgur.com/n4tFqp9.png)

### Nextcloud 2

![Nextcloud 2](https://i.imgur.com/AoC7d7t.png)

### Gitea

![Gitea](https://i.imgur.com/8LqxAU1.png)

### Plik

![Plik](https://i.imgur.com/gzrksUr.png)

### Bookstack

![Bookstack](https://i.imgur.com/sJog2tP.png)

### Wordpress

![Wordpress](https://i.imgur.com/zGqCDdV.png)

### Wordpress Admin

![Wordpress](https://i.imgur.com/WWhxdv1.png)

### Portainer

![Portainer](https://i.imgur.com/YwcxTKk.png)

### PhpMyAdmin

![PhpMyAdmin](https://i.imgur.com/NRtqiO3.png)

### PhpMyAdmin 2

![PhpMyAdmin 2](https://i.imgur.com/VYAR1LY.png)

### Server Express Nodejs

![Server Express Nodejs](https://i.imgur.com/DNgqN2X.png)
