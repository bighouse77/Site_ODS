$(document).ready(function () {
    
    $("#grafico").hide();
    
    $("#noticia1").hover(function () {
            $("#grafico").attr("src", "img/grafico1.png");
            $("#grafico").show("slow");
            
        }, function () {
            $("#grafico").hide("slow");
        }
    );

    $("#noticia2").hover(function () {
        $("#grafico").attr("src", "img/grafico2.png");
        $("#grafico").show("slow");
        
    }, function () {
        $("#grafico").hide("slow");
    }
);

    $("#noticia3").hover(function () {
        $("#grafico").attr("src", "img/grafico3.png");
        $("#grafico").show("slow");
        
    }, function () {
        $("#grafico").hide("slow");
    }
    );
});