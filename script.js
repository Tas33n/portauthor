$(document).ready(() => {

    $('#locationId').click((e) => {
        e.preventDefault()
        $('#mainForm').submit()
    })

    $('#mainForm').submit((e) => {
        e.preventDefault();
        console.log('submit');
        id = $('#locationInp').val();
        var url = "do_req.php?id="+id;
        $.ajax({
            url: url,
        }).done((resp)=>{
            $('#iframe').html(resp)
            $('#iframe').removeClass('visually-hidden')
        })

        // $('#iframe').html(`
        // <iframe src="${url}">

        // </iframe>
        // `)


    })

    send_html = (html) => {
        $('#iframe').html(html)
        $('#iframe').removeClass('#visually-hidden')
    }

})