<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css"
          integrity="sha256-UzFD2WYH2U1dQpKDjjZK72VtPeWP50NoJjd26rnAdUI=" crossorigin="anonymous"/>

    <title>urllist</title>
</head>
<body>

<div class="container">
    <table class="table table-bordered">
        <?php
        $i = 1;
        ?>
        @foreach($result as $v)

            <?php
            $j = 0;
            if (trim($v->tag1) != "") {
                $j++;
            }
            if (trim($v->tag2) != "") {
                $j++;
            }
            if (trim($v->tag3) != "") {
                $j++;
            }
            $bgColor = ($j == 0) ? "#eeeeee" : "#ffffff";
            ?>

            <tr style="background-color: {{ $bgColor }};">
                <td>
                    {{ $i }}
                </td>
                <td>
                    <?php
                    $deleteUrl = "/url/" . $v->id . "/delete";
                    ?>
                    <a href="{{ url($deleteUrl) }}"><i class="fas fa-trash"></i></a>
                </td>
                <td>
                    <?php
                    $tagSetUrl = "/url/" . $v->id . "/tagset";
                    ?>
                    <a href="{{ url($tagSetUrl) }}" target="_blank"><i class="fas fa-tags"></i></a>
                </td>
                <td style="word-break: break-all;">
                    <a href="{{ $v->url }}" target="_blank">{{ $v->title }}</a>
                    <div class="urldiv">{{ $v->url }}</div>
                </td>
                <td style="word-break: keep-all;">
                    {{ $v->tag1 }}
                </td>
                <td style="word-break: keep-all;">
                    {{ $v->tag2 }}
                </td>
                <td style="word-break: keep-all;">
                    {{ $v->tag3 }}
                </td>
            </tr>
            <?php
            $i++;
            ?>
        @endforeach
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
-->

<style type="text/css">
    .table {
        font-size: 18px;
    }

    .urldiv {
        color: #666666;
        font-size: 14px;
    }
</style>

</body>
</html>
