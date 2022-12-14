
document.querySelectorAll('h3').forEach(function(event){
  event.addEventListener("click",function(e){
  event.nextSibling.nextSibling.classList.toggle("hidden")
  })
})