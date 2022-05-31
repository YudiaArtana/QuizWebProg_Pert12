function batal(){
    location.replace("index.php?p=mhs")
}

function simpan(){
    let konf = confirm("Yakin akan menghapus Data?");
    if(konf){
    let nim = document.getElementById("txNIM").value;
    
    let data = "txNIM="+nim;
    console.log (data);

    const jsonData = new XMLHttpRequest();
    jsonData.open("POST","../server/dtmhsdelete.php");
    jsonData.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    jsonData.send(data);

    jsonData.onload = function(){
        const myData = JSON.parse(this.responseText);
        console.log(myData);
        if(myData["error"] == false){
            document.getElementById("sukses").style.display="block";
            setTimeout(()=>{
                window.location.href="index.php?p=mhs";
            },1500)
        }else{
            document.getElementById("gagal").style.display="block";
        }
        
    }
 }
}
