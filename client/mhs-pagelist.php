    
    <div id="konten"></div>

    <script>
        const jsonData = new XMLHttpRequest()

        jsonData.open("GET","../server/dtmhs.php")
        jsonData.send()

        jsonData.onload = function(){
            const myData = JSON.parse(this.responseText)
            // console.log(myData)

            var hasil = "<h3>Daftar Nama Mahasiswa</h3>"
            hasil += "<table class='table'>"
            hasil += "  <thead>"
            hasil += "      <tr>"
            hasil += "          <th scope='col'>No</th>"
            hasil += "          <th scope='col'>NIM</th>"
            hasil += "          <th scope='col'>Nama</th>"
            hasil += "          <th scope='col'>Jenis Kelamin</th>"
            hasil += "          <th scope='col'>Jurusan</th>"
            hasil += "          <th scope='col'><a class='badge bg-primary' href='index.php?p=mhs&sp=addnew'>Tambah Data</a></th>"
            hasil += "      </tr>"
            hasil += "  </thead>"
            hasil += "  <tbody>"

            let no = 1
            for(i=0; i<myData.length; i++){

                let jk ;
                if(myData[i][2] == "L")
                    jk = "Laki - Laki";
                else if(myData[i][2] == "P")
                    jk = "Perempuan";
                else
                    jk = "";

                hasil += "<tr>"
                hasil += "  <td>"+no+"</td>"
                hasil += "  <td>"+myData[i][0]+"</td>"
                hasil += "  <td>"+myData[i][1]+"</td>"
                hasil += "  <td>"+jk+"</td>"
                hasil += "  <td>"+myData[i][3]+"</td>"
                hasil += "  <td><a class='badge bg-success' href='index.php?p=mhs&sp=edit&nim="+myData[i][0]+"'>EDIT</a><a class='badge bg-danger' href='index.php?p=mhs&sp=hapus&nim="+myData[i][0]+"'>HAPUS</a></td>"
                hasil += "</tr>"

                no++


                
            }
 
            hasil += "  </tbody>"
            hasil += "</table>"

            document.getElementById("konten").innerHTML = hasil;

        }
    </script>

