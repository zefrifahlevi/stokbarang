<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
				<div class="sidebar-brand-icon rotate-n-15">
					<i class="fas fa-box"></i>
				</div>
				<div class="sidebar-brand-text mx-3">Stok Barang <sup>Gudang</sup></div>
			</a>
			<hr class="sidebar-divider my-0">
			<li class="nav-item <?= $aktif == 'dashboard' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('dashboard') ?>">
					<i class="fas fa-fw fa-laptop"></i>
					<span>Dashboard</span></a>
			</li>
			<hr class="sidebar-divider">

			<div class="sidebar-heading">
				Master
			</div>

			<li class="nav-item <?= $aktif == 'barang' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('barang') ?>">
					<i class="fas fa-fw fa-box"></i>
					<span>Stok Barang</span></a>
			</li>

			<li class="nav-item <?= $aktif == 'customer' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('customer') ?>">
					<i class="fas fa-fw fa-users"></i>
					<span>Data Customer</span></a>
			</li>

			<li class="nav-item <?= $aktif == 'supplier' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('supplier') ?>">
					<i class="fas fa-fw fa-user"></i>
					<span>Data Supplier</span></a>
			</li>

			<li class="nav-item <?= $aktif == 'petugas' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('petugas') ?>">
					<i class="fas fa-fw fa-users"></i>
					<span>Data Petugas</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">
	
			<div class="sidebar-heading">
				Transaksi
			</div>

			<li class="nav-item <?= $aktif == 'penerimaan' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('penerimaan') ?>">
					<i class="fas fa-fw fa-arrow-up"></i>
					<span>Barang Masuk</span></a>
			</li>

			<li class="nav-item <?= $aktif == 'pengeluaran' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('pengeluaran') ?>">
					<i class="fas fa-fw fa-arrow-down"></i>
					<span>Barang Keluar</span></a>
			</li>

			<hr class="sidebar-divider">
			<?php if ($this->session->login['role'] == 'admin'): ?>
				<!-- Heading -->
				<div class="sidebar-heading">
					Pengaturan
				</div>

				<li class="nav-item <?= $aktif == 'pengguna' ? 'active' : '' ?>">
					<a class="nav-link" href="<?= base_url('pengguna') ?>">
						<i class="fas fa-fw fa-users"></i>
						<span>Manajemen Admin</span></a>
				</li>

				<li class="nav-item <?= $aktif == 'toko' ? 'active' : '' ?>">
					<a class="nav-link" href="<?= base_url('toko') ?>">
						<i class="fas fa-fw fa-building"></i>
						<span>Profil Toko</span></a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('logout') ?>">
						<i class="fas fa-sign-out-alt"></i>
						<span>Logout</span></a>
				</li>

				<!-- Divider -->
			<?php endif; ?>
			<hr class="sidebar-divider d-none d-md-block">

			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>
		</ul>