<table border="1">
    <tr>
        <td>ID Penjual</td>
        <td>Nama</td>
        <td>Harga</td>
        <td>Aksi</td>
    </tr>
    @foreach ($barang as $dataBarang)
    <tr>
        <td align="center">{{$dataBarang->id_penjual}}</td>
        <td>{{$dataBarang->nama}}</td>
        <td>{{$dataBarang->harga}}K</td>
        <td><a href="/barang/edit/{{$dataBarang->id_barang}}">Ubah</a> | <a href="/barang/hapus/{{$dataBarang->id_barang}}">Hapus</a></td>
    </tr>
    @endforeach
</table>
<a href="/tambah"><b>Tambah Data</b></a>