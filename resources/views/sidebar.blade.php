<!-- Barra Lateral - Menú usuario:Subsecretario de Formación y Posgrado-->
<div class="sidebar col-12 col-sm-auto">
    <div class="user">
        <img src="{{ asset('/img/User.png') }}">
        <h6>{{ Auth::user()->name }}</h6>
    </div>

    <div class="menu d-flex d-sm-block justify-content-center flex-wrap">
        <a href=""><i class="icon-doc-text"></i><span>Cargar Noticia</span></a>
        <a href=""><i class="icon-doc-text"></i><span>Editar Noticia</span></a>
       
        <a href=""><i class="icon-sweden"></i><span>Gestionar Categorias</span></a>
    </div>
    
    <div class="menu-config d-flex d-sm-block justify-content-center flex-wrap">
        <a href=""><i class="icon-cog-alt"></i><span>Usuario</span></a>
        <a href="" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();"><i class="icon-logout"></i><span>Cerrar sesión</span></a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</div>
