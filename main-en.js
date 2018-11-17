

// English Homepage
// Carousel 1
var slideIndex1 = 0;
carousel1();

function carousel1() {
   
    var i;

    const pic1 = document.getElementById('image-1')
    const pic2 = document.getElementById('image-2')
    const pic3 = document.getElementById('image-3')

    const pics = [pic1, pic2, pic3]

    squares = []

    pics.map(pic => {

        if(pic.style.background.includes('assets') || pic.style.backgroundImage.includes('assets')){
            return squares.push(pic);
             } else {
            pic.style.display = 'none';
             }
     })

    
    for (i = 0; i < squares.length; i++) {
      squares[i].style.display = "none"; 
    }
    slideIndex1++;
    if (slideIndex1 > squares.length) {slideIndex1 = 1} 
    squares[slideIndex1-1].style.display = "block"; 
    setTimeout(carousel1, 3000); // Change image every 3 seconds
}






// Carousel 2
var slideIndex2 = 0;
carousel2();

function carousel2() {
   
    var i;

    const pic4 = document.getElementById('image-4')
    const pic5 = document.getElementById('image-5')
    const pic6 = document.getElementById('image-6')

    const pics2 = [pic4, pic5, pic6]

    squares2 = []

    
    pics2.map(pic => {
    
      if(pic.style.background.includes('url("")')){
           pic.style.display = 'none';
            } else {
           return squares2.push(pic);
            }
    })

    for (i = 0; i < squares2.length; i++) {
        squares2[i].style.display = "none"; 
    }
    slideIndex2++;
    if (slideIndex2 > squares.length) {slideIndex2 = 1} 
    squares2[slideIndex2-1].style.display = "block"; 
    setTimeout(carousel2, 2500); // Change image every 2.5 seconds
}






move()


function move() {
  console.log('poop')
  var elem = document.getElementById("myBar"); 
  var width = 1;
  var id = setInterval(frame, 10);
  function frame() {
      if (width >= 100) {
          clearInterval(id);
          elem.style.display = 'none'
      } else {
          width++; 
          elem.style.width = width + '%'; 
      }
  }
}





// // English Homepage
// // Carousel 1
// var slideIndex1 = 0;
// carousel1();

// function carousel1() {
   
//     var i;

//     const pic1 = document.getElementById('image-1-cn')
//     const pic2 = document.getElementById('image-2-cn')
//     const pic3 = document.getElementById('image-3-cn')

//     const pics = [pic1, pic2, pic3]

//     squares = []

//     pics.map(pic => {
//         if(pic.style.background === 'url("") center center / cover'){
//           pic.style.display = 'none';
//         } else {
//           squares.push(pic);
//         }
//     })

//     for (i = 0; i < squares.length; i++) {
//       squares[i].style.display = "none"; 
//     }
//     slideIndex1++;
//     if (slideIndex1 > squares.length) {slideIndex1 = 1} 
//     squares[slideIndex1-1].style.display = "block"; 
//     setTimeout(carousel1, 3000); // Change image every 3 seconds
// }

// // Carousel 2
// var slideIndex2 = 0;
// carousel2();

// function carousel2() {
   
//     var i;

//     const pic4 = document.getElementById('image-4-cn')
//     const pic5 = document.getElementById('image-5-cn')
//     const pic6 = document.getElementById('image-6-cn')

//     const pics2 = [pic4, pic5, pic6]

//     squares2 = []

//     pics2.map(pic => {
//       if(pic.style.background === 'url("") center center / cover'){
//         pic.style.display = 'none';
//       } else {
//         squares2.push(pic);
//       }
//     })

//     for (i = 0; i < squares2.length; i++) {
//         squares2[i].style.display = "none"; 
//     }
//     slideIndex2++;
//     if (slideIndex2 > squares2.length) {slideIndex2 = 1} 
//     squares2[slideIndex2-1].style.display = "block"; 
//     setTimeout(carousel2, 2500); // Change image every 2.5 seconds
// }
