<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới tours</title>
</head>
<body>
    <form action="?url=update-tour&id=<?$tours['id']?>" method="POST">
        <label for="">Tên tours</label>
        <input type="text" name="themten" id="">
        <div>
         <label for="">Mã tours</label>
                <select name="matours" id="">
                    <?php foreach ($categories as $dm) : ?>
                        <option value="<?=$dm['id'] ?>">
                            <?=$dm['name'] ?>
                        </option>
                    <?php endforeach ?>
                </select>
            </div>
            <button type="submit">thêm</button>
    </form>
</body>
</html>