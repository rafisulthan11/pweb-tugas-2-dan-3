<?php
require_once('config/conn.php');

class Students {    

    static function selectById($id) {
        global $conn;

      
        $sql ="SELECT * FROM Students WHERE id = :id";
        $stmt = $conn->prepare($sql);
        // Bind parameter
        $stmt->bind_param(':id', $id);
    
        // Execute query
        $stmt->execute();
    
        // Fetch  result
        $result = $stmt->affected_rows > 0 ? true : false;
    
        return $result;
    } 
    
    static function selectWhere($clause) {
  
        global $conn;
    
        $sql ="SELECT * FROM Students WHERE $clause";
        $stmt = $conn->prepare($sql);
        // Execute  query
        $stmt->execute();

        // Fetch result
        $result = $stmt->affected_rows > 0 ? true : false;

        return $result;
    } 
    
    static function updateById($id, $name, $email, $role_fk) {
      
        global $conn; 
       
        $sql ="UPDATE Students SET name = :name, email = :email, role_fk = :role_fk WHERE id = :id";
        $stmt = $conn->prepare($sql);

        // Bind  parameters
        $stmt->bind_param(':id', $id);
        $stmt->bind_param(':name', $name);
        $stmt->bind_param(':email', $email);
        $stmt->bind_param(':role_fk', $role_fk);

        // Execute  query
        $stmt->execute();

        $result = $stmt->affected_rows > 0 ? true : false;

        return $result;          
    }  
    
    // Pembaruan dengan klausa WHERE
    static function updateWhere($clause, $name, $email, $role_fk) {
        global $conn;

        // Misalnya, jika $clause adalah "id = ?"
        $sql = "UPDATE Students SET name = ?, email = ?, role_fk = ? WHERE $clause";
        $stmt = $conn->prepare($sql);
        
        $stmt->bind_param('ssi', $name, $email, $role_fk);
        
        $stmt->execute();
        
        $result = $stmt->affected_rows > 0 ? true : false;
        
        return $result;
    
    } 
    
    // Penghapusan berdasarkan ID
    static function deleteById($id) {
        global $conn;

        $sql = "DELETE FROM Students WHERE id = :id";
        $stmt = $conn->prepare($sql);

        $stmt->bind_Param(':id', $id);

        if ($stmt->execute()) {
            // Pemeriksaan tambahan untuk memastikan penghapusan berhasil
            $rowsAffected = $stmt->affected_rows > 0 ? true : false;
            return ($rowsAffected !== false && $rowsAffected > 0);
        } else {
            // Handle error, misalnya log atau tampilkan pesan kesalahan
            echo "Error during deletion.";
            return false;
        }

    } 
      
    // Penghapusan dengan klausa WHERE
    static function deleteWhere($clause) {  
        global $conn;  

        $sql = "DELETE FROM Students WHERE $clause;";
        $stmt = $conn->prepare($sql);

        $result = $conn->affected_rows > 0 ? true : false;
        return $result;
    


    } 
}

