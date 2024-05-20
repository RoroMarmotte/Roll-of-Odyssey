
    <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
      <div class="offcanvas-md offcanvas-end bg-body-tertiary" 
           tabindex="-1"
           id="sidebarMenu" 
           aria-labelledby="sidebarMenuLabel"
        >

        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="sidebarMenuLabel">Roll of Odyssey</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto align-items-center">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link d-flex gap-3 fs-6" aria-current="page" href="/back-end/index.php">
                <i class="bi bi-sidebar bi-house-fill"></i>
                Accueil
              </a>
            </li>
            
            <hr class="my-3">


            <li class="nav-item">
              <a class="nav-link d-flex gap-3 fs-6" href="/back-end/users/index.php">
                <i class="bi bi-sidebar bi-person-gear"></i>
                Utilisateurs
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex gap-3 fs-6" href="/back-end/captcha/index.php">
                <i class="bi bi-sidebar bi-lock"></i>
                Captchas
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex gap-3 fs-6" href="/back-end/newsletter/index.php">
                <i class="bi bi-sidebar bi-envelope"></i>
                Newsletters
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex gap-3 fs-6" href="/back-end/log/index.php">
                <i class="bi bi-sidebar bi-file-text"></i>
                Logs
              </a>
            </li>

            <hr class="my-3">


            <li class="nav-item">
              <a class="nav-link d-flex gap-3 fs-6" href="/back-end/campagnes/">
                <i class="bi bi-sidebar bi-map"></i>
                Campagnes
              </a>
            </li>

            <li>
              <a class="nav-link d-flex gap-3 fs-6" href="/back-end/parties/index.php">
                <i class="bi bi-sidebar bi-list"></i>
                Parties
              </a>
            </li>

            <hr class="my-3">
                       

          <!-- Déconnexion -->
          
            
            <li class="nav-item">
              <a class="nav-link d-flex gap-3 fs-6" href="/back-end/login/logout.php">
                <i class="bi bi-sidebar bi-door-closed-fill"></i>
                Se déconnecter
              </a>
            </li>
            
          </ul>
        </div>
      </div>
    </div>
