if(localStorage.getItem("mode") == "dark"){
    document.body.classList.remove("light_mode")
    document.body.classList.add("dark_mode")
}

// ##############switch mode
document.querySelector("#mode").onclick = () => {
    document.body.classList.toggle("light_mode")
    document.body.classList.toggle("dark_mode")
    if(document.body.classList[0]== "dark_mode") localStorage.setItem("mode" , "dark")
    else localStorage.setItem("mode" , "light")
    
}