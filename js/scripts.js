$('.filter-btn').on('click', function () {

  let type = $(this).attr('id');
  let boxes = $('.jgtag-box');

  $('.main-btn').removeClass('active');
  $(this).addClass('active');

  if (type == 'serv-btn') {
    eachBoxes('serv', boxes);
  } else if (type == 'fer-btn') {
    eachBoxes('fer', boxes);
  } else if (type == 'orc-btn') {
    eachBoxes('orc', boxes);
  } else {
    eachBoxes('all', boxes);
  }

});

function eachBoxes(type, boxes) {

  if (type == 'all') {
    $(boxes).fadeIn();
  }
  else {
    $(boxes).each(function () {
      if (!$(this).hasClass(type)) {
        $(this).fadeOut('slow');
      } else {
        $(this).fadeIn();
      }
    });
  }
}

$(function () {
  $(window).on("scroll", function () {
    if ($(window).scrollTop > 100) {
      $(".menuprincipal").addClass("menusecundario");
    } else {
      $(".menuprincipal").removeClass("menusecundario")
    }
  })
})

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    document.querySelector(this.getAttribute('href')).scrollIntoView({
      behavior: 'smooth'
    });
  });
});

window.addEventListener('scroll', function () {
  var menuprincipal = document.querySelector('.menuprincipal');
  menuprincipal.classList.toggle('sticky', window.scrollY > 0);
})

$(document).ready(function () {
  $("#flip").click(function () {
    $("#panel").slideToggle("slow");
  });
  $("#flip2").click(function () {
    $("#panel2").slideToggle("slow");
  });
  $("#flip3").click(function () {
    $("#panel3").slideToggle("slow");
  });
});

$(document).ready(function () {
  $("#text_jgtag p").hide(function () {
    $("#logo").hover(function () {

      $("#text_jgtag p").fadeToggle().delay(100);

    });

  });


});

