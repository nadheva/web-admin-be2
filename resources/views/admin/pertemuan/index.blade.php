<x-app-layout>
  <div class="container-fluid">
    <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../../../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
      <span class="mask bg-gradient-primary opacity-6"></span>
    </div>
    <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
      <div class="row gx-4">
        <div class="col-auto my-auto">
          <div class="h-100">
            <h5 class="mb-1">
              Pertemuan Ke 1
            </h5>
            <p class="mb-0 font-weight-bold text-sm">
              Nama Kelas
            </p>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="container-fluid py-4">
    <div class="row mt-3">
      <div class="col-12 col-md-6 col-xl-4">
        <div class="card h-100">
          <div class="card-header pb-0 p-3">
            <h6 class="mb-0">Konten Video</h6>
          </div>
          <div class="card-body p-3">
            @foreach ($kontenVideo as $item)
            <h6 class="text-uppercase text-body text-xs font-weight-bolder">{{$item->judul}}</h6>
            @endforeach
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-xl-4 mt-md-0 mt-4">
        <div class="card h-100">
          <div class="card-header pb-0 p-3">
            <div class="row">
              <div class="col-md-8 d-flex align-items-center">
                <h6 class="mb-0">Quiz</h6>
              </div>
              <div class="col-md-4 text-end">
                <a class="btn bg-gradient-dark mb-0" href="{{route('tambahKuis',$kelas->id)}}"><i class="fas fa-plus"></i>&nbsp;&nbsp;Tambah Quiz</a>
              </div>
            </div>
          </div>
          <div class="card-body p-3">
            <p class="text-sm">
              Masukin keterangan kuis nya deh
            </p>
            <hr class="horizontal gray-light my-4">
            <ul class="list-group">
              <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full Name:</strong> &nbsp; Alec M. Thompson</li>
              <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Mobile:</strong> &nbsp; (44) 123 1234 123</li>
              <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp; alecthompson@mail.com</li>
              <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Location:</strong> &nbsp; USA</li>
              <li class="list-group-item border-0 ps-0 pb-0">
                <strong class="text-dark text-sm">Social:</strong> &nbsp;
                <a class="btn btn-facebook btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                  <i class="fab fa-facebook fa-lg"></i>
                </a>
                <a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                  <i class="fab fa-twitter fa-lg"></i>
                </a>
                <a class="btn btn-instagram btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                  <i class="fab fa-instagram fa-lg"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-12 col-xl-4 mt-xl-0 mt-4">
        <div class="card h-100">
          <div class="card-header pb-0 p-3">
            <h6 class="mb-0">Konten Dokumen</h6>
          </div>
          @foreach ($kontenDokumen as $item)
          <h6 class="text-uppercase text-body text-xs font-weight-bolder">{{$item->judul}}</h6>
          @endforeach
        </div>
      </div>
    </div>
  </div>

  
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-lg-6 col-12 mt-4 mt-lg-0">
          <div class="card h-100">
            <div class="card-header pb-0 p-3">
              <h6 class="mb-0">Conversations</h6>
            </div>
            <div class="card-body p-3">
              <ul class="list-group">
                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                  <div class="avatar me-3">
                    <img src="../../../assets/img/kal-visuals-square.jpg" alt="kal" class="border-radius-lg shadow">
                  </div>
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">Sophie B.</h6>
                    <p class="mb-0 text-xs">Hi! I need more information..</p>
                  </div>
                  <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;">Reply</a>
                </li>
                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                  <div class="avatar me-3">
                    <img src="../../../assets/img/marie.jpg" alt="kal" class="border-radius-lg shadow">
                  </div>
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">Anne Marie</h6>
                    <p class="mb-0 text-xs">Awesome work, can you..</p>
                  </div>
                  <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;">Reply</a>
                </li>
                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                  <div class="avatar me-3">
                    <img src="../../../assets/img/ivana-square.jpg" alt="kal" class="border-radius-lg shadow">
                  </div>
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">Ivanna</h6>
                    <p class="mb-0 text-xs">About files I can..</p>
                  </div>
                  <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;">Reply</a>
                </li>
                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                  <div class="avatar me-3">
                    <img src="../../../assets/img/team-4.jpg" alt="kal" class="border-radius-lg shadow">
                  </div>
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">Peterson</h6>
                    <p class="mb-0 text-xs">Have a great afternoon..</p>
                  </div>
                  <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;">Reply</a>
                </li>
                <li class="list-group-item border-0 d-flex align-items-center px-0">
                  <div class="avatar me-3">
                    <img src="../../../assets/img/team-3.jpg" alt="kal" class="border-radius-lg shadow">
                  </div>
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">Nick Daniel</h6>
                    <p class="mb-0 text-xs">Hi! I need more information..</p>
                  </div>
                  <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;">Reply</a>
                </li>
              </ul>
            </div>
            <div class="card-footer pt-0 p-3 d-flex align-items-center">
              <div class="w-60">
                <p class="text-sm">
                  More than <b>1,500,000</b> developers used Creative Tim's products and over <b>700,000</b> projects were created.
                </p>
              </div>
              <div class="w-40 text-end">
                <a class="btn bg-gradient-dark mb-0 text-end" href="javascript:;">View all reviews</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
              <div class="card" style="background-image: url('../../../assets/img/curved-images/white-curved.jpeg')">
                <span class="mask bg-gradient-dark opacity-9 border-radius-xl"></span>
                <div class="card-body p-3 position-relative">
                  <div class="row">
                    <div class="col-8 text-start">
                      <div class="icon icon-shape bg-white shadow text-center border-radius-md">
                        <i class="ni ni-circle-08 text-dark text-gradient text-lg opacity-10" aria-hidden="true"></i>
                      </div>
                      <h5 class="text-white font-weight-bolder mb-0 mt-3">
                        1600
                      </h5>
                      <span class="text-white text-sm">Users Active</span>
                    </div>
                    <div class="col-4">
                      <div class="dropdown text-end mb-6">
                        <a href="javascript:;" class="cursor-pointer" id="dropdownUsers1" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa fa-ellipsis-h text-white"></i>
                        </a>
                        <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownUsers1">
                          <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                          <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                          <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                        </ul>
                      </div>
                      <p class="text-white text-sm text-end font-weight-bolder mt-auto mb-0">+55%</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 mt-4 mt-md-0">
              <div class="card" style="background-image: url('../../../assets/img/curved-images/white-curved.jpeg')">
                <span class="mask bg-gradient-dark opacity-9 border-radius-xl"></span>
                <div class="card-body p-3 position-relative">
                  <div class="row">
                    <div class="col-8 text-start">
                      <div class="icon icon-shape bg-white shadow text-center border-radius-md">
                        <i class="ni ni-active-40 text-dark text-gradient text-lg opacity-10" aria-hidden="true"></i>
                      </div>
                      <h5 class="text-white font-weight-bolder mb-0 mt-3">
                        357
                      </h5>
                      <span class="text-white text-sm">Click Events</span>
                    </div>
                    <div class="col-4">
                      <div class="dropstart text-end mb-6">
                        <a href="javascript:;" class="cursor-pointer" id="dropdownUsers2" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa fa-ellipsis-h text-white"></i>
                        </a>
                        <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownUsers2">
                          <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                          <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                          <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                        </ul>
                      </div>
                      <p class="text-white text-sm text-end font-weight-bolder mt-auto mb-0">+124%</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-lg-6 col-md-6 col-12">
              <div class="card" style="background-image: url('../../../assets/img/curved-images/white-curved.jpeg')">
                <span class="mask bg-gradient-dark opacity-9 border-radius-xl"></span>
                <div class="card-body p-3 position-relative">
                  <div class="row">
                    <div class="col-8 text-start">
                      <div class="icon icon-shape bg-white shadow text-center border-radius-md">
                        <i class="ni ni-cart text-dark text-gradient text-lg opacity-10" aria-hidden="true"></i>
                      </div>
                      <h5 class="text-white font-weight-bolder mb-0 mt-3">
                        2300
                      </h5>
                      <span class="text-white text-sm">Purchases</span>
                    </div>
                    <div class="col-4">
                      <div class="dropdown text-end mb-6">
                        <a href="javascript:;" class="cursor-pointer" id="dropdownUsers3" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa fa-ellipsis-h text-white"></i>
                        </a>
                        <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownUsers3">
                          <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                          <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                          <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                        </ul>
                      </div>
                      <p class="text-white text-sm text-end font-weight-bolder mt-auto mb-0">+15%</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 mt-4 mt-md-0">
              <div class="card" style="background-image: url('../../../assets/img/curved-images/white-curved.jpeg')">
                <span class="mask bg-gradient-dark opacity-9 border-radius-xl"></span>
                <div class="card-body p-3 position-relative">
                  <div class="row">
                    <div class="col-8 text-start">
                      <div class="icon icon-shape bg-white shadow text-center border-radius-md">
                        <i class="ni ni-like-2 text-dark text-gradient text-lg opacity-10" aria-hidden="true"></i>
                      </div>
                      <h5 class="text-white font-weight-bolder mb-0 mt-3">
                        940
                      </h5>
                      <span class="text-white text-sm">Likes</span>
                    </div>
                    <div class="col-4">
                      <div class="dropstart text-end mb-6">
                        <a href="javascript:;" class="cursor-pointer" id="dropdownUsers4" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa fa-ellipsis-h text-white"></i>
                        </a>
                        <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownUsers4">
                          <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                          <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                          <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                        </ul>
                      </div>
                      <p class="text-white text-sm text-end font-weight-bolder mt-auto mb-0">+90%</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      <div class="row my-4">
        <div class="col-12">
          <div class="card">
            <div class="table-responsive">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Review</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="../../../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="avatar image">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">John Michael</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-sm text-secondary mb-0">Manager</p>
                    </td>
                    <td>
                      <span class="badge badge-dot me-4">
                        <i class="bg-info"></i>
                        <span class="text-dark text-xs">positive</span>
                      </span>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <p class="text-secondary mb-0 text-sm">john@user.com</p>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-sm">23/04/18</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-sm">43431</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="../../../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="avatar image">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Alexa Liras</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-sm text-secondary mb-0">Programator</p>
                    </td>
                    <td>
                      <span class="badge badge-dot me-4">
                        <i class="bg-info"></i>
                        <span class="text-dark text-xs">positive</span>
                      </span>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <p class="text-secondary mb-0 text-sm">alexa@user.com</p>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-sm">93021</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="../../../assets/img/team-4.jpg" class="avatar avatar-sm me-3" alt="avatar image">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Laurent Perrier</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-sm text-secondary mb-0">Executive</p>
                    </td>
                    <td>
                      <span class="badge badge-dot me-4">
                        <i class="bg-dark"></i>
                        <span class="text-dark text-xs">neutral</span>
                      </span>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <p class="text-secondary mb-0 text-sm">laurent@user.com</p>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">19/09/17</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-sm">10392</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="../../../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="avatar image">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Michael Levi</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-sm text-secondary mb-0">Backend developer</p>
                    </td>
                    <td>
                      <span class="badge badge-dot me-4">
                        <i class="bg-info"></i>
                        <span class="text-dark text-xs">positive</span>
                      </span>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <p class="text-secondary mb-0 text-sm">michael@user.com</p>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">24/12/08</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-sm">34002</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="../../../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="avatar image">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Richard Gran</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-sm text-secondary mb-0">Manager</p>
                    </td>
                    <td>
                      <span class="badge badge-dot me-4">
                        <i class="bg-danger"></i>
                        <span class="text-dark text-xs">negative</span>
                      </span>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <p class="text-secondary mb-0 text-sm">richard@user.com</p>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">04/10/21</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-sm">91879</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="../../../assets/img/team-4.jpg" class="avatar avatar-sm me-3" alt="avatar image">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Miriam Eric</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-sm text-secondary mb-0">Programtor</p>
                    </td>
                    <td>
                      <span class="badge badge-dot me-4">
                        <i class="bg-info"></i>
                        <span class="text-dark text-xs">positive</span>
                      </span>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <p class="text-secondary mb-0 text-sm">miriam@user.com</p>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">14/09/20</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-sm">23042</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
</x-app-layout>