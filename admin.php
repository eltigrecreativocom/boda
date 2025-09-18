 <style>

        /* Estilos adicionales para el panel admin */
        .admin-panel {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.95);
            padding: 40px 20px;
            z-index: 2000;
            display: none;
            overflow-y: auto;
        }
        
        .admin-panel.active {
            display: block;
        }
        
        .close-admin {
            position: absolute;
            top: 20px;
            right: 30px;
            font-size: 30px;
            cursor: pointer;
            color: var(--azul-profundo);
            transition: all 0.3s ease;
        }
        
        .close-admin:hover {
            color: var(--dorado);
            transform: scale(1.2);
        }
        
        .admin-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            border-radius: 10px;
            overflow: hidden;
        }
        
        .admin-table th, .admin-table td {
            border: 1px solid #ddd;
            padding: 12px 15px;
            text-align: left;
        }
        
        .admin-table th {
            background-color: var(--azul-profundo);
            color: white;
        }
        
        .admin-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        
        .admin-table tr:hover {
            background-color: rgba(212, 175, 55, 0.1);
        }
        
        .admin-login {
            max-width: 400px;
            margin: 50px auto;
            padding: 30px;
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        
        .admin-login h2 {
            text-align: center;
            margin-bottom: 25px;
            color: var(--azul-profundo);
        }
        
        .admin-link {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: var(--dorado);
            color: white;
            padding: 12px 20px;
            border-radius: 30px;
            z-index: 1000;
            cursor: pointer;
            box-shadow: 0 6px 15px rgba(0,0,0,0.2);
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .admin-link:hover {
            background: #c19d2d;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.25);
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .titulo {
                font-size: 3rem;
            }
            
            .tiempo {
                flex-wrap: wrap;
            }
            
            .unidad {
                flex: 1 0 40%;
                margin-bottom: 15px;
            }
            
            .evento {
                width: 100%;
            }
            
            .evento:nth-child(odd) .hora,
            .evento:nth-child(even) .hora {
                position: static;
                display: inline-block;
                margin-bottom: 10px;
            }
            
            .timeline-bar {
                display: none;
            }
        }
                .language-switcher {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1000;
            display: flex;
            gap: 10px;
            background: rgba(255, 255, 255, 0.9);
            padding: 10px 15px;
            border-radius: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
        }

        .lang-btn {
            background: none;
            border: none;
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            padding: 5px 15px;
            border-radius: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .lang-btn.active {
            background: #d4af37;
            color: white;
        }
    </style>
    <!-- Panel de administración -->
    <div class="admin-panel <?= $view_confirmations ? 'active' : '' ?>">
        <div class="close-admin" onclick="document.querySelector('.admin-panel').classList.remove('active')">×</div>
        
        <?php if ($view_confirmations): ?>
            <h2>Confirmaciones Recibidas</h2>
            <?php if (!empty($confirmaciones)): ?>
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Asistencia</th>
                            <th>Mensaje</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($confirmaciones as $linea): ?>
                            <tr>
                                <?php $campos = explode(' | ', $linea); ?>
                                <?php foreach ($campos as $campo): ?>
                                    <td><?= htmlspecialchars($campo) ?></td>
                                <?php endforeach; ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p>No hay confirmaciones aún</p>
            <?php endif; ?>
            <div style="margin-top: 30px; text-align: center;">
                <a href="?logout=1" class="btn-enviar">Cerrar sesión</a>
            </div>
        <?php else: ?>
            <div class="admin-login">
                <h2>Acceso de administración</h2>
                <?php if (isset($login_error)): ?>
                    <p style="color: red; text-align: center; margin-bottom: 20px;"><?= $login_error ?></p>
                <?php endif; ?>
                <form method="POST">
                    <div class="form-group">
                        <label for="username">Usuario:</label>
                        <input type="text" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña:</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <button type="submit" name="login" class="btn-enviar">Acceder</button>
                </form>
            </div>
        <?php endif; ?>
    </div>
    