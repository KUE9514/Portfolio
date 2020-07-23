const updateButton = () => {
  if ($(window).scrollTop() >= 300) {
    $('.back-to-top').fadeIn();
  } else {
    $('.back-to-top').fadeOut();
  }
};

$(window).on('scroll', updateButton);

$('.back-to-top').on('click', (e) => {
  e.preventDefault();
  $('html, body').animate({ scrollTop: 0 }, 600);
});

updateButton();

$('.nav-link').on('click', (e) => {
  const destination = $(e.target).attr('href');
  e.preventDefault();
  $('html, body').animate(
    {
      scrollTop: $(destination).offset().top,
    },
    600,
  );

  $('.navbar-toggler:visible').trigger('click');
});


$('.animated').waypoint({
  handler(direction) {
    if (direction === 'down') {
      $(this.element).removeClass('fadeOut');
      $(this.element).addClass('fadeIn');
    }
    if (direction === 'up') {
      $(this.element).removeClass('fadeIn');
      $(this.element).addClass('fadeOut');
    }
  },
  offset: '60%',
});
