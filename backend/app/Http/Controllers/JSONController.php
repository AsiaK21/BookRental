<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JSONController extends Controller
{
    private $jsonFile = '..\..\backend\database\json\books.json';

    public function getBooks()
    {
        $json = file_get_contents($this->jsonFile);
        $books = json_decode($json, true);

        return response()->json($books);
    }

    public function addBooks(Request $request)
    {
        $json = file_get_contents($this->jsonFile);
        $books = json_decode($json, true);

        $newBook = $request->all();

        $books[] = $newBook;

        $updatedJson = json_encode($books, JSON_PRETTY_PRINT);

        file_put_contents($this->jsonFile, $updatedJson);

        return response()->json(['message' => 'Book added successfully']);
    }

    public function downloadJSON()
    {
        $json = file_get_contents($this->jsonFile);

        return response($json)->header('Content-Disposition', 'attachment; filename="books.json"');
    }
    public function addJSONtoJSON(Request $request)
{
    $json = file_get_contents($this->jsonFile);
    $books = json_decode($json, true);

    $newBooks = $request->json()->all();

    foreach ($newBooks as $newBook) {
        $books[] = $newBook;
    }

    $updatedJson = json_encode($books, JSON_PRETTY_PRINT);

    file_put_contents($this->jsonFile, $updatedJson);

    return response()->json(['message' => 'JSON added successfully']);
}

}
