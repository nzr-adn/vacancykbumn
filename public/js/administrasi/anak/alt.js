var datatablealtanak;
var datatablesumaltanak;

$(document).ready(function(){
	$('body').on('click','.cls-add-alt-anak',function(){

		winform(urlcreatealt, {'id_surat_keputusan':$('input[name=id_surat_keputusan]').val(), 'id_perusahaan':$('input[name=id_perusahaan]').val(), 'grup_jabatan_id':$('input[name=grup_jabatan_id]').val()}, 'Tambah Alih Tugas Anak/Cucu');
	});

	$('body').on('click','.cls-button-edit-alt',function(){
		winform(urleditalt, {'id':$(this).data('id'),'id_surat_keputusan':$('input[name=id_surat_keputusan]').val(), 'id_perusahaan':$('input[name=id_perusahaan]').val(), 'grup_jabatan_id':$('input[name=grup_jabatan_id]').val()}, 'Ubah Alih Tugas Anak/Cucu');
	});

	$('body').on('click','.cls-button-delete-alt',function(){
		onbtndeletealt(this);
	});
	
	setDatatablealtAnak();
  setDatatablesumaltAnak();
});

function setDatatablealtAnak(){
  datatablealtanak = $('#datatable-alt-anak').on( 'preXhr.dt', function ( e, settings, processing ) {
            KTApp.block('.cls-content-data', {
                overlayColor: '#000000',
                type: 'v2',
                state: 'primary',
                message: 'Sedang proses, silahkan tunggu ...'
            });
  })
  .on('xhr.dt', function ( e, settings, json, xhr ) {
      KTApp.unblock('.cls-content-data');
  }).DataTable({
      serverSide: true,
      processing: true,
      search: {
          caseInsensitive: true
      },
      searchHighlight: true,
      ajax: {
	        url: urldatatablealt,
	        type: 'GET',
	        data: function (d) {
	            d.id_surat_keputusan = $('input[name=id_surat_keputusan]').val();
	            d.id_perusahaan = $('input[name=id_perusahaan]').val();
	        }
	  },
      columns: [
        { data: null, orderable: false, searchable: false},
        { data: 'pejabat', name: 'pejabat', searchable: true},
        { data: 'jabatan_alih_tugas', name: 'jabatan_alih_tugas', searchable: true},
        { data: 'tanggal_awal', name: 'tanggal_awal', searchable: true},
        { data: 'tanggal_akhir', name: 'tanggal_akhir', searchable: true},
        { data: 'action', orderable: false, searchable: false}
      ],
      drawCallback: function( settings ) {
        var info = datatablealtanak.page.info();
          $('[data-toggle="tooltip"]').tooltip();
          datatablealtanak.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
              cell.innerHTML = info.start + i + 1;
          } );
      }
  });	
}

function setDatatablesumaltAnak(){
  datatablesumaltanak = $('#datatable-sum-alt-anak').on( 'preXhr.dt', function ( e, settings, processing ) {
            KTApp.block('.cls-content-data', {
                overlayColor: '#000000',
                type: 'v2',
                state: 'primary',
                message: 'Sedang proses, silahkan tunggu ...'
            });
  })
  .on('xhr.dt', function ( e, settings, json, xhr ) {
      KTApp.unblock('.cls-content-data');
  }).DataTable({
      serverSide: true,
      processing: true,
      info: false,
      searching: false,
      lengthChange: false,
      ajax: {
          url: urldatatablesumalt,
          type: 'GET',
          data: function (d) {
              d.id_surat_keputusan = $('input[name=id_surat_keputusan]').val();
              d.id_perusahaan = $('input[name=id_perusahaan]').val();
          }
    },
      columns: [
        { data: null, orderable: false, searchable: false},
        { data: 'pejabat', name: 'pejabat', searchable: true},
        { data: 'jabatan_alih_tugas', name: 'jabatan_alih_tugas', searchable: true},
        { data: 'tanggal_awal', name: 'tanggal_awal', searchable: true},
        { data: 'tanggal_akhir', name: 'tanggal_akhir', searchable: true}
      ],
      drawCallback: function( settings ) {
        var info = datatablesumaltanak.page.info();
          $('[data-toggle="tooltip"]').tooltip();
          datatablesumaltanak.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
              cell.innerHTML = info.start + i + 1;
          } );
      }
  }); 
}

function onbtndeletealt(element){
	swal.fire({
        title: "Pemberitahuan",
        text: "Yakin hapus data Alih Tugas Anak/Cucu ?",
        type: "warning",
        showCancelButton: true,
        confirmButtonText: "Ya, hapus data",
        cancelButtonText: "Tidak"
    }).then(function(result) {
        if (result.value) {
            $.ajax({
               url: urldeletealt,
               data:{id:$(element).data('id')},
               type:'post',
               dataType:'json',
               beforeSend: function(){
		            KTApp.block('.cls-content-data', {
		                overlayColor: '#000000',
		                type: 'v2',
		                state: 'primary',
		                message: 'Sedang proses, silahkan tunggu ...'
		            });
               },
               success: function(data){
                   KTApp.unblock('.cls-content-data');

		           swal.fire({
		                title: data.title,
		                html: data.msg,
		                type: data.flag,

		                buttonsStyling: false,

		                confirmButtonText: "<i class='flaticon2-checkmark'></i> OK",
		                confirmButtonClass: "btn btn-default"
		           });

                   if(data.flag == 'success') {
                   	  datatablealt.ajax.reload( null, false );
                      datatablesumalt.ajax.reload( null, false );
                   }
               },
                error: function(jqXHR, exception) {
                  KTApp.unblock('.cls-content-data');
                  var msgerror = '';
                  if (jqXHR.status === 0) {
                      msgerror = 'jaringan tidak terkoneksi.';
                  } else if (jqXHR.status == 404) {
                      msgerror = 'Halaman tidak ditemukan. [404]';
                  } else if (jqXHR.status == 500) {
                      msgerror = 'Internal Server Error [500].';
                  } else if (exception === 'parsererror') {
                      msgerror = 'Requested JSON parse gagal.';
                  } else if (exception === 'timeout') {
                      msgerror = 'RTO.';
                  } else if (exception === 'abort') {
                      msgerror = 'Gagal request ajax.';
                  } else {
                      msgerror = 'Error.\n' + jqXHR.responseText;
                  }
                  swal.fire({
                      title: "Error System",
                      html: msgerror+', coba ulangi kembali !!!',
                      type: 'error',

                      buttonsStyling: false,

                      confirmButtonText: "<i class='flaticon2-checkmark'></i> OK",
                      confirmButtonClass: "btn btn-default"
                  });  
                }
            });
        }
    });	
}