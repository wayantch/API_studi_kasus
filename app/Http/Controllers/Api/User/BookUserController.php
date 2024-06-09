<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Exception;
use Illuminate\Http\Request;

class BookUserController extends Controller
{
    protected $default_response = [
        'success' => false,
        'data' => [],
        'message' => ''
    ];
    public function index()
    {
        $response = $this->default_response;
    
        try {
            $books = Book::all();
    
            $response['success'] = true;
            $response['data'] = $books;
    
        } catch (Exception $e) {
            $response['success'] = false;
            $response['message'] = $e->getMessage();
        }
        return response()->json($response);
    }
}
