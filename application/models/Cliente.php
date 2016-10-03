<?php

   class Cliente extends CI_Models
   {
      private $id_cliente;
      private $nombre;
      private $apepat;
      private $apemat;
      private $direccion;
      private $numero_casa;
      private $fecha_creacion;
      private $estado;

      public function setId_cliente($id_cliente)
      {
         $this->_id_cliente = $id_cliente;
      }
      public function getId_cliente()
      {
         return $this->_id_cliente;
      }

      public function setNombre($nombre)
      {
         $this->_nombre = $nombre;
      }
      public function getNombre()
      {
         return $this->_nombre;
      }

      public function setApepat($apepat)
      {
         $this->_apepat = $apepat;
      }
      public function getApepat()
      {
         return $this->_apepat;
      }

      public function setApemat($apemat)
      {
         $this->_apemat = $apemat;
      }
      public function getApemat()
      {
         return $this->_apemat;
      }

      public function setDireccion($direccion)
      {
         $this->_direccion = $direccion;
      }
      public function getDireccion()
      {
         return $this->_direccion;
      }

      public function setNumero_casa($numero_casa)
      {
         $this->_numero_casa = $numero_casa;
      }
      public function getNumero_casa()
      {
         return $this->_numero_casa;
      }

      public function setFecha_creacion($fecha_creacion)
      {
         $this->_fecha_creacion = $fecha_creacion;
      }
      public function getFecha_creacion()
      {
         return $this->_fecha_creacion;
      }

      public function setEstado($estado)
      {
         $this->_estado = $estado;
      }
      public function getEstado()
      {
         return $this->_estado;
      }

      public function getAll()
      {
         #Select * from table;
      }

      public function getOne($id)
      {
         #SELECT * FROM table WHERE id= $id;
      }

      public function crear($data)
      {

      }

      public function actualizar($id)
      {

      }

      public function editar($id)
      {

      }
   }

?>
