#!/bin/bash

sudo apt-get update
sudo apt-get upgrade

sudo apt-get install apache2 -y
sudo apt-get install lighttpd -y
sudo apt-get install php -y
sudo apt-get install php-xml -y

rm -r /var/www/html/*

git clone https://github.com/Walter-Ohman/Web-Slide /var/www/html/
