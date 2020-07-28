<!doctype html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<body>
<p>Choose your vechicle:</p>
<div>
    <input type="checkbox" id="bike" name="vechicle" value="bike">
    <label for="bike">Bike</label>
</div>
<div>
    <input type="checkbox" id="car" name="vechicle" value="car">
    <label for="car">Car</label>
</div>
<div>
    <input type="checkbox" id="select-all">
    <label for="car">Select All</label>
</div>
<script>

    $(document).ready(function() {
        $('#select-all').click(function() {
            $('input[type="checkbox"]').prop('checked', this.checked);
        })
    });
</script>
</body>
</html>