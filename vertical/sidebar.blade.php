<nav class="navbar navbar-expand-lg navbar-light bg-white flex-row border-bottom shadow">
    <div class="container-fluid">
     
          <span class="navbar-logo">
              <a href="/">
            <img src="/images/logo.svg" alt="logo" class="navbar-brand-img" style="max-width: 96px">
        </a>
        </span>

    <div class="navbar-slide bg-white m-auto">
        
        <ul class="navbar-nav mr-auto">
            @foreach($apps as $app)
                @if (Auth::user()->hasPermissionOn($app->id))
                    <li class="nav-item dropdown {{ request()->routeIs($app->route) ? 'active' : '' }}">
                        @if (count($app->children) > 0)
                            <a href="{{ Route::has($app->route) ? route($app->route) : '#app-' . $app->id }}" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                                @else
                                    <a href="{{ Route::has($app->route) ? route($app->route) : '#app-' . $app->id }}" class="nav-link">
                                        @endif
                                        <i class="{{ $app->icon }}"></i>
                                        <span class="ml-3 item-text">{{ App::isLocale('en') ? $app->name_en : $app->name_ar }}</span>
                                    </a>
                                    @if (count($app->children) > 0)
                                        <ul class="collapse list-unstyled pl-2" id="app-{{ $app->id }}">
                                            @foreach($app->children as $child)
                                                @if (Auth::user()->hasPermissionOn($child->id))
                                                    <li class="nav-item dropdown {{ request()->routeIs($child->route) ? 'active' : '' }}">
                                                        @if (count($child->children) > 0)
                                                            <a href="{{ Route::has($child->route) ? route($child->route) : '#sub-' . $child->id }}" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                                                                @else
                                                                    <a href="{{ Route::has($child->route) ? route($child->route) : '#sub-' . $child->id }}" class="nav-link pl-3">
                                                                        @endif
                                                                        <span class="item-text">
                                        {{ App::isLocale('en') ? $child->name_en : $child->name_ar }}
                                    </span>
                                                                    </a>
                                                                    @if (count($child->children) > 0)
                                                                        <ul class="collapse list-unstyled pl-2" id="sub-{{ $child->id }}">
                                                                            @foreach($child->children as $subChild)
                                                                                @if (Auth::user()->hasPermissionOn($subChild->id))
                                                                                    <li class="nav-item {{ request()->routeIs($subChild->route) ? 'active' : '' }}">
                                                                                        <a class="nav-link pl-3" href="{{ Route::has($subChild->route) ? route($subChild->route) : '#' }}">
                                            <span class="item-text">
                                                {{ App::isLocale('en') ? $subChild->name_en : $subChild->name_ar }}
                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                @endif
                                                                            @endforeach
                                                                        </ul>
                                                        @endif
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                        @endif
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
    </div>
</nav>

