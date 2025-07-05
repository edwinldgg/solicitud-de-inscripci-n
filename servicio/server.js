const express = require('express');
const mysql = require('mysql2');
const cors = require('cors');

const app = express();
app.use(cors());
app.use(express.json());

// Configura tu conexión aquí
const db = mysql.createConnection({
  host: 'localhost',
  user: 'TU_USUARIO',
  password: 'TU_CONTRASEÑA',
  database: 'inscripciones'
});

db.connect(err => {
  if (err) throw err;
  console.log('Conexión a la base de datos exitosa');
});

app.post('/api/registro', (req, res) => {
  const data = req.body;

  const sql = `
    INSERT INTO alumnos (
      primer_apellido, segundo_apellido, nombres, fecha_nacimiento,
      sexo, nivel, curp, edad, peso, estatura,
      lentes, zapato_ortopedico, tipo_de_sangre,
      cartilla_de_vacunacion, vacunas_completas,
      enfermedades_cronicas, alergias,
      grupo_indigena, lengua_indigena, nacionalidad,
      entidad_nacimiento, tipo_de_documentacion_oficial
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
  `;

  const values = [
    data.primer_apellido,
    data.segundo_apellido,
    data.nombres,
    data.fecha_nacimiento,
    data.sexo,
    data.nivel,
    data.curp,
    data.edad,
    data.peso,
    data.estatura,
    data.Lentes,
    data.Zapato_ortopedico,
    data.tipo_de_sangre,
    data.cartilla_de_vacunacion,
    data.vacunas_completas,
    data.enfermedades_cronicas,
    data.alergias,
    data.grupo_indigena,
    data.lengua_indigena,
    data.nacionalidad,
    data.entidad_nacimiento,
    data.tipo_de_documentacion_oficial
  ];

  db.query(sql, values, (err, result) => {
    if (err) {
      console.error('Error al insertar en la base de datos:', err);
      return res.status(500).json({ message: 'Error al guardar los datos' });
    }

    res.status(200).json({ message: 'Datos guardados correctamente' });
  });
});

app.listen(3000, () => {
  console.log('Servidor corriendo en http://localhost:3000');
});
