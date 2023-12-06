<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class itemController extends Controller
{
    /**
     * Display a listing of the resource.
     */


     protected $itemEdit;

     public function __construct(Item $itemEdit)
     {
         $this->itemEdit = $itemEdit;
     }

    public function index()
    {
        $items = Item::all();
        return view('crudhome')
        ->with('items',$items);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        //return $req;

        $item = new Item();
        $item->name = $req->input('name');
        $item->cost = $req->input('cost');
        $item->description = $req->input('description');
        $item->save();
    
        return redirect()->route('item.index');
    }

    public function show($id)
    {
            $itemEdit = Item::findOrFail($id);
            return view('editPage')
            ->with('item',$itemEdit);
    }

    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, $id)
    {
        $item = Item::findOrFail($id);

            $req->validate([
                'name' => 'required|string|max:255',
                'cost' => 'required|numeric',
                'description' => 'required|string',
            ]);

            $item->update([
            'name' => $req->input('name'),
            'cost' => $req->input('cost'),
            'description' => $req->input('description'),
            ]);

            return redirect()->route('item.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //return $id;
        $item = Item::findOrFail($id);
        $item->delete();
        return redirect()->route('item.index');
    }
}
