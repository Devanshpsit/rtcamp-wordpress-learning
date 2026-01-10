# WordPress Hooks – Day 3

## What are Hooks?
Hooks allow developers to add or modify functionality without editing WordPress core files.

## Types of Hooks
1. Action Hooks – perform an action
2. Filter Hooks – modify data

## Example: Action Hook
add_action('init', 'my_function');

## Example: Filter Hook
add_filter('the_title', 'modify_title');

## Why Hooks are Important
Hooks make WordPress extensible and developer-friendly.
