# Teefa Prepare

Preparing the most important things used for any project.

## Installation

You can install the package via Composer:

```bash
composer require teefa/prepare
```

### Publishing Assets
To publish the assets of this package, use the following command

```bash
php artisan vendor:publish --provider="Teefa\Prepare\PrepareServiceProvider" --tag=prepare
```

### Available Publishable Resources
1-HttpResponse Trait:

This trait contains helper methods for returning consistent HTTP responses in your API.
Published to: `app/Traits/HttpResponse.php.` 

2-CustomizeDate Trait:

This trait provides methods to customize the display of created_at and updated_at fields in a human-readable format.
Published to:` app/Traits/CustomizeDate.php.`

2-ApiLanguage Middleware:

Middleware that sets the application's locale based on the lang header in the API request. If no lang header is provided, it defaults to English.

Published to: `app/Http/Middleware/ApiLanguage.php.`


4-AutoCheckPermission Middleware:

Middleware that automatically checks user permissions for specific API routes and ensures that the user has the appropriate access level.
Published to: `app/Http/Middleware/AutoCheckPermission.php`

5-UpdateUserLastActiveAt Middleware:

Middleware that updates the last_active_at field for users, which tracks when the user was last active.
Published to: `app/Http/Middleware/UpdateUserLastActiveAt.php.`


### Custom Namespace Updating
After publishing the traits or middleware, the package will automatically update the namespace in the published files to match the folder structure within your Laravel application.
