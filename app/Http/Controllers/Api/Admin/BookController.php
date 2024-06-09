<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
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

    public function store(StoreBookRequest $request)
{
    $response = $this->default_response;

    try {
        $data = $request->validated();
        $path = null;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->storeAs('books', $file->hashName(), 'public');
        }

        $book = new Book();
        $book->title = $data['title'];
        $book->author = $data['author'];
        $book->publication_add = $data['publication_add'];
        $book->image = $path; // Simpan path gambar ke dalam basis data
        $book->category_id = $data['category_id'];
        $book->save();

        $response['success'] = true;
        $response['data'] = [
            'book' => $book->with('category')->find($book->id),
        ];
    } catch (Exception $e) {
        $response['success'] = false;
        $response['message'] = $e->getMessage();
    }

    return response()->json($response);
}

public function update(UpdateBookRequest $request, String $id)
{
    $response = $this->default_response;

    try {
        $data = $request->validated();
        $path = null;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->storeAs('books', $file->hashName(), 'public');
        }

        $book = Book::find($id);

        if ($book) {
            $book->title = $data['title'];
            $book->author = $data['author'];
            $book->publication_add = $data['publication_add'];

            if ($request->hasFile('image')) {
                $book->image = $path; // Simpan path gambar ke dalam basis data
            }
            $book->category_id = $data['category_id'];
            $book->save();

            $response['success'] = true;
            $response['data'] = [
                'book' => $book->with('category')->find($book->id),
            ];
            $response['message'] = 'Product updated successfully';
        } else {
            $response['success'] = false;
            $response['message'] = 'Product not found';
        }
    } catch (Exception $e) {
        $response['success'] = false;
        $response['message'] = $e->getMessage();
    }

    return response()->json($response);
}

    public function destroy(String $id)
    {
        $response = $this->default_response;
        
        try {
            $book = Book::find($id);
            
            if ($book) {
                $book->delete();
    
                $response['success'] = true;
                $response['message'] = 'Book deleted successfully';
            } else {
                $response['success'] = false;
                $response['message'] = 'Book not found';
            }
        } catch (Exception $e) {
            $response['success'] = false;
            $response['message'] = $e->getMessage();
        }
    
        return response()->json($response);
    }
}
