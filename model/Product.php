<?php
namespace Model;


class Product{
    public $pdo;
    public function __CONSTRUCT(){
        try{
            require_once('../model/dbvars.php');
            $this->pdo = new \PDO('mysql:host='.MYSQL_HOST.';dbname='.MYSQL_DB, MYSQL_USER, MYSQL_PASS);
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);  
            return $this->pdo;
        }catch(\Exception $e){
            die($e->getMessage());
        }
    
    }
    public function viewAll(){
		try {
			$query = "SELECT * FROM product";
			$result = $this->pdo->prepare($query);
			$result->execute();
			return $result->fetchAll(\PDO::FETCH_OBJ);	

		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
    public function insert($data){
        try {
			$query = 'INSERT INTO product (nombre,referencia,precio,peso,categoria,stock,ultimaVenta) VALUES (?,?,?,?,?,?,?)';
			$result = $this->pdo->prepare($query);
			$result->execute(array(
                $data['nombre_producto'],
                $data['referencia'],
                $data['precio'],
                $data['peso'],
                $data['categoria'],
                $data['stock'],
                $data['ultimaVenta']
            ));			
		} catch (\Exception $e) {
			die($e->getMessage());
		}
    }
    public function insertData($data){
        $this->insert($data);
        echo 'Producto Insertado Correctamente<br> Volver al Inicio <br><a href="../index.php">Volver</a>';
    }
    public function update($data){
        $query = 'UPDATE product SET nombre = ?, referencia = ?,precio= ? ,peso = ? , categoria = ?,stock= ?,ultimaVenta = ? WHERE id = ?';
        $result = $this->pdo->prepare($query);
        $result->execute(array(
            $data['nombre_producto'],
            $data['referencia'],
            $data['precio'],
            $data['peso'],
            $data['categoria'],
            $data['stock'],
            $data['ultimaVenta'],
            $data['id']
        ));	
    }
    public function updateData($data){
        $this->update($data);
        echo 'Producto con id '.$data['id'].' Actualizado Correctamente<br> <br><a href="../index.php">Volver</a>';
    }
    public function delete($id){
        $query = 'DELETE FROM product WHERE id = ?';
        $result = $this->pdo->prepare($query);
        $result->execute(array(
            $id
        ));	
    }
    public function deleteData($data){
        $this->delete($data['id']);
        echo 'Producto con id '.$data['id'].' Eliminado Correctamente<br> <br><a href="../index.php">Volver</a>';
    }



}
