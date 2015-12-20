<?php
namespace RedCat\Route\Match;
class Path{
	private $match;
	function __construct($match){
		$this->match = $match;
	}
	function __invoke($uri){
		$match = ltrim($this->match,'/');
		if(empty($match)){
			if(empty($uri))
				return '';
		}
		elseif((string)$uri===$match){
			return $uri;
		}
	}
}