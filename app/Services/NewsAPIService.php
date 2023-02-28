<?php

namespace App\Services;

use jcobhams\NewsApi\NewsApi;
use jcobhams\NewsApi\NewsApiException;

class NewsAPIService
{
    private NewsApi $newsapi;

    public function __construct()
    {
        $this->newsapi = new NewsApi(env("NEW_API_KEY"));
    }

    public function search(
        $q = null,
        $sources = null,
//        $country = null,
//        $category = null,
//        $from = null,
//        $to = null,
//        $language = 'en',
//        $sort_by = null,
        $page_size = 12,
        $page = 1
    )
    {
        return $this->newsapi->getEverything($q, $sources, null, null, null, null, 'en', null, $page_size, $page);
//        return $this->newsapi->getTopHeadlines($q, $sources, $country, $category, $page_size, $page);
    }

    public function topHeadlines(
        $q = null,
        $sources = null,
        $country = null,
        $category = null,
        $page_size = 12,
        $page = null
    )
    {
        return $this->newsapi->getTopHeadlines($q, $sources, $country, $category, $page_size, $page);

    }

    public function getSources($category = null, $language = 'en', $country = null)
    {
        return $this->newsapi->getSources($category, $language, $country);
    }
}
