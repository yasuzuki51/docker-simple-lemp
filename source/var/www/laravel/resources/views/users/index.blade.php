<html>
<div class="container">
    <h1>Users</h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td><a href="{{ url('users/'.$user->id) }}">{{ $user->name }}</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</html>
