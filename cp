<VirtualHost *:80>
    ServerName listadetarefas.local
    DocumentRoot /var/www/lista/public_html
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
