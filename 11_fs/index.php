<?php
// Magic constants
echo __DIR__.'<br>';
echo __FILE__.'<br>';
echo __LINE__.'<br>';

// Create directory
// mkdir('test');

// Rename directory
// rename('test', 'test2');

// Delete directory
// rmdir('test2');

// Read files and folders inside directory
var_dump( scandir('./')); 

// file_get_contents, file_put_contents
echo file_get_contents('lorem.txt') .'<br>';
file_put_contents("sample.txt", "Hello \n I am new");

echo '<br>';

// file_get_contents from URL
$postJson = file_get_contents('https://my-json-server.typicode.com/typicode/demo/posts');
$posts = json_decode($postJson, true);

echo '<pre>';
var_dump ($posts[0]);
echo '</pre>';


// https://www.php.net/manual/en/book.filesystem.php
// file_exists
// is_dir
// filemtime
// filesize
// disk_free_space
// file