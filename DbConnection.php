<?php 
    class DbConnection {
        public static function make()
        {
            return new PDO(
                'mysql:host=127.0.0.1;dbname=info',
                'root',
                ''
            );
        }
    
    }


?>