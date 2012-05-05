## CREDITS  ##

 TMDB API v3 PHP class - wrapper to API version 3 of 'themoviedb.org
 
 API Documentation: http://help.themoviedb.org/kb/api/about-3
 
 Documentation and usage in README file

@pakage TMDBPHP
@author Stefan Zidar <stefan.zidar@gmail.com>
@copyright 2012 Stefan Zidar
@date 2012-05-05
@link http://www.github.com/steffmeister
@version 0.0.1
@license BSD http://www.opensource.org/licenses/bsd-license.php

This code was forked from adangq: TMDB_V3_API_PHP
@copyright 2012 adangq
@license BSD http://www.opensource.org/licenses/bsd-license.php
@date 2012-02-12
@version 0.0.1
@author adangq <adangq@gmail.com>
@link http://www.github.com/adangq

## Requirements ##

- PHP 5.2.x or higher
- cURL
- TMDB API-key

## How to use ##

### Initialize the class ###

    <?php
	    include('tmdbphp.php');
	    
		//Insert your api key of TMDB    
		$apikey="YOUR_APIKEY";

		$tmdb_V3 = new TMDBv3($apikey);	?>

	?>

### Set your desired language ###

    <?php
    	// eg, set to german, default is english
		$tmdb_V3->setLang('de')	?>
	?>

### Search movie ###

    <?php
		//Title to search for
		$title = 'back to the future';

		$searchTitle = $tmdb_V3->searchMovie('$title');

		// return array
		echo"<pre>";print_r($searchTitle);echo"</pre>";

    ?>


## GET IMAGE URL IN CONFIGURATION API ##
	<?php
		$imageURL= $tmdb_V3->getImageURL();

		// return array
		echo"<pre>";print_r($imageURL);echo"</pre>";
	?>

## Movie Info  ##

	<?php
		$idMovie=11;

		#Info
		$movieInfo = $tmdb_V3->movieDetail($idMovie);

		// return array
		echo"<pre>";print_r($movieInfo);echo"</pre>";
	?>

## Cast ##
	<?php
		$idMovie=11;
		$movieCast = $tmdb_V3->movieCast($idMovie);
	
		// return array
		echo"<pre>";print_r($movieCast);echo"</pre>";
	?>

## Images names ##
	<?php
		$idMovie=11;
		$moviePoster = $tmdb_V3->moviePoster($idMovie);

		// return array
		echo"<pre>";print_r($moviePoster);echo"</pre>";
	?>

## Trailers ##
	<?php
		$idMovie=11;

		$movieTrailer = $tmdb_V3->movieTrailer($idMovie);

		// return array
		echo"<pre>";print_r($movieTrailer);echo"</pre>";
	?>

## Translations ##
	<?php
		$idMovie=11;

		$movieTrans = $tmdb_V3->movieTrans($idMovie);

		// return array
		echo"<pre>";print_r($movieTrans);echo"</pre>";
	?>

## alternative_titles ##
	<?php
		$idMovie=11;

		$movieTitles = $tmdb_V3->movieTitles($idMovie);

		// return array
		echo"<pre>";print_r($movieTitles);echo"</pre>";
	?>

## Issues/Bugs ##

We didn't find any bugs (yet). If you find one, please inform us with the issue tracker on [github](http://github.com/steffmeister/tmdbphp/issues).

## Changelog ##


**TMDb 0.0.1**

- This is the first version of the fork

## TO DO ##

Comment the code.
Documentation.


## License ##

This plugin has a [BSD License](http://www.opensource.org/licenses/bsd-license.php). You can find the license in license.txt that is included with class-package


