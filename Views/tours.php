<?php

?>
<table border="1">
    <thead>
        <td>ID</td>
        <td>Name</td>
        <td>Category</td>
        <td>
            <a href="?url=create-tour">Thêm tour</a>
        </td>
    </thead>
    <tbody>
        <?php foreach ($tours as $key => $tour): ?>
            <tr>
                <td><?= $tour['id'] ?></td>
                <td><?= $tour['name'] ?></td>
                <td><?= $tour['cate_name'] ?></td>
                <td>
                    <a href="?url=edit-tour&id=<?= $tour['id'] ?>">sửa</a>
                    <a href="?url=delete-tour&id=<?= $tour['id'] ?>">xóa</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
