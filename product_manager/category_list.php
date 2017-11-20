<?php include '../view/header.php'; ?>
<main>

    <h1>Category List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>
        <?php foreach($categories as $category ): ?>
            <tr>
                <td><?php echo $category['categoryName'] ?></td>
                <td>
                    <form action="?action=delete_category" method="POST">
                        <input type="hidden" name="id" value="<?php echo $category['categoryID'] ?>" />
                        <input type="submit" value="Delete" />
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h2>Add Category</h2>
    <form action="?action=add_category" method="POST">
        <input type="text" name="name" value="" placeholder="Category name" />
        <input type="submit" value="Add Category" />
    </form>

    <p><a href="index.php?action=list_products">List Products</a></p>

</main>
<?php include '../view/footer.php'; ?>
