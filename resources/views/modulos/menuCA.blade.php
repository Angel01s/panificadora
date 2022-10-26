<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <ul class="sidebar-menu">

          <li>
            <a href="{{ url('Inicio') }}">
              <i class="fa fa-home"></i>
              <Span>Inicio</Span>
            </a>
          </li>

          <li>
            <a href="{{ url('Reportes') }}">
              <i class="fa fa-book"></i>
              <Span>Reportes</Span>
            </a>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-list-ul"></i>
              <span>Ventas</span>

              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>

            <ul class="treeview-menu">

              <li>
                <a href="{{ url('Ver-Ventas') }}">
                  <i class="fa fa-check-square-o"></i>
                  <Span>Ver Ventas</Span>
                </a>
              </li>
            </ul>
            
          </li>

            <li>
              <a href="{{ url('Ver-Pedidos') }}">
                <i class="fa fa-check-square-o"></i>
                <Span>Ver Pedidos</Span>
              </a>
            </li>

        </ul>

    </section>
    <!-- /.sidebar -->
  </aside>