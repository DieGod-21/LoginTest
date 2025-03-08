<!-- Modal de Login -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="http://localhost/LOGINANALYSISSYSTEMS/web/views/pages/login/login.php" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo electrónico:</label>
                        <input type="email" id="email" name="email" 
                               pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" 
                               required 
                               title="Por favor ingrese un correo electrónico válido (ejemplo@dominio.com)" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña:</label>
                        <input type="password" id="password" name="password"
                               pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" 
                               required 
                               title="La contraseña debe tener al menos 8 caracteres, incluyendo al menos una letra y un número" class="form-control">
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                    </div>
                </form>
            </div>
        </div>
    </div>  
</div>
