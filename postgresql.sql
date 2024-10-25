/*creacion de la tabla*/
CREATE TABLE usuarios (
    id SERIAL PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) UNIQUE NOT NULL,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

/*inserts*/
INSERT INTO usuarios (nombre, correo, fecha_registro)
VALUES ('nombre1', 'correo1', CURRENT_TIMESTAMP);

INSERT INTO usuarios (nombre, correo, fecha_registro)
VALUES ('nombre2', 'correo2', CURRENT_TIMESTAMP);

INSERT INTO usuarios (nombre, correo, fecha_registro)
VALUES ('nombre3', 'correo3', CURRENT_TIMESTAMP);

INSERT INTO usuarios (nombre, correo, fecha_registro)
VALUES ('nombre4', 'correo4', CURRENT_TIMESTAMP);

INSERT INTO usuarios (nombre, correo, fecha_registro)
VALUES ('nombre5', 'correo5', CURRENT_TIMESTAMP);

/*usuarios registrados en los 30 dias*/
SELECT *
FROM usuarios
WHERE fecha_registro >= CURRENT_DATE - INTERVAL '30 days';

/*actualizar usuario con id especifico*/
UPDATE usuarios
SET nombre = 'nombre01'
WHERE id = 1;

/*eliminar usuarios hasta 1 anho registrados*/
DELETE FROM usuarios
WHERE fecha_registro < CURRENT_DATE - INTERVAL '1 year';

