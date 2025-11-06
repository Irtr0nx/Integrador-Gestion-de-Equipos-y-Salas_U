<?php
require_once 'includes/funciones/dbConexion.php';
if($conn->ping()){
  echo "Conexión OK";
}else{
  echo "Error conexión";
}