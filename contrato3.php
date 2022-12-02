<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF=8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Contrato</title>
        <link rel="stylesheet" href="css/style_cont.css">
    </head>
    <style>
    body{
        background: url(imagenes/matricula_fondo4.png);
        background-size:cover ;
        width: 100%;
        height:100vh;
    }
    </style>
    <body>

        <form class="form-box">
            <embed src="pdf/pdf2.pdf" type="application/pdf" class="pdf">
        </form>

        <div class="botones">
            <button type="button" class="btn2">Confirmar</button>
            <input type="checkbox" id="_checkbox"><label class="label1" for="_checkbox"><div id="tick_mark"></div></label>
            <label class="text" for="_checkbox">Por favor confirme que ha leído y acepta el contrato enviado.</label>
        </div>
        

    </body>
</html>