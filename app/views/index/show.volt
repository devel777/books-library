<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>Group</th>
    </tr>

{% for book in books %}
    <tr>
        <td>{{ book.id }}</td>
        <td>{{ book.title }}</td>
        <td>{{ book.author }}</td>
        <td>{{ book.group }}</td>
    </tr>
{% endfor %}
</table>