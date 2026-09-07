# Memo

Memo is a server-rendered PHP web application for signing in and creating, browsing, and reading personal notes stored in a MySQL database.

[![PHP](https://img.shields.io/badge/PHP-server--rendered-777BB4?style=flat&logo=php&logoColor=white)](https://www.php.net/)
![Web Application](https://img.shields.io/badge/Category-Web%20Application-2F80ED?style=flat)
![UI](https://img.shields.io/badge/UI-HTML%20%2B%20CSS%20%2B%20JavaScript-E34F26?style=flat)
![Year | 2023](https://img.shields.io/badge/Year%20%7C%202023-555555?style=flat)

## Overview

Memo uses PHP pages and MySQL queries to provide a small note-taking workflow:

- users sign in with a username and password;
- authenticated users see their non-empty notes ordered by title and text;
- users can open an individual note;
- users can submit a title and text to create a note;
- note creation records the insertion date and supplies fallback text when a submitted note has one blank field.

The application is implemented as a collection of PHP and HTML entry points with shared CSS files. Database access is centralized through `variabili_conn.php`, while session state identifies the current user across the note pages.

## Technology Stack

- **Language and runtime:** PHP
- **Database access:** MySQL through PHP's `mysqli` extension
- **Frontend:** HTML, CSS, and browser JavaScript
- **Session handling:** PHP sessions
- **Database tables used by the application:** `tLogin` and `tmemo`

## Project Structure

```text
.
├── index.php                 # Sign-in page and authentication query
├── notes_list.php            # Current user's note list
├── new_note.html             # New-note form
├── sql_new_note_page.php     # Note insertion handler
├── show_note.php             # Individual note view
├── variabili_conn.php        # Shared MySQL connection
├── css/                      # Page-specific stylesheets
└── icons/                    # Interface image assets
```

## Getting Started

### Prerequisites

- A PHP installation with the `mysqli` extension enabled.
- A MySQL-compatible database containing the `tLogin` and `tmemo` tables expected by the SQL queries.
- A web server capable of executing PHP, such as PHP's built-in development server.

The repository does not include a database schema, dependency manifest, or environment configuration template. Before running the application, configure the connection used by `variabili_conn.php` for the database available in your environment. Do not commit credentials to the repository.

### Run locally

From the repository root, start PHP's built-in development server:

```bash
php -S localhost:8000
```

Then open [http://localhost:8000/index.php](http://localhost:8000/index.php) in a browser. The sign-in form is the application entry point; successful authentication redirects to `notes_list.php`.

## Testing and Build

No automated tests, build scripts, package manifests, or continuous-integration workflows are included in this repository. Verification is therefore limited to running the PHP application against a configured database.

## Implementation Notes

- Authentication state is stored in the PHP session as `idUser`.
- Note list and note detail queries restrict results to the signed-in user's ID.
- The note list displays a short text preview and the stored insertion date.
- The new-note form uses browser JavaScript to expand its title and text areas as content is entered.

## License

No license file or explicit license declaration is present in the repository.
