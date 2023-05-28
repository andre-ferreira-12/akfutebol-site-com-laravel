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
    <header class="cont-header login-cadastro-adm">
        
        <a href="{{route('inicio')}}"><img src="{{asset('assets/images/logotipo-akfutebol.png')}}" alt="logo-akfutebol"></a>

    </header>
        <!-- END HEADER -->

        <!-- START CONTAINER LOGIN -->
            <div class="container-formulario">
                
                <!-- START FORMULARIO -->
                <div class="formulario-login">
                    <img src="{{asset('assets/images/user-login.png')}}" alt="icone-user" id="user-icone-cadastro">
                    <img src="{{asset('assets/images/email-login.png')}}" alt="icone-email" id="email-icone-cadastro">
                    <img src="{{asset('assets/images/lock-login.png')}}" alt="icone-lock" id="lock-icone-cadastro">
                    <label for="nome">NOME:</label>
                    <input type="text" name="nome" id="nome" placeholder="INSIRA SEU NOME">
                    <label for="nome">EMAIL:</label>
                    <input type="email" name="email" id="email" placeholder="INSIRA SEU EMAIL">
                    <label for="nome">SENHA:</label>
                    <input type="password" name="senha" id="senha" placeholder="INSIRA SUA SENHA">
                    <span>Já tem cadastro? Faça <a href="{{route('login')}}">LOGIN</a></span>
                    <span class="bt-cl c"><a href="#" class="bt-cl">Cadastrar-se</a></span>
                </div>
                <!-- END FORMULARIO -->

            </div>
            <!-- START CONTAINER LOGIN -->

        </div>

        <!--END TELA LOGIN -->
</body>
</html>