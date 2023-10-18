import './bootstrap';
// const img = document.querySelector(".tilt-img");

// img.addEventListener("mouseover",(e) => {
//   console.log(e.x,e.y);
// })


VanillaTilt.init(document.querySelector(".tilt-img"), {
    max: 6,
    speed: 400
});


