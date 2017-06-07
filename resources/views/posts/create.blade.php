@extends ('layouts.master')

@section ('content')
    <div class="col-sm-8 blog-main">
        <form method="POST" action="/posts">

            {{ csrf_field() }}

            @include ('layouts.errors')
            
            <div class="form-group">
                <label for="title">Title</label>
                <input  class="form-control" id="title" placeholder="Title" name="title">
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <textarea id="body" name="body" class="form-control"></textarea>
            </div>

            <div class="form-group">
             <button type="submit" class="btn btn-primary">Publish</button>
            </div>

        </form>
    </div>
@endsection