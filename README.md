<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpenExploit</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <style>
    /* Set the width of the first column */
    #myTable th:first-child, 
    #myTable td:first-child {
        width: 200px; /* Adjust the width as needed */
    }
</style>
</head>
<body>

<div class="container mt-5">
    <h1>CVE</h1>
    <table id="myTable" class="table table-bordered table-striped">
        <thead class="thead-light">
            <tr>
                <th widht=>CVE</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr><td><a href='cve-2020-10220'>CVE-2020-10220</a></td><td>An issue was discovered in rConfig through 3.9.4. The web interface is prone to a SQL injection via the commands.inc.php searchColumn parameter.</td></tr><tr><td><a href='cve-2020-25042'>CVE-2020-25042</a></td><td>An arbitrary file upload issue exists in Mara CMS 7.5. In order to exploit this, an attacker must have a valid authenticated (admin/manager) session and make a codebase/dir.php?type=filenew request to upload PHP code to codebase/handler.php.</td></tr><tr><td><a href='cve-2020-25213'>CVE-2020-25213</a></td><td>The File Manager (wp-file-manager) plugin before 6.9 for WordPress allows remote attackers to upload and execute arbitrary PHP code because it renames an unsafe example elFinder connector file to have the .php extension. This, for example, allows attackers to run the elFinder upload (or mkfile and put) command to write PHP code into the wp-content/plugins/wp-file-manager/lib/files/ directory. This was exploited in the wild in August and September 2020.</td></tr><tr><td><a href='cve-2020-25820'>CVE-2020-25820</a></td><td>BigBlueButton before 2.2.7 allows remote authenticated users to read local files and conduct SSRF attacks via an uploaded Office document that has a crafted URL in an ODF xlink field.</td></tr><tr><td><a href='cve-2021-25076'>CVE-2021-25076</a></td><td>The WP User Frontend WordPress plugin before 3.5.26 does not validate and escape the status parameter before using it in a SQL statement in the Subscribers dashboard, leading to an SQL injection. Due to the lack of sanitisation and escaping, this could also lead to Reflected Cross-Site Scripting</td></tr><tr><td><a href='cve-2023-27163'>CVE-2023-27163</a></td><td>request-baskets up to v1.2.1 was discovered to contain a Server-Side Request Forgery (SSRF) via the component /api/baskets/{name}. This vulnerability allows attackers to access network resources and sensitive information via a crafted API request.</td></tr><tr><td><a href='cve-2024-28116'>CVE-2024-28116</a></td><td>Grav is an open-source, flat-file content management system. Grav CMS prior to version 1.7.45 is vulnerable to a Server-Side Template Injection (SSTI), which allows any authenticated user (editor permissions are sufficient) to execute arbitrary code on the remote server bypassing the existing security sandbox. Version 1.7.45 contains a patch for this issue.</td></tr><tr><td><a href='cve-2024-4956'>CVE-2024-4956</a></td><td>Path Traversal in Sonatype Nexus Repository 3 allows an unauthenticated attacker to read system files. Fixed in version 3.68.1.</td></tr><tr><td><a href='cve-2024-9264'>CVE-2024-9264</a></td><td>The SQL Expressions experimental feature of Grafana allows for the evaluation of `duckdb` queries containing user input. These queries are insufficiently sanitized before being passed to `duckdb`, leading to a command injection and local file inclusion vulnerability. Any user with the VIEWER or higher permission is capable of executing this attack.  The `duckdb` binary must be present in Grafana's $PATH for this attack to function; by default, this binary is not installed in Grafana distributions.</td></tr>
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
