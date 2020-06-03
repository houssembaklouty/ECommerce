<li class="nav-item {{ Request::is('categorys*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.categorys.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Categories</span>
    </a>
</li>
<li class="nav-item {{ Request::is('products*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.products.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Produits</span>
    </a>
</li>