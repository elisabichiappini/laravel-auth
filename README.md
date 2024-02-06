# Laravel Boolfolio - Base 

Eseguire la struttura base di partenza di progetto Laravel per la gestione del sistema portolio di progetti partendo da un template già definito di cui passaggi: 

```
composer create-project laravel/laravel nomeprogetto
```

### Installazione breeze
```
composer require laravel/breeze --dev
```

### Scaffold dell'autenticazione breeze/blade
```
php artisan breeze:install
```

- Which Breeze stack would you like to install? Blade with Alpine
- Would you like dark mode support? Yes
- Which testing framework do you prefer? PHPUnit


### Eseguire i passaggi per installare bootstrap invece di tailwind
```
npm remove postcss
npm remove tailwindcss
npm i --save-dev sass
npm i --save bootstrap @popperjs/core
```
Cancellare il file tailwind.config.js e postcss.config.js
```
rm tailwind.config.js
rm postcss.config.js
```

Rinominiamo la cartella css in scss 
```
mv resources/css resources/scss
```
ed il file app.css in app.scss
```
mv resources/scss/app.css  resources/scss/app.scss
```

### Nel file app.scss
Cancelliamo gli import di tailwind dal file app.scss e inseriamo:
```
@import "~bootstrap/scss/bootstrap";
```

### Nel file vite.config.js:

- modifichiamo il percorso del css
- aggiungiamo un alias per resources e per il bootstrap

```
import path from 'path';

resolve: {
        alias: {
            '~resources': '/resources/',
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap')
        }
    },
```

### Nel file app.js 

- togliere il codice che imposta alpine, lasciando solo la prima riga
- importare app.css, bootstrap e img
```
import '~resources/scss/app.scss'
import * as bootstrap from 'bootstrap'
import.meta.glob([
    '../img/**'
])
```

### Inserire le views con bootstrap
Cancellare tutti i file di default dalla cartella views e inserire i file presenti in questa repo

### Partenza
1. installare le dipendenze di npm e composer
2. inserire dati nel file .env
3. far partire le migrations
4. avviare il server (php e node)


# Descrizione consegna
Ripercorriamo gli steps fatti a lezione ed iniziamo un nuovo progetto Laravel con autenticazione.
Iniziamo con il definire il layout, modello, migrazione, controller e rotte necessarie per il sistema portfolio:
1. Autenticazione: si parte con l'autenticazione e la creazione di un layout per back-office
2. Creazione del modello Project con relativa migrazione, seeder, controller e rotte
3. Per la parte di back-office creiamo un resource controller Admin\ProjectController per gestire tutte le operazioni CRUD dei progetti

✨ 6_febbraio_2024