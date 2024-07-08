FROM php:8.1-apache

# Instala o nano e as extensões PDO
RUN apt-get update && apt-get install -y nano \
    && docker-php-ext-install pdo pdo_mysql

# Copia o código fonte do projeto para o diretório padrão do servidor web do Apache
COPY . /var/www/html

# Concede as permissões necessárias para o diretório de armazenamento e cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
