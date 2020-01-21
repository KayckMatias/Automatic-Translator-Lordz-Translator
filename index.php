<html>

<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	  <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lordz Translator - v1</title>
</head>

<body class="grey darken-3">
    <h3 class="white-text center">Lordz Translator - v1</h3>
    <div class="container center white container" style="margin-top:2%;">
      <a class="waves-effect waves-light btn red lighten-1 center modal-trigger" id="btn_detectLanguage" data-target="modal_detect" style="margin-top:20px;">Detectar Linguagem</a> 
        <div class="row center" style="padding:5%;">
          <div class="center col s12 m12 l6">
            <div class="">
              <select id="firstSelect">
                <option value="en" selected>Inglês - EN</option>
                <option value="pt">Português - PT</option>
                <option value="es">Espanhol - ES</option>
                <option value="zh">Chinês - ZH</option>
                <option value="fr">Francês - FR</option>
                <option value="de">Alemão - DE</option>
                <option value="hi">Hindi - HI</option>
                <option value="ar">Árabe - AR</option>
                <option value="bn">Bengali - BN</option>
                <option value="ru">Russo - RU</option>
                <option value="ja">Japonês - JA</option>
              </select>
              <label>Idioma Para Traduzir</label>
            </div>
              <textarea id="first_text" name="first_text" onkeyup="changedText();" class="materialize-textarea" style="height: 200px;" data-length="120"></textarea>
              <label for="first_text">Texto 1</label>
              <br>
              <a class="waves-effect waves-light btn blue lighten-1 center" id="btn_translate_click" onclick="changedText()" style="margin-top:20px;">Traduzir</a> 
              <br>
          </div>
          <div class="center col s12 m12 l6">
            <div class="">
              <select id="secondSelect" class="materialselect">
                <option value="0" disabled selected>Selectione uma Opção</option>
                <option value="pt">Português - PT</option>
                <option value="en">Inglês - EN</option>
                <option value="es">Espanhol - ES</option>
                <option value="zh">Chinês - ZH</option>
                <option value="fr">Francês - FR</option>
                <option value="de">Alemão - DE</option>
                <option value="hi">Hindi - HI</option>
                <option value="ar">Árabe - AR</option>
                <option value="bn">Bengali - BN</option>
                <option value="ru">Russo - RU</option>
                <option value="ja">Japonês - JA</option>
              </select>
              <label>Idioma Traduzido</label>
            </div>
            <textarea id="second_text"  name="second_text" readonly class="materialize-textarea" style="height: 200px;" data-length="120"></textarea>
            <label for="second_text">Texto 2</label>
            <br>
            <a class="waves-effect waves-light btn blue lighten-1 center hide" id="btn_translated_copy" onclick="copyText()" style="margin-top:20px;">Copiar</a> 
            <br>
          </div>
        </div>
    </div>
  <!-- Modal Detect -->
  <div id="modal_detect" class="modal">
    <div class="modal-content">
      <h4 class="center">Detectar Linguagem</h4>
      <p class="center">Coloque o texto que deseja descobrir a linguagem</p>
      <textarea id="detect_text" name="detect_text" class="materialize-textarea" style="height: 200px;" data-length="120"></textarea>
      <label for="detect_text">Texto para Detectar</label>
      <br>
      <div class="center">
        <a class="waves-effect waves-light btn red lighten-1 center" id="btn_detectLanguage" onclick="detectLanguage()" style="margin-top:20px;">Detectar</a> 
      </div>
      <div class="loading center hide" style="margin-top:20px;" id="loading">
        <div class="progress">
          <div class="indeterminate"></div>
        </div>
      </div>
      <div class="center hide" id="div_language_detect">
        <h6>Language Code: <span id="text_language_detect"></span></h6> 
        <a class="waves-effect waves-light btn red lighten-1 center modal-close" id="btn_insertSelect" style="margin-top:20px;"></a> 
        <a class="waves-effect waves-light btn red lighten-1 center modal-close" id="btn_insertsecondSelect" style="margin-top:20px;"></a> 
      </div>
    </div>
    <div class="modal-footer">
      <a href="#" class="modal-close waves-effect waves-green btn-flat">Fechar</a>
    </div>
  </div>
 <!-- Alert Modal -->
  <div id="modal_alert" class="modal">
    <div class="modal-content">
      <h4 class="center red-text">Atenção</h4>
      <p class="">- Este Script é somente um projeto básico, pode ocorrer erros durante o uso, por favor, reportar;</p>
      <p class="">- Será atualizado com mais traduções futuramente;</p>
      <p class="">- A tradução automática é somente teste, por isso tem o botão "Traduzir", caso a tradução automática não traduza corretamente;</p>
      <p class="red-text">No futuro será adicionado mais linguagens.</p>
      <p class="center red-text">Para o Script funcionar é necessário ter a sua chave, para ter, me contate</p>
    </div>
    <div class="modal-footer">
      <a href="#" class="modal-close waves-effect waves-green btn-flat">Fechar</a>
     </div>
  </div>  

    <h6 class="center white-text">Made With &hearts; by LordzSpectron</h6>

     <!-- Jquery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- Compiled and minified Materialize JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	  <!-- Compiled and minified Materialize JavaScript -->
    <script type="text/javascript" src="js/custom.js"></script>
	
</body>
</html>
