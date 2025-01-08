$(function () {
    console.log("Ready!");

    $("select.input").click(function () {
        if ($(this).val() !== "") {
            $(this).addClass("active");
        } else {
            $(this).removeClass("active");
        }
    });

    $("#phone").on("keypress", function (event) {
        const keyCode = event.which || event.keyCode;
        if ([8, 9, 27, 13, 37, 38, 39, 40].indexOf(keyCode) !== -1) {
            return true;
        }
        if (keyCode >= 48 && keyCode <= 57) {
            return true;
        }
        event.preventDefault();
    });
});
