@extends('admin.admin')

@section('conten')

    <h1>Les biens</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Surface</th>
                <th>cout</th>
                <th>Ville</th>
                <th class='text-end'>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($properties as $property)
            <tr>
                <td>{{$property->title}}</td>
                <td>{{$property->surface}}m2</td>
                <td>{{$property->price, ' '}}</td>
                <td>{{$property->city}}</td>
            </tr>
            @endforeach
        </tbody>
        {{$properties->$links()}}