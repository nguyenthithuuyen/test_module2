<div class="container">
    <h3 id="book-h3">Add Book</h3>
    <form method="post" class="was-validated">
        <div class="form-group">
            <label for="uname">Name:</label>
            <input type="text" class="form-control" id="uname" placeholder="Name" name="name" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="sel1">Category list:</label>
            <select name="category" class="form-control" id="sel1">
                <option value="Phone">Phone</option>
                <option value="Tivi">Tivi</option>
            </select>
        </div>
        <div class="form-group">
            <label for="uname">Price:</label>
            <input type="text" class="form-control" id="uname" placeholder="Enter Price" name="price" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="uname">Amount:</label>
            <input type="text" class="form-control" id="uname" placeholder="amount" name="amount" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="uname">Amount:</label>
            <input type="datetime-local" class="form-control" id="uname" name="creat_at" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="uname">Desc:</label>
            <textarea type="text" class="form-control" id="uname" name="description" required></textarea>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <button id="add-all" type="submit" class="btn btn-primary">Add</button>
        <button id="back-add" class="btn btn-secondary" onclick="window.history.go(-1); return false;">Back</button>
    </form>
</div>