@extends('master')
@section('sectiondata')

<br><br><br><br>
<div>
    <div class="mx-auto pull-right">
        <div class="">
            <form action="{{ route('user') }}" method="GET" role="search">

                <div class="input-group">
                    <span class="input-group-btn mr-5 mt-1">
                        <button class="btn btn-info" type="submit" title="Search projects"
                            style="margin-top: 20px; margin-right: 4px">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </span>
                    <input type="text" class="form-control mr-2" name="term" placeholder="Search projects" id="term"
                        style="width:15%; margin-top: 44px">
                    <a href="{{ route('user') }}" class=" mt-1">
                        <span class="input-group-btn">
                            <button class="btn btn-danger" type="button" title="Refresh page"
                                style="margin-left: 251px; margin-top: -64px">
                                <i class="fa fa-refresh" aria-hidden="true"></i>
                            </button>
                        </span>
                    </a>
                </div>
            </form>

            <center>
                <table class="table" style="width: 50%;">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $user as $u )
                        <tr>
                            <th scope="row">{{$u->id}}</th>
                            <td>{{$u->name}}</td>
                            <td>{{$u->contact}}</td>
                            <td>{{$u->email}}</td>
                            <td>{{$u->address}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </center>
        </div>
    </div>
</div>
{{ $user->links() }}
@endsection