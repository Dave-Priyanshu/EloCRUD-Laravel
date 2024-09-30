@extends('layout')

@section('title')
    All Users Data
@endsection

@section('content')
     <!-- Add New User Button -->
     <a href="{{route('user.create')}}" class="btn btn-success add-user-btn">Add New User</a>
     <div class="card">
         <div class="card-header">
             <h5 class="mb-0">User List</h5>
         </div>
         <div class="card-body">
             <table class="table table-striped table-bordered">
                 <thead>
                     <tr>
                         <th>Id</th>
                         <th>User Name</th>
                         <th>User Email</th>
                         <th>User Age</th>
                         <th>User City</th>
                         <th>View</th>
                         <th>Update</th>
                         <th>Delete</th>
                     </tr>
                 </thead>
                 <tbody>
                     @foreach ($users as $user)
                         <tr>
                             <td>{{ $user->id }}</td>
                             <td>{{ $user->name }}</td>
                             <td>{{ $user->email }}</td>
                             <td>{{ $user->age }}</td>
                             <td>{{ $user->city }}</td>
                             <td><a href="{{route('user.show',$user->id)}}" class="btn btn-info btn-sm">View</a></td>
                             <td><a href="{{route('user.edit',$user->id)}}" class="btn btn-warning btn-sm">Update</a></td>
                             <td>
                                <form action="{{route('user.destroy',$user->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                         </tr>
                     @endforeach
                 </tbody>
             </table>
             <div class="mt-4">
                {{$users->links()}}
             </div>
         </div>
     </div>
@endsection