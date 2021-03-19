<?php
    include("./header.php");

    require_once("./banco.php");

    session_start();

?>
<form id="formularioindex">
    <div class="container">
        <div class="top"></div>
            <div class="bottom"></div>
                <div class="center">
            <h2>GROW&nbsp;UP<span>&nbsp;GOLD</span></h2>
                <input type="text" name="cpf" id="cpf" placeholder="Documento CPF/CNPJ">
                <input type="email" name="email" id="email" placeholder="email@email.com">
                <input type="submit" id="botao" class="btn btn-warning" value="Login" name="botao">
            <a class="alert alert-secondary" id="ativar" href="ativa.php">Ativação de Usúario</a>
            <div><p id="msg" class="alert alert-danger" role="alert"><p></div>
        </div>
    </div>
</form>
</body>
</html>

<script>
    $(function(e){
        $('#msg').hide();
        
    });

    $('#formularioindex').submit(function(e){
        e.preventDefault();
        
        $.ajax({
            url:"tratandoenvio.php",
            async:false,
            data:$(this).serialize(),
            type:"POST",
        }).done(sucesso);

        function sucesso(request){
            essedocumento(request);
        
        function essedocumento(params){
            try{
                if(jSON.parse(params)){
                    var usuario = JSON.parse(request);
                    window.location.href='dashboard.php?user='+user.email+'&type='+user.cpf;
                };
                }catch(e){
                    $('#msg').show().html(request);
                    
                }
            }
        }
    }
);

</script>

