fetch('http://datos-prueba.cdmx.gob.mx/api/3/action/datastore_search?resource_id=9fed221d-2bf6-4ae6-9f70-4dbd955a64e6')
    .then(response => response.json())
    .then(data => console.log(data));
