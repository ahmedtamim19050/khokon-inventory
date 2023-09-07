<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        {{-- <div class="pcoded-navigatio-lavel">Navigation</div> --}}
        <ul class="pcoded-item pcoded-left-item mt-3">
            <li class="pcoded-hasmenu {{Str::contains(request()->path(), 'units') ? 'active pcoded-trigger':''}} ">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Units</span>
                </a>
        
                <ul class="pcoded-submenu">
                    <li class="{{Str::contains(request()->path(), 'units') ? 'active':''}} ">
                        <a href="{{route('units.index')}}">
                            <span class="pcoded-mtext">Index</span>
                        </a>
                    </li>
                    <li class="{{Str::contains(request()->path(), 'create') ? 'active':''}} ">
                        <a href="{{route('units.create')}}">
                            <span class="pcoded-mtext">Create</span>
                        </a>
                    </li>
                
                </ul>
            </li>
            <li class="pcoded-hasmenu {{Str::contains(request()->path(), 'products') ? 'active pcoded-trigger':''}} ">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Products</span>
                </a>
        
                <ul class="pcoded-submenu">
                    <li class="{{Str::contains(request()->path(), 'products') ? 'active':''}} ">
                        <a href="{{route('products.index')}}">
                            <span class="pcoded-mtext">Index</span>
                        </a>
                    </li>
                    <li class="{{Str::contains(request()->path(), 'create') ? 'active':''}} ">
                        <a href="{{route('products.create')}}">
                            <span class="pcoded-mtext">Create</span>
                        </a>
                    </li>
                
                </ul>
            </li>
            {{-- <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                    <span class="pcoded-mtext">Page layouts</span>
                    <span class="pcoded-badge label label-warning">NEW</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" pcoded-hasmenu">
                        <a href="javascript:void(0)">
                            <span class="pcoded-mtext">Vertical</span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class=" ">
                                <a href="default/menu-static.html">
                                    <span class="pcoded-mtext">Static Layout</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="default/menu-header-fixed.html">
                                    <span class="pcoded-mtext">Header Fixed</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="default/menu-compact.html">
                                    <span class="pcoded-mtext">Compact</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="default/menu-sidebar.html">
                                    <span class="pcoded-mtext">Sidebar Fixed</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=" pcoded-hasmenu">
                        <a href="javascript:void(0)">
                            <span class="pcoded-mtext">Horizontal</span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class=" ">
                                <a href="default/menu-horizontal-static.html" target="_blank">
                                    <span class="pcoded-mtext">Static Layout</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="default/menu-horizontal-fixed.html" target="_blank">
                                    <span class="pcoded-mtext">Fixed layout</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="default/menu-horizontal-icon.html" target="_blank">
                                    <span class="pcoded-mtext">Static With Icon</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="default/menu-horizontal-icon-fixed.html" target="_blank">
                                    <span class="pcoded-mtext">Fixed With Icon</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=" ">
                        <a href="default/menu-bottom.html">
                            <span class="pcoded-mtext">Bottom Menu</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="default/box-layout.html" target="_blank">
                            <span class="pcoded-mtext">Box Layout</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="default/menu-rtl.html" target="_blank">
                            <span class="pcoded-mtext">RTL</span>
                        </a>
                    </li>
                </ul>
            </li> --}}
      
        </ul>

    </div>
</nav>