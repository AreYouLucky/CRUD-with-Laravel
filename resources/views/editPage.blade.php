@extends('welcome') 

@section('content')

    <div class="item-controls">
        <div class="item-forms">
            <form method="POST" action="/items/{{$item->item_id}}">
                @csrf
                @method('PUT')
                <label for="name"><b>Name:</b></label>
                <input type="text" name="name" id="name" value="{{$item->name}}"> 
                <label for="cost"><b>Cost:</b></label>
                <input type="number" name="cost" id="cost" value="{{$item->cost}}">
                <label for="description"><b>Description:</b></label> <br>
                <textarea name="description" id="description" cols="50" rows="10">{{$item->description}}</textarea><br>
                <button type="submit">
                    Update Item
                </button>
            </form>
        </div>
    </div>
    

@endsection

