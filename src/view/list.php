
<div class="container">
<a class="btn btn-success" href="index.php?page=add">Add Product</a>
<br><br>
<form method="post" action="index.php?page=search">
    <input type="text" name="keyword" placeholder="Search">
    <button class="btn btn-secondary" type="submit">Search</button>

</form>
</div>
<br>
<div class="container">
    <h2>Product</h2>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <td>#</td>
        <td>Product Name</td>
        <td>Product Line</td>
        <td colspan="2">Action</td>
    </tr>
    </thead>
    <tbody>
    <?php if (empty($products)):?>
    <tr>
        <td>No data</td>
    </tr>
    <?php else:?>
    <?php foreach ($products as $key => $product):?>
    <tr>
        <td><?php echo ++$key?></td>
        <td><?php echo $product->getProductName()?></td>
        <td><?php echo $product->getProductLine()?></td>
        <td><a class="btn btn-success" href="index.php?page=update&id=<?php echo $product->getId()?>">Update</a> </td>
        <td><a class="btn btn-danger" href="index.php?page=delete&id=<?php echo $product->getId()?>">Delete</a> </td>

    </tr>
    <?php endforeach;?>
    <?php endif;?>
    </tbody>
</table>
</div>