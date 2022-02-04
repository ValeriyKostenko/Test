
$(document).ready(function() {
  $('.header__seek').click(function(event) {
    $('.header__searcher').toggleClass('show');
  });
});

$(document).ready(function() {
  $('.header__burger').click(function(event) {
    $('.header__burger, .header__mobMenu').toggleClass('active');
  });
});