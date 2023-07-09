$('#walltetList li a').click(function (e) {
    wallet = $(this).attr('wallet');
    if (wallet == 'privatekey') {
        $('#walletPrivateKey').show()
    } else {
        $('#walletPrivateKey').hide()
    }
    $('#selectedWallet').html($(this).html());
    $('#mainWalletList').prop("checked", false);
});
