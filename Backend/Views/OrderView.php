
<h1><a>Order</a></h1>
<form method="post" action="index.php?controller=Order&action=checkbox">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">checkbox</th>
            <th scope="col">Id</th>
            <th scope="col">Customers</th>
            <!--        <th scope="col">Password</th>-->
            <th scope="col">Date</th>
            <th scope="col">TotalPrice</th>
            <th scope="col">Action</th>

            <th></th>
        </tr>
        </thead>
        <tbody>

        <?php
        foreach ($result as $item):
            ?>
            <tr>
                <th><input value="<?php echo $item->id ?>" name="checkbox[]" type="checkbox"></th>
                <th><?php echo $item->id; ?></th>
                <td><?php echo $item->customer_id; ?></td>
                <!--           <td>--><?php //echo $item->password; ?><!--</td>-->
                <td><?php echo $item->date; ?></td>
                <td><?php echo $item->price; ?></td>

                <td><a href="">Chi tiết</a></td>
            </tr>
        <?php
        endforeach;
        ?>

        </tbody>
        <style>
            .pagination{
                padding: 0px;margin: 0px;
            }
        </style>

    </table>

    <select style="width: 120px;" name="status" class="form-control form-control-lg">
        <option value="1">Active</option>
        <option value="2">DeActive</option>
    </select>
    <button type="submit">Submit</button>
</form>
<ul class="pagination">
    <li class="page-item"><a href="#" class="page-link">Trang</a></li>
    <?php for($i = 1; $i <= $numPage; $i++): ?>
        <li class="page-item"><a href="index.php?controller=Order&action=ListOrder&p=<?php echo $i; ?>" class="page-link">
                <?php echo $i; ?>
            </a></li>
    <?php endfor ?>
</ul>













