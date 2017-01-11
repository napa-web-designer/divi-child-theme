Divi Child Theme Instructions
=============================

-   Child Theme created by David Tierney found at
    [**http://designsbytierney.com**](http://designsbytierney.com)
-   This is a child theme for the Divi WordPress theme made by
    [**Elegant Themes**](http://www.elegantthemes.com/).
-   Child theme created March 5, 2015
-   Last updated January 11, 2017 to version 1.0.2 whereby I changed the
    method of importing the parent CSS from the @import method to the
    [enqueque method](https://codex.wordpress.org/Child_Themes), thus a
    functions file is now included, plus I edited the style.css file and
    this README.
-   There is a post about this child theme here: [**about Divi child
    theme**](http://designsbytierney.com/2015/03/divi-child-theme-customized-footer-credits)

Please Note
-----------

This child theme was originally created for two reasons. First to have a
child theme for Divi ready to upload. The second was to allow its users
to customize the footer credits. **However the later versions of Divi
now include the ability to customize or disable the footer credits
within the Theme Customizer at Theme Customizer\>Footer\>Bottom Bar.
This child theme overrides that abilty - so you will NOT be able to use
that feature in the Divi Theme Customizer with this child theme.** (It
is a simple change in the footer.php code that you could change if you
want to change it). The reason I chose to keep this theme with footer
credits automatically generated is because in most cases this is how I
and some want it, and as of yet I was not able to figure a way to have
the year automatically change in the footer credits using the new Divi
feature in the way I can by using PHP to update the year dynamically. (I
tried to create a shortcode but the shortcode did not seem to work in
the Theme Customizer "Edit Footer Credits" field.

Instructions Intro
------------------

This child theme contains four files:

-   **footer.php** - replace the footer credits with a copyright notice
    for the current year and the Site Title, rather than for Elegant
    Themes and WordPress. The footer.php was originally copied and
    edited from Divi theme version 2.3.1. and has been reviewed to be
    compatible with Divi version 3.0.27 except that this footer
    overrides / replaces the newer feature in Divi to customize or
    disable the footer credits from the Theme Customizer, as explained
    above.
-   **screenshot.png** - required - provides an image that represents
    this theme. Can be seen in the WordPress admin Theme panel for this
    theme.
-   **style.css** - required - allows for you to add custom css.
-   **functions.php** - imports parent css styles.

You can use this child theme as it is. Just upload the zip file from
within your admin panel at Appearance\>Themes as a new theme and
activate it. However the following will customize it cosmetically for
your own use.

In order to make these edits, you can either extract the zip file on
your computer, edit the contents, then re-zip the files up before
uploading the zip file from your WordPress Theme admin panel as a new
theme. Or you can upload this zip file as a new theme file and then go
to Appearance\>Editor to edit the CSS file. You would need to use an FTP
client to replace the screenshot.png image, or you could replace it via
a File Manager accessed through your hosting account interface.

Instructions
------------

Replace the screenshot.png with your own image to act as a theme image
as will be displayed in the Theme panel of your WordPress admin.

Edit the Theme Name in style.css on line 2 to replace “Divi Child Theme”
with your own custom name, such as the name of your website. This will
become the name of your theme as presented in the Theme panel of your
WordPress admin.

Add your custom CSS to style.css starting at line 14. You can do this
via your WordPress admin at Appearance\>Editor.

If you extract the zip file before uploading, change the name of the
theme folder to match something you want for your theme, again perhaps
the name of your website. Otherwise you could use an FTP client or a
hosting File Manager to change the name after it is uploaded. This will
show for anyone looking at the code of your website, as the theme folder
name is part of file structure of where your files are located.

Bonus for Front-end Designers and/or Developers
-----------------------------------------------

To add a credit to yourself as the designer or developer of the website,
you just need to un-comment the commented out code on line 46 before the
closing paragraph tag; and edit / customize that part within the
comments with your own link title tag, your own URL and your own link
text.
