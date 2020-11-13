<?php

class Customer
{

	private $pdo;
	private static $TABLE_NAME = "customers";
    
    public $id;
    public $name;
    public $email;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = DB::StartUp();
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function all()
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT * FROM ".self::$TABLE_NAME);
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function find()
	{
		try 
		{
			$stm = $this->pdo
						->prepare("SELECT * FROM ".self::$TABLE_NAME." 
								   WHERE id = ?");
			$stm->execute(array( $this->id ));

			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function update()
	{
		try 
		{
			$sql = "UPDATE ".self::$TABLE_NAME." SET 
						name   = ?,
                        email  = ?
						
				    WHERE id = ?";

			$this->pdo
				 ->prepare($sql)
			     ->execute(
				    array(
				    	$this->name, 
                        $this->email,
                        $this->id
					)
				 );
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function save()
	{
		try 
		{
			$sql = "INSERT INTO ".self::$TABLE_NAME." (name,email) 
					VALUES (?, ?)";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$this->name, 
						$this->email
                	)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function delete()
	{
		try 
		{
			$stm = $this->pdo
						->prepare("DELETE FROM ".self::$TABLE_NAME." 
								   WHERE id = ?");			          

			$stm->execute(array( $this->id ));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}