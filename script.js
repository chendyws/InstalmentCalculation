function validateForm() {
    
            if (document.forms["formIndex"]["nominal"].value == "") {
                alert("Nominal Pinjaman Tidak Boleh Kosong");
                document.forms["formIndex"]["nominal"].focus();
                return false;
            }
            if (document.forms["formIndex"]["waktu"].value == "") {
                alert("Lama Pinjaman Tidak Boleh Kosong");
                document.forms["formIndex"]["waktu"].focus();
                return false;
            }
        }