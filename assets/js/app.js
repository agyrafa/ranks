
// $(document).on("ready", function() {
    // Foundation
    $(document).foundation();
    console.log('here');

    // edit email
    $('.emailSpan').on('click', function(e){
        e.preventDefault();

        // get edit line
        var $parents = $(e.target).parent().parent();
        
        // editing email input
        var inputEmail = $('<input />', {
            'type': 'text',
            'class': 'emailInput',
            'name': 'email',
            'value': $parents.find('.emailSpan').html()
        });

        $parents.find('.email').append(inputEmail);
        $parents.find('.emailSpan').remove();

        $(e.target).parent().addClass('hide');
        $parents.siblings('.card-footer').find('.submitBtn').removeClass('hide');

        // focus on input name
        inputEmail.focus();
        $('.edit').prop('disabled', true);
    });

    // edit rank
    $('.card-rank').on('click', function(e){
        e.preventDefault();

        // get edit line
        var $parents = $(e.target).parent().parent();
        
        // editing email input
        $parents.find('img').addClass('hide');
        $parents.find('.rankSelect').removeClass('hide');

        // $parents.find('.email').append(inputEmail);
        // $parents.find('.emailSpan').remove();

        // $(e.target).parent().addClass('hide');
        $parents.siblings('.card-footer').find('.submitBtn').removeClass('hide');

        // focus on input name
        // inputEmail.focus();
        $('.edit').prop('disabled', true);
    });
    
    $('.submitBtn').on('click', function (e) {
        e.preventDefault();

        var $parents = $(e.target).parent().parent().parent();

        if ($parents.parent().find('.rankSpan').parent().hasClass('hide')) {
            $rank = $parents.parent().find('.card-rank').data('rank');
        } else {
            $rank = $parents.parent().find('.rankSpan').val();
        }

        var $dataUser = {
            rank: $rank,
            name: $parents.find('.nameSpan').text(),
            email: $parents.find('.emailInput').val() || $parents.find('.emailSpan').text(),
            userid: $parents.find('.id').text()
        }

        // get edit line
        $.ajax({
            type: 'post',
            url: 'edit.php',
            data: $dataUser,
            success: function (response) {
                // location.reload();
            },
            complete: function (r) {
                location.reload();
            }
        });
    });
// });