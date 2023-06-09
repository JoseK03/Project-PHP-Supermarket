-- Active: 1685731093205@@127.0.0.1@3306@supermarket
CREATE DATABASE supermarket;

USE supermarket;

CREATE TABLE  categorias(
    categoria_id INT primary key AUTO_INCREMENT,
    nombre VARCHAR (50),
    descripcion VARCHAR (50),
    imagen MEDIUMBLOB
);

CREATE TABLE clientes(
    cliente_id INT primary key AUTO_INCREMENT,
    celular INT,
    compañia VARCHAR (50) 
);

CREATE TABLE empleados(
    empleado_id INT primary key AUTO_INCREMENT,
    nombre VARCHAR(50),
    celular INT, 
    direccion VARCHAR (50)
);


CREATE TABLE facturas(

    factura_id INT primary key AUTO_INCREMENT,
    empleado_id INT,
    cliente_id INT, 
    fecha DATE
);

CREATE TABLE proveedores (

    proveedor_id INT primary key AUTO_INCREMENT,
    nombre VARCHAR(60),
    telefono VARCHAR(50),
    ciudad VARCHAR(60)
);

CREATE TABLE FacturaDetalle(

    factura_id INT,
    producto_id INT,
    cantidad INT,
    precio_venta INT
);

CREATE TABLE productos(

    producto_id INT primary key AUTO_INCREMENT,
    categoria_id INT,
    precio_unitario INT,
    stock INT,
    unidades_pedidas INT,
    proveedor_id INT,
    nombre_producto VARCHAR(50),
    descontinuado VARCHAR(50),
);

