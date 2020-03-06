<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Oficina de Git</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon" />

    <link href="https://fonts.googleapis.com/css?family=Vidaloka&display=swap" rel="stylesheet">
    <link href="../css/uikit.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/font-awesome.css">

</head>

<body>
   
    <div class="uk-section uk-padding-remove-top"
        style="background-image: url(../img/6194.png); background-repeat: repeat;">


        <div class="uk-container">

            <div class="uk-section  uk-section-default" style="background-color: rgba(0,0,0,0.0)">

                <h1 id='ancora' class="uk-text-center uk-padding-bottom uk-margin-bottom">
                Programadores responsáveis por este site:
                </h1>
                


                <div class="uk-child-width-1-5@m uk-padding-top" uk-grid>
                    
                    <?php
                    $todos = scandir('../dados');
                    asort($todos);
                    foreach ($todos as $unico) {
                        $arquivo = explode('.', $unico)[0];
                        
                        if ($arquivo != "meus_dados") {
                            @include('../dados/'.$arquivo.'.html');
                        }
                    }
                        
                    ?>

                </div>
            </div>
        </div>

    </div>

    
    
    

    <div class="uk-section-secondary uk-padding-remove-top">


        <div class="uk-container">

            <div id='contato' class="uk-section  uk-section-default" style="background-color: rgba(0,0,0,0.0)">

               


                <div class="uk-child-width-1-3@m uk-padding-top" uk-grid>
                    <div class='uk-padding-remove-left'>
                        <h3>Restou alguma dúvida?</h3>
                        <h5 class='uk-margin-bottom-large uk-margin-remove-top' >Entre em contato conosco:</h5>
                        <p  class='depoimento'>
                            <i style='color: coral;' class="fa fa-map-marker fa-1x "></i>
                                    <a style='color: coral' href="https://www.google.com/maps/place/Av.+14+De+Marco,+500+-+Eldorado,+Primavera+do+Leste+-+MT,+78850-000/@-15.5525879,-54.2909612,17z/data=!3m1!4b1!4m5!3m4!1s0x937725c4329b14e3:0x3aed070b65362c6f!8m2!3d-15.552592!4d-54.289224">Avenida de exemplo, número tal, bairro fulano - Santa Itapiranga - SÇ </a> 
                        </p>
                        <p class='depoimento'>
                            <i style='color: coral;' class="fa fa-phone fa-1x "></i>
                                (66) 9 9623-5380
                        </p>

                        <p class='depoimento'>
                            <i style='color: coral;' class="fa fa-envelope fa-1x "></i>
                                <a href="mailto:contato@queromaissalgados.com.br">contato@contato.comtato.brontato</a>  
                        </p>
                    </div>
                    
                    <div>
                        
                    </div>

                    <div>
                        <h3>Visite nossas redes sociais</h3>
                        <a style='color: coral;' href="https://www.instagram.com/" class="uk-icon-button uk-margin-small-right" uk-icon="instagram"></a>
                        <a style='color: coral;' href="https://www.facebook.com/" class="uk-icon-button  uk-margin-small-right" uk-icon="facebook"></a>
                        <a style='color: coral;' href="https://api.whatsapp.com/send" class="uk-icon-button" uk-icon="whatsapp"></a>
                    </div>

                </div>
            </div>
            <hr class="uk-divider-icon">
            <p class='uk-text-center uk-margin-bottom'>2020. Desenvolvido por todos nós e o <a class='uk-link-heading' href="mailto:enzogehlen@hotmail.com"> Enzo</a>. </p>
        </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="../js/uikit.js"></script>
    <script src="../js/uikit-icons.js"></script>
</body>

</html>