function vereficar() {
   type="text/javascript"
   document.getElementById("botao").onclick = function () {
      location.href = "pag.html";
  };

   let eua = document.getElementById("estad")
   let opcaoTexto= eua.options[eua.selectedIndex].text;
let img =document.createElement(`img`)
img.setAttribute(`id`,`foto` )
   
   if (opcaoTexto=="Goiás") {
    img.setAttribute(`src`,`goias.png`)
    document.body.style.background =(`src`,`mapago.jfif`)
    
   }
   if (opcaoTexto=="Ceará") {
      img.setAttribute(`src`,`ceara.png`)
      document.body.style.background =(`src`,`mapace.jpg`)
     }
     if (opcaoTexto=="Distrito Federal") {
      img.setAttribute(`src`,`federal.png`)
      document.body.style.background =(`src`,`mapadf.jpg`)

     }

    
}