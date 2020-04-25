<html>
<head>
    <title>Form Input Pasien Covid-19</title>
    <style type="text/css" media="screen">
        table {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;}
        input {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;height: 20px;}
    </style>
</head>
<body>
<div style="border:0; padding:10px; width:760px; height:auto;">
<form action="utss.php" method="POST" name="form-input-data">
    <table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr height="46">
                <td width="10%"> </td>
                <td width="25%"> </td>
                <td width="65%"><font color="orange" size="2">Form Input Pasien Covid-19</font></td>
        </tr>
		        <tr height="46">
            <td> </td>
            <td>Wilayah</td>
            <td><select name="Wilayah">
                    <option value="-">- Pilih Wilayah -
                    <option value="DKI Jakarta">DKI Jakarta
                    <option value="Jawa Barat">Jawa Barat
                    <option value="Jawa Tengah">Jawa Tengah
                    <option value="Banten">Banten
                </select></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Jumlah Positif</td>
            <td><input type="text"  size="35" maxlength="6" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Jumlah Dirawat</td>
            <td><input type="text" name="nama" size="50" maxlength="30" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Jumlah Sembuh</td>
            <td><input type="text" name="alamat" size="50" maxlength="30" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Jumlah Meninggal</td>
            <td><input type="text" name="telepon" size="20" maxlength="12" /></td>
        </tr>
		<tr height="46">
            <td> </td>
            <td>Nama Operator</td>
            <td><input type="text" name="telepon" size="20" maxlength="12" /></td>
        </tr>
		<tr height="46">
            <td> </td>
            <td>NIM</td>
            <td><input type="text" name="telepon" size="20" maxlength="12" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td> </td>
            <td><input type="submit" name="Submit" value="Submit">   
                <input type="reset" name="reset" value="Cancel"></td>
        </tr>
    </table>
</form>
</div>
</body>
</html>