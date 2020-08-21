<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Usuario Logueado</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview " @click="menu=0">
            <a href="#" class="nav-link">
            <i class="fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
            <i class="fas fa-book-open"></i>
              <p>
                Catálogos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item" @click="menu=1">
                <a href="#" class="nav-link">
                <i class="fas fa-cookie-bite"></i>
                  <p>Categoría de Productos</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-truck-loading"></i>
              <p>
                Pedidos
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item" @click="menu=2">
                <a href="#" class="nav-link">
                <i class="fas fa-cart-plus"></i>
                  <p>Agregar Pedido</p>
                </a>
              </li>
              <li class="nav-item" @click="menu=3">
                <a href="#" class="nav-link">
                <i class="far fa-clock"></i>
                  <p>Pedidos Recientes</p>
                </a>
              </li>
              <li class="nav-item" @click="menu=4">
                <a href="#" class="nav-link">
                <i class="fas fa-people-carry"></i>
                  <p>Pedidos en Espera</p>
                </a>
              </li>
              <li class="nav-item" @click="menu=5">
                <a href="#" class="nav-link">
                <i class="fas fa-trash"></i>
                  <p>Pedidos Eliminados</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
             <i class="fas fa-hand-holding-usd"></i>
              <p>
                Ventas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item" @click="menu=6">
                <a href="#" class="nav-link">
                <i class="fas fa-money-bill-alt"></i>
                  <p>Registrar Ventas</p>
                </a>
              </li>
              <li class="nav-item" @click="menu=7">
                <a href="#" class="nav-link">
                <i class="fas fa-ban"></i>
                  <p>Eliminar Ventas</p>
                </a>
              </li>
              <li class="nav-item" @click="menu=8">
                <a href="#" class="nav-link">
                <i class="fas fa-check-circle"></i>
                  <p>Actualizar Ventas</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-users-cog"></i>
              <p>
                Gestion de Usuarios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item" @click="menu=9">
                <a href="#" class="nav-link">
                <i class="fas fa-user-lock"></i>
                  <p>Usuarios</p>
                </a>
              </li>
              <li class="nav-item" @click="menu=10">
                <a href="#" class="nav-link">
                <i class="fas fa-clipboard-list"></i>
                  <p>Roles</p>
                </a>
              </li>
              <li class="nav-item" @click="menu=11">
                <a href="#" class="nav-link">
                <i class="fas fa-users"></i>
                  <p>Empleados</p>
                </a>
              </li>
            </ul>
          </li>
         <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-chart-bar"></i>
              <p>
                Reportes
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item" @click="menu=12">
                <a href="#" class="nav-link">
                <i class="fas fa-chart-line"></i>
                  <p>Reporte Ventas</p>
                </a>
            </li>
            <li class="nav-item" @click="menu=13">
                <a href="#" class="nav-link">
                <i class="fas fa-clipboard-check"></i>
                  <p>Ingreso por Pedidos</p>
                </a>
            </li>
         </li>
        </ul>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="far fa-address-card"></i>
              <p>
                Clientes
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item" @click="menu=14">
                <a href="#" class="nav-link">
                <i class="fas fa-user-check"></i>
                  <p>Gestion Clientes</p>
                </a>
            </li>
            </ul>
         </li>
         <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-cash-register"></i>
              <p>
                Cajas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item" @click="menu=15">
                <a href="#" class="nav-link">
                <i class="fas fa-money-check-alt"></i>
                  <p>Gestion de Caja</p>
                </a>
            </li>
            </ul>
         </li>
        </ul>
         </li>
         </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>