<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Barang</title>
</head>
<body>
    @foreach ($barang as $dataBarang)
    <form action="/barang/perbarui" method="post">
        {{ @csrf_field() }}
        <input type="hidden" name="id" value="{{ $dataBarang->id_barang}}">
        <table>
        <tr>
                <td>ID Penjual</td>
                <td><input type="text" name="txUpID" value="{{ $dataBarang->id_penjual}}"></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="txUpNama" value="{{ $dataBarang->nama}}"></td>
            </tr>
            <tr>
                <td>Harga Barang</td>
                <td><input type="text" name="txUpHarga" value="{{ $dataBarang->harga}}"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Perbarui Data"></td>
            </tr>
        </table>
    </form>
    
    @endforeach
</body>
</html>