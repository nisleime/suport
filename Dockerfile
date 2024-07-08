FROM php:8.1-apache

# Copia o código fonte do projeto para o diretório padrão do servidor web do Apache
COPY . /var/www/html
