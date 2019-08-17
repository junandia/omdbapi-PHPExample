<?php
	/**
	 * @Rismawan Junandia
	 */
	class Omdbapi extends CI_Model
	{
		function get_data($api,$keyword){
			$url = "http://www.omdbapi.com/?t=".$keyword."&plot=full&apikey=".$api;
			$get = file_get_contents($url);
			return $show = json_decode($get);
		}
		function search($api,$keyword){
			$uri = $this->input->get('page');
			$page = ($uri) ? $uri : 1;
			$url = "http://www.omdbapi.com/?s=".$keyword."&page=".$page."&apikey=".$api;
			$get = file_get_contents($url);
			return $show = json_decode($get);
			//$show = json_decode($get);
			//return json_encode($show);
		}
	}
?>