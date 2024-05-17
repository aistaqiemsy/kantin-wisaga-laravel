<table border="1">
    <tr>
        <td>ID Penjual</td>
        <td>Nama</td>
        <td>Harga</td>
    </tr>
    @foreach ($barang as $dataBarang)
    <tr>
        <td align="center">{{$dataBarang->id_barang}}</td>
        <td>{{$dataBarang->nama}}</td>
        <td>{{$dataBarang->harga}}K</td>
    </tr>
    @endforeach
</table>
<a href="/tambah"><b>Tambah Data</b></a>