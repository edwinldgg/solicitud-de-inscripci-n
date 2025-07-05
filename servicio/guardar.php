<?php
$conexion = new mysqli("localhost", "root", "", "servicio");

if ($conexion->connect_error) {
  die("Error de conexión: " . $conexion->connect_error);
}

// Obtener datos del formulario
$data = $_POST;

// Escapar variables (se recomienda usar prepared statements en producción)
foreach ($data as $key => $value) {
  $data[$key] = $conexion->real_escape_string($value);
}

$sql = "INSERT INTO alumnos (
  primer_apellido, segundo_apellido, nombres, fecha_nacimiento, sexo, nivel, curp, edad, peso,
  estatura, lentes, zapato_ortopedico, tipo_de_sangre, cartilla_de_vacunacion, vacunas_completas,
  enfermedades_cronicas, alergias, grupo_indigena, lengua_indigena, nacionalidad,
  entidad_nacimiento, tipo_de_documentacion_oficial,
  calle, entre_calle1, entre_calle2, numero_ext, numero_int, codigo_postal, entidad_federativa,
  municipio, colonia, localidad, referencia, telefono,
  nombre_tutor, curp_tutor, parentesco, escolaridad_tutor, ocupacion_tutor, fecha_nacimiento_del_tutor,
  estado_civil, nacionalidad_del_tutor, entidad_nacimiento_del_tutor, tipo_de_documentacion_oficial_del_tutor,
  calle_del_tutor, entre_calle1_del_tutor, entre_calle2_del_tutor, numero_ext_del_tutor, numero_int_del_tutor,
  codigo_postal_del_tutor, entidad_federativa_del_tutor, municipio_del_tutor, colonia_del_tutor, localidad_del_tutor,
  referencia_del_tutor, telefono_del_tutor, correo_electronico_del_tutor,
  telefono_celular, telefono_fijo, correo_electronico, contacto_emergencia, telefono_emergencia,
  computadora, tablet, internet_en_casa, internte_en_celular, television_de_paga, television_abierta, radio
) VALUES (
  '{$data['primer_apellido']}', '{$data['segundo_apellido']}', '{$data['nombres']}', '{$data['fecha_nacimiento']}',
  '{$data['sexo']}', '{$data['nivel']}', '{$data['curp']}', '{$data['edad']}', '{$data['peso']}',
  '{$data['estatura']}', '{$data['Lentes']}', '{$data['Zapato_ortopedico']}', '{$data['tipo_de_sangre']}',
  '{$data['cartilla_de_vacunacion']}', '{$data['vacunas_completas']}', '{$data['enfermedades_cronicas']}',
  '{$data['alergias']}', '{$data['grupo_indigena']}', '{$data['lengua_indigena']}', '{$data['nacionalidad']}',
  '{$data['entidad_nacimiento']}', '{$data['tipo_de_documentacion_oficial']}',
  '{$data['calle']}', '{$data['entre_calle1']}', '{$data['entre_calle2']}', '{$data['numero_ext']}', '{$data['numero_int']}',
  '{$data['codigo_postal']}', '{$data['entidad_federativa']}', '{$data['municipio']}', '{$data['colonia']}',
  '{$data['localidad']}', '{$data['referencia']}', '{$data['telefono']}',
  '{$data['nombre_tutor']}', '{$data['curp_tutor']}', '{$data['parentesco']}', '{$data['escolaridad_tutor']}',
  '{$data['ocupacion_tutor']}', '{$data['fecha_nacimiento_del_tutor']}', '{$data['estado_civil']}',
  '{$data['nacionalidad_del_tutor']}', '{$data['entidad_nacimiento_del_tutor']}', '{$data['tipo_de_documentacion_oficial_del tutor']}',
  '{$data['calle_del_tutor']}', '{$data['entre_calle1_del_tutor']}', '{$data['entre_calle2_del_tutor']}',
  '{$data['numero_ext_del_tutor']}', '{$data['numero_int_del_tutor']}', '{$data['codigo_postal_del_tutor']}',
  '{$data['entidad_federativa_del_tutor']}', '{$data['municipio_del_tutor']}', '{$data['colonia_del_tutor']}',
  '{$data['localidad_del_tutor']}', '{$data['referencia_del_tutor']}', '{$data['telefono_del_tutor']}',
  '{$data['correo_electronico_del_tutor']}', '{$data['telefono_celular']}', '{$data['telefono_fijo']}',
  '{$data['correo_electronico']}', '{$data['contacto_emergencia']}', '{$data['telefono_emergencia']}',
  '{$data['computadora']}', '{$data['tablet']}', '{$data['internet_en_casa']}', '{$data['internte_en_celular']}',
  '{$data['television_de_paga']}', '{$data['television_abierta']}', '{$data['radio']}'
)";

if ($conexion->query($sql) === TRUE) {
  echo "Registro guardado correctamente";
} else {
  echo "Error: " . $conexion->error;
}

$conexion->close();
?>

<script>
  // Guardar datos en localStorage y restaurar
  document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('registroForm');
    const inputs = form.querySelectorAll('input, select');

    inputs.forEach(input => {
      const name = input.name;
      if (localStorage.getItem(name)) {
        input.value = localStorage.getItem(name);
      }

      input.addEventListener('input', () => {
        localStorage.setItem(name, input.value);
      });
    });

    form.addEventListener('submit', () => {
      localStorage.clear();
    });
  });
</script>
