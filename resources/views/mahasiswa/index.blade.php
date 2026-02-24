<h1>Data Mahasiswa</h1>
<ul>
    @foreach($data as $m)
        <li>{{  $m['nama'] }} - {{  $m['nim'] }}</li>
    @endforeach
</ul>