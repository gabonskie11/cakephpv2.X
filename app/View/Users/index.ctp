<h1>Users</h1>
<p><?php echo $this->Html->link('Add User', array('action' => 'add')); ?></p>

<table>
    <tr>
        <th>id</th>
        <th>username</th>
        <th>role</th>
        <th>email</th>
        <th>firstname</th>
        <th>lastname</th>
        <th>date created</th>
        <th>Actions</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->

    <?php foreach ($users as $users): ?>
    <tr>
        <td><?php echo $users['User']['id']; ?></td>
        <td>
            <?php
                echo $this->Html->link(
                    $users['User']['username'],
                    array('action' => 'view', $users['User']['id'])
                );
            ?>
        </td>
        <td><?php echo $users['User']['role']; ?></td>
        <td><?php echo $users['User']['email']; ?></td>
        <td><?php echo $users['User']['first name']; ?></td>
        <td><?php echo $users['User']['last name']; ?></td>
        <td>
            <?php echo $users['User']['created']; ?>
        </td>
        <td>
            <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $users['User']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
            <?php
                echo $this->Html->link(
                    'Edit', array('action' => 'edit', $users['User']['id'])
                );
            ?>
            
        </td>
       
    </tr>
    <?php endforeach; ?>

</table>