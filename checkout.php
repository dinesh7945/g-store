<?php


// if session is der there payment page
// When you work with an application, you open it, do some changes, and then you close it. This is much like a Session. The computer knows who you are. It knows when you start the application and when you end. But on the internet there is one problem: the web server does not know who you are or what you do, because the HTTP address doesn't maintain state.
// Session variables solve this problem by storing user information to be used across multiple pages (e.g. username, favorite color, etc). By default, session variables last until the user closes the browser.
// So; Session variables hold information about one single user, and are available to all pages in one application.



// if customer is login then pay page---or else login page 
if (!isset($_SESSION['customer_email'])) {
	include("login.php");
} else {
	include("payment_option.php");
}
