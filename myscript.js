console.log("script hit");
(function($) { //no conflict wrapper

$(document).ready(function() {

//$("button").hover(
    $("div").hover(
	    //   function() {
	    //     // helloWorld();
	    //     setupTinymce();
	    //   });

	function(){
	    // function setupTinymce() { //todo not getting defined wth!
	       console.log("setup function defined");
	      tinyMCE.init({
		// General options
		mode : "none",
		selector: "textarea",
		theme: 'modern',
		body_class: 'radly_generated',
		init_instance_callback : function(editor) {
		  console.log("Editor: " + editor.id + " is now initialized.");
		}
		});
	      });
	   
	     

	    /* dep of waypoint plugin */
	    // var waypoint = new Waypoint({
	    //   element: document.getElementById('title'),
	    //   handler: function(direction) {
	    //     console.log('Scrolled to waypoint!')
	    //     $("#wp-content-editor-container").toggle ();
	    //     $(".wp-editor-wrap").addClass ( "hiya" );
	    //   }
	    // })


  });


  window.onload = function () { 

    console.log ("window loaded congrats");

  };

})( jQuery );


