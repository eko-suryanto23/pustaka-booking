<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pemesanan Tiket Cinema 99</h1>
    <form action="output_cinema" method="post">
        <table>
            <tr>
                <td>Nama Pemesan</td>
                <td>
                    <input type="text" name="nama">
                </td>
            </tr>
            <tr>
                <td>Judul Film</td>
                <td>
                    <select name="judul_film" id="">
                        <option value="Warkop">Warkop</option>
                        <option value="Warkop">Warkop 1</option>
                        <option value="Warkop">Warkop 2</option>
                        <option value="Warkop">Warkop 3</option>
                    </select>
                </td>
            </tr>
            <tr>
            <td>Pukul</td>
                <td>
                    <input type="radio" name="pukul1" id="" value="14.20">
                    <input type="radio" name="pukul2" id="" value="15.20">
                    <input type="radio" name="pukul3" id="" value="18.20">
                </td>
            </tr>
                <tr>
                <td>Tipe studio</td>
                <td>
                    <input type="radio" name="nama" value="Reguler 2d">
                    <input type="radio" name="nama" value="3d">
                    <input type="radio" name="nama" value="4d">
                </td>
                </tr>
                <tr>
                <td>Jumlah Pesan</td>
                <td>
                    <input type="text" name="jlh_pesan">
                </td>
                </tr>
                <tr>
                <td></td>
                <td>
                    <button type="submit">Hitung</button>
                    <button type="submit">Batal</button>
                </td>
                </tr>
            </tr>
        </table>
    </form>
</body>
</html>