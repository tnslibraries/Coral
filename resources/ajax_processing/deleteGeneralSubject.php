<?php

 		$className = $_GET['class'];
 		$deleteID = $_GET['id'];

		$instance = new $className(new NamedArguments(array('primaryKey' => $deleteID)));

			try {
				$instance->deleteGeneralSubject();
			} catch (Exception $e) {
				//print out a friendly message...
				echo "Unable to delete.  Please make sure no resources are set up with this information.";
			}

?>

