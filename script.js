document.addEventListener("DOMContentLoaded", function(event) { 

});

function openTab(evt, tabName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab

  if(tabName != "Home"){
    document.getElementById(tabName).style.display = "block";
  }else{
    document.getElementById(tabName).style.display = "flex";
  }

  evt.currentTarget.className += " active";
}


var slideIndex = [1,1,1,1,1,1];
var slideId = ["mySlides1", "mySlides2", "mySlides3", "mySlides4", "mySlides5","mySlides6"]
showDivs(1, 0);
showDivs(1, 1);
showDivs(1, 2);
showDivs(1, 3);
showDivs(1, 4);
showDivs(1, 5);

setInterval(() => {
  plusDivs(1, Math.abs(Math.trunc(Math.random() * 10 - 4)))
}
  ,3000
)

function plusDivs(n, no) {
  showDivs(slideIndex[no] += n, no);
}

function showDivs(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex[no]-1].style.display = "block";  
}

$('.product-items').on('click', function (){
 document.getElementById('product-details').style.display = "block";
 document.getElementById('product-grid').style.display = "none";

  var id = $(this).data('id')
  console.log(id);
  $( "#product-details" ).load( "php/product.php?id="+id, function( response, status, xhr ) {
    if ( status == "error" ) {
      var msg = "Sorry but there was an error: ";
      alert(msg + xhr.status + " " + xhr.statusText );
    }
  })
})

var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        function openModal(name, price, img, variant) {
        document.getElementById('item-name-payment').innerHTML  = "Product : " + name;
        document.getElementById('item-price-payment').innerHTML  = "Price : ₱" + price;
        document.getElementById('item-variant-payment').innerHTML  = "Variant : " + variant;
        document.getElementById('item-image-payment').src  = "img/"+img;

        modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
        modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
        if (event.target == modal) {
        modal.style.display = "none";
        }
        }