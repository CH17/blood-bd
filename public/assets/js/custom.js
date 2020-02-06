(function($) {
  "use strict"; // Start of use strict

    /*
    ## Get google Place Suggestion
    ***************************/

    var textInput = document.getElementById('district');   

    if (textInput !== null && textInput !== undefined) {            

        // Init a timeout variable to be used below
        var timeout = null;    

        // Listen for keystroke events
        textInput.onchange = function (e) { 
             
              
          var district = jQuery("#district").val();                                
          var urlAPI = "api/get-hospitals";

            jQuery.ajax( urlAPI, {
              data: 'query='+district, 
            }).done(function( data ) {
               jQuery('#hospital').find('option').remove();
               jQuery.each(jQuery.parseJSON(data.data), function(key,value){

                     
                     jQuery('#hospital').append($('<option>', { 
                        value: value.lat+','+value.lng,
                        text : value.name 
                    }));
                });
            });                

           
        };

    }

})(jQuery); // End of use strict

$(document).ready(function() {
    $('#search_result').DataTable();
} );
