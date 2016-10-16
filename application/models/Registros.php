<?php

   class Registro extends CI_Models
   {
      private $id_registro;
      private $patente_taxi;
      private $fecha_previa;
      private $fecha_creacion;
      private $estado;

      public function setId_registro($id_registro)
      {
         $this->_id_registro = $id_registro;
      }
      public function getId_registro()
      {
         return $this->_id_registro;
      }

      public function setPatente_taxi($patente_taxi)
      {
         $this->_patente_taxi = $patente_taxi;
      }
      public function getPatente_taxi()
      {
         return $this->_patente_taxi;
      }

      public function setFecha_previa($fecha_previa)
      {
         $this->_fecha_previa = $fecha_previa;
      }
      public function getFecha_previa()
      {
         return $this->_fecha_previa;
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
