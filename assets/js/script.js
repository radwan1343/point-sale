

function submitionForm () {
    // var id = $('input[name=id]').val();
    var name = $('input[name=name]').val();
    var price = $('input[name=price]').val();
    var quantity = $('input[name=quantity]').val();
    if(name != '' && price!= '' && quantity != '')
    {
        var formData = {name: name, price: price, quantity: quantity};
        $('#message').html('<span style="color: red">Processing form. . . please wait. . .</span>');
        $.ajax({url: "http://localhost/point%20of%20sale%20Ass/submit.php", type: 'POST', data: formData, success: function(response)
        {
            var res = JSON.parse(response);
            console.log(res);
            if(res.success == true)
                $('#message').html('<span style="color: green">Form submitted successfully</span>');
            else
                $('#message').html('<span style="color: red">Form not submitted. Some error in running the database query.</span>');
        }
        });
    }
    else
    {
        $('#message').html('<span style="color: red">Please fill all the fields</span>');
    }

}