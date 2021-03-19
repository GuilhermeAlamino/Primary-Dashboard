
$(function(){
    $('#msg2').hide();
});

$('#formulario').submit(function(e){
    e.preventDefault();
    var formulario = $(this);
    var retorno = sucessodeenvio(formulario);
    });

    function sucessodeenvio(dados){
    $.ajax({
        type:"POST",
        async:"false",
        data:dados.serialize(),
        url:'banco.php',
    }).done(sucesso,false);

    function sucesso(data){
        if(sucesso){
            $('#msg2').show().html("Ativado com Sucesso");
        }else{
            console.log("Erro");
        }
    
    }
    
}