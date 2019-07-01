function getdetails() {

    var firstOperand = $("#firstOperand");
    var firstOperandVal = firstOperand.val();
    var validate = true;
    if (firstOperandVal === ""){
        firstOperand.addClass('error');
        firstOperand.next( ".invalid-feedback" ).css( "display", "inline-block" );
        validate = false;
    }
    var secondOperand = $("#secondOperand");
    var secondOperandVal = secondOperand.val();

    var operator = $("#operator").val();

    if (secondOperandVal === ""){
        secondOperand.addClass('error');
        secondOperand.next( ".invalid-feedback" ).css( "display", "inline-block" );
        validate = false;
    }
    if(validate === true){
        firstOperand.removeClass('error');
        firstOperand.next( ".invalid-feedback" ).css( "display", "none" );
        secondOperand.removeClass('error');
        secondOperand.next( ".invalid-feedback" ).css( "display", "none" );
        $.ajax({
            type: "POST",
            url: "requestHandler.php",
            data: {
                calculatorData: {
                    firstOperand: firstOperandVal,
                    operator: operator,
                    secondOperand: secondOperandVal
                }
            },
            success: function (result) {
                $("#result").val(result);
            },
            error: function (error) {
                alert(error.responseText);
            }
        });
    }
}
$('#tooltip').tooltip();
