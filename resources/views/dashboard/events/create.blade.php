@extends('dashboard.layouts.app')
@section('title', 'Ajouter un évenement')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-tagsinput.css') }}">
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="title">Titre</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Ajouter un titre">
                            </div>
                            <div class="form-group mb-3">
                                <label for="places">Nombre de places</label>
                                <input type="number" class="form-control" name="places" id="places" placeholder="Ajouter le nombre de places">
                            </div>
                            <div class="form-group mb-3">
                                <label for="price">Prix</label>
                                <input type="number" class="form-control" name="price" id="price" placeholder="Ajouter le prix">
                            </div>
                            <div class="form-group mb-3">
                                <label for="cover">Image de l'évenement</label>
                                <input type="file" class="form-control" name="cover" id="cover" accept="image/*">
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="start_time">Date de début</label>
                                        <input type="datetime-local" class="form-control" name="start_time" id="start_time" placeholder="Ajouter la date de début">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="finish_time">Date de fin</label>
                                        <input type="datetime-local" class="form-control" name="finish_time" id="finish_time" placeholder="Ajouter la date de fin">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="speakers">Intervenants</label>
                                <input type="text" class="form-control" name="speakers[]" data-role="tagsinput" multiple id="speakers" placeholder="Ajouter un titre">
                            </div>
                            <div class="form-group mb-3">
                                <label for="content">Contenu</label>
                                <textarea name="content" id="content" class="form-control" cols="30" rows="4"></textarea>
                            </div>
                            <button class="btn btn-dark btn-lg w-100">Sauvegarder</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/js/bootstrap-tagsinput.js') }}"></script>
@endsection
