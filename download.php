           
<?php
echo 'yes';
if (isset($_GET['filename'])) {
    $file = 'admin/music/' . $_GET['filename'];

    // Check if the file exists
    if (file_exists($file)) {
        // Set headers to force download
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($file));
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));

        // Read the file and output it to the user
        readfile($file);
        exit;
    } else {
        echo "File not found";
    }
}
