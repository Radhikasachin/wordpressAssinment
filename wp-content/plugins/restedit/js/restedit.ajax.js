(function($){
//Three pieces of information:
//REST API root URL
//console.info("The REST API root URL is: ",WPsettings.root);
//Nonce value
//console.info("The nonce value is: URL is: ",WPsettings.nonce);
//Current post ID
//console.info("The current post ID is: ",WPsettings.current_ID);

//console.info("The plugin is working properly!");

const $ENTRYTITLE = $('.entry-title');  // mention the area where we want to make a button.
//Add an edit button and a save button directly after the entry title.
//hide the save button using display:none in an inline style.

$ENTRYTITLE.after('<button class="edit-button edit-title">Edit title</button><button class="edit-title save" style="display:none">Save title</button>');

function runAjax(newTitle) {
  $.ajax({
    url: WPsettings.root + 'wp/v2/posts' + WPsettings.current_ID,
    method: 'POST',
    beforeSend: function(xhr) {
      xhr.setRequestHeader( 'X-WP-Nonce', WPsettings.nonce);
    },
    data: {
      'title': newTitle
    }
  })
}
$('.edit-title.edit-button').on('click', function(){
let $originalTitle = $ENTRYTITLE.text();
$ENTRYTITLE.toggle();
$ENTRYTITLE.after('<input id="title-input" type="text">');
document.querySelector('#title-input').value=$originalTitle;
$(this).toggle();
$('.edit-title.save').toggle();
});

$('.save').on('click', function() {
let newTitle = document.querySelector('#title-input').value;
console.log('test test',newTitle );

$ENTRYTITLE.text(newTitle);
$ENTRYTITLE.toggle();
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
