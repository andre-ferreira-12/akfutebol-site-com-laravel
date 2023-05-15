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

        <!-- START HEADER -->
    <header class="cont-header login-cadastro cadastro-adm">
        
        <a href="{{route('inicio')}}"><img src="{{asset('assets/images/logotipo-akfutebol.png')}}" alt="logo-akfutebol"></a>
        <!-- START MENU -->
        <nav>
            <ul>
                <li><a href="#albuns-conjunto-nt" class="btn btn-branco">album/blocos</a></li>
                <li><a href="#videos-noticias" class="btn btn-branco">videos/noticias</a></li>
                <li><a href="#sobre-contato" class="btn btn-branco">Sobre</a></li>
                <li><a href="{{route('login')}}" class="btn btn-branco">Login</a></li>
            </ul>
        </nav>
        <!-- END MENU -->
    </header>
        <!-- END HEADER -->
         

                  <main class="cont-main">
                    
                    <!-- START ALBUM/BLOCOS -->

                  <section id="albuns-conjunto-nt">
                    <div class="faixa-branca faixa-adm"><span>album/blocos</span></div>
                  <div class="albuns-conjunto-adm">
                  <div class="album1 style-album">
                    <label for="item-album1" class="label-a-b">Insira a imagem do album (1)</label>
                    <input type="file" accept="image/*" name="imagem" id="noticia1-album">
                  </div>  
                  <div class="album2 style-album">
                    <label for="item-album1" class="label-a-b">Insira a imagem do album (2)</label>
                    <input type="file" accept="image/*" name="imagem" id="noticia2-album">
                  </div>
                  <div class="album3 style-album">
                    <label for="item-album1" class="label-a-b">Insira a imagem do album (3)</label>
                    <input type="file" accept="image/*" name="imagem" id="noticia3-album">
                  </div>
                  <div class="album4 style-album">
                    <label for="item-album1" class="label-a-b">Insira a imagem do album (4)</label>
                    <input type="file" accept="image/*" name="imagem" id="noticia4-album">
                  </div>   
                  </div>
                  <div class="blocos-conjunto-adm">
                  <div class="bloco1 style-bloco">
                    <label for="titulo-bloco1" class="label-a-b b">Insira o titulo do bloco (1)</label>
                    <input class="input-b" type="text" name="titulo-bloco1" id="titulo-bloco1" placeholder="INSIRA O TITULO DO BLOCO DE NOTICIA">
                    <textarea class="textarea-b" name="materia-bloco1" id="materia-bloco1" cols="30" rows="10" placeholder="INSIRA A MATERIA DO BLOCO DE NOTICIA"></textarea>
                  </div>
                  <div class="bloco2 style-bloco">
                    <label for="titulo-bloco2" class="label-a-b b">Insira o titulo do bloco (3)</label>
                    <input class="input-b" type="text" name="titulo-bloco2" id="titulo-bloco2" placeholder="INSIRA O TITULO DO BLOCO DE NOTICIA">
                    <textarea class="textarea-b" name="materia-bloco2" id="materia-bloco2" cols="30" rows="10" placeholder="INSIRA A MATERIA DO BLOCO DE NOTICIA"></textarea>
                  </div>  
                  <div class="bloco3 style-bloco">
                    <label for="titulo-bloco3"  class="label-a-b b">Insira o titulo do bloco (3)</label>
                    <input class="input-b" type="text" name="titulo-bloco3" id="titulo-bloco3" placeholder="INSIRA O TITULO DO BLOCO DE NOTICIA">
                    <textarea class="textarea-b" name="materia-bloco3" id="materia-bloco3" cols="30" rows="10" placeholder="INSIRA A MATERIA DO BLOCO DE NOTICIA"></textarea>
                  </div>  
                  <div class="bloco4 style-bloco">
                    <label for="titulo-bloco4" class="label-a-b b">Insira o titulo do bloco (4)</label>
                    <input class="input-b" type="text" name="titulo-bloco4" id="titulo-bloco4" placeholder="INSIRA O TITULO DO BLOCO DE NOTICIA">
                    <textarea class="textarea-b" name="materia-bloco4" id="materia-bloco4" cols="30" rows="10" placeholder="INSIRA A MATERIA DO BLOCO DE NOTICIA"></textarea>
                  </div>                     
                  </div>
                  </section>
                  
                  <!-- END ALBUM/BLOCOS -->

                    <section id="videos-noticias">
                    <div class="faixa-branca faixa-adm"><span>videos/noticias</span></div>
                    <div class="noticias-v-t-adm">
                        <div class="noticias-v-t-1">
                            <h1 class="text-edt-adm">Vídeo com noticia 1</h1>
                            <input class="noticias-vt-edt inp-vt" type="text" name="titulo-noticias-v-t-adm" id="titulo-noticias-v-t" placeholder="INSIRA O TITULO DA NOTICIA">
                            <textarea class="noticias-vt-edt text-vt" name="materia-noticias-v-t-adm" id="materia-noticias-v-t" placeholder="INSIRA A MATERIA DA NOTICIA" cols="30" rows="10"></textarea>
                            <input class="noticias-vt-edt inp-vt" type="url" name="link-noticias-v-t-adm" id="link-noticias-v-t" placeholder="INSIRA O LINK DO VIDEO">
                        </div>
                        <div class="noticias-v-t-1">
                            <h1 class="text-edt-adm">Vídeo com noticia 2</h1>
                            <input class="noticias-vt-edt inp-vt" type="text" name="titulo-noticias-v-t-adm" id="titulo-noticias-v-t2" placeholder="INSIRA O TITULO DA NOTICIA">
                            <textarea class="noticias-vt-edt text-vt" name="materia-noticias-v-t-adm" id="materia-noticias-v-t2" placeholder="INSIRA A MATERIA DA NOTICIA" cols="30" rows="10"></textarea>
                            <input class="noticias-vt-edt inp-vt" type="url" name="link-noticias-v-t-adm" id="link-noticias-v-t2" placeholder="INSIRA O LINK DO VIDEO">
                        </div>
                        <div class="noticias-v-t-1">
                            <h1 class="text-edt-adm">Vídeo com noticia 3</h1>
                            <input class="noticias-vt-edt inp-vt" type="text" name="titulo-noticias-v-t-adm" id="titulo-noticias-v-t3" placeholder="INSIRA O TITULO DA NOTICIA">
                            <textarea class="noticias-vt-edt text-vt" name="materia-noticias-v-t-adm" id="materia-noticias-v-t3" placeholder="INSIRA A MATERIA DA NOTICIA" cols="30" rows="10"></textarea>
                            <input class="noticias-vt-edt inp-vt" type="url" name="link-noticias-v-t-adm" id="link-noticias-v-t3" placeholder="INSIRA O LINK DO VIDEO">
                        </div>
                        <div class="noticias-v-t-1">
                            <h1 class="text-edt-adm">Vídeo com noticia 4</h1>
                            <input class="noticias-vt-edt inp-vt" type="text" name="titulo-noticias-v-t-adm" id="titulo-noticias-v-t4" placeholder="INSIRA O TITULO DA NOTICIA">
                            <textarea class="noticias-vt-edt text-vt" name="materia-noticias-v-t-adm" id="materia-noticias-v-t4" placeholder="INSIRA A MATERIA DA NOTICIA" cols="30" rows="10"></textarea>
                            <input class="noticias-vt-edt inp-vt" type="url" name="link-noticias-v-t-adm" id="link-noticias-v-t4" placeholder="INSIRA O LINK DO VIDEO">
                        </div>
                        <div class="noticias-v-t-1">
                            <h1 class="text-edt-adm">Vídeo com noticia 5</h1>
                            <input class="noticias-vt-edt inp-vt" type="text" name="titulo-noticias-v-t-adm" id="titulo-noticias-v-t5" placeholder="INSIRA O TITULO DA NOTICIA">
                            <textarea class="noticias-vt-edt text-vt" name="materia-noticias-v-t-adm" id="materia-noticias-v-t5" placeholder="INSIRA A MATERIA DA NOTICIA" cols="30" rows="10"></textarea>
                            <input class="noticias-vt-edt inp-vt" type="url" name="link-noticias-v-t-adm" id="link-noticias-v-t5" placeholder="INSIRA O LINK DO VIDEO">
                        </div>
                    </div>
                    </section>

                  </main>


                <!-- START RODAPE  -->
                <footer id="sobre-contato" class="login-cadastro">
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
        <div class="p-footer footer-adm" >
            <div class="cv-footer footer-adm">
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

</body>
</html>