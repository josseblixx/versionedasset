# BLIXX Versioned Assets

Automatically adds a version number to your assets' URLs so they won't be cached when changed.

## Installation instructions
```composer require blixx/versionedasset```

Edit your AppServiceProvider class and add the following string:
```\View::share('versionedAsset', app()->make(\Blixx\VersionedAsset\VersionedAsset)```

To use this in your views use:
```{{ $versionedAsset->asset('filename') }}```