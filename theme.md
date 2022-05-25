[//]: # (This page should help a new developer to continue developing your theme. Include)

[//]: # (relevant information about what features your theme has, files that would need editing, design)

[//]: # (decisions, colours, etc. You do not need to produce a serious design document or reproduce basic)

[//]: # (details about WordPress theme development, only what is specific to your theme.)


# Jazz Club

Contributors: 
* Daniel Mackenzie
* Naoki Da Costa 
* Sandeep Kaur
* Liam WIlliams

Requires at least: WordPress 5.0 
Tested up to: WordPress 5.8
Requires PHP: 5.6

License: GNU General Public License v3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html

##  == Description ==

built on starter theme: Understrap  

Website: [https://understrap.com](https://understrap.com)

To provide the jazz club site with an identity and accurately expressing the clients needs/goals for the club website, a custom theme was built using the "Understrap" starter theme. this provided the team with a basic starting point, and a stand alone theme that won't become obsolete in the near future.

### Why Understrap?

Understraps provides the basic functionality for a theme to get started quickly. when initially downloaded it included well-commented website files to enable quick adjustments of the theme where needed. Some things to consider when editing the theme.

### Notable Features

header

The contents of the header can be edited from inside the header.php file. The file contains a basic set up of the links inside a navbar using HTML. The file is styled using CSS. The file could be styled with SASS however in this state it is inly using CSS.  The Header was made deliberately bare as it was inspired by sites promoting similar content.  The styling  classes are from ‘understrap’.
The images in the header would not work internally so we turned to hosting the image off site using imgur.


footer

The jazz footer is found in the footer.php file. The file is a template for displaying the footer. Contains the closing of the #content div and all content after the Jazz-child package. The footer takes its styling from the understrap theme. 

widgets

The widgets are extended through the  widgets.php file. The file places the widget area.

style.css

The style sheet provides a minimalistic design with contrasting colors i.e. black with a white background, is used with intent of reaching younger audiences/improve readability of key information. The style.css file of the theme provides the ability to adhear to this design. The style.css file is well organised into sections related to the part of the website that is being adjusted.

### Colour Theme Recommended 
scheme main, secondary 
background #FFD98E, #FEA655
header/footer #566357, #909473
aesthetics #E34A27


## == Copyright ==

Understrap WordPress Theme, 2021 Howard Development & Consulting, LLC
Understrap is distributed under the terms of the GNU GPL.

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

This theme bundles the following third-party resources:

* Underscores: https://github.com/Automattic/_s/blob/master/LICENSE (GNU GPLv2)
* Font Awesome: https://fontawesome.com/v4.7/license/ (Font: SIL OFL 1.1, (S)CSS: MIT)
* Bootstrap: http://getbootstrap.com | https://github.com/twbs/bootstrap/blob/master/LICENSE (MIT)
* WP Bootstrap Navwalker by Edward McIntyre & William Patton: https://github.com/wp-bootstrap/wp-bootstrap-navwalker (GNU GPLv3)

## == Changelog ==

### 1.0
* Released: may 24, 2022

Initial release
