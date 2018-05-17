<html>
<head>
<title></title>
    <link rel="stylesheet" href="../../../assets/css/teste.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
        $("#abas ul li").click(function(){
            $("#abas ul li").removeClass("selecionado");
                $(this).addClass("selecionado");
            });
            });
    </script>
</head>

<body>
<div id="abas">

    <ul>
        <li> ABA 1</li>
        <li> ABA 2</li>
        <li> ABA 3</li>
    </ul>

</div>

    <div class= "conteudo">
    conteudo
    </div>

    <div class= "conteudo">
    conteudo2
    </div>

    <div class= "conteudo">
    conteudo3
    </div>

</body>

</html>