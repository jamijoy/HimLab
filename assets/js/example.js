if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}



xmlhttp.onload = function() {
    var xmlDoc = new DOMParser().parseFromString(xmlhttp.responseText,'text/xml');

    console.log(xmlDoc);

    // document.write("<table border='1'>");
    var x=xmlDoc.getElementsByTagName("EventItem");
    for (i=0;i<x.length;i++)
    { 
    	// alert(x[i].getElementsByTagName("Country")[0].childNodes[0].nodeValue); // India  
   // alert(x[i].getElementsByTagName("Phone")[0].getAttribute('Link') );// 12345
   
    }

}


xmlhttp.open("GET","assets/xml/example.xml",false);
xmlhttp.send();