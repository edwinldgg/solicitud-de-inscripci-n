CREATE DATABASE IF NOT EXISTS inscripciones;
USE inscripciones;

CREATE TABLE alumnos (
  id INT AUTO_INCREMENT PRIMARY KEY,

  -- DATOS DEL ALUMNO
  primer_apellido VARCHAR(100),
  segundo_apellido VARCHAR(100),
  nombres VARCHAR(150),
  fecha_nacimiento DATE,
  sexo VARCHAR(10),
  nivel VARCHAR(20),
  curp VARCHAR(18),
  edad INT,
  peso DECIMAL(5,2),
  estatura DECIMAL(5,2),
  lentes VARCHAR(2),
  zapato_ortopedico VARCHAR(2),
  tipo_de_sangre VARCHAR(20),
  cartilla_de_vacunacion VARCHAR(2),
  vacunas_completas VARCHAR(2),
  enfermedades_cronicas TEXT,
  alergias TEXT,
  grupo_indigena TEXT,
  lengua_indigena TEXT,
  nacionalidad VARCHAR(50),
  entidad_nacimiento VARCHAR(50),
  tipo_de_documentacion_oficial VARCHAR(100),

  -- DOMICILIO DEL ALUMNO
  calle VARCHAR(150),
  entre_calle1 VARCHAR(150),
  entre_calle2 VARCHAR(150),
  numero_ext VARCHAR(20),
  numero_int VARCHAR(20),
  codigo_postal VARCHAR(10),
  entidad_federativa VARCHAR(100),
  municipio VARCHAR(100),
  colonia VARCHAR(100),
  localidad VARCHAR(100),
  referencia TEXT,
  telefono VARCHAR(15),

  -- DATOS DEL TUTOR
  nombre_tutor VARCHAR(150),
  curp_tutor VARCHAR(18),
  parentesco VARCHAR(50),
  escolaridad_tutor VARCHAR(100),
  ocupacion_tutor VARCHAR(100),
  fecha_nacimiento_del_tutor DATE,
  estado_civil DATE,
  nacionalidad_del_tutor VARCHAR(50),
  entidad_nacimiento_del_tutor VARCHAR(50),
  tipo_de_documentacion_oficial_del_tutor VARCHAR(100),

  -- DOMICILIO DEL TUTOR
  calle_del_tutor VARCHAR(150),
  entre_calle1_del_tutor VARCHAR(150),
  entre_calle2_del_tutor VARCHAR(150),
  numero_ext_del_tutor VARCHAR(20),
  numero_int_del_tutor VARCHAR(20),
  codigo_postal_del_tutor VARCHAR(10),
  entidad_federativa_del_tutor VARCHAR(100),
  municipio_del_tutor VARCHAR(100),
  colonia_del_tutor VARCHAR(100),
  localidad_del_tutor VARCHAR(100),
  referencia_del_tutor TEXT,
  telefono_del_tutor VARCHAR(15),
  correo_electronico_del_tutor VARCHAR(100),

  -- DATOS DE CONTACTO
  telefono_celular VARCHAR(15),
  telefono_fijo VARCHAR(15),
  correo_electronico VARCHAR(100),
  contacto_emergencia VARCHAR(100),
  telefono_emergencia VARCHAR(15),

  -- HERRAMIENTAS/APOYOS
  computadora VARCHAR(2),
  tablet VARCHAR(2),
  internet_en_casa VARCHAR(2),
  internte_en_celular VARCHAR(2),
  television_de_paga VARCHAR(2),
  television_abierta VARCHAR(2),
  radio VARCHAR(2),

  -- CONTROL
  fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);