<div class="container">
    {{-- Success is as dangerous as failure. --}}
    <table class="table" style="width:800px;">
        <thead>
            <th scope="col">ID</th>
            <th scope="col">Nama Kecamatan</th>
            <th scope="col">Action</th>
        </thead>
        <tbody>
            
                @foreach ($data as $datas)
                <tr scope="row">
                    <td>{{ $datas->id }}</td>
                    <td>{{ $datas->namobj }}</td>
                    <td>
                        <a href="">
                            <button class="btn btn-info">
                                <i class="fas fa-edit"></i>
                                Edit
                            </button>
                        </a>
                        <a href="">
                            <button class="btn btn-danger">
                                <i class="fas fa-trash"></i>
                                Delete
                            </button>
                        </a>
                    </td>
                
            </tr>
                @endforeach
        </tbody>
    </table>
    {{ $data->links()}}
</div>
