# Searchable and Paginated Table Example

<input type="text" id="searchInput" placeholder="Search for names.." style="margin-bottom: 12px; padding: 8px; width: 100%;">

<div id="pagination"></div>

<table id="myTable" style="width: 100%; border-collapse: collapse; margin-top: 12px;">
    <thead>
        <tr>
            <th style="padding: 12px; border: 1px solid #ddd; background-color: #f2f2f2;">Name</th>
            <th style="padding: 12px; border: 1px solid #ddd; background-color: #f2f2f2;">Age</th>
            <th style="padding: 12px; border: 1px solid #ddd; background-color: #f2f2f2;">City</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="padding: 12px; border: 1px solid #ddd;">John Doe</td>
            <td style="padding: 12px; border: 1px solid #ddd;">28</td>
            <td style="padding: 12px; border: 1px solid #ddd;">New York</td>
        </tr>
        <tr>
            <td style="padding: 12px; border: 1px solid #ddd;">Jane Smith</td>
            <td style="padding: 12px; border: 1px solid #ddd;">34</td>
            <td style="padding: 12px; border: 1px solid #ddd;">Los Angeles</td>
        </tr>
        <tr>
            <td style="padding: 12px; border: 1px solid #ddd;">Mike Johnson</td>
            <td style="padding: 12px; border: 1px solid #ddd;">45</td>
            <td style="padding: 12px; border: 1px solid #ddd;">Chicago</td>
        </tr>
        <tr>
            <td style="padding: 12px; border: 1px solid #ddd;">Emily Davis</td>
            <td style="padding: 12px; border: 1px solid #ddd;">22</td>
            <td style="padding: 12px; border: 1px solid #ddd;">Miami</td>
        </tr>
        <tr>
            <td style="padding: 12px; border: 1px solid #ddd;">David Wilson</td>
            <td style="padding: 12px; border: 1px solid #ddd;">30</td>
            <td style="padding: 12px; border: 1px solid #ddd;">Dallas</td>
        </tr>
        <tr>
            <td style="padding: 12px; border: 1px solid #ddd;">Sophia Martinez</td>
            <td style="padding: 12px; border: 1px solid #ddd;">27</td>
            <td style="padding: 12px; border: 1px solid #ddd;">Seattle</td>
        </tr>
        <tr>
            <td style="padding: 12px; border: 1px solid #ddd;">James Brown</td>
            <td style="padding: 12px; border: 1px solid #ddd;">40</td>
            <td style="padding: 12px; border: 1px solid #ddd;">Boston</td>
        </tr>
        <tr>
            <td style="padding: 12px; border: 1px solid #ddd;">Olivia Lee</td>
            <td style="padding: 12px; border: 1px solid #ddd;">35</td>
            <td style="padding: 12px; border: 1px solid #ddd;">San Francisco</td>
        </tr>
    </tbody>
</table>

<div id="paginationControls" style="margin-top: 12px;"></div>

<script>
    const rowsPerPage = 3; // Change this value to adjust the number of rows per page
    let currentPage = 1;

    const searchInput = document.getElementById('searchInput');
    const table = document.getElementById('myTable');
    const paginationControls = document.getElementById('paginationControls');

    function paginateTable() {
        const rows = Array.from(table.getElementsByTagName('tr')).slice(1); // Skip header
        const filteredRows = rows.filter(row => {
            const cells = row.getElementsByTagName('td');
            return Array.from(cells).some(cell => {
                return cell.innerText.toLowerCase().includes(searchInput.value.toLowerCase());
            });
        });

        const totalPages = Math.ceil(filteredRows.length / rowsPerPage);
        const start = (currentPage - 1) * rowsPerPage;
        const end = start + rowsPerPage;

        rows.forEach((row, index) => {
            row.style.display = 'none'; // Hide all rows
            if (filteredRows[index + start]) {
                filteredRows[index + start].style.display = ''; // Show only rows for the current page
            }
        });

        renderPagination(totalPages);
    }

    function renderPagination(totalPages) {
        paginationControls.innerHTML = '';
        for (let i = 1; i <= totalPages; i++) {
            const button = document.createElement('button');
            button.innerText = i;
            button.onclick = function () {
                currentPage = i;
                paginateTable();
            };
            paginationControls.appendChild(button);
        }
    }

    searchInput.addEventListener('keyup', function() {
        currentPage = 1; // Reset to the first page on search
        paginateTable();
    });

    window.onload = paginateTable; // Initial pagination on page load
</script>
