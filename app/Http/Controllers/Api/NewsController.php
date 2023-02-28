<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\NewsAPIService;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;

class NewsController extends Controller
{
    private $newsApiService;

    public function __construct()
    {
        $this->newsApiService = new NewsAPIService();
    }

    public function searchNews(Request $request)
    {
        $query = $request->q;
        $sources = $request->sources;
//        $country = $request->country;
//        $category = $request->category;
        $page = (int)$request->page;
        $page_size = 12;

        $data = $this->newsApiService->search($query, $sources, $page_size, $page);
        return response()->json($data);
    }

    public function getTopHeadlines(Request $request)
    {
        $query = $request->q;
        $sources = $request->sources;
        $country = $request->country;
        $category = $request->category;
        $page = (int)$request->page;
        $page_size = 20;

        $data = $this->newsApiService->topHeadlines($query, $sources, $country, $category, $page_size, $page);
        return response()->json($data);
    }

    public function getSources(Request $request)
    {
        $data = $this->newsApiService->getSources($request->category, 'en', $request->country);
        return response()->json($data);
    }
}
