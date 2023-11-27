function isNumeric(data) {
    let length = data.length;
    let digits ="0123456789";
    for (i=0; i<length; i++){
        if (digits.indexOf(data[i]) < 0) return false;
    }
    return true;   
}

function analyze(){
    let data =  document.getElementById("edad").value;
    if (isNumeric(data)){
        alert("Paso la prueba");
    }else {
        alert("Falló. Solo debe escribir numeros ");
        interpolation(data);
    }
}

function interpolation(variable){
    console.log(`El contenido es: ${variable} `);
}

function onlyNumberKey(evt) {
    let KEY_SPACE = 32;
    let KEY_NUMBER_CERO = 48;
    let KEY_NUMBER_NINE = 57;

    let ASCIICode = (evt.which) ? evt.which : evt.keyCode
    if (ASCIICode >= KEY_SPACE && 
        (ASCIICode < KEY_NUMBER_CERO || ASCIICode > KEY_NUMBER_NINE))
        return false;
    return true;
}

const data = 
    [
    {"career":"Informatica",
        "course":["Programacion I",
            "Programacion II",
            "Base de Datos",
            "Topico de Base de Datos"]
    },
    {"career":"Tics",
        "course":["Taller de investigacion",
            "Administracion",
            "Programacion Web",
            "Programacion Movil"]
    },
    {"career":"Biologia",
    "course":["Matematicas I",
        "Entomologia",
        "Vida silvestre",
        "Flora y Fauna"]
    }
    ];

function loadCareer(){
    document.getElementById("carrera").options.length = 0; //empty select
    data.forEach(function(obj){
        let option= document.createElement("option");
        option.value= obj.career;
        option.text= obj.career;
        
        document.getElementById("carrera").add(option)
    });
    loadCourse(document.getElementById("carrera").value);
}

function loadCourse(career){
    
    document.getElementById("materia").options.length = 0; //empty select
    const dataFiltered = data.filter(obj => obj.career == career);

    const courses = dataFiltered[0].course;
    courses.forEach(function(it){
        //console.log(it);
        let option= document.createElement("option");
        option.value= it;
        option.text= it;
        
        document.getElementById("materia").add(option)
    });
}

function checkedCourses(){
    const courses = document.getElementsByName("materias_pendientes");
    const isChecked = document.querySelector('#chkTodas').checked;
    courses.forEach(function (obj){
        obj.checked = isChecked;
    });
}

function hasScholarship(){
    const isScholarship = document.querySelector('#becado').checked;
    if (isScholarship){
        alert("Es un estudiante becado");
    } else {
        alert("No tiene beca");
    }
}

function preview(event, divDestination) {
    for (let file of event.target.files) {
        let src = URL.createObjectURL(file);
        let iframe = document.createElement("iframe");
        iframe.src = src;
        var destination = document.getElementById(divDestination);
        
        if (destination.hasChildNodes()) {
            destination.removeChild(destination.firstElementChild);
        } 
        destination.appendChild(iframe);
        destination.style.display = "block";
        destination.style.visibility = true;
    }
}

function hideShow(id){
    let obj = document.getElementById(id);
    if (obj.style.display==="none"){
        obj.style.display="block";
    }else {
        obj.style.display="none";
    }

}