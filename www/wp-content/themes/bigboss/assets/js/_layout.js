(function () {
  var self = window.controllerLayout || {};
  window.controllerLayout = self;

  //values
  let viewportHeight = ''
  /*
   *  Events
   */

  const onDocumentReady = () => {
    initAnchors()
    initBtnScrollToTop()

    $(window).scroll(() => {
      onWindowScroll()
    })
  }

  const onWindowScroll = () => {
    if ($(window).scrollTop() > viewportHeight) {
      $('#top_btn').css('opacity', '1');
    } else {
      $('#top_btn').css('opacity', '0');
    }
  }
  /*
   *  Methods
   */

  const initAnchors = () => {
    $(".anchor").on("click", function (event) {
      event.preventDefault();
      var name = $(this).attr('item'),
        top = $('[name=' + name + ']').offset().top;

      top = +top - 30;
      $('body,html').animate({
        scrollTop: top
      }, 1500);
    });
  }

  const initBtnScrollToTop = () => {
    viewportHeight = $(window).height()

    const $btnScrollToTop = $('#top_btn');

    $btnScrollToTop.on('click', () => {
      $('html, body').animate({
        scrollTop: (0, 0)
      }, 1500);
    })
  }

  $(document).ready(onDocumentReady());
})();