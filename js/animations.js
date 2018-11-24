// const mobileMenuToggle = function() {
//   var menuToggle = document.querySelector(".menu-toggle")
//   const menuContainer = document.querySelector(".menu-mobile-container")

//   const tl = new TimelineMax({ paused: true })
//   tl.to(menuContainer, 0.25, { autoAlpha: 1 })

//   menuToggle.addEventListener(
//     "click",
//     function(event) {
//       if (!menuToggle.classList.contains("toggled")) {
//         tl.play(0)
//         menuToggle.classList.add("toggled")
//         event.preventDefault()
//       } else {
//         tl.reverse(0)
//         menuToggle.classList.remove("toggled")
//         event.preventDefault()
//       }
//     },
//     false
//   )
// }

// if (window.screen.width < 768) {
//   mobileMenuToggle()
// }
