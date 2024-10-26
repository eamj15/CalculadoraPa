<?php
                        if (isset($_GET['search'])) {
                            $search = "%" . $_GET['search'] . "%";
                            $stmt = $conn->prepare("SELECT * FROM medicamentos WHERE nombre LIKE ?");
                            $stmt->bind_param("s", $search);
                            $stmt->execute();
                            $result = $stmt->get_result();
                        } else {
                            $result = $conn->query("SELECT * FROM medicamentos");
                        }

                        // Verificar si la consulta devolvió resultados
                        if ($result && $result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>{$row['nombre']}</td>";
                                echo "<td>{$row['disponible']}</td>";
                                echo "<td>\${$row['precio']}</td>";
                                echo "<td><a href='comprar.php?id={$row['id']}' class='btn btn-success'>Comprar</a></td>";
                                echo "</tr>";
                            }
                        } else {
                            // Mostrar un mensaje si no hay resultados
                            echo "<tr><td colspan='4'>No se encontraron resultados.</td></tr>";
                        }
                        ?>