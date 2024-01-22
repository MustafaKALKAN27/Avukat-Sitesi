
const navbar = document.querySelector(".navbar");


const menuBtn = document.querySelector("#menu-btn");

menuBtn.addEventListener("click",function(){
    navbar.classList.toggle("active");
    document.addEventListener("click", function (e){
        if (!e.composedPath().includes(menuBtn)
         && !e.composedPath().includes(navbar)
        ){
            navbar.classList.remove("active");
        }

    });
})



function checkform(form1)
{
  if (form1.ad.value == "")  {
    alert("Lütfen Adınızı giriniz !");
    form1.ad.focus();
	return (false); }
  if (form1.ad.value.length < 5 )  {
    alert("Lütfen Adınızı tam giriniz !");
    form1.ad.focus();
	return (false); }
  if (form1.mail.value == "")  {
    alert("Lütfen mail adresinizi giriniz !");
    form1.mail.focus();
	return (false); }
  if (form1.telefon.value == "")  {
    alert("Lütfen telefon belirtiniz !");
    form1.telefon.focus();
	return (false); }
  if (form1.mesaj.value == "")  {
    alert("Lütfen bir mesaj giriniz !");
    form1.mesaj.focus();
	return (false); }
  if (form1.mesaj.value.length < 15 )  {
    alert("Lüten derdinizi anlatabilecek bir cümle giriniz !");
    form1.mesaj.focus();
	return (false); }
	
}
