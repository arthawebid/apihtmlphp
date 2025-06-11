let qs = window.location.search;
let urlp = new URLSearchParams(qs);
let nimp = urlp.get("nim");

let urltarget = new URL("http://wpx.ptov.my.id/srv/mhsbynim.php");
urltarget.searchParams.set("nim",nimp);

const gh = new XMLHttpRequest();
gh.open("GET",urltarget);
gh.send();

gh.onload = function(){
    const dta = JSON.parse(this.responseText);
    
    document.getElementById("txNIM").value = dta["isi"]["NIM"];
    document.getElementById("txNAMA").value = dta["isi"]["NAMA"];
    document.getElementById("txTGL").value = dta["isi"]["TGL"];
    document.getElementById("txALAMAT").value = dta["isi"]["ALAMAT"];
    
    let jkx = (dta["isi"]["JKEL"]=="L")?1:2
    const selJK = document.getElementById('txJK');
    
    selJK.selectedIndex = jkx;
}