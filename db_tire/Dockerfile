FROM mysql:5.7

ENV MYSQL_ROOT_PASSWORD=root123
ENV MYSQL_DATABASE=studentdb

COPY init.sql /docker-entrypoint-initdb.d/

