<?php
// Initialisation
define('A', realpath(__DIR__));
$B = A;

function C($D) {
    $E = realpath($D);
    if ($E && strpos($E, A) === 0) {
        return $E;
    }
    return A;
}

if (isset($_GET['F'])) {
    $B = C($_GET['F']);
}

if (!is_dir($B)) {
    $B = A;
}

function G($H) {
    $I = scandir($H);
    $J = [];
    $K = [];
    foreach ($I as $L) {
        if ($L != "." && $L != "..") {
            $M = $H . DIRECTORY_SEPARATOR . $L;
            if (is_dir($M)) {
                $J[] = $L;
            } else {
                $K[] = $L;
            }
        }
    }

    foreach ($J as $L) {
        echo '<tr>';
        echo '<td><a href="?F=' . urlencode($H . DIRECTORY_SEPARATOR . $L) . '">📁 ' . htmlspecialchars($L) . '</a></td>';
        echo '<td>Folder</td>';
        echo '<td>' . H($H, $L) . '</td>';
        echo '</tr>';
    }

    foreach ($K as $L) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($L) . '</td>';
        echo '<td>' . I($H . DIRECTORY_SEPARATOR . $L) . '</td>';
        echo '<td>' . H($H, $L) . '</td>';
        echo '</tr>';
    }
}

function I($L) {
    if (is_file($L)) {
        $N = filesize($L);
        if ($N >= 1048576) {
            return round($N / 1048576, 2) . ' MB';
        } elseif ($N >= 1024) {
            return round($N / 1024, 2) . ' KB';
        }
        return $N . ' bytes';
    }
    return 'N/A';
}

function H($I, $J) {
    $K = urlencode($I);
    $L = urlencode($J);
    $N = '<a href="?F=' . $K . '&edit=' . $L . '">Edit</a> | ';
    $N .= '<a href="?F=' . $K . '&delete=' . $L . '">Delete</a> | ';
    $N .= '<a href="?F=' . $K . '&rename=' . $L . '">Rename</a> | ';
    $N .= '<a href="?F=' . $K . '&download=' . $L . '">Download</a>';
    return $N;
}
?>
