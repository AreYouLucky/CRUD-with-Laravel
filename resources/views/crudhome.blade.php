@extends('welcome') 

@section('content')
<div class="table">
    Items
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>cost</th>
            <th>Description</th>
        </tr>
        @foreach($items as $item)
        <tr>
            <td>{{$item->item_id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->cost}}</td>
            <td>{{$item->description}}</td>
        </tr>
            
        @endforeach
    </table>



</div>


