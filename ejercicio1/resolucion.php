<?php

// Lo que se estaba violando era el principio single responsability 


class DB  {


    public function connection (){

        return "the connection to the database was sucessful";
    }
}



class Employee extends DB {

    public $departamentos;

    public function saveemployee (){

        return "the employee's information has been saved sucessfully";

    }

public function reportByDepartment ($departamentos) {

    return "information of all active employee $departamentos ";

}



}

?>