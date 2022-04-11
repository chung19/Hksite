@extends('backend.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel Showcontact  CRUD hksite</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('showcontacts.create') }}"> Create New Contact</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Subject</th>
            <th>Message</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($showcontacts as $showcontact)
        <tr>
            <td>{{ $showcontact->id }}</td>
            <td>{{ $showcontact->name }}</td>
            <td>{{ $showcontact->email}}</td>
            <td>{{ $showcontact->phone }}</td>
            <td>{{ $showcontact->subject}}</td>
            <td>{{ $showcontact->message }}</td>
            <td>

          
                <form action="{{ route('showcontacts.destroy',$showcontact->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('showcontacts.show',$showcontact->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('showcontacts.edit',$showcontact->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {{-- {{$showcontacts->links() }}  --}}

@endsection