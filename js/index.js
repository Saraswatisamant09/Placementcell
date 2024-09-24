(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').css('top', '0px');
        } else {
            $('.sticky-top').css('top', '-100px');
        }
    });
    
    
    // Function to show a placement-related notification
    function showPlacementNotification(message) {
        // Create placement-related notification element
        const placementNotification = document.createElement('div');
        placementNotification.classList.add('placement-notification');
        placementNotification.innerHTML = `
            <span class="close-btn" onclick="closePlacementNotification(this)">&times;</span>
            ${message}
        `;

        // Append placement-related notification to the container
        document.getElementById('placement-notification-container').appendChild(placementNotification);

        // Display placement-related notification
        placementNotification.style.display = 'block';

        // Automatically hide the placement-related notification after 5000 milliseconds (5 seconds)
        setTimeout(() => {
            placementNotification.style.display = 'none';
            // Remove the placement-related notification element from the DOM after hiding
            placementNotification.remove();
        }, 5000);
    }

    // Function to close a placement-related notification
    function closePlacementNotification(element) {
        const placementNotification = element.parentElement;
        placementNotification.style.display = 'none';
        // Remove the placement-related notification element from the DOM after hiding
        placementNotification.remove();
    }

    // Example usage:
    showPlacementNotification('New placement opportunity available!');
     showPlacementNotification('Placement results are out!');




    // Dropdown on mouse hover
    const $dropdown = $(".dropdown");
    const $dropdownToggle = $(".dropdown-toggle");
    const $dropdownMenu = $(".dropdown-menu");
    const showClass = "show";
    
    $(window).on("load resize", function() {
        if (this.matchMedia("(min-width: 992px)").matches) {
            $dropdown.hover(
            function() {
                const $this = $(this);
                $this.addClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "true");
                $this.find($dropdownMenu).addClass(showClass);
            },
            function() {
                const $this = $(this);
                $this.removeClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "false");
                $this.find($dropdownMenu).removeClass(showClass);
            }
            );
        } else {
            $dropdown.off("mouseenter mouseleave");
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Header carousel
    $(".header-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        items: 1,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ]
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: true,
        margin: 24,
        dots: true,
        loop: true,
        nav : false,
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });
    
})(jQuery);

