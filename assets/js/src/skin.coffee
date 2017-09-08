$ ->
  hours = (new Date()).getHours()
  if hours < 6 || hours >= 22
    $("#css_skin").attr('href', 'assets/css/nightly.min.css')