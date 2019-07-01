function getdetails() {

    // variable for validate form
    var validate = true;

    // get field Operand 1
    var firstOperand = $("#firstOperand");
    var firstOperandVal = firstOperand.val();
    if (firstOperandVal === "") {
        firstOperand.addClass('error');
        firstOperand.next(".invalid-feedback").css("display", "inline-block");
        validate = false;
    }

    // get field Operand 2
    var secondOperand = $("#secondOperand");
    var secondOperandVal = secondOperand.val();
    if (secondOperandVal === "") {
        secondOperand.addClass('error');
        secondOperand.next(".invalid-feedback").css("display", "inline-block");
        validate = false;
    }

    // get field Operator
    var operator = $("#operator");
    var operatorVal = operator.val();

    if (validate === true) {

        firstOperand.removeClass('error');
        firstOperand.next(".invalid-feedback").css("display", "none");
        secondOperand.removeClass('error');
        secondOperand.next(".invalid-feedback").css("display", "none");

        // send request to backend
        $.ajax({
            type: "POST",
            url: "requestHandler.php",
            data: {
                calculatorData: {
                    firstOperand: firstOperandVal,
                    operator: operatorVal,
                    secondOperand: secondOperandVal
                }
            },
            success: function (result) {
                $("#result").val(result);
            },
            error: function (error) {

                // get error messages
                var responseText = $.parseJSON(error.responseText);

                $.each(responseText, function (index, value) {

                    // show error messages
                    if (value.firstOperand) {
                        firstOperand.addClass('error');
                        firstOperand.next(".invalid-feedback").css("display", "inline-block");
                    }

                    // show error messages
                    if (value.secondOperand) {
                        secondOperand.addClass('error');
                        secondOperand.next(".invalid-feedback").css("display", "inline-block");
                    }

                    // show error messages
                    if (value.calculatorData) {
                        alert(value.calculatorData);
                    }

                });

            }
        });
    }
}

// tooltip initialization
$('#tooltip').tooltip();
