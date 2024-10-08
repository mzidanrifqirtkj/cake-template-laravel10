<!-- ======= Main Content ======= -->
<main id="main" class="main p-5">
    <div class="container">
    <div class="pagetitle pt-5">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="fruits.html">Fruits</a></li>
                <li class="breadcrumb-item active">Edit Fruits</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <br>
    <div class="card border-0 shadow mb-4 ">
        <div class="card-body mt-4">
            <div class="table-responsive">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" style="border-radius: 13px;"
                            placeholder="Enter the fruit's name" required />
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price" name="price" style="border-radius: 13px;"
                            placeholder="Set the price" required />
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" accept=".png,.jpg,.jpeg" name="image"
                            style="border-radius: 13px;" required />
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="description" style="border-radius: 13px;"
                            placeholder="Describe the fruit" required /></textarea>
                    </div>
                    <div class="d-flex flex-row-reverse">
                        <button type="submit" class="btn border border-secondary rounded-pill px-3 text-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</main>
<!-- ======= End of Main Content ======= -->
