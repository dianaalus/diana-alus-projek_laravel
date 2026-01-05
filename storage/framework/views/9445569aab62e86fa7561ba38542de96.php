<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Transaksi Kas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <h2 class="text-center mb-4">Laporan Transaksi Kas</h2>

        <div class="row text-center mb-4">
            <div class="col-md-4">
                <div class="card shadow-sm border-0 bg-success text-white">
                    <div class="card-body">
                        <h6>Total Masuk</h6>
                        <h4 class="fw-bold">Rp <?php echo e(number_format($total_masuk, 0, ',', '.')); ?></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm border-0 bg-danger text-white">
                    <div class="card-body">
                        <h6>Total Keluar</h6>
                        <h4 class="fw-bold">Rp <?php echo e(number_format($total_keluar, 0, ',', '.')); ?></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm border-0 bg-primary text-white">
                    <div class="card-body">
                        <h6>Saldo Akhir</h6>
                        <h4 class="fw-bold">Rp <?php echo e(number_format($saldo_akhir, 0, ',', '.')); ?></h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Tipe</th>
                            <th>Keterangan</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($key + 1); ?></td>
                            <td>
                                <span class="badge <?php echo e($item->tipe == 'masuk' ? 'bg-success' : 'bg-danger'); ?>">
                                    <?php echo e(ucfirst($item->tipe)); ?>

                                </span>
                            </td>
                            <td><?php echo e($item->keterangan ?? '-'); ?></td>
                            <td class="fw-semibold text-end">Rp <?php echo e(number_format($item->jumlah, 0, ',', '.')); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="4" class="text-center text-muted">Belum ada data transaksi.</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html><?php /**PATH C:\xampp2\htdocs\catatkas\resources\views/index.blade.php ENDPATH**/ ?>