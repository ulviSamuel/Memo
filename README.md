# Memo

![PHP](https://img.shields.io/badge/PHP-Web%20Application-777BB4)
![Frontend](https://img.shields.io/badge/Frontend-HTML%20%2F%20CSS-blue)
![Stato](https://img.shields.io/badge/Stato-Progetto%20scolastico-orange)
![Categoria](https://img.shields.io/badge/Categoria-Organizzazione%20Memo-green)

**Memo** è un progetto scolastico sviluppato come applicazione web in **PHP**, **HTML** e **CSS**, pensato per gestire promemoria e note in modo semplice e immediato.

Il progetto è stato realizzato con finalità didattiche per esercitarsi su sviluppo web lato server, gestione di form e organizzazione dell’interfaccia utente.

---

## Indice

- [Descrizione](#descrizione)
- [Funzionalità](#funzionalità)
- [Tecnologie utilizzate](#tecnologie-utilizzate)
- [Struttura del progetto](#struttura-del-progetto)
- [Architettura logica](#architettura-logica)
- [Esecuzione del progetto](#esecuzione-del-progetto)
- [Obiettivi didattici](#obiettivi-didattici)
- [Possibili miglioramenti futuri](#possibili-miglioramenti-futuri)
- [Autore](#autore)
- [Licenza](#licenza)

---

## Descrizione

L’obiettivo del progetto è offrire un sistema web per la gestione di memo/promemoria.

L’applicazione consente di inserire, visualizzare e organizzare note attraverso un’interfaccia semplice, con logica backend in PHP e presentazione frontend in HTML/CSS.

---

## Funzionalità

Il progetto include funzionalità tipiche di una web app didattica per memo:

- inserimento di nuovi promemoria;
- visualizzazione elenco memo;
- gestione dei contenuti tramite form;
- interfaccia ordinata e leggibile;
- separazione tra logica server e presentazione.

> In base all’implementazione presente nel repository, possono essere disponibili anche funzioni aggiuntive (modifica, eliminazione, filtri, ecc.).

---

## Tecnologie utilizzate

- **PHP** (`49.3%`)
- **CSS** (`36.4%`)
- **HTML** (`14.3%`)

---

## Struttura del progetto

La struttura reale può variare in base all’organizzazione delle cartelle. In generale:

```text
Memo/
│
├── index.php
├── ... file PHP (logica applicativa)
├── ... file HTML (struttura pagine)
├── ... file CSS (stile interfaccia)
│
└── README.md
```

> Se vuoi, posso anche prepararti la struttura precisa file-per-file in stile documentazione tecnica.

---

## Architettura logica

Il progetto segue una separazione tipica delle applicazioni web semplici:

- **livello presentazione**: pagine HTML e stile CSS;
- **livello logico**: script PHP per gestione richieste e dati;
- **livello input utente**: form per inserimento e interazione con i memo.

Questa struttura rende il progetto più chiaro e facilmente estendibile.

---

## Esecuzione del progetto

Per eseguire il progetto in locale puoi usare:

- **XAMPP**
- **MAMP**
- **WAMP**
- server PHP integrato da terminale

### Avvio rapido (server PHP integrato)

Dalla cartella del progetto:

```bash
php -S localhost:8000
```

Poi apri nel browser:

```text
http://localhost:8000
```

> Se il progetto richiede una cartella specifica (es. `public/`), avvia il server da quella directory.

---

## Obiettivi didattici

Questo repository contiene un **progetto scolastico** sviluppato per esercitarsi su:

- sviluppo web con PHP;
- gestione di form e richieste HTTP;
- separazione tra contenuto e stile (HTML/CSS);
- organizzazione di un piccolo progetto full-stack base;
- documentazione professionale su GitHub.

---

## Possibili miglioramenti futuri

- aggiunta autenticazione utente;
- modifica/eliminazione memo;
- filtri per categoria o data;
- persistenza su database (MySQL);
- miglioramento UI responsive;
- validazione avanzata lato server e lato client.

---

## Autore

Progetto realizzato da **[ulviSamuel](https://github.com/ulviSamuel)**.

---

## Licenza

Questo progetto è stato sviluppato per scopi scolastici e didattici.
