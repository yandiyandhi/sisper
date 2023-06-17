<!-- SIDEBAR -->
<section id="sidebar">
    {{-- <a href="#" class="brand">
        <i class='bx bxs-smile'></i>
        <span class="text">{{ Str::upper(auth()->user()->level) }}</span>
    </a> --}}
    <a href="#" class="prof">
        <img src="img/people.png">
        <span class="text">{{ Str::upper(auth()->user()->level) }}</span>
    </a>
    <ul class="side-menu top">
        <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
            <a href="/dashboard">
                <i class='bx bxs-dashboard'></i>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <li class="{{ Request::is('dashboard/listuser') ? 'active' : '' }}">
            <a href="/dashboard/listuser">
                <i class='bx bxs-shopping-bag-alt'></i>
                <span class="text">List User</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bxs-doughnut-chart'></i>
                <span class="text">Analytics</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bxs-message-dots'></i>
                <span class="text">Message</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bxs-group'></i>
                <span class="text">Team</span>
            </a>
        </li>
    </ul>
    <ul>
        <li>
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="border-0 bg-transparent fs-6 mr-0 log">
                    <i class="bi bi-box-arrow-right"></i> <span>Logout</span>
                </button>
            </form>
        </li>
    </ul>
</section>
<!-- SIDEBAR -->
