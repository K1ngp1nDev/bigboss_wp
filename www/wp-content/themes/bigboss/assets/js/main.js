// require("./_layout");
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

(function () {

  var self = window.mainController || {};
  window.mainController = self;

  const price = {
    dryClearning: {
      hatchback: {
        leather: 900,
        fabricDark: 1000,
        fabricWhite: 1100
      },
      sedan: {
        leather: 1300,
        fabricDark: 1400,
        fabricWhite: 1500
      },
      wagon: {
        leather: 1300,
        fabricDark: 1400,
        fabricWhite: 1500
      },
      liftback: {
        leather: 1300,
        fabricDark: 1400,
        fabricWhite: 1500
      },
      coupe: {
        leather: 1300,
        fabricDark: 1400,
        fabricWhite: 1500
      },
      cabriolet: {
        leather: 1300,
        fabricDark: 1400,
        fabricWhite: 1500
      },
      roadster: {
        leather: 1300,
        fabricDark: 1400,
        fabricWhite: 1500
      },
      targa: {
        leather: 1300,
        fabricDark: 1400,
        fabricWhite: 1500
      },
      limousine: {
        leather: 1500,
        fabricDark: 1600,
        fabricWhite: 1700
      },
      stretch: {
        leather: 1500,
        fabricDark: 1600,
        fabricWhite: 1700
      },
      suv: {
        leather: 1500,
        fabricDark: 1600,
        fabricWhite: 1700
      },
      crossover: {
        leather: 1500,
        fabricDark: 1600,
        fabricWhite: 1700
      },
      pickup: {
        leather: 1500,
        fabricDark: 1600,
        fabricWhite: 1700
      },
      van: {
        leather: 1800,
        fabricDark: 1900,
        fabricWhite: 2100
      },
      minivan: {
        leather: 1800,
        fabricDark: 1900,
        fabricWhite: 2100
      },
      minibus: {
        leather: 1800,
        fabricDark: 1900,
        fabricWhite: 2100
      },
      bus: {
        leather: 1800,
        fabricDark: 1900,
        fabricWhite: 2100
      }
    },
    season: {
      hatchback: {
        hardWax: 550,
        teflon: 900,
        liquidGlass: 1800,
        nanoCeramics: 2800
      },
      sedan: {
        hardWax: 600,
        teflon: 1000,
        liquidGlass: 2000,
        nanoCeramics: 3100
      },
      wagon: {
        hardWax: 600,
        teflon: 1000,
        liquidGlass: 2000,
        nanoCeramics: 3100
      },
      liftback: {
        hardWax: 600,
        teflon: 1000,
        liquidGlass: 2000,
        nanoCeramics: 3100
      },
      coupe: {
        hardWax: 600,
        teflon: 1000,
        liquidGlass: 2000,
        nanoCeramics: 3100
      },
      cabriolet: {
        hardWax: 600,
        teflon: 1000,
        liquidGlass: 2000,
        nanoCeramics: 3100
      },
      roadster: {
        hardWax: 600,
        teflon: 1000,
        liquidGlass: 2000,
        nanoCeramics: 3100
      },
      targa: {
        hardWax: 600,
        teflon: 1000,
        liquidGlass: 2000,
        nanoCeramics: 3100
      },
      limousine: {
        hardWax: 600,
        teflon: 1000,
        liquidGlass: 2000,
        nanoCeramics: 3100
      },
      stretch: {
        hardWax: 600,
        teflon: 1000,
        liquidGlass: 2000,
        nanoCeramics: 3100
      },
      suv: {
        hardWax: 700,
        teflon: 1100,
        liquidGlass: 2200,
        nanoCeramics: 3300
      },
      crossover: {
        hardWax: 700,
        teflon: 1100,
        liquidGlass: 2200,
        nanoCeramics: 3300
      },
      pickup: {
        hardWax: 700,
        teflon: 1100,
        liquidGlass: 2200,
        nanoCeramics: 3300
      },
      van: {
        hardWax: 800,
        teflon: 1300,
        liquidGlass: 2400,
        nanoCeramics: 3500
      },
      minivan: {
        hardWax: 800,
        teflon: 1300,
        liquidGlass: 2400,
        nanoCeramics: 3500
      },
      minibus: {
        hardWax: 800,
        teflon: 1300,
        liquidGlass: 2400,
        nanoCeramics: 3500
      },
      bus: {
        hardWax: 800,
        teflon: 1300,
        liquidGlass: 2400,
        nanoCeramics: 3500
      }
    },
    polishing: {
      hatchback: {
        light: 900,
        deep: 1000,
        protect: 1100
      },
      sedan: {
        light: 1300,
        deep: 1400,
        protect: 1500
      },
      wagon: {
        light: 1300,
        deep: 1400,
        protect: 1500
      },
      liftback: {
        light: 1300,
        deep: 1400,
        protect: 1500
      },
      coupe: {
        light: 1300,
        deep: 1400,
        protect: 1500
      },
      cabriolet: {
        light: 1300,
        deep: 1400,
        protect: 1500
      },
      roadster: {
        light: 1300,
        deep: 1400,
        protect: 1500
      },
      targa: {
        light: 1300,
        deep: 1400,
        protect: 1500
      },
      limousine: {
        light: 1300,
        deep: 1400,
        protect: 1500
      },
      stretch: {
        light: 1300,
        deep: 1400,
        protect: 1500
      },
      suv: {
        light: 1500,
        deep: 1600,
        protect: 1700
      },
      crossover: {
        light: 1500,
        deep: 1600,
        protect: 1700
      },
      pickup: {
        light: 1500,
        deep: 1600,
        protect: 1700
      },
      van: {
        light: 1800,
        deep: 1900,
        protect: 2100
      },
      minivan: {
        light: 1800,
        deep: 1900,
        protect: 2100
      },
      minibus: {
        light: 1800,
        deep: 1900,
        protect: 2100
      },
      bus: {
        light: 1800,
        deep: 1900,
        protect: 2100
      }
    },
    careInterior: {
      hatchback: {
        conditioning: 100,
        lightCleaning: 150
      },
      sedan: {
        conditioning: 150,
        lightCleaning: 200
      },
      wagon: {
        conditioning: 150,
        lightCleaning: 200
      },
      liftback: {
        conditioning: 150,
        lightCleaning: 200
      },
      coupe: {
        conditioning: 150,
        lightCleaning: 200
      },
      cabriolet: {
        conditioning: 150,
        lightCleaning: 200
      },
      roadster: {
        conditioning: 150,
        lightCleaning: 200
      },
      targa: {
        conditioning: 150,
        lightCleaning: 200
      },
      limousine: {
        conditioning: 150,
        lightCleaning: 200
      },
      stretch: {
        conditioning: 150,
        lightCleaning: 200
      },
      suv: {
        conditioning: 200,
        lightCleaning: 250
      },
      crossover: {
        conditioning: 200,
        lightCleaning: 250
      },
      pickup: {
        conditioning: 200,
        lightCleaning: 250
      },
      van: {
        conditioning: 250,
        lightCleaning: 300
      },
      minivan: {
        conditioning: 250,
        lightCleaning: 300
      },
      minibus: {
        conditioning: 250,
        lightCleaning: 300
      },
      bus: {
        conditioning: 250,
        lightCleaning: 300
      }
    }
  }

  // methods
  function onLoad() {
    initValidationPhoneInput()
    initSliderMainScreen()
    initSliderDryClearning()
    initTestimonialsSlider()
    initGallery()
    initGalleryFilter()
    initPriceFormSelect()

    $('.price-form .select2').on('select2:select', function (e) {
      const $select = $(e.target)
      calculatePrice($select)
    });

    responsive()
  }

  function onWindowResize() {}

  $(window).ready(onLoad);

  $(window).on('resize', function () {
    onWindowResize();

  });

  function initValidationPhoneInput() {
    $("input[name='PHONE']").inputmask("+38(999)999-99-99");
  }

  function initSliderMainScreen() {
    $(".main-screen .owl-carousel").owlCarousel({
      items: 8,
      loop: true,
      autoplay: true,
      autoplayTimeout: 2500,
      smartSpeed: 2500,
      // autoplayHoverPause: true,
      dots: false,
      slideTransition: 'linear',
      responsive: {
        0: {
          items: 3
        },
        768: {
          items: 6
        },
        992: {
          items: 8
        }
      }
    });
  }

  function initTestimonialsSlider() {
    $("#testimonials .owl-carousel").owlCarousel({
      items: 1
    })
  }

  function initSliderDryClearning() {
    $("#dryClearning .owl-carousel").owlCarousel({
      items: 1
    });
  }

  function initGallery() {
    $('#galleryGrid').isotope({
      itemSelector: '.element-item',
      // layoutMode: 'fitRows',
      percentPosition: true,
      masonry: {
        // use outer width of grid-sizer for columnWidth
        columnWidth: '.element-sizer',
        // columnWidth: 50,
        //gutter: 10
      }
    })
  }

  function initGalleryFilter() {
    $('#galleryGridFilters').on('click', '.filter-item', function () {
      const $filterItem = $(this)
      const $allFilterItems = $filterItem.parent().find('.filter-item').get()

      $allFilterItems.forEach(function (item) {
        $(item).removeClass('active')
      })

      $filterItem.addClass('active')

      var filterValue = $filterItem.attr('data-filter');

      $('#galleryGrid').isotope({
        filter: filterValue
      });
    })
  }

  function initPriceFormSelect() {
    $('.price-form .select2').select2()
  }

  function calculatePrice($select) {
    const blockId = $select.attr('data-form')
    const $price = $('#' + blockId).find('.price')
    const $form = $('#' + blockId).find('.price-form')
    const materialType = $form.find('select[name=materialType]').val()
    const autoType = $form.find('select[name=autoType]').val()
    const priceValue = price[blockId][autoType][materialType]

    $price.find('span').text('')
    $price.find('span').text(priceValue + ' грн')
  }

  function createSelect() {
    const $gridFilter = $("#galleryGridFilters")
    const $allGridFilterItems = $gridFilter.find('.filter-item').get()
    const $select = $('<select><select/>')
    const $option = $('<option>')

    $allGridFilterItems.forEach(function (item) {
      const $optionClone = $option.clone()
      $optionClone.attr('value', $(item).attr('data-filter'))
      $optionClone.text($(item).text())
      $select.append($optionClone)
    })

    $gridFilter.append($select)
    $select.select2()

    $select.on('change', function () {
      createGridSlider()
    })
  }

  function createGridSlider() {
    const selectedGridItem = $("#galleryGridFilters select").val()
    const $gridSlider = $("#gridSlider")

    $gridSlider.trigger('destroy.owl.carousel');
    $gridSlider.html('')

    const $galleryGrid = $("#galleryGrid")
    const allGridItems = $galleryGrid.find('.element-item').get()

    allGridItems.forEach(function (item) {
      const $item = $(item)
      if ($item.hasClass(selectedGridItem.substring(1)) || selectedGridItem === '*') {
        const itemImage = $item.find('img').clone()
        $gridSlider.append(itemImage)
      }
    })

    $gridSlider.owlCarousel({
      loop: true,
      items: 1,
      dots: false,
      nav : true,
      navText : 
      ["<div class='nav-btn prev-slide'></div>",
       "<div class='nav-btn next-slide'></div>"],
      autoplay: true
    });
  }

  function responsive() {

    var myWidth = $('body').innerWidth();

    if (myWidth < 768) {
      if (!$('body').hasClass("tablet")) {

        createSelect()
        createGridSlider()

        $("#galleryGrid").isotope('destroy')

        $('body').removeClass("desctop");
        $('body').addClass("tablet");
      }
    } else {
      if (!$('body').hasClass("desctop")) {
        initGallery()

        $('body').removeClass("tablet");
        $('body').addClass("desctop");
      }
    }
  }

  $(".btn").on('click', (event) => {
    const $modal = $("#uni-modal")
    const $form = $modal.find('span.wpcf7-form-control-wrap.service')
    const serviceValue = $(event.currentTarget).attr('value')
    $form.find('input').val('')
    $form.find('input[name=service]').val(serviceValue)
    $modal.modal('show')
  })

  $("input.wpcf7-form-control.wpcf7-submit").on('click', (event) => {
    const $modal = $("#uni-modal")
    const $inpName = $modal.find('.uni-modal-name').val()
    const $inpPhone = $modal.find('.uni-modal-phone').val()
    if ( $inpName && $inpPhone ) setTimeout(() => {$("#uni-modal").modal('hide')}, 500);
  })

})();

