#ProxyConnect 0.1.0

By Matt Sephton <matt.sephton@gmail.com>

Links the Vanilla forum signin process to the WolfCMS login process.

This way users have a Single Sign On and the experience of using Vanilla alongside WolfCMS is more streamlined.

## NOTES

Contains plugin and helper file.

Requires the Registered Users plugin to be installed.

Requires the cookie domain/path in wolf/app/models/AuthUser.php on lines 219, 294 to include both your forum and wolf paths. 

The domains used for cookies must be dotted domains, as shown in the example code, as localhost will not work. You may also wish to use `'.'.$_SERVER["HTTP_HOST"]` rather than `null` in these bits of code.

## INSTALLATION

1. Setup the Registered Users plugin and confirm it is working.

2. Go to "Pages" tab and create child page of "Home Page" (green "+" on the right).

3. Put the name your new page (e.g. "ProxyConnect" or similar) in the "Page Title" box.

4. Put the following code in the "body" area:

	<?php
	use_helper('ProxyConnect');
	$test = new ProxyConnect();
	$test->UserInfo();
	?>

	This calls the helper function when the page is requested.

5. Below the text-editing area, set the dropdown menus to read:
   - Layout: None
   - Page Type: None
   - Filter: None
   - Status: Hidden

6. Click the "Save and Close" button.

7. Setup Vanilla's ProxyConnect plugin on your forum and confirm it is working.

## CHANGLOG

2011-02-08	initial version
