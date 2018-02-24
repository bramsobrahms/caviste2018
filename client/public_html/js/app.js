/**
 * Application cliente
 * 
 * @author C. Ruth
 */

 $(document).ready(function() {
     const API_URL ="http://caviste.localhost/api"
    $('#liste').empty();
    
    
    $.get(API_URL+'/wine/', function(data){
        vins = JSON.parse(data);
        
        $.each(vins, function(key,vin)){
            $('#liste').append('<li>'+vin.name+'</li>');
        });
    });
 
    //gestion des commandes
    $('#btSearch').on('click',function(){
        //récupèrer le mot-clé tapé dnas le formulaire
        let keyword = $ ('form#formSearch in')
    });
});