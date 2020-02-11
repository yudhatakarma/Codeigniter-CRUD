/**
 * Sweet Alert
 */

$(function (){
    const flashdata = $('#flash-data').data('flashdata');
    if(flashdata){
        Swal.fire({
            title: 'Berhasil',
            text: 'Data Berhasil ' + flashdata,
            type: 'success'
        });
    }
});

// Confirm Delete
$('.btn-del').on('click', function(e){
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Hapus ?',
        text: 'Apakah anda yakin akan menghapus data ini ?',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus!'
        }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })
});


/**
 * datatable for bootstrap 3
 */
$(function () {
    $('#datatable').DataTable()
    $('#datatable2').DataTable({
    'paging'      : true,
    'lengthChange': false,
    'searching'   : false,
    'ordering'    : true,
    'info'        : true,
    'autoWidth'   : false
    })
})


// Date Picker
$(function (){
    $('#tanggal').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd'
      })
});