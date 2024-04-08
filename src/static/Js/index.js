var dropArea = document.getElementById('dropArea');

// Prevenir comportamiento predeterminado
dropArea.addEventListener('dragover', function(e) {
    e.preventDefault();
    dropArea.classList.add('dragover');
});

dropArea.addEventListener('dragleave', function() {
    dropArea.classList.remove('dragover');
});

dropArea.addEventListener('drop', function(e) {
    e.preventDefault();
    dropArea.classList.remove('dragover');
    
    var files = e.dataTransfer.files;
    // Realizar acciones con los archivos soltados...
    
    // Mensaje en consola indicando que el archivo se cargó con éxito
    console.log('Archivo cargado con éxito:', files[0].name);
});
