@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-12">
            <h2>Criar Tópico</h2>
            <hr>
        </div>
        <div class="col-12">
            <form action="{{route('threads.store')}}" method="post">
                @csrf

                <div class="form-group">
                    <label for="">Escolha um canal para o tópico</label>
                    <select name="channel_id" id="" class="form-control">
                        @foreach ($channels as $channel)
                            <option value="{{$channel->id}}">{{$channel->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">Conteúdo Tópico</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <label for="body">Conteúdo Tópico</label>
                    <textarea class="form-control" name="body" id="" cols="30" rows="10"></textarea>
                </div>

                <button type="submit" class="btn btn-lg btn-success">Criar Tópico</button>
            </form>
        </div>
    </div>

@endsection
