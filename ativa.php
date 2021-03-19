<?php
    require_once("./banco.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Ativação</title>
</head>
<body id="ativa2">
<form id="formulario">
    <div class="container">
        <div class="top"></div>
            <div class="bottom"></div>
                <div class="center">
            <h2>GROW&nbsp;UP<span>&nbsp;GOLD</span></h2>
            <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control" required name="nome" id="nome" placeholder="Nome Completo">
            </div>    
            
            <div class="form-group col-md-6">
            <input type="text" class="form-control" required maxlength="11"  name="cpf" id="cpf" placeholder="Documento CPF/CNPJ">
            </div>
            
            <input type="email" class="form-control" required name="email" id="email" placeholder="email@email.com">
            
            <div class="form-group col-md-6">
            <input type="phone" class="form-control" required maxlength="11" name="whatszapp" id="whatszapp" placeholder="Whats-Zapp">
            </div>
            
            <div class="form-group col-md-6">
            <input type="cel" class="form-control" required maxlength="11" name="telegram" id="telegram" placeholder="Telegram">
            </div>
            
            <div class="form-group col-md-6">
            <input type="text" class="form-control" required  name="usuario" id="usuario" placeholder="Usúario">
            </div>
            
            <div class="form-group col-md-6">
            <input type="text" class="form-control" required name="indicacao" id="indicacao" placeholder="Indicação">
            </div>
            
            <select name="banco" required class="form-group" id="banco">
            <option value="">Saque Banco</option>
            <option value="654 Banco A.J.Renner S.A.">654 Banco A.J.Renner S.A.</option>
            <option value="246 Banco ABC Brasil S.A.">246 Banco ABC Brasil S.A.</option>
            <option value="075 Banco ABN AMRO S.A.">075 Banco ABN AMRO S.A.</option>
            <option value="025 Banco Alfa S.A.">025 Banco Alfa S.A.</option>
            <option value="641 Banco Alvorada S.A.">641 Banco Alvorada S.A.</option>
            <option value="213 Banco Arbi S.A.">213 Banco Arbi S.A.</option>
            <option value="019 Banco Azteca do Brasil S.A.">019 Banco Azteca do Brasil S.A.</option>
            <option value="003 Banco da Amazônia S.A.">003 Banco da Amazônia S.A.</option>
            <option value="029 Banco Banerj S.A.">029 Banco Banerj S.A.</option>
            <option value="107 Banco BBM S.A.">107 Banco BBM S.A.</option>
            <option value="031 Banco Beg S.A.">031 Banco Beg S.A.</option>
            <option value="096 Banco BM&amp;FBOVESPA de Serviços de Liquidação e Custódia S.A">096 Banco BM&amp;FBOVESPA de Serviços de Liquidação e Custódia S.A</option>
            <option value="318 Banco BMG S.A.">318 Banco BMG S.A.</option>
            <option value="248 Banco Boavista Interatlântico S.A.">248 Banco Boavista Interatlântico S.A.</option>
            <option value="218 Banco Bonsucesso S.A.">218 Banco Bonsucesso S.A.</option>
            <option value="065 Banco Bracce S.A.">065 Banco Bracce S.A.</option>
            <option value="036 Banco Bradesco BBI S.A.">036 Banco Bradesco BBI S.A.</option>
            <option value="204 Banco Bradesco Cartões S.A.">204 Banco Bradesco Cartões S.A.</option>
            <option value="237 Banco Bradesco S.A.">237 Banco Bradesco S.A.</option>
            <option value="225 Banco Brascan  S.A.">225 Banco Brascan  S.A.</option>
            <option value="208 Banco BTG Pactual S.A.">208 Banco BTG Pactual S.A.</option>
            <option value="044 Banco BVA S.A.">044 Banco BVA S.A.</option>
            <option value="336 Banco C6 Bank S.A.">336 Banco C6 Bank S.A.</option>
            <option value="263 Banco Cacique S.A.">263 Banco Cacique S.A.</option>
            <option value="473 Banco Caixa Geral - Brasil S.A.">473 Banco Caixa Geral - Brasil S.A.</option>
            <option value="412 Banco Capital S.A.">412 Banco Capital S.A.</option>
            <option value="040 Banco Cargill S.A.">040 Banco Cargill S.A.</option>
            <option value="266 Banco Cédula S.A.">266 Banco Cédula S.A.</option>
            <option value="233 Banco Cifra S.A.">233 Banco Cifra S.A.</option>
            <option value="241 Banco Clássico S.A.">241 Banco Clássico S.A.</option>
            <option value="215 Banco Comercial e de Investimento Sudameris S.A.">215 Banco Comercial e de Investimento Sudameris S.A.</option>
            <option value="095 Banco Confidence de Câmbio S.A.">095 Banco Confidence de Câmbio S.A.</option>
            <option value="721 Banco Credibel S.A.">721 Banco Credibel S.A.</option>
            <option value="222 Banco Credit Agricole Brasil S.A.">222 Banco Credit Agricole Brasil S.A.</option>
            <option value="505 Banco Credit Suisse (Brasil) S.A.">505 Banco Credit Suisse (Brasil) S.A.</option>
            <option value="229 Banco Cruzeiro do Sul S.A.">229 Banco Cruzeiro do Sul S.A.</option>
            <option value="707 Banco Daycoval S.A.">707 Banco Daycoval S.A.</option>
            <option value="300 Banco de La Nacion Argentina">300 Banco de La Nacion Argentina</option>
            <option value="495 Banco de La Provincia de Buenos Aires">495 Banco de La Provincia de Buenos Aires</option>
            <option value="494 Banco de La Republica Oriental del Uruguay">494 Banco de La Republica Oriental del Uruguay</option>
            <option value="456 Banco de Tokyo-Mitsubishi UFJ Brasil S.A.">456 Banco de Tokyo-Mitsubishi UFJ Brasil S.A.</option>
            <option value="214 Banco Dibens S.A.">214 Banco Dibens S.A.</option>
            <option value="001 Banco do Brasil S.A.">001 Banco do Brasil S.A.</option>
            <option value="047 Banco do Estado de Sergipe S.A.">047 Banco do Estado de Sergipe S.A.</option>
            <option value="021 Banco do Estado do Espírito Santo BANESTES S.A. ">021 Banco do Estado do Espírito Santo BANESTES S.A. </option>
            <option value="037 Banco do Estado do Pará S.A.">037 Banco do Estado do Pará S.A.</option>
            <option value="039 Banco do Estado do Piauí S.A. - BEP">039 Banco do Estado do Piauí S.A. - BEP</option>
            <option value="041 Banco do Estado do Rio Grande do Sul S.A.">041 Banco do Estado do Rio Grande do Sul S.A.</option>
            <option value="004 Banco do Nordeste do Brasil S.A.">004 Banco do Nordeste do Brasil S.A.</option>
            <option value="265 Banco Fator S.A.">265 Banco Fator S.A.</option>
            <option value="224 Banco Fibra S.A.">224 Banco Fibra S.A.</option>
            <option value="626 Banco Ficsa S.A.">626 Banco Ficsa S.A.</option>
            <option value="394 Banco Finasa BMC S.A.">394 Banco Finasa BMC S.A.</option>
            <option value="734 Banco Gerdau S.A.">734 Banco Gerdau S.A.</option>
            <option value="612 Banco Guanabara S.A.">612 Banco Guanabara S.A.</option>
            <option value="063 Banco Ibi S.A. Banco Múltiplo">063 Banco Ibi S.A. Banco Múltiplo</option>
            <option value="604 Banco Industrial do Brasil S.A.">604 Banco Industrial do Brasil S.A.</option>
            <option value="320 Banco Industrial e Comercial S.A.">320 Banco Industrial e Comercial S.A.</option>
            <option value="653 Banco Indusval S.A.">653 Banco Indusval S.A.</option>
            <option value="077 Banco Inter S.A">077 Banco Inter S.A</option>
            <option value="630 Banco Intercap S.A.">630 Banco Intercap S.A.</option>
            <option value="249 Banco Investcred Unibanco S.A.">249 Banco Investcred Unibanco S.A.</option>
            <option value="184 Banco Itaú BBA S.A.">184 Banco Itaú BBA S.A.</option>
            <option value="479 Banco ItaúBank S.A">479 Banco ItaúBank S.A</option>
            <option value="376 Banco J. P. Morgan S.A.">376 Banco J. P. Morgan S.A.</option>
            <option value="074 Banco J. Safra S.A.">074 Banco J. Safra S.A.</option>
            <option value="217 Banco John Deere S.A.">217 Banco John Deere S.A.</option>
            <option value="076 Banco KDB S.A.">076 Banco KDB S.A.</option>
            <option value="600 Banco Luso Brasileiro S.A.">600 Banco Luso Brasileiro S.A.</option>
            <option value="243 Banco Máxima S.A.">243 Banco Máxima S.A.</option>
            <option value="323 Banco Mercado Pago S.A.">323 Banco Mercado Pago S.A.</option>
            <option value="389 Banco Mercantil do Brasil S.A.">389 Banco Mercantil do Brasil S.A.</option>
            <option value="370 Banco Mizuho do Brasil S.A.">370 Banco Mizuho do Brasil S.A.</option>
            <option value="066 Banco Morgan Stanley S.A.">066 Banco Morgan Stanley S.A.</option>
            <option value="045 Banco Opportunity S.A.">045 Banco Opportunity S.A.</option>
            <option value="079 Banco Original do Agronegócio S.A.">079 Banco Original do Agronegócio S.A.</option>
            <option value="212 Banco Original S.A.">212 Banco Original S.A.</option>
            <option value="623 Banco Panamericano S.A.">623 Banco Panamericano S.A.</option>
            <option value="611 Banco Paulista S.A.">611 Banco Paulista S.A.</option>
            <option value="613 Banco Pecúnia S.A.">613 Banco Pecúnia S.A.</option>
            <option value="643 Banco Pine S.A.">643 Banco Pine S.A.</option>
            <option value="724 Banco Porto Seguro S.A.">724 Banco Porto Seguro S.A.</option>
            <option value="638 Banco Prosper S.A.">638 Banco Prosper S.A.</option>
            <option value="356 Banco Real S.A.">356 Banco Real S.A.</option>
            <option value="633 Banco Rendimento S.A.">633 Banco Rendimento S.A.</option>
            <option value="072 Banco Rural Mais S.A.">072 Banco Rural Mais S.A.</option>
            <option value="453 Banco Rural S.A.">453 Banco Rural S.A.</option>
            <option value="422 Banco Safra S.A.">422 Banco Safra S.A.</option>
            <option value="033 Banco Santander Banespa S.A.">033 Banco Santander Banespa S.A.</option>
            <option value="366 Banco Société Générale Brasil S.A.">366 Banco Société Générale Brasil S.A.</option>
            <option value="637 Banco Sofisa S.A.">637 Banco Sofisa S.A.</option>
            <option value="464 Banco Sumitomo Mitsui Brasileiro S.A.">464 Banco Sumitomo Mitsui Brasileiro S.A.</option>
            <option value="634 Banco Triângulo S.A.">634 Banco Triângulo S.A.</option>
            <option value="018 Banco Tricury S.A.">018 Banco Tricury S.A.</option>
            <option value="655 Banco Votorantim S.A.">655 Banco Votorantim S.A.</option>
            <option value="610 Banco VR S.A.">610 Banco VR S.A.</option>
            <option value="119 Banco Western Union do Brasil S.A">119 Banco Western Union do Brasil S.A</option>
            <option value="719 Banif-Banco Internacional do Funchal (Brasil)S.A.">719 Banif-Banco Internacional do Funchal (Brasil)S.A.</option>
            <option value="073 BB Banco Popular do Brasil S.A.">073 BB Banco Popular do Brasil S.A.</option>
            <option value="250 BCV - Banco de Crédito e Varejo S.A.">250 BCV - Banco de Crédito e Varejo S.A.</option>
            <option value="078 BES Investimento do Brasil S.A.-Banco de Investimento">078 BES Investimento do Brasil S.A.-Banco de Investimento</option>
            <option value="069 BPN Brasil Banco Múltiplo S.A.">069 BPN Brasil Banco Múltiplo S.A.</option>
            <option value="125 Brasil Plural S.A. - Banco Múltiplo">125 Brasil Plural S.A. - Banco Múltiplo</option>
            <option value="070 BRB - Banco de Brasília S.A.">070 BRB - Banco de Brasília S.A.</option>
            <option value="104 Caixa Econômica Federal">104 Caixa Econômica Federal</option>
            <option value="477 Citibank S.A.">477 Citibank S.A.</option>
            <option value="085 Cooperativa Central de Crédito Urbano-CECRED">085 Cooperativa Central de Crédito Urbano-CECRED</option>
            <option value="487 Deutsche Bank S.A. - Banco Alemão">487 Deutsche Bank S.A. - Banco Alemão</option>
            <option value="064 Goldman Sachs do Brasil Banco Múltiplo S.A.">064 Goldman Sachs do Brasil Banco Múltiplo S.A.</option>
            <option value="062 Hipercard Banco Múltiplo S.A.">062 Hipercard Banco Múltiplo S.A.</option>
            <option value="399 HSBC Bank Brasil S.A. - Banco Múltiplo">399 HSBC Bank Brasil S.A. - Banco Múltiplo</option>
            <option value="168 HSBC Finance (Brasil) S.A. - Banco Múltiplo">168 HSBC Finance (Brasil) S.A. - Banco Múltiplo</option>
            <option value="492 ING Bank N.V.">492 ING Bank N.V.</option>
            <option value="652 Itaú Unibanco Holding S.A.">652 Itaú Unibanco Holding S.A.</option>
            <option value="341 Itaú Unibanco S.A.">341 Itaú Unibanco S.A.</option>
            <option value="488 JPMorgan Chase Bank">488 JPMorgan Chase Bank</option>
            <option value="260 Nu Pagamentos S.A.">260 Nu Pagamentos S.A.</option>
            <option value="290 PagSeguro Internet S.A.">290 PagSeguro Internet S.A.</option>
            <option value="254 Paraná Banco S.A.">254 Paraná Banco S.A.</option>
            <option value="409 UNIBANCO - União de Bancos Brasileiros S.A.">409 UNIBANCO - União de Bancos Brasileiros S.A.</option>
            <option value="230 Unicard Banco Múltiplo S.A.">230 Unicard Banco Múltiplo S.A.</option>
            <option value="084 Unicred Norte do Paraná">084 Unicred Norte do Paraná</option>
                										                									
            </select>

            <div class="form-group col-md-4">
                <input type="text" required name="agencia" id="agencia" placeholder="Agência">
            </div>

            <div class="form-group col-md-4">
            <input type="text" required name="conta" id="conta" placeholder="Conta">
            </div>

            <div class="form-group col-md-4">
            <select name="tipo" class="form-group col-md-13" id="tipo">
                    <option value="">Tipo de Conta</option>
                    <option value="corrente">Corrente</option>
                    <option value="poupanca">Poupança</option>
            </select>
            </div>

            <div class="form-group col-md">
            <input type="text" class="form-control"  name="bitcoins" id="bitcoins" placeholder="Carteira BitCoins">
            </div>


            <input type="submit" id="botao"   class="btn btn-warning" value="Ativar" name="botao">
            
            <a id="fazerlogin" href="index.php">Fazer Login</a>

            <div id="msg2" class="alert alert-success" role="alert"><p></p></div>

            </div>
            
        </div>
    </div>
</form>

<script>
    /*var opt = document.getElementById('banco').options;
    var optArray = [];
    var values = [];
    var v = [];

    for (var i = 0; i < opt.length; i++){
        optArray.push(opt[i]);
    }

    optArray = optArray.sort();

    optArray.forEach(function(item, index){
        //console.log(item.firstChild);
        values.push(item.firstChild);
        //console(item.firstChild.split(" "));
    });

    for (var i = 0; i < values.length; i++){
        v.push(values[i].textContent.split(" "));
    }

    //console.log(values[2].textContent.split(" "));

    //console.log(values);*/

</script>

<?php 
    include("./footer.php");
?>
