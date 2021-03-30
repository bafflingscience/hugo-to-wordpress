# Theme Building in WordPress


I'm taking an existing website built with Hugo Static Site Generator and turning it into a custom WordPress theme.

I am going to attempt to retain all styles and functionality on the new WordPress theme.

I'll be following WordPress's [Template Hierarchy]() to so that WP will find all the files it needs to. I'll use Advanced Custom Fields plugin to add editing capabilities to the Admin interface. All of this is driven by PHP.

Starting out in the root directory `wamp/www/wp-content/themes`, I'll create a new directory for the theme.
`mkdir custom-theme`, then into the directory `cd custom-theme`.

Now it's time to create some files.
There are two files that must exist in a WordPress theme:
```bash
touch index.html
touch styles.css
```
now lets add the rest:
```php
pages.php
header.php
footer.php
single.php
front-page.php
404.php
archive.php
search.php
functions.php
```

Even if you don't know what all these are, and you don't actively use them, these are standard files and should be included in a WordPress theme.

`functions.php` is where the party is.
`header.php` is a where the menu, navbar, logo and header things go.
`footer.php` is a footer
`archive.php` is the blog post archive
`single.php` is the single post type post template
`page.php` is the post type page template


And we'll add the cover to our theme by adding a jpg image to the folder and calling it `screenshot.jpg`

Next we'll copy the header, footer, and body sections from `index.html` in our existing website into the php files in our theme directory.

Copy the from the top of the html file down to the end of the header section in the html file and paste it in `header.php`.

Then at the bottom of `index.html` copy everything from the footer section to the bottom of the page into `footer.php`.

Now copy the main section of the html file and paste it in `front-page.php` because it is our home page.

In WP-Admin, go to Settings > P

If you've only written html and haven't worked with php, or WordPress, you'll have to get used to modular file sourcing.

When you write html and link to css and js, you would put a line in the `<head>` that tells the page where to source its style and interaction documents.

HTML:
```html
<!-- index.html -->
<link rel="stylesheet" href="css/style.css" type="text/css">
<script src="js/script.js"></script>
```

Here is what we'll do to start.


In header.php, where link rel and script src files go, 
move them to functions.php
```php
// functions.php
function load_stylesheets() {
	
	wp_register_style('font', get_template_directory_url() . '/fonts/this/is_some-webfont.css', array(), 1, 'all');
	wp_enqueue_style('font');
	
	wp_register_style('bootstrap', get_template_directory_uri() .'/assets/css/stylesheet.min.somethingorother.css' array(), 1, 'all');
	wp_enqueue_style('bootstrap');

	wp_register_style('dope-style', get_template_directory_uri() . '/css');
	wp_enqueue_style('dope-style',); 
	
	wp_register_style('ugly-style', get_template_directory_uri() . 'path/to/ugly/css', array(), 1, 'all');
	wp_enqueue_style('ugly-style');
	
	wp_register_style('custom', get_template_directory_uri() . '/custom/styles.css', array(), 1, 'all');
	wp_enqueue_style('custom');
}


```
use `wp_head()`


# Advanced Custom Fields

[A Beginner's Guide to Advanced Custom Fields](https://www.advancedcustomfields.com/blog/beginners-guide-advanced-custom-fields/)


# [Automattic/_s](https://github.com/Automattic/_s/blob/master/single.php)  and Underscores


## [Lorem Ipsum](https://lipsum.com/)

## [Secret Chrome for Geniuses](brave://about/)
