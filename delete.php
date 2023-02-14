<?php
 <td ><input name="delete" type="submit" value="DELETE"></td>
        <?php
         // Check if delete button active, start this
        if (isset($_POST['delete'])) {
          for($i=0;$i<$count;$i++){ 
           $del_id = $checkbox[$i]; 
          $sql = "DELETE FROM forum_topics WHERE topic_id = intval($del_id)"; 
                  mysql_query($sql);
                 }   
               }
            ?>
                       </table>
                       </form>
                       </div>?>