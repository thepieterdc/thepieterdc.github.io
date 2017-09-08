$ ->
  $.getJSON 'http://quotes.stormconsultancy.co.uk/random.json', '', (r) ->
    $("#outbound-quote-text").html r.quote
    $("#outbound-quote-author").html r.author

  $(".contact-link").each ->
    $(@).attr 'data-href', $(@).attr 'href'
    $(@).attr 'href', '#'

  $(".contact-link").click ->
    destination = $(@).attr 'data-href'
    icons = $(@).parents("tr").find("th").find("i").attr("class").split ' '
    icon = icons.filter((i) -> i != "fa" && i != "fa-2x")[0]

    $("#outbound-icon").html '<i class="fa ' + icon + '"></i>'
    if $("#outbound-quote-text").html() != ''
      $("#outbound-quote").addClass('col-6').show()
      $("#outbound-icon").addClass 'col-md-2'
      $("#outbound-message").addClass 'col-md-4'
    else
      $("#outbound-icon").addClass 'col-md-7'
      $("#outbound-message").addClass 'col-md-5'

    $("#main-page").fadeOut 500
    $("#main-page").promise().done ->
      $("#outbound-page").fadeIn 1500
      window.setInterval ->
        timeLeft = parseInt $("#outbound-timer").html()
        if timeLeft <= 0
          window.location = destination
        else
          $("#outbound-timer").html timeLeft - 1
      , 1000