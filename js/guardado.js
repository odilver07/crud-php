

const botonSave = document.querySelector('#guardar');
const botonEliminar = document.querySelector('#eliminar');


document.addEventListener('DOMContentLoaded', () => {
    let guardado = localStorage.getItem('usuario');
    confirm(guardado);
    if(guardado == 'guardado'){
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Usuario guardado correctamente',
            showConfirmButton: false,
            timer: 1500
          })
          localStorage.removeItem('usuario');
    }
    if(guardado == 'eliminado'){
        Swal.fire({
            position: 'center',
            icon: 'info',
            title: 'Usuario eliminado correctamente',
            showConfirmButton: false,
            timer: 1500
          })
          localStorage.removeItem('usuario');
    }
})


botonSave.addEventListener('click', () => {
    localStorage.setItem('usuario','guardado');
})

botonEliminar.addEventListener('click', () => {
    localStorage.setItem('usuario','eliminado');
})