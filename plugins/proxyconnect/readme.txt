ProxyConnect 0.1.0
By Matt Sephton <matt.sephton@gmail.com>

Links the Vanilla forum signin process to the WolfCMS login process.

This way users have a Single Sign On and the experience of using Vanilla alongside WolfCMS is more streamlined.

== NOTES:

Contains plugin and helper file.

Requires the Registered Users plugin to be installed.

Requires the cookie domain/path in AuthUser on lines 219, 294 to include both your forum and wolf paths

== INSTALLATION:

PRE. Setup the Registered Users plugin and confirm it is working.

1. Go to "Pages" tab and create child page of "Home Page" (green "+" on the right).

2.1 Put the name your new page (e.g. "ProxyConnect" or similar) in the "Page Title" box.
2.2 Put the following code in the "body" area:

<?php
use_helper('ProxyConnect');
$test = new ProxyConnect();
$test->UserInfo();
?>

This calls the helper function when the page is requested.

3. Below the text-editing area, set the dropdown menus to read:
   - Layout: None
   - Page Type: None
   - Filter: None
   - Status: Hidden

4. Click the "Save and Close" button.

POST. Setup Vanilla's ProxyConnect plugin on your forum and confirm it is working.

== LICENSE:

 Wolf CMS - Content Management Simplified. <http://www.wolfcms.org>
 Copyright (C) 2009 Martijn van der Kleijn <martijn.niji@gmail.com>
 Copyright (C) 2008 Philippe Archambault <philippe.archambault@gmail.com>

 This file is part of Wolf CMS.

 Wolf CMS is free software: you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation, either version 3 of the License, or
 (at your option) any later version.

 Wolf CMS is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with Wolf CMS.  If not, see <http://www.gnu.org/licenses/>.

 Wolf CMS has made an exception to the GNU General Public License for plugins.
 See exception.txt for details and the full text.