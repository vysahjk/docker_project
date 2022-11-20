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
