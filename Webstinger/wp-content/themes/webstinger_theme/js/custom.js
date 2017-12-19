
//requote javascript
$(document).ready(function(){
  // $('nav').css("display","none");

window.onscroll = function() {myFunction()};

function myFunction() {
  $('nav').addClass('animated');
    if (document.body.scrollTop > 130 || document.documentElement.scrollTop > 130) {
        var temp=".fcont h2";
          $(temp).addClass('animated fadeIn');
    }
    if (document.body.scrollTop > 380 || document.documentElement.scrollTop > 380){
      $('nav').css("display","flex");
      $('nav').removeClass('fadeOut');
      $('nav').addClass('fadeIn');

    }
    else{
      $('nav').removeClass('fadeIn');
      $('nav').addClass('fadeOut');
      // $('header').css("display","none");
    }

}


  var quote;
  var author;
  function getNewQuote(){
    $.ajax({
      url: 'https://quotesondesign.com/wp-json/posts?filter[orderby]=rand&filter[posts_per_page]=1&_jsonp=?',
      jsonp: 'jsonp',
     dataType: 'json',
      
      data: {
        method: 'getQuote',
        lang: 'en',
        format: 'jsonp',
        cache: false,
        },
         success: function(response){
        
           quote=response[0].content;
           author=response[0].title;
        //console.log(response);
           $('#quote').html(quote);
           if(author){
             $('#author').text('said by '+author);
           }
           else{
             $('#author').text('- unknown');
             
           }
         }
    });
  }
  getNewQuote();
  $('.get-quote').on('click', function(event){
    event.preventDefault();
    getNewQuote();
  });  
   $('.share-quote').on('click', function(event){
     event.preventDefault();
     window.open('https://twitter.com/intent/tweet?text='+ encodeURIComponent(quote + '--'+author));
   }); 
  

});


//   $('#myScrollspy').on('activate.bs.scrollspy', function () {
//   alert("lol");
// })