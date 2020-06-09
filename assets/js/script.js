$(window).on("load", function () {
  setTimeout(function () {
    var preloader = document.getElementById("page-preloader");
    if (!preloader.classList.contains("done")) {
      preloader.classList.add("done");
    }
  }, 300);
  $(".form").submit(function () {
    var form = $(this);
    var field = [];
    form.find("input[data-validate]").each(function () {
      field.push("input[data-validate]");
      var value = $(this).val(),
        line = $(this).closest(".form-group");
      for (var i = 0; i < field.length; i++) {
        if (!value) {
          line.addClass("some-form__line-required");
          setTimeout(
            function () {
              line.removeClass("some-form__line-required");
            }.bind(this),
            2000
          );
          event.preventDefault();
        }
      }
    });
  });
});
