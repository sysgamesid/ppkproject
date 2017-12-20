$.ajax({
    url         : "data.php",//lokasi dokumen yang berisi data json
    type        : "GET",
    dataType    : "json",//format dokumen
    data        : {get_param : 'value'},
    success     : function(data){
        //merubah data json dari object menjadi string,
        //dan tampilkan hasilnya melalui textarea
        
    }
});
