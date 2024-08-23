<?php

    class DB 
    {
        public $data;

        function getData()
        {
            $mysqli = new mysqli("127.0.0.1","root","","ToDO");
            $result = $mysqli->query("SELECT * FROM list;");

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $this->data = $row;

                    $priority__high = "<div class=priority__high></div>";
                    $priority__middle = "<div class=priority__middle></div>";
                    $priority__low = "<div class=priority__low></div>";


                    if ($this->data['priority'] == 'High')
                    {
                        echo "<tr class=todo__table-column><td class=task__task>" . $this->data['task'] . "</td><td class=task__date>" . $this->data['date'] . "</td><td class=deadline>" . $this->data['deadline'] . "</td><td>$priority__high</td>";  
                    }
                    elseif ($this->data['priority'] == 'Middle') 
                    {
                        echo "<tr class=todo__table-column><td class=task__task>" . $this->data['task'] . "</td><td class=task__date>" . $this->data['date'] . "</td><td class=deadline>" . $this->data['deadline'] . "</td><td>$priority__middle</td>";  
                    }
                    elseif ($this->data['priority'] == 'Low') {
                        echo "<tr class=todo__table-column><td class=task__task>" . $this->data['task'] . "</td><td class=task__date>" . $this->data['date'] . "</td><td class=deadline>" . $this->data['deadline'] . "</td><td>$priority__low</td>";  
                    }
                  
                    
                }   
            } 
            else {
                echo "0 results";
            }
        }

        function setData($task , $date , $deadline , $priority)
        {
            $mysqli = new mysqli("127.0.0.1","root","","ToDO");
            $insert = $mysqli->query("INSERT INTO list(task, date ,deadline, priority) VALUES ('$task', '$date', '$deadline' , '$priority');");
        }
    }

?>