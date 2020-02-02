<?php

namespace Src\Controller;
use Src\Handller\UrlHandller;

class Structure extends UrlHandller {
    public function setStructure($title = null, $classBody = null){
        $classBody    = ($classBody)? $classBody : 'home';
        $title        = ($title)? $title : 'LOL Idiomas Cursos de Inglês e Espanhol com Garantia';
        $baseDir      = $this->getUrl();
        $urlPathImg   = $baseDir . 'Src/View/web/assets/images/';
        $urlPathCss   = $baseDir . 'Src/View/web/assets/css/';
        $urlPathJs    = $baseDir . 'Src/View/web/assets/js/';

        $this->Header = '<!DOCTYPE html>
                         <html>
                             <head>
                                  <link rel="icon" type="image/jpg" href="' . $urlPathImg . 'timthumb.jpg' . '">
                                  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                                  <title>' . $title . '</title>
                                  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
                                  <link rel="stylesheet" type="text/css" href="' . $urlPathCss . 'bootstrap.min.css' . '">
                                  <link rel="stylesheet" type="text/css" href="' . $urlPathCss . 'slick.min.css' . '">
                                  <link rel="stylesheet" type="text/css" href="' . $urlPathCss . 'slick-theme.min.css' . '">
                                  <link rel="stylesheet" type="text/css" href="' . $urlPathCss . 'styles.css' . '">
                                  <script type="text/javascript" src="' . $urlPathJs . 'jquery/jquery-3.4.1.slim.min.js' . '"></script>
                                  <script type="text/javascript" src="' . $urlPathJs . 'bootstrap/bootstrap.min.js' . '"></script>
                                  <script type="text/javascript" src="' . $urlPathJs . 'slick/slick.min.js' . '"></script>
                             </head>
                             <body class="' . $classBody . '">
                                <main>
                                    <header>
                                        <div class="header">
                                            <div class="top-header">
                                                <div class="logo-home">
                                                    <a href="' . $baseDir . '">
                                                        <img class="img-fluid" src="' . $urlPathImg . 'logo.png' . '" alt="Logo LOL-Idiomas">
                                                    </a>
                                                </div>
                                                <div class="nav">
                                                    <nav class="menu-opcoes">
                                                        <ul>
                                                            <li><a href="index">HOME</a></li>
                                                            <li><a href="cursos">CURSOS</a></li>
                                                            <li><a href="quemsomos">LOL IDIOMAS</a></li>
                                                            <li><a href="contato">BLOG</a></li>
                                                            <li><a href="contato">CONTATO</a></li>
                                                        </ul>
                                                    <nav>
                                                </div>
                                                <div class="contact">
                                                    <img class="telefone-fixo" src="' . $urlPathImg . 'telefone-fixo.png' . '" alt="Telefone LOL - Escola de Idiomas">
                                                    <span>(11) 4966-5496</span>
                                                </div>
                                            </div>
                                        </div>
                                    </header>
                                    <div class="main-container">';
                    $this->Footer = '</div>
                                    <footer class="footer">
                                        <ul>
                                            <li>&copy; 2017 - LOL Escola de Idiomas</li>
                                        </ul>
                                        <ul>
                                            <li class="footer-title">Institucional</li>
                                            <li><a href="">Sobre a LOL</a></li>
                                            <li><a href="">Trabalhe Conosco</a></li>
                                            <li><a href="">Indique um amigo</a></li>
                                        </ul>
                                        <ul>
                                            <li class="footer-title">Atendimento</li>
                                            <li><a href="">Fale Conosco</a></li>
                                            <li><a href="mailto:contato@lolidiomas.com.br">E-mail:contato@lolidiomas.com.br</a></li>
                                            <li>Telefone: (11) 4966-5496</li>
                                            <li><a target="_blank" href="https://api.whatsapp.com/send?phone=5511943885572&text=Olá, gostaria de mais informações.">Whatsapp: (11) 9 4388-5572</a></li>
                                            <li><a href="">Sugestões</a></li>
                                        </ul>
                                        <ul>
                                            <li class="footer-title">Cursos e Modalidades</li>
                                            <li><a href="">Inglês</a></li>
                                            <li><a href="">Espanhol</a></li>
                                            <li><a href="">Super Conversation Class</a></li>
                                        </ul>
                                        <ul>
                                            <li class="footer-title">Área do Aluno</li>
                                            <li><a href="">Acessar</a></li>
                                            <li><a href="">Atividades</a></li>
                                            <li><a href="">Ranking geral</a></li>
                                        </ul>
                                        <ul>
                                            <li class="footer-title">Siga-nos</li>
                                            <li><a target="_blank" href="https://www.facebook.com/lolidiomasoficial/"><img class="social-media" src="' . $urlPathImg . 'facebook.png' . '"/>Facebook</a></li>
                                            <li><a target="_blank" href="https://www.instagram.com/lolidiomasoficial/"><img class="social-media" src="' . $urlPathImg . 'instagram.png' . '"/>instagram</a></li>
                                            <li><a href=""><img class="social-media" src="' . $urlPathImg . 'youtube.png' . '"/>Youtube</a></li>
                                        </ul>
                                    </footer>
                                </main>
                             </body>
                         </html>';
    }
    public function getHeader(){
        return $this->Header;
    }
    public function getFooter(){
        return $this->Footer;
    }
}
