<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>
<body>

    <form action="{{ route('user.store') }}" method="post">
        @csrf
        <table>
            <tr>
                <td>Nama:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>NPM :</td>
                <td><input type="text" name="npm"></td>
            </tr>
            <tr>
                <td>
                    <label for="id_kelas">Kelas:</label><br>
                </td>
                <td>
                    <select name="kelas_id" id="kelas_id" required>
                        @foreach ($kelas as $kelasItem)
                            <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </form>

</body>
</html>
