<?php
  /////////////////////////////////////
 // index.php for SimpleExample app //
/////////////////////////////////////

// Create f3 object then set various global properties of it
// These are available to the routing code below, but also to any 
// classes defined in autoloaded definitions

$f3 = require('../../../AboveWebRoot/fatfree-master/lib/base.php');
$f3->set('AUTOLOAD','autoload/;../../../AboveWebRoot/autoload/');		
$db = DatabaseConnection::connect();
$f3->set('DB', $db);

$f3->set('DEBUG',3);		// set maximum debug level
$f3->set('UI','ui/');		// folder for View templates


  /////////////////////////////////////////////
 // Simple Example URL application routings //
/////////////////////////////////////////////

//home page (index.html) -- actually just shows form entry page with a different title
// $f3->route('GET /',
//   function ($f3) {
//     $f3->set('html_title','Feedback Form');
//     $f3->set('content','simpleHome.html');
//     echo Template::instance()->render('layout.html');
//   }
// );

// When using GET, provide a form for the user
$f3->route('GET /',
  function($f3) {
    $f3->set('html_title','Feedback Form');
    $f3->set('content','feedbackForm.html');
    echo template::instance()->render('layout.html');
  }
);

// When using POST (e.g.  form is submitted), invoke the controller, which will process
// any data then return info we want to display. We display
// the info here via the response.html template
$f3->route('POST /feedbackform',
  function($f3) {
	$formdata = array();			// array to pass on the entered data in
	// $formdata["name"] = $f3->get('POST.name');			// whatever was called "name" on the form
	// $formdata["colour"] = $f3->get('POST.colour');		// whatever was called "colour" on the form
  $formdata["name"] = $f3->get('POST.name');
  $formdata["surname"] = $f3->get('POST.surname');
  $formdata["email"] = $f3->get('POST.email');
  $formdata["tel"] = $f3->get('POST.tel');
  $formdata["message"] = $f3->get('POST.message');

	$f3->set('formData', $formdata);
		
  $f3->set('html_title','Simple Example Response');
	$f3->set('content','response.html');
	echo template::instance()->render('layout.html');
  }
);

  ////////////////////////
 // Run the FFF engine //
////////////////////////

$f3->run();

?>

