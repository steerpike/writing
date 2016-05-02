<?php namespace App\Http\Controllers;


use App\Competition;
use PHPHtmlParser\Dom;

class GatherController extends Controller {


	public function stories() 
	{
		//Extract descriptions and store as Phenomenon
		//Extract wikidata id and store
		$url = "http://www.christopherfielden.com/short-story-tips-and-writing-advice/short-story-competitions.php";
        $output = $this->gather($url, false);
        $dom = new Dom;
        $dom->load($output);
        $rows = $dom->find('tr');
        foreach($rows as $row) {
			$cells = $row->find('td');
			foreach($cells as $cell) {
				//if(is_numeric($cell[->text)) {
					echo($cell->text.'<br />');
				//}
				/*
				$link = $cell->find('a')[0];
				if($link && $link->text) {
					print_r($link->text);
					echo('<br />');
				}
				*/
			}
		}
        die;
        $key = key(get_object_vars($output->query->pages));
        
        return 'here';
	}

	public function gather($url, $decode=true) 
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);//return the transfer as a string
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$output =curl_exec($ch);
		if($decode)
		{
        	$output = json_decode($output);
		}
        curl_close($ch); 
        return $output;
	}

}