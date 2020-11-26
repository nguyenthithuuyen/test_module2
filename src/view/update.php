<div class="container">
    <h3 id="book-h3">Update</h3>
    <form method="post" class="was-validated">
        <div class="form-group">
            <label for="uname">Name:</label>
            <input type="text" class="form-control" id="uname" value="<?php echo $product['productName']?>" name="name" required>
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
            <input type="text" class="form-control" id="uname" value="<?php echo $product['price']?>" name="price" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="uname">Amount:</label>
            <input type="text" class="form-control" id="uname" value="<?php echo $product['amount']?>" name="amount" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="uname">Number:</label>
            <input type="text" class="form-control" id="uname" value="<?php echo $product['creat_at']?>" name="creat_at" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="uname">Desc:</label>
            <textarea type="text" class="form-control" id="uname" name="description" required><?php echo $product['description']?></textarea>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>


        <button id="add-all" type="submit" class="btn btn-primary">Update</button>
        <button id="back-add" class="btn btn-secondary" onclick="window.history.go(-1); return false;">Back</button>
    </form>
</div>
