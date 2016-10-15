<?php

   class ClassName extends CI_Models
   {
      private $id_puntero;
      private $fecha_salida;
      private $numero;
      private $fecha_previa;
      private $fecha_creacion;
      private $estado;

      public function setId_puntero($id_puntero)
      {
         $this->_id_puntero = $id_puntero;
      }
      public function getId_puntero()
      {
         return $this->_id_puntero;
      }

      public function setFecha_salida($fecha_salida)
      {
         $this->_fecha_salida = $fecha_salida;
      }
      public function getFecha_salida()
      {
         return $this->_fecha_salida;
      }

      public function setNumero($numero)
      {
         $this->_numero = $numero;
      }
      public function getNumero()
      {
         return $this->_numero;
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
