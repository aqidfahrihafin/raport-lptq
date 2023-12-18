  <div class="topnav">
      <div class="container-fluid">
          <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

              <div class="collapse navbar-collapse" id="topnav-menu-content">
                  <ul class="navbar-nav">

                      <li class="nav-item">
                          <a class="nav-link  arrow-none" href="{{ '/' }}" id="topnav-dashboard" role="button"
                              aria-expanded="false">
                              <i class="bx bx-home-circle mr-2"></i>Dashboard </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link  arrow-none" href="{{ '/profilpesantren' }}" id="topnav-dashboard"
                              aria-expanded="false">
                              <i class="bx bx-user mr-2"></i>Profil Pesantren </a>
                      </li>
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-dashboard"
                              role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="bx bx-customize mr-2"></i>Lembaga <div class="arrow-down"></div>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="topnav-dashboard">

                              <a href="{{ '/pengaturan' }}" class="dropdown-item">Pengaturan</a>
                              <a href="{{ '/mapel' }}" class="dropdown-item">Mata Pelajaran</a>
                              <a href="{{ '/tingkatkelas' }}" class="dropdown-item">Tingkat Kelas</a>
                              <a href="{{ '/kelas' }}" class="dropdown-item">Data Kelas</a>
                          </div>
                      </li>

                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-dashboard"
                              role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="bx bx-customize mr-2"></i>Guru <div class="arrow-down"></div>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="topnav-dashboard">

                              <a href="{{ '/guru' }}" class="dropdown-item">Data Guru</a>
                              <a href="#" class="dropdown-item">Mengajar</a>
                          </div>
                      </li>

                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-dashboard"
                              role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="bx bx-customize mr-2"></i>Santri <div class="arrow-down"></div>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="topnav-dashboard">

                              <a href="{{'/santri'}}" class="dropdown-item">Data Santri</a>
                              <a href="#" class="dropdown-item">Pindah Kelas</a>
                              <a href="#" class="dropdown-item">Naik Kelas</a>
                              <a href="#" class="dropdown-item">Data Alumni</a>
                          </div>
                      </li>

                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-dashboard"
                              role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="bx bx-customize mr-2"></i>Raport <div class="arrow-down"></div>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="topnav-dashboard">
                              <a href="#" class="dropdown-item">Pengaturan Cetak</a>
                              <a href="#" class="dropdown-item">Status Nilai</a>
                              <a href="#" class="dropdown-item">Cetak Raport</a>
                          </div>
                      </li>
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-dashboard"
                              role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="bx bx-user mr-2"></i>Admin App <div class="arrow-down"></div>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="topnav-dashboard">
                              <a href="#" class="dropdown-item">Data Admin</a>
                              <a href="#" class="dropdown-item">Backup & Restore</a>
                          </div>
                      </li>


                  </ul>
              </div>
          </nav>
      </div>
  </div>

  <div class="main-content">
      <div class="page-content">
          <div class="container-fluid">

              <!-- start page title -->
              <div class="row">
                  <div class="col-12">
                      <div class="page-title-box d-flex align-items-center justify-content-between">
                          <h4 class="mb-0 font-size-18">{{ $title }}</h4>

                          <div class="page-title-right">
                              <ol class="breadcrumb m-0">
                                  <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                  <li class="breadcrumb-item active">{{ $title }}</li>
                              </ol>
                          </div>

                      </div>
                  </div>
              </div>
              <!-- end page title -->
