<!doctype html>
<html lang="en-us">
<head>
    <title>Users list</title>
</head>
<body>
<table>
    <tr>
        <td>#ID</td>
        <td>Name:</td>
        <td>e-mail:</td>
        <td>Actions:</td>
    </tr>

    @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                <a href="">See user</a>
                <form action="" method="post">
                    <input type="hidden" name="user" value="">
                    <input type="submit" value="Remove">
                </form>
            </td>
        </tr>
    @endforeach
</table>

</body>
</html>
