
let hamburgerIcon: HTMLInputElement = <HTMLInputElement>document.querySelector(".hamburger-icon")
hamburgerIcon.addEventListener("click", () => {
  hamburgerIcon.classList.toggle('hamburger-icon-active')
  let element: HTMLElement = <HTMLElement>document.querySelector(".side-menu-container-hidden")
  element.classList.toggle('show-side-bar')
})

let arrowIcon: HTMLInputElement = <HTMLInputElement>document.querySelector(".arrow-icon")
arrowIcon.addEventListener("click", () => {
  arrowIcon.classList.toggle('arrow-icon-active')
  let element: HTMLElement = <HTMLElement>document.querySelector(".left-side-menu-container")
  element.classList.toggle('show-left-side-bar')
  let main: HTMLElement = <HTMLElement>document.querySelector(".articles-container")
  let toNewer: HTMLElement = <HTMLElement>document.querySelector(".toNewer")
  let toOlder: HTMLElement = <HTMLElement>document.querySelector(".toOlder")
  let mainPage: HTMLElement = <HTMLElement>document.querySelector(".blog-container")
  if (main) {
    main.classList.toggle('filtered')
  }
  if (toNewer) {
    toNewer.classList.toggle('filtered');
  }
  if (toOlder) {
      toOlder.classList.toggle('filtered');
  }
  if (mainPage) {
    mainPage.classList.toggle('filtered')
  }
})