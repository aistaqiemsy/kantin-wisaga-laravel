<center>
    <b>TAMBAH DATA</b>
</center>
<form action="/barang/simpanBarang" method="post">
{{ csrf_field() }}
<table>
    <tr>
        <td>ID Penjual</td>
        <td><input type="text" name="txIdPenjual"></td>
    </tr>
    <tr>
        <td>Nama Barang</td>
        <td><input type="text" name="txNama"></td>
    </tr>
    <tr>
        <td>Harga</td>
        <td><input type="text" name="txHarga"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="Simpan"></td>
    </tr>
</table>
</form>
<hr>
Kembali ?
<a href="/barang"><b>Tekan Disini!</b></a>