<?php

namespace Src\Handller;

class UrlHandller{
    public function getUrl($pathDir = null){
        $pathDir = ($pathDir)? '/' . $pathDir: '/';

        if(isset($_SERVER['HTTPS_HOST'])){
            $protocol = 'https://';
        } else {
            $protocol = 'http://';
        }

        return $protocol . $_SERVER["SERVER_NAME"] . $pathDir;
    }
}

?>