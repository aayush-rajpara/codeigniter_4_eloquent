<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Products</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="<?= base_url('assets/css/styles.css') ?>" rel="stylesheet">
</head>

<body>


    <div class="container p-30">
        <div class="row">
            <div class="col-md-12 main-datatable">
                <div class="card_body">
                    <div class="row d-flex">
                        <div class="col-sm-4 createSegment">
                            <a class="btn dim_button create_new"> <span class="glyphicon glyphicon-plus"></span> Create New</a>
                        </div>
                        <div class="col-sm-8 add_flex">
                            <div class="form-group searchInput">
                                <label for="email">Search:</label>
                                <input type="search" class="form-control" id="filterbox" placeholder=" ">
                            </div>
                        </div>
                    </div>
                    <div class="overflow-x">
                        <table style="width:100%;" id="products-table" class="table cust-datatable dataTable no-footer">
                            <thead>
                                <tr>
                                    <th style="min-width:50px;">Code</th>
                                    <th style="min-width:150px;">Name</th>
                                    <th style="min-width:150px;">Line</th>
                                    <th style="min-width:100px;">Vendor</th>
                                    <th style="min-width:100px;">Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($products) : ?>
                                    <?php foreach ($products as $product) : ?>
                                        <tr>
                                            <td><?php echo $product->productCode; ?></td>
                                            <td><?php echo $product->productName; ?></td>
                                            <td><?php echo $product->productLine; ?></td>
                                            <td><?php echo $product->productVendor; ?></td>
                                            <td><?php echo $product->productDescription; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            var dataTable = $('#products-table').DataTable({
                "pageLength": 5,
                'aoColumnDefs': [{
                    'bSortable': false,
                    'aTargets': ['nosort'],
                }],
                columnDefs: [{
                    type: 'date-dd-mm-yyyy',
                    aTargets: [4]
                }],
                "aoColumns": [
                    null,
                    null,
                    null,
                    null,
                    null
                ],
                "order": false,
                "bLengthChange": false,
                "dom": '<"top">ct<"top"p><"clear">'
            });
            $("#filterbox").keyup(function() {
                dataTable.search(this.value).draw();
            });
        });
    </script>
</body>

</html>