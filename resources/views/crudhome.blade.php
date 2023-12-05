@extends('welcome') 

@section('content')
    <header>
        <span><h3>Simple Laravel Inventory</h3></span>
    </header>
    <div class="item-controls">
        <div class="item-list">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Cost</th>
                    <th>Description</th>
                    <th colspan="2">Controls</th>
                </tr>
                @foreach($items as $item)
                <tr>
                    <td>{{$item->item_id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->cost}}</td>
                    <td>{{$item->description}}</td>
                    <form action="{{route('item.destroy',$item->item_id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <td><button type="submit" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button></td>
                    </form>
                    <td><button>Edit</button></td>
                </tr>
                    
                @endforeach
            </table>
        </div>
    
        <div class="item-forms">
            <form method="POST" action="{{route('item.store')}}">
                @csrf
                <label for="name"><b>Name:</b></label>
                <input type="text" name="name" id="name">
                <label for="cost"><b>Cost:</b></label>
                <input type="number" name="cost" id="cost">
                <label for="description"><b>Description:</b></label>
                <textarea name="description" id="description" cols="50" rows="10"></textarea>
                <button type="submit">
                    Add item
                </button>
            </form>
    

        </div>
    </div>
    

@endsection

