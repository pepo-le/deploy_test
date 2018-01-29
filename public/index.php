<?php
require_once dirname(__FILE__) . '/../vendor/autoload.php';
$faker = Faker\Factory::create();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>DeployTest</title>
    <style>
        section {
            width: 50%;
            margin: auto;
        }
        h1 {
            background: linear-gradient(transparent 60%, #f1f1f1 60%);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        tbody {
            background-color: #fefefe;
            border: 1px solid #f1f1f1;
        }
        tr:nth-child(2n) {
            background-color: #f1f1f1;
        }
        td {
            padding: 5px 7px;
        }
    </style>
</head>
<body>
    <section>
        <h1>Names</h1>
        <table>
            <tbody>
<?php for ($i=0; $i < 10; $i++): ?>
                <tr>
                    <td><?php echo $faker->name; ?></td>
                </tr>
<?php endfor; ?>
            </tbody>
        </table>
    </section>
</body>
</html>
