m#!/usr/bin/env sh

USER=root
HOST=45.63.28.222
WEBROOT=/var/www/html/ninetyninepercent

ssh -A $USER@$HOST /bin/bash <<EOF
  cd $WEBROOT
  git pull
  sudo chown -R www-data:www-data .

EOF