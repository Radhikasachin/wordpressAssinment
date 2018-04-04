//editFrontEndViaREST
(function($) {
  // $(window).on('load', function(){
  console.log('Hello I am serving you');

  //root till REST
  //id till posten
  //nonce
console.log ('WPsettings.root', WPsettings.root);
console.log ('WPsettings.nonce', WPsettings.nonce);
console.log ('WPsettings.current_ID', WPsettings.current_ID)

var $entryTitle = $('.entry-title');

$entryTitle.after('<button class="edit-button edit-title"> Redigera Rubriken </button><button class="edit-title save" style="display:none">Spara rubriken </button>');

function runAjax(newTitle){
  $.ajax({
    url: WPsettings.root + 'wp/v2/post/' + WPsettings.current_ID,
    method: 'POST',
    beforeSend: function (xhr) {
      xhr.setRequestHeader('X-WP-Nonce', WPsettings.nonce);
    },
    data: {
      'title': newTitle
    }
  })
}

$('.edit-title.edit-button').on('click', function(){
var $originalTitle =  $('.entry-title').text();
//console.log('$originalTitle', $originalTitle);

$entryTitle.toggle();
$entryTitle.after('<input id="title-input" type="text">');
$('#title-input').val($originalTitle);
$(this).toggle();
$('.edit-title.save').toggle();
});

$('.save').on('click', function() {
  var newTitle = $('#title-input').val();
console.log('test test',newTitle );

  $entryTitle.text(newTitle);
  $entryTitle.toggle();
  $('#title-input').toggle();
  $('.edit-title.edit-button').toggle();
  $(this).toggle();

  runAjax(newTitle);


});

//WPsettings.root
//WPsettings.nonce
//WPsettings.current_ID

/*  'root' => esc_url_raw(rest_url()),
  'nonce' => wp_create_nonce('wp_rest'),
  'current_ID' => get_the_ID()*/


})(jQuery)
