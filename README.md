<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Searchable and Paginated Table</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
</head>
<body>

<div class="container mt-5">
    <h1>Searchable and Paginated Table Example</h1>
    <table id="myTable" class="table table-bordered table-striped">
        <thead class="thead-light">
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>City</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>John Doe</td>
                <td>28</td>
                <td>New York</td>
            </tr>
            <tr>
                <td>Jane Smith</td>
                <td>34</td>
                <td>Los Angeles</td>
            </tr>
            <tr>
                <td>Mike Johnson</td>
                <td>45</td>
                <td>Chicago</td>
            </tr>
            <tr>
                <td>Emily Davis</td>
                <td>22</td>
                <td>Miami</td>
            </tr>
            <tr>
                <td>David Wilson</td>
                <td>30</td>
                <td>Dallas</td>
            </tr>
            <tr>
                <td>Sophia Martinez</td>
                <td>27</td>
                <td>Seattle</td>
            </tr>
            <tr>
                <td>James Brown</td>
                <td>40</td>
                <td>Boston</td>
            </tr>
            <tr>
                <td>Olivia Lee</td>
                <td>35</td>
                <td>San Francisco</td>
            </tr>
        </tbody>
    </table>
</div>

<!-- jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable(); // Initialize DataTable
    });
</script>

</body>
</html>