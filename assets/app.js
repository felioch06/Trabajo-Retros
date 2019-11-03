// 
$('#input_search').keyup(function(){
    var dato=$('#input_search').val();
    //alert(dato);

    //function ajax http
    $.ajax({
        type: 'post',
        url: '?c=usuarios&m=searchAjax',
        data:{
            nombre:dato
        },
        success(response){
            $('#response_ajax').html(response)
        }
    });
});