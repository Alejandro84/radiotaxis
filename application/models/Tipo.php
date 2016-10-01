<?php

   class Tipo
   {
      private $id_tipo;
      private $nombre;
      private $fecha_creacion;
      private $estado;

      public function setId_tipo($id_tipo)
      {
         $this->_id_tipo = $id_tipo;
      }
      public function getId_tipo()
      {
         return $this->_id_tipo;
      }

      public function setNombre($nombre)
      {
         $this->_nombre = $nombre;
      }
      public function getNombre()
      {
         return $this->_nombre;
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
   }

?>
