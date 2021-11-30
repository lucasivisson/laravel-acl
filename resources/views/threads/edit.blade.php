@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-12">
            <h2>Editar Tópico</h2>
            <hr>
        </div>
        <div class="col-12">
            <form action="{{route('threads.update', $thread->slug)}}" method="post">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Conteúdo Tópico</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{$thread->title}}">
                    @error('title')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="body">Conteúdo Tópico</label>
                    <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="" cols="30" rows="10">{{$thread->body}}</textarea>
                    @error('body')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-lg btn-success">Atualizar Tópico</button>
            </form>
        </div>
    </div>

@endsection
