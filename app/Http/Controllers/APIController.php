<?php

namespace App\Http\Controllers;

class APIController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function home(Request $request)
    {
        $row = $request->input('row');
        
        if(is_numeric($row) && $row > 0 && $row < 11)
        {
            $results = APIModel::tag($row);
            return response()->json($results);
        }

        return response()->json();
    }
    
    public function book(Request $request)
    {
        $bhash = $request->input('bhash');
        
        $results = APIModel::book($id);

        return response()->json([
            'bhash' => $results->bhash,
            'tag' => $results->tag,
            'name' => $results->name,
            'author' => $results->author,
            'intro' => $results->intro,
            'image' => $results->image,
            'updatetime' => $results->updatetime
        ]);
    }

    public function chapter(Request $request)
    {
        $chash = $request->input('chash');

        $results = APIModel::chapter($chash);

        return response()->json([
            'chash' => $results->chash,
            'name' => $results->name,
            'text' => $results->text
        ]);
    }

    public function search(Request $request)
    {
        $name = $request->input('name');
        $page = $request->input('page');
        $take = $request->input('roe');
        
        $namelen = strlen($name);
        
        $skip = $take * ($page - 1);
        
        if($name && $namelen != 1)
        {
            $results = APIModel::search($name, $skip, $take);
            if($results)
            {
                return response()->json($results);
            }
        }
        return response()->json();
    }

    public function tag(Request $request)
    {
        $row = $request->input('row');
        
        if(is_numeric($row) && $row > 0 && $row < 11)
        {
            $results = APIModel::tag($row);
            return response()->json($results);
        }

        return response()->json();
    }

}
