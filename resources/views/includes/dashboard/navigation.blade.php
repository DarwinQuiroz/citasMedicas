<!-- Navigation -->
<h6 class="navbar-heading text-muted">Administración</h6>
<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="./index.html">
        <i class="ni ni-tv-2 text-default"></i> Dashboard
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('specialties.index') }}">
        <i class="ni ni-tag text-blue"></i> Especialidades
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="./examples/maps.html">
        <i class="ni ni-single-02 text-orange"></i> Médicos
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="./examples/profile.html">
        <i class="ni ni-bullet-list-67 text-success"></i> Pacientes
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
        <i class="ni ni-button-power text-primary"></i> {{ __('Logout') }}
        </a>
        <form action="{{ route('logout') }}" method="POST" style="display:none;" id="logout-form">
            @csrf
        </form>
    </li>
</ul>
    <!-- Divider -->
    <hr class="my-3">
    <!-- Heading -->
    <h6 class="navbar-heading text-muted">Reportes</h6>
    <!-- Navigation -->
    <ul class="navbar-nav mb-md-3">
    <li class="nav-item">
        <a class="nav-link" href="#">
        <i class="ni ni-sound-wave text-danger"></i> Frecuencia de citas
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
        <i class="ni ni-paper-diploma text-blue"></i> Médicos más activos
        </a>
    </li>
</ul>
