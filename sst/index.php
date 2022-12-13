<h2>School of science and technology</h2>
<h2>Books List</h2>
 <?php
	$fileList = glob('ebook/*');

	foreach($fileList as $filename){
		if(is_file($filename)){
			$books = explode("/",$filename);
			$book = $books[1];
			$title = explode(".",$book);
			$book_title = ucfirst($title[0]);
			echo "</p><a href='{$filename}'>{$book_title}</a><p>";
					
		}   
	}
	
?>
