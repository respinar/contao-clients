# Contao Clients Bundle

A lightweight Contao bundle for managing company clients with logo, website, description, and categorization.

## Features

- **Backend module** under `Company > Clients`
- **Client groups** with optional access protection (member group restrictions)
- **Clients** with name, alias, logo, website, description (TinyMCE), industry, location, categories
- **Publishing** with start/stop dates and publish toggle
- **Permission system** — assign client groups to backend users via mount fields
- **Reusable models** (`CompanyClientModel`, `CompanyClientGroupModel`) for cross-bundle references

## Installation

```bash
composer require respinar/contao-clients
```

Then run the Contao install tool or `contao:migrate` to create the database tables.

## Database Tables

| Table | Purpose |
|-------|---------|
| `tl_company_client_group` | Client groups with title, alias, and access protection |
| `tl_company_client` | Individual clients belonging to a group |

## Usage

1. Go to **Company > Clients** in the Contao backend.
2. Create one or more **client groups**.
3. Create **clients** within a group.
4. Use the models in other bundles to reference clients by ID or alias.

## License

MIT
