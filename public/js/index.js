document.querySelector("#filterLargeDiv h3 ").onclick = () => {
    document.querySelector("#filterLargeDiv div ").classList.toggle("show")
}
document.querySelector("#filterSmallDiv h3 ").onclick = () => {
    document.querySelector("#filterSmallDiv div ").classList.toggle("show")
}

// add invoice 
document.querySelectorAll(".add_invoice").forEach(elt => {
    elt.onclick = () => {
        document.querySelector('form').classList.toggle('show')
    }
})
document.querySelector("#back").onclick = () => {
    document.querySelector('form').classList.remove('show')
}