Storage Cleaner Plugin for OctoberCMS
==

# Description

This amazing October CMS plugin will scan the uploads folder, searching disconnected files with the database and vice versa.

> Heads up! 
> This feature will delete files from your disk and data in your database.

Aditionally, this script provides a fast way to backup your project by generating a zip file of your entire project (optimized, of course) and a database dump.

> Heads up again! 
> These features require that your php can run the awesome `shell_exec` and your OS also has the program `mysqldump` available to be used.

# Usage

After install the commands bellow will be available:

``` bash
# storage clear
php artisan storage:clear

# backup you project and database
php artisan storage:dump

# backup you project only
php artisan storage:dump-project

# backup you database only
php artisan storage:dump-database
```

## Storage Clean command
- This command will look in your storage directory: storage/app/uploads for files that are not linked to the \System\Models\File entity (which we love so much);
	- Files that have no link will be removed, including the thumbnails generated at runtime (do not worry, they [thumbnails] will be regenerated according to the need);
- Then will be located the records of File entity that does not have disk files, they will also be deleted;
- Finally... remove empty folders!

You can pass options if you want to execute a subset of these procedures. Available options are:
- `--files`, `-f`: Remove unlinked files only
- `--registers`, `-r`: Remove records from System\Models\File that have no file associated
- `--directories`, `-d`: Remove empty directories

Example:
```bash
# remove unlinked files and empty directories only
php artisan storage:clear -f -d
```

## Storage Dump Project command
- This command will generate a optimized zip of all your project files and plugins;
- After, you can easily upload your zip at any host, extract them and be happy!

## Storage Dump Project command
- This command will generate a dump of your database in a .sql file;
- After you can import your sql file wherever you want to and be happy again!

# TODO
- Finish brazilian-portuguese translations;
- Create more translations files;
- Create a backend interface as shortcut for commands;
