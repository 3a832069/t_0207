<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

<div class="container mt-3">
    <h2>Input Group</h2>
    <p>The .input-group class is a container to enhance an input by adding an icon, text or a button in front or behind the input field as a "help text".</p>
    <p>Use the .input-group-text class to style the specified help text.</p>

    <form action="/action_page.php">
        <div class="input-group mb-3">
            <span class="input-group-text">@</span>
            <input type="text" class="form-control" placeholder="Username" name="usrname">
        </div>

        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Your Email" name="email">
            <span class="input-group-text">@example.com</span>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form><br>
</div>

<a href="https://www.w3schools.com/bootstrap5/bootstrap_form_input_group.php" target="_blank">輸入元件參考資料(另外開啟新視窗)</a>
<br>
<a href="https://www.w3schools.com/bootstrap5/bootstrap_form_input_group.php" target="_self">輸入元件參考資料(在框架內開啟)</a>
<br>
<a href="https://www.w3schools.com/bootstrap5/bootstrap_form_input_group.php" target="_parent">輸入元件參考資料(在父層開啟)</a>
<hr>
<div class="container mt-3">
    <h3>Form Validation</h3>
    <p>Try to submit the form.</p>

    <form action="/action_page.php" class="was-validated">
        <div class="mb-3 mt-3">
            <label for="uname" class="form-label">Username:</label>
            <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div><!--沒有填內容則警告 -->
        </div>
        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" id="myCheck"  name="remember" required>
            <label class="form-check-label" for="myCheck">I agree on blabla.</label>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Check this checkbox to continue.</div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div><br>
<a href="https://www.w3schools.com/bootstrap5/bootstrap_form_validation.php" target="_blank">判斷是否輸入內容</a>
<hr>
<div class="container mt-3">
    <h2>Show Collapsible Content By Default</h2>
    <p>Add the show class next to the collapse class to show the content by default.</p>
    <p>Click on the button to toggle between showing and hiding content.</p>
    <button type="button" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#demo">Simple collapsible</button>
    <div id="demo" class="collapse"><!--collapse show為一開始就顯示隱藏文字 -->
        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </div>
</div><br>
<a href="https://www.w3schools.com/bootstrap5/tryit.asp?filename=trybs_collapsible_in&stacked=h" target="_blank">摺疊文字</a>
<hr>
<div class="container mt-3">
    <h3>Modal Example</h3>
    <p>Click on the button to open the modal.</p>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal"><!--按下按鈕後打開id為myModal的東東 -->
        Open modal
    </button>
</div>

<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Modal Heading</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                Modal body..
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div><br>
<a href="https://www.w3schools.com/bootstrap5/tryit.asp?filename=trybs_modal&stacked=h" target="_blank">打開小視窗</a>
<hr>
<div class="container mt-3">
    <h3>Tooltip Example</h3>

    <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" title="柚子喔!"><!--游標靠近按鈕時會出現小訊息，內容為title裡的內容 -->
        Hover over me!
    </button>
</div>

<script>
    // Initialize tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script><br>
<a href="https://www.w3schools.com/bootstrap5/tryit.asp?filename=trybs_tooltip&stacked=h" target="_blank">靠近出現訊息</a>
<hr>
<div class="container mt-3">
    <h3>Popover Example</h3>

    <button type="button" class="btn btn-primary" data-bs-toggle="popover" title="Popover Header" data-bs-content="Some content inside the popover">
        Toggle popover
    </button><!--依據title和 data-bs-content產生訊息 -->
</div>

<script>
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })
</script><br>
<a href="https://www.w3schools.com/bootstrap5/tryit.asp?filename=trybs_tooltip&stacked=h" target="_blank">按下產生小訊息</a>
<hr>


</body>
</html>
