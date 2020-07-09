#!/bin/bash

service nginx stop

docker build -t imagem_gadoglio .
docker run --name container_gadoglio -d -it -p 80:80 -p 443:443 imagem_gadoglio
docker exec -ti container_gadoglio /bin/bash
