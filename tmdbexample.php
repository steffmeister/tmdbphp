<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html><head><title>tmdb tests</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<?php

require('tmdbphp.php');

$tmdb_instance = new TMDbv3('API HERE', 'en');

echo '<a href="?page=search">searchMovie()</a> - <a href="?page=single">movieInfo()</a> - <a href="?page=genres">genreList()</a> - <a href="?page=latest">latestMovie()</a> - <a href="?page=nowplaying">nowPlayingMovies()</a> - <a href="?page=similar">similarMovies()</a> - <a href="?page=trailers">movieTrailers()</a> - <a href="?page=popular">popularMovieList()</a> - <a href="?page=config">getConfig()</a> - <a href="?page=moviecast">movieCast()</a> - <a href="?page=movieposter">moviePoster()</a> - <a href="?page=movieimages">movieImages()</a> - <a href="?page=imagetest">image test</a>';

echo '<pre>';

if ($_GET['page'] == 'search') {
	print_r($tmdb_instance->searchMovie('Back to the future'));
} else if ($_GET['page'] == 'latest') {
	print_r($tmdb_instance->latestMovie());
} else if ($_GET['page'] == 'nowplaying') {
	print_r($tmdb_instance->nowPlayingMovies(1));
} else if ($_GET['page'] == 'popular') {
	print_r($tmdb_instance->popularMovieList(1));
} else if ($_GET['page'] == 'similar') {
	print_r($tmdb_instance->similarMovies('105'));
} else if ($_GET['page'] == 'trailers') {
	print_r($tmdb_instance->movieTrailers('105'));
} else if ($_GET['page'] == 'genres') {
	print_r($tmdb_instance->genreList());
} else if ($_GET['page'] == 'config') {
	print_r($tmdb_instance->getConfig());
} else if ($_GET['page'] == 'moviecast') {
	print_r($tmdb_instance->movieCast('105'));
} else if ($_GET['page'] == 'movieposter') {
	print_r($tmdb_instance->moviePoster('105'));
} else if ($_GET['page'] == 'movieimages') {
	print_r($tmdb_instance->movieImages('105'));
} else if ($_GET['page'] == 'imagetest') {
	$thumb_url = $tmdb_instance->getImageURL('w92');
	$posters = $tmdb_instance->movieImages('105');
	echo $thumb_url.$posters[0]['file_path']."\n";
	$orig_url = $tmdb_instance->getImageURL();
	echo $orig_url.$posters[0]['file_path'];
} else {
	$movie = $tmdb_instance->movieInfo('105');
	print_r($movie);
	echo '=================';
	//echo getMidCover($movie[0]);
}

echo '</pre>';

?>
</body>
</html>
