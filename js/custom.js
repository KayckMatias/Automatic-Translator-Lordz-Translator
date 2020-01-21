var firstText = $("#first_text");
var secondText = $("#second_text");
var textLanguageDetect = $("#text_language_detect");

var textDetect = $("#detect_text");

var firstSelect = $("#firstSelect");
var secondSelect = $("#secondSelect");

var btnTranslate = $('#btn_translate_click');
var btnCopy = $('#btn_translated_copy');
var btnInsertSelect = $("#btn_insertSelect");
var btnInsertSecondSelect = $("#btn_insertsecondSelect");

var modalAlert = $('#modal_alert');

var loading = $("#loading");

var divLanguage = $("#div_language_detect");

$(document).ready(function(){
    $('select').formSelect();
    $('.modal').modal();
    var localStorageModalAlert = localStorage.getItem("modal_alert");
    if(!localStorageModalAlert){
        modalAlert.modal('open');
        localStorage.setItem("modal_alert", false);
    }
});
function changedText(){
    if(secondSelect.val() == null){
        M.toast({html: 'Selecione uma Linguagem Para Traduzir! (Error - L5)'});
        btnTranslate.addClass("disabled");
        btnTranslate.html("Selecione uma Linguagem");
        secondText.val("Selecione uma Linguagem Para Traduzir! (Error - L5)");
    }else if(firstText.val() == ""){
        M.toast({html: 'Digite Algo Para Traduzir! (Error - L1)'});
        btnCopy.addClass("hide");
    }else{
        var textFirst = firstText.val();
        var langGet = firstSelect.val() + "-" + secondSelect.val();
        btnTranslate.addClass("disabled");
        btnTranslate.html("Traduzindo...");
        secondText.val("Traduzindo...");
        $.get("ajax/language.php", {text:textFirst, lang:langGet} , function(data){
            secondText.val(data);
            btnCopy.removeClass("hide");
            btnTranslate.removeClass("disabled");
            btnTranslate.html("Traduzir");
            M.textareaAutoResize(secondText);
        });
    }
}
function detectLanguage(){
    loading.removeClass("hide");
    $.get("ajax/automatic_detect.php", {text:textDetect.val()} , function(data){
        loading.addClass("hide");
        divLanguage.removeClass("hide");
        textLanguageDetect.html(data);
        btnInsertSelect.html("Traduzir a partir de: " + data);
        btnInsertSelect.attr("onclick", "addSelect('" + data + "')");
        btnInsertSecondSelect.html("Traduzir para: " + data);
        btnInsertSecondSelect.attr("onclick", "addsecondSelect('" + data + "')");
    });   
}
function addSelect(language){
    firstSelect.val(language);
    firstSelect.change();
    firstSelect.formSelect();
}
function addsecondSelect(language){
    secondSelect.val(language);
    secondSelect.change();
    secondSelect.formSelect();
}
function copyText(){
    secondText.select(); 
    if(document.execCommand('copy')){
        M.toast({html: 'Copiado! (Success - L2)'});
    }
}
$("select").change(function(){ 
    if(secondSelect.val() == firstSelect.val()){
        secondSelect.val("0");
        M.toast({html: 'Não Pode Traduzir para a Mesma Língua! (Error - L7)'});
        secondSelect.formSelect();
    }
    if(firstText.val() != ""){
        changedText();
    }
 });  
