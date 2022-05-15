function control(form)
{
    var kullaniciadi = form.ad.value;            
    var email = form.email.value;
    var msg = form.mesaj.value;
    var ilkIndex= email.indexOf("@");
    var sonIndex= email.lastIndexOf(".");
  
    if ( kullaniciadi==null || kullaniciadi=="" || kullaniciadi.length < 2 )
    {
        alert("Kullanıcı adı 2 karakterden az olamaz.");
        return false;
    }
    if ( ilkIndex<1 || sonIndex<atpos+2 || sonIndex+2>=email.length )
    {
        alert("Geçerli bir mail adresi giriniz.");
        return false;
    }      
    if ( msg==null || msg=="" || msg.length < 6 )
    {
        alert("Mesaj boş veya 6 karakterden az olamaz");
        return false;
    }

    return true;
}