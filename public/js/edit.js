$('.sel').on('change', function(){
      cambio();
});


function cambio(){
var array = [];
  $(".sel :selected").each(function(){
    array[$(this).val()]=(parseInt($(this).val()));
  });

  for(i=0;i<array.length;i++){
   if(array[i]!=undefined){

       $(".sel option[value=" + array[i] + "]").hide();
    }
    if(array[i]==undefined){

      $(".sel option[value=" + i + "]").show();

    }
  }
}
