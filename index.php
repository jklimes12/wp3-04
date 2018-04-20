<?php
include "function.php";
echo "jak je ta budova stará";
$buildingAge= readline("stáří budovy: ");
if (desBuilding($buildingAge)) {
  echo "budova je stará";
}
else {
  echo "budova je mladá";
}

?>
