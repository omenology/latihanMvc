$(function() {

	$(".tombolTambah").on("click",function(){
		$("#formModalLabel").html("Tambah Data Mahasiswa");
		$(".modal-footer button").html("Tambah")
		$(".modal-body form").attr("action","http://localhost/phpmvc/public/mahasiswa/tambah");
	})

	$(".tampilModalUbah").on("click",function(){
		$("#formModalLabel").html("Ubah Data Mahasiswa");
		$(".modal-footer button").html("Update");
		$(".modal-body form").attr("action","http://localhost/phpmvc/public/mahasiswa/update");

		const id = $(this).data('id');

		$.ajax({
			url: 'http://localhost/phpmvc/public/mahasiswa/getUbah',
			data: {id : id},
			method: 'post',
			dataType : 'json',
			success: function(data){
				$("#npm").val(data.npm);
				$("#nama").val(data.nama);
				$("#email").val(data.email);
				$("#jurusan").val(data.jurusan);
			}
		});
	})

});