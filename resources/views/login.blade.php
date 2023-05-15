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
    <!-- START TELA LOGIN -->
    <div class="tela-login">
        <!-- START HEADER -->
    <header class="cont-header login-cadastro">
        
        <a href="{{route('inicio')}}"><img src="{{asset('assets/images/logotipo-akfutebol.png')}}" alt="logo-akfutebol"></a>

    </header>
        <!-- END HEADER -->

        <!-- START CONTAINER LOGIN -->
            <div class="container-formulario">

                <!-- START FORMULARIO -->
                <div class="formulario-login">
                    <img src="{{asset('assets/images/user-login.png')}}" alt="icone-user" id="user-icone">
                    <img src="{{asset('assets/images/lock-login.png')}}" alt="icone-lock" id="lock-icone">
                    <label for="nome">NOME:</label>
                    <input type="text" name="nome" id="nome" placeholder="INSIRA SEU NOME">
                    <label for="nome">SENHA:</label>
                    <input type="password" name="senha" id="senha" placeholder="INSIRA SUA SENHA">
                    <span>Não tem cadastro? <a href="{{route('cadastro')}}">Cadastre-se</a></span>
                    <span class="bt-cl"><a href="{{asset('page-adm')}}" class="bt-cl">ENTRAR</a></span>
                </div>
                <!-- END FORMULARIO -->
            </div>
            <!-- START CONTAINER LOGIN -->

        </div>

        <!--END TELA LOGIN -->
</body>
</html>