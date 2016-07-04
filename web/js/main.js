    $(document).live('ready', function(){

        $("a").live("click", 'a', function(e){ 
            if(this.id == "site/logout") {

                $.pjax.reload({container: "#layout"});
            }   
                e.preventDefault();
            var href= this.id;
            var csrfToken = $('meta[name="csrf-token"]').attr("content");    
            $("#main").fadeOut(50, function(){

                $.ajax({url: "?r="+href,
                data:{_csrf: csrfToken, id: href},type: 'POST', success: function(result){
                    $("#main").html(result);
                     
                }});
                $("#main").fadeIn(700);
                if(this.id == "site/logout") {
                    location.reload();
                      }
            });
           
        });
    });
