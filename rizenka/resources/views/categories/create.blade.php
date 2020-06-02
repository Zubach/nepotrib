@extends('base')

@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Add a category</h1>
            <div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
                <form method="post" action="{{ route('categories.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="first_name">Name:</label>
                        <input type="text" class="form-control" name="first_name"/>
                    </div>

                    <div class="form-group">
                        <img src="/images/upload.png" alt="" id="image">
                        <input  type="hidden" class="form-control" name="image"/>
                    </div>

                    <div class="form-group">
                        <label for="email">Description:</label>
                        <textarea class="form-control" name="description"></textarea>

                    </div>
                    <button type="submit" class="btn btn-primary-outline">Add category</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    $(function(){

    });
</script>
@endsection
