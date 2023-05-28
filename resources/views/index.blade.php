<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/imports.css')}}" type="text/css">
    <title>AKFutebol | HOME</title>
</head>
<body>
                                                    <!-- START DIV QUE ENGLOBA O SITE -->
    <div class="site">
        <!-- START HEADER -->
    <header class="cont-header">
        
        <a href="{{route('inicio')}}"><img src="{{asset('assets/images/logotipo-akfutebol.png')}}" alt="logo-akfutebol"></a>
        <!-- START MENU -->
        <nav>
            <ul>
                <li><a href="#noticias" class="btn btn-branco">Notícias</a></li>
                <li><a href="#sobre-contato" class="btn btn-branco">Contato</a></li>
                <li><a href="#sobre-contato" class="btn btn-branco">Sobre</a></li>
                <li><a href="{{route('login')}}" class="btn btn-branco">Login</a></li>
            </ul>
        </nav>
        <!-- END MENU -->
    </header>
        <!-- END HEADER -->

     <!-- START FAIXA -->
     <div class="faixa">
        <span>o melhor site de futebol!</span>
    </div>
    <!-- END FAIXA -->

        <!-- START BANNER -->
        <aside>
        <div class="banner">
        <div class="banner-img">
             <a href=""><img class="selected" id="banner-noticia1" src="./assets/images/banner-noticia1.jpg" alt="imagem-do-banner1"></a>
             <a href=""><img  id="banner-noticia2" src="{{asset('assets/images/banner-noticia2.jpg')}}" alt="imagem-do-banner2"></a>
             <a href=""><img id="banner-noticia3" src="{{asset('assets/images/banner-noticia3.jpg')}}" alt="imagem-do-banner3"></a>
             <a href=""><img id="banner-noticia4" src="{{asset('assets/images/banner-noticia4.jpg')}}" alt="imagem-do-banner4"></a>
             <a href=""><img id="banner-noticia5" src="{{asset('assets/images/banner-noticia5.jpeg')}}" alt="imagem-do-banner5"></a>
             <div class="legenda"><span><a href="">DESTAQUES</a> </span>
            </div>
         </div>
        </div>
        </aside>
        <!-- END BANNER -->

        <!-- START REDES SOCIAIS LATERAL -->
            <div class="redes-sociais-lateral">
                <ul>
                    <li><a href="#"><img src="{{asset('assets/images/facebook-logo.png')}}" alt="facebook-akfutebol"></a></li>
                    <li><a href="#"><img src="{{asset('assets/images/instagram-logo.png')}}" alt="instagram-akfutebol"></a></li>
                    <li><a href="#"><img src="{{asset('assets/images/whatsapp-logo.png')}}" alt="whatsapp-akfutebol"></a></li>
                    <li><a href="#"><img src="{{asset('assets/images/twitter-logo.png')}}" alt="twitter-akfutebol"></a></li>
                </ul>
            </div>
        <!-- END REDES SOCIAIS LATERAL -->



        <!-- START MAIN -->
        <main class="cont-main">

            <!-- START BARRA NOTICIAS INICIO-->
            <section>
            <h1 class="faixa-branca" id="noticias">NOTÍCIAS</h1>
             <!-- START GRID E LISTA COM BLOCOS -->
            <div class="conjunto-main">
                <!-- START GRID ALBUM -->
                <div class="container">
                    <div class="item"><img src="{{asset('assets/images/banner-noticia3.jpg')}}"alt="album-noticia1"></div>                                  
                    <div class="item"><img src="{{asset('assets/images/banner-noticia3.jpg')}}"alt="album-noticia2"></div>
                    <div class="item"><img src="{{asset('assets/images/banner-noticia3.jpg')}}"alt="album-noticia3"></div>
                    <div class="item"><img src="{{asset('assets/images/banner-noticia3.jpg')}}"alt="album-noticia4"></div>
                </div>
                <!-- END GRID ALBUM -->

                <!-- START BARRA DE NOTICIAS -->
                <div class="container-noticias">
                    <h1>últimas notícias</h1>
                    <div class="conjunto-noticias">
                    <a href="#" target="_blank"><div class="noticias-blocos bloco1"><span class="n-cj-n">NOTÍCIA1</span> <p class="t-cj-n ">Nosso serviço de atendimento ao consumidor está disponível para atendê-lo de segunda a sexta-feira das 8h às 17h.</p></div></a>
                    <a href="#" target="_blank"><div class="noticias-blocos bloco2"><span class="n-cj-n">NOTÍCIA1</span><p class="t-cj-n ">Nosso serviço de atendimento ao consumidor está disponível para atendê-lo de segunda a sexta-feira das 8h às 17h.</p></div></a>
                    <a href="#" target="_blank"><div class="noticias-blocos bloco3" ><span class="n-cj-n">NOTÍCIA1</span><p class="t-cj-n ">Nosso serviço de atendimento ao consumidor está disponível para atendê-lo de segunda a sexta-feira das 8h às 17h.</p></div></a>
                    <a href="#" target="_blank"><div class="noticias-blocos bloco4" ><span class="n-cj-n">NOTÍCIA1</span><p class="t-cj-n ">Nosso serviço de atendimento ao consumidor está disponível para atendê-lo de segunda a sexta-feira das 8h às 17h.</p></div></a>
                </div>
            </div>
                <!-- END BARRA DE NOTICIAS -->
            </div>
            </section>
            <!-- END GRID E LISTA COM BLOCOS -->

            <section class="conjunto-noticias-v-t">
            <!-- START BARRA NOTICIAS-VIDEOS -->
            <h1 class="faixa-branca">VÍDEOS {{$teste}}</h1>
            <!-- END BARRA NOTICIAS-VIDEOS -->
            <!-- START NOTICIAS COM VIDEO -->
            @foreach($dadosNotVideos as $value)
            <div class="noticias-v-t">
                <div class="video-n">
                    <iframe class="video1" src="{{$value->url}}" frameborder="0" tittle="video-haaland" allowfullscreen width="690" height="390px"></iframe>
                </div>
                <div class="text-n">
                    <h1>{{strtoupper($value->titulo)}}</h1>
                    <p>{{$value->texto}}</p>
                </div>
            </div>
            @endforeach
                    
       
            
            </section>
             <!-- END NOTICIAS COM VIDEO -->

             <!-- START CARD DE NOTICIAS -->
             <section class="cards-da-main">
                <h1 class="faixa-branca">CARDS</h1>
            <div class="card-main">
                <div class="img-card">
                    <a href=""><img src="{{asset('assets/images/banner-noticia1.jpg')}}" alt="noticia"></a>
                </div>
                <section class="txt-card">                      
                <article>
                    <h1>TESTE</h1>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years... <a href="#" class="btn btn-azul">Saiba Mais...</a> </p>
                </article>
                </section>
            </div>
            <div class="card-main">
                <div class="img-card">
                <a href=""><img src="{{asset('assets/images/banner-noticia1.jpg')}}" alt="noticia"></a>
                </div>
                <section class="txt-card">                      
                <article>
                    <h1>TESTE</h1>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years... <a href="#" class="btn btn-azul">Saiba Mais...</a> </p>
                </article>
                </section>
            </div>
            <div class="card-main">
                <div class="img-card">
                    <a href=""><img src="{{asset('assets/images/banner-noticia1.jpg')}}" alt="noticia"></a>
                </div>
                <section class="txt-card">                      
                <article>
                    <h1>TESTE</h1>
                <p>It is a long fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years... <a href="#" class="btn btn-azul">Saiba Mais...</a> </p>
                </article>
                </section>
            </div>
            </section>
            <!-- END CARD DE NOTICIAS -->
        </main>      
        <!-- END MAIN -->

        <!-- START RODAPE  -->
        <footer id="sobre-contato">
        <!-- LOGO RODAPE -->
        <div class="footer-logo">
            <a href="./index.html"><img src="{{asset('assets/images/logotipo-akfutebol.png')}}" alt="logo-do-rodape"></a>
        </div>
        <!-- END LOGO RODAPE -->
            <div class="boxs redes-sociais-footer">
                <h1>Redes-Sociais</h1>
                <ul>
                    <li><a href="#"><img src="{{asset('assets/images/instagram-logo.png')}}" alt="instagram-akfutebol"></a></li>
                    <li><a href="#"><img src="{{asset('assets/images/facebook-logo.png')}}" alt="facebook-akfutebol"></a></li>
                    <li><a href="#"><img src="{{asset('assets/images/twitter-logo.png')}}" alt="twitter-akfutebol"></a></li>
                    <li><a href="#"><img src="{{asset('assets/images/whatsapp-logo.png')}}" alt="whatsapp-akfutebol"></a></li>
                </ul>
            </div>
            <div class="boxs ">
                <h1>CONTATO</h1>
                <ul >
                    <li><a href="#">(11)4003-9588</a></li>
                    <li><a href="#">akfutebol@gmail.com</a></li>
                    <li><a href="#">Central de Atendimento</a></li>
                </ul>
            </div>
            <div class="boxs align-j">
                <h1>SOBRE akfutebol</h1>
                <ul>
                    <li><p>O site AKFutebol é um projeto de TCC do curso de Desenvolvimento de Sistemas, com o intuito de passar notícias sobre futebol.</p></li>
                </ul>
            </div>

        <!-- RODAPE -->
        </footer>
         <!-- END FOOTER -->

         <!-- START POS FOOTER -->
        <div class="p-footer">
            <div class="cv-footer">
                <span>Copyright ©  2023. AKFutebol - Todos direitos reservados</span>
                <ul>
                    <li><a href="{{route('inicio')}}">AKFutebol</a></li>
                    <li><a href="#noticias">Notícias</a></li>
                    <li><a href="#sobre-contato">Contato</a></li>
                    <li><a href="#sobre-contato">Sobre</a></li>
                    <li><a href="{{route('login')}}">Login</a></li>
                </ul>
            </div>
        </div>
         <!-- END POS FOOTER -->
    </div>

                                                    <!-- END DIV QUE ENGLOBA O SITE -->
        <script src="{{asset('assets/javascript/slider.js')}}"></script>

</body>
</html>