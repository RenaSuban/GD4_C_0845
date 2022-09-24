<?php
    include '../component/sidebar.php'
?> 

<body>
<div class="container p-3 m-4 h-100" 
style="background-color: #FFFFFF; border-top: 5px solid #D40013; 
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >

    <form action="../process/addMoviesProcess.php" method="post">
        <div>
            <h3 style="text-align: center">ADD MOVIE</h3>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Movie Name</label>
            <input class="form-control" id="name" name="name" aria-describedby="nameHelp">
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <select class="form-select" aria-label="Default select example" name="genre" id="genre">
            <option value="" disabled selected hidden>Select Genre</option>
                <option value="Horor">Horor</option>
                <option value="Action">Action</option>
                <option value="Comedy">Comedy</option>
                <option value="Romance">Romance</option>
                <option value="Fantasy">Fantasy</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="realese" class="form-label">Realese</label>
            <input class="form-control" id="realese" name="realese" aria-describedby="realeseHelp">
        </div>
        <div class="mb-3">
            <label for="season" class="form-label">Season</label>
            <input class="form-control" id="season" name="season" aria-describedby="seasonHelp">
        </div>
        <div class="mb-3">
            <label for="synopsis" class="form-label">Synopsis</label>
            <input class="form-control" id="synopsis" name="synopsis" aria-describedby="synopsisHelp">
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" name="addMovie">Submit</button>
        </div>
    </form>
</div>

</aside>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
crossorigin="anonymous"></script>
</body>
</html>