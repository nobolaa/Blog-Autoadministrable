@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear nuevo Post</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.posts.store', 'autocomplete' => 'off', 'files' => 'true']) !!}
                
                {!! Form::hidden('user_id', auth()->user()->id) !!}

                <div class="from-group mb-2">
                    {!! Form::label('name', 'Nombre:') !!}
                    {!! Form::text('name', null, [
                        'class' => 'form-control',
                        'placeholder' => 'Ingrese el nombre del post'
                    ]) !!}
                
                    @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                
                <div class="from-group mb-3">
                    {!! Form::label('slug', 'Slug:') !!}
                    {!! Form::text('slug', null, [
                        'class' => 'form-control',
                        'placeholder' => 'Ingrese el slug del post',
                        'readonly'
                    ]) !!}
                
                    @error('slug')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('category_id', 'Categoria:') !!}
                    {!! Form::select('category_id', $categories, null, [
                       'class' => 'form-control' 
                    ]) !!}
                
                    @error('category_id')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                
                <div class="form-group">
                    <p class="font-weight-bold">Etiquetas:</p>

                    @foreach ($tags as $tag)
                        <label class="mr-2 font-weight-normal">
                            {!! Form::checkbox('tags[]', $tag->id, null) !!}
                            {{$tag->name}}
                        </label>
                    @endforeach
                
                    @error('tags')
                        <br>
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                
                <div class="form-group">
                    <p class="font-weight-bold">Estado:</p>

                    <label class="mr-2 font-weight-normal">
                        {!! Form::radio('status', 1, true) !!}
                        Borrador
                    </label>

                    <label class="mr-2 font-weight-normal">
                        {!! Form::radio('status', 2) !!}
                        Publicado
                    </label>

                    @error('status')
                        <br>
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <div class="image-wrapper">
                            <img id="picture" src="{{asset('storage/post_defecto.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            {!! Form::label('file', 'Imagen que se mostrará en el post:') !!}
                            {!! Form::file('file', [
                               'class' => 'form-control-file',
                               'accept' => 'image/*'
                            ]) !!}
                        
                            @error('file')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore numquam eos corporis praesentium, expedita id voluptatum ad accusantium ipsa ea commodi odit, quam blanditiis nam ipsum nostrum? Repellendus, voluptate expedita.</p>
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('extract', 'Extracto:') !!}
                    {!! Form::textarea('extract', null, [
                       'class' => 'form-control' 
                    ]) !!}
                
                    @error('extract')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('body', 'Cuerpo del post:') !!}
                    {!! Form::textarea('body', null, [
                       'class' => 'form-control' 
                    ]) !!}
                
                    @error('body')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                {!! Form::submit('Crear Post', [
                    'class' => 'btn btn-primary',
                ]) !!}
                
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });

        ClassicEditor
        .create(document.querySelector('#extract'))
        .catch(error=>{
            console.error(error);
        })
        ClassicEditor
        .create(document.querySelector('#body'))
        .catch(error=>{
            console.error(error);
        })

        document.getElementById("file").addEventListener('change', cambiarImagen);
        function cambiarImagen(event){
            var file = event.target.files[0];
            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result);
            };
            reader.readAsDataURL(file);
        }
    </script>
@endsection

@section('css')
    <style>
        .image-wrapper{
            position: relative;
            padding-bottom: 56.25%;
        }
        
        .image-wrapper img{
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style>
@stop