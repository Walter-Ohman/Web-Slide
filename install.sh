#!/bin/bash

sudo apt-get update
sudo apt-get upgrade

sudo apt-get install apache2 -y
sudo apt-get install lighttpd -y
sudo apt-get install php -y
sudo apt-get install php-xml -y

sudo rm -r /var/www/html/*

sudo mkdir /var/www/html/

sudo git clone https://github.com/Walter-Ohman/Web-Slide /var/www/html/

sudo mkdir /var/www/html/tempimgs
sudo mkdir /var/www/html/uploads
sudo mkdir /var/www/html/imgs

sudo chmod -R 777 /var/www/html/

sudo pip install pdf2image
