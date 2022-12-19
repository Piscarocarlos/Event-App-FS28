@extends('dashboard.layouts.app')

@section('title', 'Tous les évenements')

@section('button')
    <a href="{{ route('events.create') }}" class="btn btn-dark">Ajouter un event</a>
@endsection

@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="card shadow rounded">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titre</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>

                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
@endsection
