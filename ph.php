<html>
    <head>
    </head>
    <body>
        <h2>TRANSAKSI</h2>
        <form method="get">
            <tabel>
                <tr><td>Nama Pelanggan &nbsp;</td><td><input type="text" name="nama"></td><br><br></tr>
                <tr><td>Status Pembeli &nbsp;</td><td><select name="pembeli">
                    <option value="++">Pilih</option>
                    <option value="member">Member</option>
                    <option value="non-member">Non-Member</option>
                </select></td><br><br></tr>
                <tr><td>Menu &nbsp;</td><td><select name="menu">
                    <option value="++">Pilih</option>
                    <option value="paket1">Paket 1</option>
                    <option value="paket2">Paket 2</option>
                    <option value="paket3">Paket 3</option>
                </select></td><br><br></tr>
                <tr><td>Jumlah &nbsp;</td><td><input type="number" name="jumlah"></td></tr>
                <tr><br><br><td><input type="submit" name="hitung" value="HITUNG"><br></td></tr>
            </tabel>
        </form>
        <hr/>

        <?php
            if (isset ($_GET['hitung'])) {
                $nama=$_GET['nama'];
                $pembeli=$_GET['pembeli'];
                $menu=$_GET['menu'];
                $jumlah=$_GET['jumlah'];

                if ($pembeli=="member") {
                    if ($menu=="paket1") {
                        $harga= 20000;
                        if ($jumlah==1) {
                            $total= $harga * $jumlah;
                            $diskon= "5%";
                        } else if ($jumlah==3) {
                            $total= $harga * $jumlah;
                            $diskon=  "7%";
                        } else if ($jumlah < 3) {
                            $total= $harga * $jumlah;
                            $diskon=  "10%";
                        }
                    } else if ($menu=="paket2") {
                        $harga= 30000;
                        if ($jumlah==1) {
                            $total= $harga * $jumlah;
                            $diskon= "5%";
                        } else if ($jumlah==3) {
                            $total= $harga * $jumlah;
                            $diskon=  "7%";
                        } else if ($jumlah < 3) {
                            $total= $harga * $jumlah;
                            $diskon=  "10%";
                        }
                    } else if ($menu=="paket3") {
                        $harga= 50000;
                        if ($jumlah==1) {
                            $total= $harga * $jumlah;
                            $diskon= "5%";
                        } else if ($jumlah==3) {
                            $total= $harga * $jumlah;
                            $diskon=  "7%";
                        } else if ($jumlah < 3) {
                            $total= $harga * $jumlah;
                            $diskon=  "10%";
                        }
                    }
                } else if ($pembeli=="non-member") {
                        if ($menu=="paket1") {
                            $harga= 20000;
                            if ($jumlah==1) {
                                $total= $harga * $jumlah;
                                $diskon= "5%";
                            } else if ($jumlah==3) {
                                $total= $harga * $jumlah;
                                $diskon=  "7%";
                            } else if ($jumlah < 3) {
                                $total= $harga * $jumlah;
                                $diskon=  "10%";
                            }
                        } else if ($menu=="paket2") {
                            $harga= 30000;
                            if ($jumlah==1) {
                                $total= $harga * $jumlah;
                                $diskon= "5%";
                            } else if ($jumlah==3) {
                                $total= $harga * $jumlah;
                                $diskon=  "7%";
                            } else if ($jumlah < 3) {
                                $total= $harga * $jumlah;
                                $diskon=  "10%";
                            }
                        } else if ($menu=="paket3") {
                            $harga= 50000;
                            if ($jumlah==1) {
                                $total= $harga * $jumlah;
                                $diskon= "5%";
                            } else if ($jumlah==3) {
                                $total= $harga * $jumlah;
                                $diskon=  "7%";
                            } else if ($jumlah < 3) {
                                $total= $harga * $jumlah;
                                $diskon=  "10%";
                            }
                        }
                    
                        echo "Nama Pelanggan : $nama<br>";
                        echo "Status Pembeli : $pembeli<br>";

                        echo "Total harga : $total<br>";
                        echo "Total diskon : $diskon<br>";
                }
            }
        ?>
        </hr>
    </body>
</html>