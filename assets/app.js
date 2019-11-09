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


$('.felipe').click(function(){
   var data = $(this).attr('data-id');
   $.ajax({
      type: 'post',
      url : '?c=usuarios&m=felipeC',
      data :{id:data},
      success(response){
        $('#response_result').html(response);
        $('#exampleModalE').modal('show');
      }
   });
 
});