const cargarMarcas=async()=>{
    let marcas=await getMarcas();
    let marcaSelect=document.querySelector("#marca-select");

    marcas.forEach(m=>{
        let option =document.createElement("option");
        option.innerText=m;
        marcaSelect.appendChild(option);
    });
}

document.addEventListener("DOMContentLoaded", ()=>{
    cargarMarcas();
});
document.querySelector("#registrar-btn").addEventListener("click",async()=>{
    let nombre=document.querySelector("#nombre-txt").value;
    let marca=document.querySelector("#marca-select").value;
    let anio=document.querySelector("#anio-txt").value;
    console.log(nombre.length);
    console.log(anio.length);
    if(nombre.length==0){
        
        Swal.fire('Atención','Campo nombre es obligatorio','warning');
        return;
    };
    
    if(anio.length==0){
        Swal.fire('Atención','Campo año es obligatorio','warning');
        return;
    };
    let consola={};
    consola.nombre=nombre;
    consola.marca=marca;
    consola.anio=anio;
    let res=await crearConsola(consola);
    await Swal.fire("Consola Creada","Consola creada exitosamente","info");
    //redirigir a otra pagina:
    window.location.href="ver_consola";
});