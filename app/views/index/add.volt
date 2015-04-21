<h2>Add book</h2>

{{ form('', 'method':'post') }}
    <fieldset>
        {% for element in form %}
            <div class="form-group">
                {{ element.label() }}
                {{ element.render(['class': 'form-control']) }}
            </div>
        {% endfor %}

        <div class="form-group">
            {{ submit_button('Add book', 'class': 'btn btn-primary btn-large') }}
        </div>








    </fieldset>
</form>
