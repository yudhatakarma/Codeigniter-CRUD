# Codeigniter-CRUD
Belajar CRUD (Create, Read, Update dan Delete) Menggunakan Codeigniter 3.1.11 2020

#.htaccess
<IfModule mod_rewrite.c>
        Options -Indexes
        RewriteEngine on
        # SecFilterEngine Off
        # SecFilterScanPOST Off
        DirectoryIndex index.php
        RewriteCond %{REQUEST_FILENAME} !-f
        RewriteCond %{REQUEST_FILENAME} !-d
        php_value memory_limit 30M
php_value upload_max_filesize 1024M
php_value post_max_size 1054M
        <IfModule mod_php5.c>
                RewriteRule ^(.*)$ index.php/$1 [L]
        </IfModule>
        <IfModule !mod_php5.c>
                RewriteRule ^(.*)$ index.php?/$1 [L]
        </IfModule>
</IfModule>
<IfModule !mod_rewrite.c>
        ErrorDocument 404 /index.php
</IfModule>
