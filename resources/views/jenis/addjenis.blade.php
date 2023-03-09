<div class="">
    <caption><h1>Add Jenis</h1></caption>
    <a href="{{Route('jenis.index')}}"><button>See</button></a>
</div>
<div>
    <form action="" method="post">
        <div> 
            <label for="jenis">Jenis</label>
            <input type="text" name="Jenis" id="jenis" required>
        </div>
        <div>
            <label for="ket">Keterangan</label>
            <input type="text" name="ket" id="ket" required>
        </div>
        <div>
            <button type="submit">Simpan</button>
        </div>
    </form>
</div>