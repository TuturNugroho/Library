<div class="card">
    <div class="card-header">
        <h4>Satidek Framework</h4>
    </div>
    <form method="POST" action="<?= Staditek\App\Core\Router::url("/loginuser") ?>">
        <div class="card-body">
            <div class="py-2">
                <label for="" class="form-label">Email:</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="py-2">
                <label for="" class="form-label">Password:</label>
                <input type="password" class="form-control" name="password">
            </div>
        </div>
        <input type="submit" value="submit" class="btn btn-success mt-5">                   
    </form>
</div>