<?php


/**
 * @param $asset
 * @return string
 */
function asset_path($asset)
{
    $dist_uri = get_stylesheet_directory_uri() . '/dist';
    $manifestPath = get_stylesheet_directory() . '/dist/assets.json';

    $manifest = file_exists($manifestPath) ? json_decode(file_get_contents($manifestPath), true) : [];
    $asset_path = isset($manifest[$asset]) ? $manifest[$asset] : $asset;

    return "{$dist_uri}/{$asset_path}";
}
