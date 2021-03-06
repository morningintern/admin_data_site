<h1>Products List</h1>
<?php echo $this->Html->link('All Products',array('controller' => 'products', 'action' => 'index'));?>
 <?php foreach($categorys as $category):  ?>
         <th> <?php
                echo '     |     ';
                echo $this->Html->link($category['Category']['category_name'],array('controller' => 'products', 'action' => 'view_category', $category['Category']['id']));
                echo '     |     ';
                ?></th>
        <?php endforeach; ?>
        <div style="float:right;">
        <?php echo $this->Html->link('Add/Edit/Delete Category',array('controller' => 'categorys', 'action' => 'index')); ?>
        <?php echo '<p></p>';?>
        <?php echo $this->Html->link(
            'Add Product',
            array('controller' => 'products', 'action' => 'add')
        ); ?>

        </div>

<?php echo '<p></p>';?>
<div style="clear:both;"></div>
<h1>This is All Products List</h1>
<table>
    <tr>


    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->
    <th>Id</th>
     <th>Title</th>
     <th></th>
     <th></th>
     <th>Created</th>
    <?php foreach ($products as $product): ?>
    <tr>
        <td><?php echo $product['products']['id']; ?></td>
        <td>
            <?php  echo $this->Html->link($product['products']['product_name'],array('controller' => 'products', 'action' => 'view', $product['products']['id']));
          //  echo $product['Product']['product_name'];

            ?>
        </td>
        <td>
                    <?php
                        echo $this->Html->link(
                            'Edit',
                            array('action' => 'edit', $product['products']['id'])
                        );
                    ?>
         </td>
         <td>
                  <?php
                                echo $this->Form->postLink(
                                    'Delete',
                                    array('action' => 'delete', $product['products']['id']),
                                    array('confirm' => 'Are you sure?')
                                );
                            ?>
         </td>
        <td><?php echo $product['products']['created']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>

<?php echo '<p></>';?>
<?php echo $this->Html->link(
    'Add Users',
    array('controller' => 'users', 'action' => 'add')
); ?>
<?php echo '<p></>';?>
<?php echo $this->Html->link(
    'Logout',
    array('controller' => 'users', 'action' => 'logout')
); ?>