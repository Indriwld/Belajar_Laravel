<html>
<head>
    <title>array</title>
</head>
<body>
    <center>
        <table border=1>
        <tr><th colspan ="6" rowspan ="1"><b> DATA BARANG</b></th></th></tr>


        <tr>
            <th rowspan = 1 colspan= 1>id barang</th>
             <th rowspan = 1 colspan= 1>Nama</th>
              <th rowspan = 1 colspan= 1>Varian</th>
               <th rowspan = 1 colspan= 1>Harga Beli</th>
                <th rowspan = 1 colspan= 1>Harga Jual</th>
        </tr>

        @foreach ($brg as $data)
        <tr>
            <td>{{ $data ['id_barang'] }}</td>
            <td>{{ $data ['nama'] }}</td>
            <td>{{ $data ['varian'] }}</td>
            <td>{{ $data ['harga_beli'] }}</td>
               <td>{{ $data ['harga_jual'] }}</td>
        </tr>

        @endforeach
</table>
    </center>

</body>
</html>
