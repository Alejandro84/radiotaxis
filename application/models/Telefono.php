<?php

   class Telefono
   {
      private $id_telefono;
      private $id_tipo;
      private $numero;
      private $fecha_creacion;
      private $estado;
      private $id_cliente;

      public function setId_telefono($id_telefono)
      {
         $this->_id_telefono = $id_telefono;
      }
      public function getId_telefono()
      {
         return $this->_id_telefono;
      }

      public function setId_tipo($id_tipo)
      {
         $this->_id_tipo = $id_tipo;
      }
      public function getId_tipo()
      {
         return $this->_id_tipo;
      }

      public function setNumero($numero)
      {
         $this->_numero = $numero;
      }
      public function getNumero()
      {
         return $this->_numero;
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

      public function setId_cliente($id_cliente)
      {
         $this->_id_cliente = $id_cliente;
      }
      public function getId_cliente()
      {
         return $this->_id_cliente;
      }
   }

?>
