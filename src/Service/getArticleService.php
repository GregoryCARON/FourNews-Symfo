<?php
	/**
	 * Author : Gregory CARON
	 **/
	namespace App\Service;
	use jcobhams\NewsApi\NewsApi;
	use jcobhams\NewsApi\NewsApiException;
	
	class getArticleService
	{
		private NewsApi $newsApi;
		private string $apiKey = '3c6949a971334edeb935d3ea2b2b5117';
		public function __construct()
		{
			$this->newsApi = new NewsApi($this->apiKey);
		}
		
		/**
		 * @throws NewsApiException
		 */
		public function getAllNews(string|null $q = null, string|null $source = null): object
		{
			return $this->newsApi->getEverything($q, $source, null, null, null, null, 'fr');
		}
		
		/**
		 * @throws NewsApiException
		 */
		public function getTopHeadLines(): object
		{
			return $this->newsApi->getTopHeadlines(null, null, 'fr', null, null, null);
		}
		
		/**
		 * @throws NewsApiException
		 */
		public function getOneSource(string $category): object
		{
			return $this->newsApi->getSources(null, 'fr', 'fr');
		}
	}
