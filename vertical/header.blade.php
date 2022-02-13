<nav class="topnav navbar navbar-light">
    <ul class="nav">
        <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
            <i class="fe fe-menu navbar-toggler-icon"></i>
        </button>
        <li class="nav-item">
            <a class="nav-link text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="avatar avatar-sm mt-2">
                    <img src="/api/home/image" alt="..." class="avatar-img rounded-circle">
                </span>
            </a>
        </li>
        <li class="nav-item nav-notif">
            <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-notif">
                <span class="text-primary"> التنبيهات </span>

                <span class="fe fe-bell fe-16"></span>
                @if (Auth::user()->notifications()->unread()->count())
                <span class="dot dot-md bg-success"></span>
                @endif
            </a>
        </li>
        <li class="nav-item nav-notif">
            <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-shortcut">
                <span class="text-primary"> التطبيقات </span>
                <span class="fe fe-grid fe-16"></span>
              </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-muted my-2" href="#">
              <span class="text-primary"> تغيير كلمة السر </span>
              <span class="fe fe-lock fe-16"></span>
            </a>
          </li>

        <li class="nav-item">
            <form action="/logout" method="POST"> @csrf
                <button type="submit" class="btn nav-link text-muted my-2" href="#">
                    <span class="text-primary">{{ __('main.logout') }}</span>
                    <span class="fe fe-log-out fe-16"></span>
                </button>
            </form>
        </li>
        <li class="nav-item my-2">
            <form class="form-inline searchform text-muted">
              <input class="form-control bg-light-green w-100 text-muted" type="search" placeholder="البحث " aria-label="Search">
            </form>
          </li>
    </ul>
    <span class="navbar-logo">
        <img src="/images/e-logo.svg" alt="logo" >
        {{-- <object data="/images/emarah.svg" type="image/svg+xml" class="navbar-brand-img"></object> --}}

    </span>
</nav>

