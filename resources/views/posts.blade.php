<table>
    <thead>
        <th>Id</th>
        <th>UserId</th>
        <th>Title</th>
    </thead>
    <tbody>
        @foreach( $posts as $post )
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->userId }}</td>
                <td>{{ $post->title }}</td>
            </tr>
        @endforeach
    </tbody>
</table>