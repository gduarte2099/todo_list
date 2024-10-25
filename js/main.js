listarTareas();

// funcion principal de listar tareas
function listarTareas(busqueda) {
  const resultado = document.getElementById("resultado");
  fetch("php/listar.php", {
    method: "POST",
    body: busqueda,
    headers: {
      "Content-Type": "application/json", // Especifica el tipo de contenido enviado
    },
  })
    .then((response) => response.json()) // Parsea la respuesta como JSON
    .then((response) => {
      // Limpiar el resultado previo
      resultado.innerHTML = "";

      // Si hay resultados, creamos las filas de la tabla
      response.forEach((data) => {
        resultado.innerHTML += `
    <tr>
        <td>${data.id}</td>
        <td>${data.nombre}</td>
        <td>${data.descripcion}</td>
        <td>${data.completada ? "Completada" : "Pendiente"}</td>
        <td class='custom-td'>
            <button type='button' class='custom-btn bg-yellow' onclick="editarTarea('${
              data.id
            }')">Editar</button>
            <button type='button' class='custom-btn bg-red' onclick="eliminarTarea('${
              data.id
            }')">Eliminar</button>
        </td>        
    </tr>
`;
      });
    })
    .catch((error) => console.error("Error:", error));
}

// registro de tareas
registrar.addEventListener("click", () => {
  fetch("php/registrar.php", {
    method: "POST",
    body: new FormData(frm),
  })
    .then((response) => response.text())
    .then((response) => {
      if (response == "ok") {
        Swal.fire({
          icon: "success",
          title: "Registrado",
          showConfirmButton: false,
          timer: 1500,
        });
        frm.reset();
        listarTareas();
      } else {
        Swal.fire({
          icon: "success",
          title: "Modificado",
          showConfirmButton: false,
          timer: 1500,
        });
        registrar.value = "Registrar";
        idp.value = "";
        listarTareas();
        frm.reset();
      }
    });
});

// funcion para eliminar una tarea
function eliminarTarea(id) {
  Swal.fire({
    title: "Esta seguro de eliminar?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si!",
    cancelButtonText: "NO",
  }).then((result) => {
    if (result.isConfirmed) {
      fetch("php/eliminar.php", {
        method: "POST",
        body: id,
      })
        .then((response) => response.text())
        .then((response) => {
          if (response == "ok") {
            listarTareas();
            Swal.fire({
              icon: "success",
              title: "Eliminado",
              showConfirmButton: false,
              timer: 1500,
            });
          }
        });
    }
  });
}

// funcion editar una tarea
function editarTarea(id) {
  fetch("php/editar.php", {
    method: "POST",
    body: id,
  })
    .then((response) => response.json())
    .then((response) => {
      idp.value = response.id;
      nombre.value = response.nombre;
      descripcion.value = response.descripcion;
      registrar.value = "Actualizar";
    });
}

// busqueda de tareas
buscar.addEventListener("keyup", () => {
  const valor = buscar.value;
  if (valor == "") {
    listarTareas();
  } else {
    listarTareas(valor);
  }
});
