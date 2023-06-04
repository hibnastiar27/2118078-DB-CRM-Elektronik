<!DOCTYPE html>
<html lang="en">
  <!-- Awal Head -->
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Home CRM</title>

    <!-- ?link icon -->
    <link
      href="../vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <!-- ?Akhir link icon -->

    <!-- ?Link Font -->
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />
    <!-- ?Akhir Link font -->

    <!-- ?link custom css -->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet" />
    <link href="../css/editColor.css" rel="stylesheet" />
    <!-- ?akhir link custom css -->
  </head>
  <!-- Akhir Head -->

  <!-- Body -->
  <body id="page-top">
    <!-- Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul
        class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
        id="accordionSidebar"
      >
        <!-- Sidebar - Brand -->
        <a
          class="sidebar-brand d-flex align-items-center justify-content-center"
          href="#"
        >
          <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-bolt"></i>
          </div>
          <div class="sidebar-brand-text mx-3">CRM Elektronik</div>
        </a>
        <!-- Akhir Sidebar - Brand -->

        <hr class="sidebar-divider my-0" />

        <!-- Sidebar Item Dashboard -->
        <li class="nav-item">
          <a class="nav-link" href="dashboard.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a
          >
        </li>
        <!-- Akhir Sidebar Item Dashboard -->

        <hr class="sidebar-divider" />

        <!-- Main Aplication -->
        <div class="sidebar-heading">Main Application</div>

        <li class="nav-item">
          <a class="nav-link" href="pelanggan.html">
            <i class="fas fa-fw fa-people-arrows"></i>
            <span>Pelanggan</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="konsumen.html">
            <i class="fas fa-fw fa-user-tie"></i>
            <span>Konsumen</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="distributor.html">
            <i class="fas fa-fw fa-truck"></i>
            <span>Distributor</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="barang.html">
            <i class="fas fa-fw fa-box"></i>
            <span>Barang</span>
          </a>
        </li>

        <li class="nav-item">
          <a
            class="nav-link"
            href="#"
            data-toggle="collapse"
            data-target="#collapse1"
            aria-expanded="true"
            aria-controls="collapse1"
          >
            <i class="fas fa-fw fa-store-alt"></i>

            <span>Transaksi</span>
          </a>
          <div
            id="collapse1"
            class="collapse"
            aria-labelledby="heading1"
            data-parent="#accordionSidebar"
          >
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Data Transaksi</h6>
              <a class="collapse-item" href="transaksi.html"
                >Transaksi Penjualan</a
              >
              <a class="collapse-item" href="jenisTrans.html"
                >Jenis Transaksi</a
              >
              >
            </div>
          </div>
        </li>
        <!-- Akhir Main Aplication -->

        <hr class="sidebar-divider" />

        <!-- Customer Services -->
        <div class="sidebar-heading">Customer Services</div>

        <li class="nav-item">
          <a
            class="nav-link collapsed"
            href="#"
            data-toggle="collapse"
            data-target="#collapse2"
            aria-expanded="true"
            aria-controls="collapse2"
          >
            <i class="fas fa-fw fa-cog"></i>
            <span>Riwayat Transaksi</span>
          </a>
          <div
            id="collapse2"
            class="collapse"
            aria-labelledby="heading2"
            data-parent="#accordionSidebar"
          >
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Riwayat Transaksi</h6>
              <a class="collapse-item" href="riwayatTransPelanggan.html"
                >Pelanggan</a
              >
              <a class="collapse-item" href="riwayatTransKonsumen.html"
                >Konsumen</a
              >
              >
            </div>
          </div>
        </li>

        <li class="nav-item active">
          <a
            class="nav-link collapsed"
            href="#"
            data-toggle="collapse"
            data-target="#collapse3"
            aria-expanded="true"
            aria-controls="collapse3"
          >
            <i class="fas fa-fw fa-cog"></i>
            <span>Poin</span>
          </a>
          <div
            id="collapse3"
            class="collapse show"
            aria-labelledby="heading3"
            data-parent="#accordionSidebar"
          >
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Data Poin</h6>
              <a class="collapse-item active" href="promo.html">Poin</a>
              <a class="collapse-item" href="penukaranPoin.html"
                >Penukaran Poin</a
              >
              >
            </div>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="sranKritik.html">
            <i class="fas fa-fw fa-comment"></i>
            <span>Saran Kritik</span></a
          >
        </li>
        <!-- Akhir Customer Services -->
      </ul>
      <!-- Akhir Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- Topbar -->
          <nav
            class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"
          >
            <!-- Sidebar Toggle (Topbar) -->
            <button
              id="sidebarToggleTop"
              class="btn btn-link rounded-circle mr-3"
            >
              <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->
            <form
              class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
            >
              <div class="input-group">
                <input
                  type="text"
                  class="form-control bg-light border-0 small"
                  placeholder="Search for..."
                  aria-label="Search"
                  aria-describedby="basic-addon2"
                />
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
              <div class="topbar-divider d-none d-sm-block"></div>

              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="userDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"
                    >Nur Aria Hibnastiar</span
                  >
                  <img
                    class="img-profile rounded-circle"
                    src="../img/undraw_profile.svg"
                  />
                </a>
                <!-- Dropdown - User Information -->
                <div
                  class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                  aria-labelledby="userDropdown"
                >
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Activity Log
                  </a>
                  <div class="dropdown-divider"></div>
                  <a
                    class="dropdown-item"
                    href="#"
                    data-toggle="modal"
                    data-target="#logoutModal"
                  >
                    <i
                      class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"
                    ></i>
                    Logout
                  </a>
                </div>
              </li>
            </ul>
          </nav>
          <!-- End of Topbar -->

          <!-- Begin Page Content -->

          <div class="container-fluid">
            <h1 class="h3 mb-4 text-gray-800">Poin</h1>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div
                class="card-header py-3 d-flex justify-content-between align-items-center"
              >
                <h6 class="m-0 font-weight-bold text-primary">Data Poin</h6>
                <!-- Button trigger modal -->
                <button
                  type="button"
                  class="btn btn-primary"
                  data-toggle="modal"
                  data-target="#exampleModal"
                >
                  Tambah Poin
                </button>

                <!-- Modal -->
                <div
                  class="modal fade"
                  id="exampleModal"
                  tabindex="-1"
                  aria-labelledby="exampleModalLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                          Tambah Poin
                        </h5>
                        <button
                          type="button"
                          class="close"
                          data-dismiss="modal"
                          aria-label="Close"
                        >
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="form-group">
                            <label for="NamaPoin">Nama Poin</label>
                            <input
                              type="text"
                              class="form-control"
                              id="NamaPoin"
                            />
                          </div>
                          <div class="form-group">
                            <label for="JumlahMinTrans"
                              >Minimal Jumlah Transaksi</label
                            >
                            <input
                              type="number"
                              class="form-control"
                              id="JumlahMinTrans"
                            />
                          </div>
                          <div class="form-group">
                            <label for="BatasanUser">Batasan User</label>
                            <input
                              type="number"
                              class="form-control"
                              id="BatasanUser"
                            />
                          </div>
                          <div class="form-group">
                            <label for="Nominal">Nominal / Persen</label>
                            <input
                              type="text"
                              class="form-control"
                              id="Nominal"
                            />
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlInput1"
                              >Dateline</label
                            >
                            <input
                              type="datetime-local"
                              class="form-control"
                              id="exampleFormControlInput1"
                            />
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button
                          type="button"
                          class="btn btn-secondary"
                          data-dismiss="modal"
                        >
                          Close
                        </button>
                        <button type="button" class="btn btn-primary">
                          Tambah
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table
                    class="table table-bordered"
                    id="dataTable"
                    width="100%"
                    cellspacing="0"
                  >
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Poin</th>
                        <th>Jumlah Minimal Transaksi</th>
                        <th>Batasan</th>
                        <th>Nominal / Persen</th>
                        <th>Dateline</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>PROMO666</td>
                        <td>30</td>
                        <td>10 Member</td>
                        <td>Rp 150.000</td>
                        <td>
                          27/4/2023 <br />
                          23.59
                        </td>
                        <td>
                          <span class="badge badge-secondary">Habis</span>
                        </td>
                        <td>
                          <!-- Action Edit -->
                          <span>
                            <!-- Button button Edit -->
                            <span
                              type="button"
                              class="badge badge-info py-2 px-4"
                              data-toggle="modal"
                              data-target="#editPoin1"
                            >
                              Edit
                            </span>
                            <!-- Akhir button Edit -->

                            <!-- Modal Edit -->
                            <div
                              class="modal fade"
                              id="editPoin1"
                              tabindex="-1"
                              aria-labelledby="editLabel"
                              aria-hidden="true"
                            >
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="editLabel">
                                      Edit Data Konsumen 1
                                    </h5>
                                    <button
                                      type="button"
                                      class="close"
                                      data-dismiss="modal"
                                      aria-label="Close"
                                    >
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <form>
                                      <div class="form-group">
                                        <label for="NamaPoin">Nama Poin</label>
                                        <input
                                          type="text"
                                          class="form-control"
                                          id="NamaPoin"
                                          value="PROMO666"
                                        />
                                      </div>
                                      <div class="form-group">
                                        <label for="JumlahMinTrans"
                                          >Minimal Jumlah Transaksi</label
                                        >
                                        <input
                                          type="number"
                                          class="form-control"
                                          id="JumlahMinTrans"
                                          value="30"
                                        />
                                      </div>
                                      <div class="form-group">
                                        <label for="BatasanUser"
                                          >Batasan User</label
                                        >
                                        <input
                                          type="number"
                                          class="form-control"
                                          id="BatasanUser"
                                          value="10"
                                        />
                                      </div>
                                      <div class="form-group">
                                        <label for="Nominal"
                                          >Nominal / Persen</label
                                        >
                                        <input
                                          type="text"
                                          class="form-control"
                                          id="Nominal"
                                          value="150.000"
                                        />
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleFormControlInput1"
                                          >Dateline</label
                                        >
                                        <input
                                          type="datetime-local"
                                          class="form-control"
                                          id="exampleFormControlInput1"
                                          value="2023-04-27T23:59"
                                        />
                                      </div>
                                    </form>
                                  </div>
                                  <div class="modal-footer">
                                    <button
                                      type="button"
                                      class="btn btn-secondary"
                                      data-dismiss="modal"
                                    >
                                      Batal
                                    </button>
                                    <button
                                      type="button"
                                      class="btn btn-primary"
                                    >
                                      Ubah
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- Akhir Modal Edit-->
                          </span>
                          <!-- Akhir Action Edit -->

                          <!-- Action Delete  -->
                          <span>
                            <span
                              type="button"
                              class="badge badge-danger mt-2 py-2 px-4"
                              data-toggle="modal"
                              data-target="#hapus2"
                            >
                              Delete
                            </span>
                            <div
                              class="modal fade"
                              id="hapus2"
                              tabindex="-1"
                              aria-labelledby="exampleModalLabel"
                              aria-hidden="true"
                            >
                              <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5
                                      class="modal-title"
                                      id="exampleModalLabel"
                                    >
                                      Hapus 2
                                    </h5>
                                    <button
                                      type="button"
                                      class="close"
                                      data-dismiss="modal"
                                      aria-label="Close"
                                    >
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <h5>Anda Yakin Ingin Menghapus?</h5>
                                  </div>
                                  <div class="modal-footer">
                                    <button
                                      type="button"
                                      class="btn btn-secondary"
                                      data-dismiss="modal"
                                    >
                                      Batal
                                    </button>
                                    <button
                                      type="button"
                                      class="btn btn-danger"
                                    >
                                      Hapus
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </span>
                          <!-- Akhir Action Delete -->
                        </td>
                      </tr>

                      <tr>
                        <td>2</td>
                        <td>New Membership</td>
                        <td>-</td>
                        <td>10 Member</td>
                        <td>20%</td>
                        <td>
                          27/5/2023 <br />
                          23.59
                        </td>
                        <td>
                          <span class="badge badge-danger">Exp</span>
                        </td>
                        <td>
                          <!-- Action Edit -->
                          <span>
                            <!-- Button button Edit -->
                            <span
                              type="button"
                              class="badge badge-info py-2 px-4"
                              data-toggle="modal"
                              data-target="#editPoin2"
                            >
                              Edit
                            </span>
                            <!-- Akhir button Edit -->

                            <!-- Modal Edit -->
                            <div
                              class="modal fade"
                              id="editPoin2"
                              tabindex="-1"
                              aria-labelledby="editLabel"
                              aria-hidden="true"
                            >
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="editLabel">
                                      Edit Data Konsumen 2
                                    </h5>
                                    <button
                                      type="button"
                                      class="close"
                                      data-dismiss="modal"
                                      aria-label="Close"
                                    >
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <form>
                                      <div class="form-group">
                                        <label for="NamaPoin">Nama Poin</label>
                                        <input
                                          type="text"
                                          class="form-control"
                                          id="NamaPoin"
                                          value="New Membership"
                                        />
                                      </div>
                                      <div class="form-group">
                                        <label for="JumlahMinTrans"
                                          >Minimal Jumlah Transaksi</label
                                        >
                                        <input
                                          type="number"
                                          class="form-control"
                                          id="JumlahMinTrans"
                                          value="-"
                                        />
                                      </div>
                                      <div class="form-group">
                                        <label for="BatasanUser"
                                          >Batasan User</label
                                        >
                                        <input
                                          type="number"
                                          class="form-control"
                                          id="BatasanUser"
                                          value="10"
                                        />
                                      </div>
                                      <div class="form-group">
                                        <label for="Nominal"
                                          >Nominal / Persen</label
                                        >
                                        <input
                                          type="text"
                                          class="form-control"
                                          id="Nominal"
                                          value="20"
                                        />
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleFormControlInput1"
                                          >Dateline</label
                                        >
                                        <input
                                          type="datetime-local"
                                          class="form-control"
                                          id="exampleFormControlInput1"
                                          value="2023-05-27T23:59"
                                        />
                                      </div>
                                    </form>
                                  </div>
                                  <div class="modal-footer">
                                    <button
                                      type="button"
                                      class="btn btn-secondary"
                                      data-dismiss="modal"
                                    >
                                      Batal
                                    </button>
                                    <button
                                      type="button"
                                      class="btn btn-primary"
                                    >
                                      Ubah
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- Akhir Modal Edit-->
                          </span>
                          <!-- Akhir Action Edit -->

                          <!-- Action Delete  -->
                          <span>
                            <span
                              type="button"
                              class="badge badge-danger mt-2 py-2 px-4"
                              data-toggle="modal"
                              data-target="#hapus2"
                            >
                              Delete
                            </span>
                            <div
                              class="modal fade"
                              id="hapus2"
                              tabindex="-1"
                              aria-labelledby="exampleModalLabel"
                              aria-hidden="true"
                            >
                              <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5
                                      class="modal-title"
                                      id="exampleModalLabel"
                                    >
                                      Hapus 2
                                    </h5>
                                    <button
                                      type="button"
                                      class="close"
                                      data-dismiss="modal"
                                      aria-label="Close"
                                    >
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <h5>Anda Yakin Ingin Menghapus?</h5>
                                  </div>
                                  <div class="modal-footer">
                                    <button
                                      type="button"
                                      class="btn btn-secondary"
                                      data-dismiss="modal"
                                    >
                                      Batal
                                    </button>
                                    <button
                                      type="button"
                                      class="btn btn-danger"
                                    >
                                      Hapus
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </span>
                          <!-- Akhir Action Delete -->
                        </td>
                      </tr>

                      <tr>
                        <td>3</td>
                        <td>PLATINUM</td>
                        <td>100</td>
                        <td>-</td>
                        <td>25%</td>
                        <td>-</td>
                        <td>
                          <span class="badge badge-info">Berfungsi</span>
                        </td>
                        <td>
                          <!-- Action Edit -->
                          <span>
                            <!-- Button button Edit -->
                            <span
                              type="button"
                              class="badge badge-info py-2 px-4"
                              data-toggle="modal"
                              data-target="#editPoin"
                            >
                              Edit
                            </span>
                            <!-- Akhir button Edit -->

                            <!-- Modal Edit -->
                            <div
                              class="modal fade"
                              id="editPoin"
                              tabindex="-1"
                              aria-labelledby="editLabel"
                              aria-hidden="true"
                            >
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="editLabel">
                                      Edit Data Konsumen 3
                                    </h5>
                                    <button
                                      type="button"
                                      class="close"
                                      data-dismiss="modal"
                                      aria-label="Close"
                                    >
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <form>
                                      <div class="form-group">
                                        <label for="NamaPoin">Nama Poin</label>
                                        <input
                                          type="text"
                                          class="form-control"
                                          id="NamaPoin"
                                          value="PLATINUM"
                                        />
                                      </div>
                                      <div class="form-group">
                                        <label for="JumlahMinTrans"
                                          >Minimal Jumlah Transaksi</label
                                        >
                                        <input
                                          type="number"
                                          class="form-control"
                                          id="JumlahMinTrans"
                                          value="100"
                                        />
                                      </div>
                                      <div class="form-group">
                                        <label for="BatasanUser"
                                          >Batasan User</label
                                        >
                                        <input
                                          type="number"
                                          class="form-control"
                                          id="BatasanUser"
                                          value="-"
                                        />
                                      </div>
                                      <div class="form-group">
                                        <label for="Nominal"
                                          >Nominal / Persen</label
                                        >
                                        <input
                                          type="text"
                                          class="form-control"
                                          id="Nominal"
                                          value="25"
                                        />
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleFormControlInput1"
                                          >Dateline</label
                                        >
                                        <input
                                          type="datetime-local"
                                          class="form-control"
                                          id="exampleFormControlInput1"
                                          value="-"
                                        />
                                      </div>
                                    </form>
                                  </div>
                                  <div class="modal-footer">
                                    <button
                                      type="button"
                                      class="btn btn-secondary"
                                      data-dismiss="modal"
                                    >
                                      Batal
                                    </button>
                                    <button
                                      type="button"
                                      class="btn btn-primary"
                                    >
                                      Ubah
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- Akhir Modal Edit-->
                          </span>
                          <!-- Akhir Action Edit -->

                          <!-- Action Delete  -->
                          <span>
                            <span
                              type="button"
                              class="badge badge-danger mt-2 py-2 px-4"
                              data-toggle="modal"
                              data-target="#hapus2"
                            >
                              Delete
                            </span>
                            <div
                              class="modal fade"
                              id="hapus2"
                              tabindex="-1"
                              aria-labelledby="exampleModalLabel"
                              aria-hidden="true"
                            >
                              <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5
                                      class="modal-title"
                                      id="exampleModalLabel"
                                    >
                                      Hapus 2
                                    </h5>
                                    <button
                                      type="button"
                                      class="close"
                                      data-dismiss="modal"
                                      aria-label="Close"
                                    >
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <h5>Anda Yakin Ingin Menghapus?</h5>
                                  </div>
                                  <div class="modal-footer">
                                    <button
                                      type="button"
                                      class="btn btn-secondary"
                                      data-dismiss="modal"
                                    >
                                      Batal
                                    </button>
                                    <button
                                      type="button"
                                      class="btn btn-danger"
                                    >
                                      Hapus
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </span>
                          <!-- Akhir Action Delete -->
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <!-- akhir Begin Page Content -->
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; Hibnastiar 2023</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->
      </div>
      <!-- Akhir Wrapper -->
    </div>
    <!-- Akhir Wrapper -->

    <!-- Scroll top-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
    <!-- Akhir Scrol Top -->

    <!-- Logout Modal -->
    <div
      class="modal fade"
      id="logoutModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button
              class="close"
              type="button"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            Select "Logout" below if you are ready to end your current session.
          </div>
          <div class="modal-footer">
            <button
              class="btn btn-secondary"
              type="button"
              data-dismiss="modal"
            >
              Cancel
            </button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Logout Modal -->

    <!--? Link JS -->

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!--? AkhirLink JS -->
  </body>
  <!-- Akhir Body -->
</html>
