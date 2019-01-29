function loadWiki(id)
{
    $.ajax({
        url : 'wiki/load/'+id,
        type : 'GET',
        dataType : 'html',
        success : function(code_html, statut){
            $('#load_wiki').html('<div class="col-sm-12"><a class="btn btn-primary" onclick="backToCate();">'+WIKI__BACK_TO_CATE+'</a></div><br /><br />'+code_html);
            $("#cate_wiki").fadeOut(1000, function() {
                $("#load_wiki").fadeIn(800);
            });
        },

        error : function(resultat, statut, erreur){
            console.log('Error Load Wiki');
        },

        complete : function(resultat, statut){
            console.log('Proccess Complete');
        }
    });
}

function backToCate()
{
    $("#load_wiki").fadeOut(1000, function() {
        $("#cate_wiki").fadeIn(800);
    });
}
