<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Web Page</title>
</head>

<body>

    <?php

    class ParentClass
    {
        public static function createInstance()
        {
            return new static();
        }
    }

    class ChildClass extends ParentClass
    {
    }

    $parentObject = ParentClass::createInstance();
    $childObject = ChildClass::createInstance();

    echo '<pre>';
    var_dump($parentObject);
    var_dump($childObject);
    echo '</pre>';

    ?>

</body>

</html>
