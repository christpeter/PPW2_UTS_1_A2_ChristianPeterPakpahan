<table class="table table-stripped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nama Pemain</th>
            <th>No Punggung</th>
            <th>Posisi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data_pemain as $pemain)
            <tr>
                <td>{{ $pemain->id }}</td>
                <td>{{ $pemain->namapemain }}</td>
                <td>{{ $pemain->nopunggung }}</td>
                <td>{{ $pemain->posisi }}</td>
            </tr>
        @endforeach
    </tbody>
</table>