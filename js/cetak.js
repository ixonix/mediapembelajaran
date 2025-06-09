function cetakSemua() {
    var printContent = "";
    var pages = document.querySelectorAll("[id^='cetakIni']");
    pages.forEach(function(page) {
      printContent += page.innerHTML;
    });
    var printWindow = window.open('', '', 'height=600,width=800');
    printWindow.document.write('<html><head><title>Cetak Halaman</title></head><body>');
    printWindow.document.write(printContent);
    printWindow.document.write('</body></html>');
    printWindow.document.close();
    printWindow.focus();
    printWindow.print();
  }
  