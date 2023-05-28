<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Notícias | AKFutebol</title>
    <link rel="stylesheet" href="{{asset('assets/css/imports.css')}}">
</head>
<body>
            <!-- START HEADER -->
        <header class="cont-header login-cadastro-adm">
        
        <a href="{{route('inicio')}}"><img src="{{asset('assets/images/logotipo-akfutebol.png')}}" alt="logo-akfutebol"></a>

    </header>
        <!-- END HEADER -->
    <main class="cont-main">

    <!-- START faixa-cadastro-adm -->
    <h1 class="faixa-branca">Cadastro de Notícias</h1>
    <!-- END faixa-cadastro-adm -->

    <div class="container-banner-adm">
        <div class="banner-adm">
            <div class="banner-adm-input">
            <input type="file" name="banner-adm-cadastro" accept="image/*" id="banner-adm">
            </div>
        </div>
    </div>

    <!-- START CONTAINER DE CADASTRO -->
   <div class="container-formulario-cadastro-noticias"> 
   <form action="{{route('enviar-noticia')}}" method="post" class="formulario-cadastro-noticias">
    @csrf
    <h1 class="h1-adm form-cadastro">Título:</h1>
    <input type="text" name="titulo" id="titulo"class="text-inp" placeholder="Insira o título da matéria"> 
    <h1 class="h1-adm form-cadastro">TEXTO:</h1>
    <textarea name="texto" id="texto" class="formulario-text-area" placeholder="Insira a matéria"></textarea> 
    <h1 class="h1-adm form-cadastro">data:</h1>
    <input type="date" name="data" id="data" class=" text-inp"> 
    <h1 class="h1-adm form-cadastro">Tipo:</h1>
    <select name="tipo" id="tipo" class="text-inp inp-video-card" onChange="teste(this)">
        <option value="videos" id="option-video" class="text-inp inp-video-card">Vídeos</option>
        <option value="cards" id="option-card" class="text-inp inp-video-card">Cards</option>
    </select>
    
    <h1 class="h1-adm form-cadastro">url:</h1>
    <input type="text" name="url" id="url" class="text-inp" value="https://www.youtube.com/embed/" maxlength="41" placeholder="https://www.youtube.com/embed/">

    <input type="submit" value="Gravar" class="button-adm-page">
   </form>
    </div>
    <!-- END CONTAINER DE CADASTRO -->
</main>
<footer id="sobre-contato" class="footer-pagina-adm">
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
        <div class="p-footer footer-pagina-adm" >
            <div class="cv-footer cv-footer-pagina-adm">
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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script>
            function teste (select){
                alert (select.value)
            }
        </script>
</body>
</html>