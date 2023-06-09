<x-main.base>

    <section class="container">
        <p class="text-end">
            <a class="btn btn-sm btn-info text-light" href="/create-post"><i class="fa fa-plus-circle"></i> Add Post</a>
        </p>
        <table class="table shadow p-3 rounded">
            <tr>
                <th>Sr.No</th>
                <th>Title</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $post->title }}</td>
                    <td>
                        @switch($post->status)
                            @case(1)
                                <p class="text-warning text-center">
                                    <i class="fa fa-info-circle"> </i>
                                </p>
                            @break

                            @case(2)
                                <p class="text-success text-center"><i class="fa fa-check-circle"></i></p>
                            @break

                            @case(0)
                                <p class=" text-danger text-center"><i class="fa fa-circle"> </i></p>
                            @break

                            @default
                        @endswitch
                    </td>
                    <td><a href="/edit-post/{{ $post->id }}"><i class="fa fa-edit fa-2"> </i></a> &nbsp; &nbsp; <a
                            href="/{{ $post->id }}/{{ $post->prama_link }}"><i class="fa fa-window-restore fa-2">
                            </i></a></td>

                </tr>
            @endforeach
        </table>
    </section>

</x-main.base>
