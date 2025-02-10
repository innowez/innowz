

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>

    <!-- tel with country code -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput-jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.full.min.js"></script>
    <script src="assets/js/form-select2_new.js"></script>

    <script src="https://kit.fontawesome.com/99358fb784.js"></script>

    <script src="assets/js/jquery.star-rating-svg.js"></script>

    <!--Fancy Box-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

    <script src="assets/js/counter/jquery.waypoints.min.js"></script>
    <script src="assets/js/counter/jquery.countup.js"></script>

    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/custom.js"></script>

    <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>

    <script>


        // tel with country code
        $(".theme-tel").intlTelInput({
            initialCountry: "ae",
            separateDialCode: true,
            // utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.4/js/utils.js"
        });


        $(document).ready(function(){
            $(".filter-button").click(function(){
                var value = $(this).attr('data-filter');
                console.log('yes');
                if(value == "all")
                {
                    //$('.filter').removeClass('hidden');
                    $('.filter').show('1000');
                }
                else
                {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                    $(".filter").not('.'+value).hide('3000');
                    $('.filter').filter('.'+value).show('3000');

                }
                if ($(".filter-button").removeClass("active")) {
                    $(this).removeClass("active");
                }
                $(this).addClass("active");
            });
        });


        $('.counter').countUp(
            {
                delay: 5,
                time: 1500
            }
        );

        $(document).ready(function() {
            $('[data-fancybox]').fancybox({
                buttons : [
                    "zoom",
                    // "share",
                    "slideShow",
                    "fullScreen",
                    // "download",
                    "thumbs",
                    "close"
                ],
                thumbs : {
                    autoStart   : true,
                },
                fullScreen : {
                    requestOnStart : true
                }
            });
        });


        $('document').ready(function(){

            var $file = $('#file-input'),
                $label = $file.next('label'),
                $labelText = $label.find('span'),
                $labelRemove = $('i.remove'),
                labelDefault = $labelText.text();

            // on file change
            $file.on('change', function(event){
                var fileName = $file.val().split( '\\' ).pop();
                if( fileName ){
                    console.log($file)
                    $labelText.text(fileName);
                    $labelRemove.show();
                }else{
                    $labelText.text(labelDefault);
                    $labelRemove.hide();
                }
            });
        })

    </script>

    <script>

        //QUANTITY COUNTER
        jQuery('.quantity-counter').each(function() {
            var spinner = jQuery(this),
                input = spinner.find('input[type="number"]'),
                btnUp = spinner.find('.btn-quantity-up'),
                btnDown = spinner.find('.btn-quantity-down'),
                min = input.attr('min'),
                max = input.attr('max');

            btnUp.click(function() {
                var oldValue = parseFloat(input.val());
                if (oldValue >= max) {
                    var newVal = oldValue;
                } else {
                    var newVal = oldValue + 1;
                }
                spinner.find("input").val(newVal);
                spinner.find("input").trigger("change");
            });

            btnDown.click(function() {
                var oldValue = parseFloat(input.val());
                if (oldValue <= min) {
                    var newVal = oldValue;
                } else {
                    var newVal = oldValue - 1;
                }
                spinner.find("input").val(newVal);
                spinner.find("input").trigger("change");
            });

        });

    </script>


    <script>
        // function showDiv(selectedValue) {
        //     document.getElementById('bulkDiv').style.display = 'none';
        //     document.getElementById('singleDiv').style.display = 'none';
        //
        //     if (selectedValue === 'bulk') {
        //         document.getElementById('bulkDiv').style.display = 'block';
        //     } else if (selectedValue === 'single') {
        //         document.getElementById('singleDiv').style.display = 'block';
        //     }
        // }

        function showDiv(selectedId) {
            const sectionNum = selectedId.split('_')[1]; // Extract the section number from the selected ID

            // Hide both divs first
            document.getElementById(`bulkDiv_${sectionNum}`).style.display = 'none';
            document.getElementById(`singleDiv_${sectionNum}`).style.display = 'none';

            // Show the selected div based on the radio button clicked
            if (selectedId.startsWith('bulk')) {
                document.getElementById(`bulkDiv_${sectionNum}`).style.display = 'block';
            } else if (selectedId.startsWith('single')) {
                document.getElementById(`singleDiv_${sectionNum}`).style.display = 'block';
            }
        }

    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
        })
    </script>

    <script>
        $(document).on('click', '.has-megamenu', function () {
            $('.dropdown-toggle.companyMenu ').removeClass('show');
            $('.dropdown-menu.dropdown-menu2 ').removeClass('show');
        });
    </script>

    <!--  Image Upload Both Pdf And Png,Jpeg  -->
    <script>
        document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
            const dropZoneElement = inputElement.closest(".drop-zone");

            dropZoneElement.addEventListener("click", (e) => {
                inputElement.click();
            });

            inputElement.addEventListener("change", (e) => {
                if (inputElement.files.length) {
                    updateThumbnail(dropZoneElement, inputElement.files[0]);
                }
            });

            dropZoneElement.addEventListener("dragover", (e) => {
                e.preventDefault();
                dropZoneElement.classList.add("drop-zone--over");
            });

            ["dragleave", "dragend"].forEach((type) => {
                dropZoneElement.addEventListener(type, (e) => {
                    dropZoneElement.classList.remove("drop-zone--over");
                });
            });

            dropZoneElement.addEventListener("drop", (e) => {
                e.preventDefault();

                if (e.dataTransfer.files.length) {
                    inputElement.files = e.dataTransfer.files;
                    updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
                }

                dropZoneElement.classList.remove("drop-zone--over");
            });
        });

        function updateThumbnail(dropZoneElement, file) {
            let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");

            if (dropZoneElement.querySelector(".drop-zone__prompt")) {
                dropZoneElement.querySelector(".drop-zone__prompt").remove();
            }

            if (!thumbnailElement) {
                thumbnailElement = document.createElement("div");
                thumbnailElement.classList.add("drop-zone__thumb");
                dropZoneElement.appendChild(thumbnailElement);
            }

            thumbnailElement.dataset.label = file.name;

            if (file.type.startsWith("image/")) {
                const reader = new FileReader();

                reader.readAsDataURL(file);
                reader.onload = () => {
                    thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
                };
            } else {
                thumbnailElement.style.backgroundImage = null;
            }

            // Add a remove button
            let removeButton = dropZoneElement.querySelector(".drop-zone__remove");
            if (!removeButton) {
                removeButton = document.createElement("button");
                removeButton.classList.add("drop-zone__remove");
                removeButton.textContent = "Remove";
                dropZoneElement.appendChild(removeButton);

                removeButton.addEventListener("click", (e) => {
                    e.preventDefault(); // Prevent page refresh

                    // Clear the input and reset the drop zone
                    inputElement.value = "";
                    thumbnailElement.remove();
                    removeButton.remove();

                    // Restore the prompt text
                    const promptElement = document.createElement("div");
                    promptElement.classList.add("drop-zone__prompt");
                    promptElement.textContent = "Drag & drop a file or click to upload";
                    dropZoneElement.appendChild(promptElement);
                });
            }
        }
    </script>

    </body>
</html>