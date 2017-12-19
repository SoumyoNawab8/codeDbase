$(document).ready(function(){
  
  var city;
app_id="7f2b21feef63e4b13774f5f41c60b690";
  $.getJSON('https://ipinfo.io', function(data){
    console.log(data.loc);
    $('#city').text(data.city);
  city=data.city;
   
  $.getJSON('https://cors-anywhere.herokuapp.com/http://api.apixu.com/v1/current.json?key=9d0cd1578db54006b43170237170904&q=?callback=?'+city, function(r){
    // console.log("mail us for more gtechxd@gmail.com");
    $('#ic').html('<img id="ic" src="http:'+r.current.condition.icon+'"/>');
    $('#fc').text(r.current.condition.text);
    $('#state').html('( '+r.location.region+', '+data.country+' )');
    $('#temp').html(r.current.temp_c);
    var toggle=0;
    $('#f').on('click',function(event){
    event.preventDefault();
      if(toggle==1){
        $('#temp').html(r.current.temp_c);
    $('#f').text('°C');
        toggle=0;
      }
      else {
    $('#temp').html(r.current.temp_f);
    $('#f').text('°F');
      toggle=1;}
  });
  })
  })
  
})
