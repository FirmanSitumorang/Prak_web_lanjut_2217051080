<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Display</title>
</head>
<body style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100vh; margin: 0; font-family: Arial, sans-serif;">
    <div style="text-align: center;">
        <div style="display: flex; justify-content: center;">
            <div style="width: 120px; height: 120px; border-radius: 50%; background-color: #ddd; margin-bottom: 20px;"></div> <!-- Profile picture placeholder -->
        </div>
        <div style="display: flex; flex-direction: column; gap: 10px;">
            <div style="background-color: #e0e0e0; padding: 10px 20px; border-radius: 5px; width: 200px; text-align: center;">Nama: <?= $nama ?></div>
            <div style="background-color: #e0e0e0; padding: 10px 20px; border-radius: 5px; width: 200px; text-align: center;">Kelas: <?= $kelas ?></div>
            <div style="background-color: #e0e0e0; padding: 10px 20px; border-radius: 5px; width: 200px; text-align: center;">NPM: <?= $npm ?></div>
        </div>
    </div>
</body>
</html>
