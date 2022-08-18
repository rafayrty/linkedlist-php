
[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/support-ukraine.svg?t=1" />](https://supportukrainenow.org)

# This Package allows you to have a Linked List inside Your PHP Project

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rafayrty/linkedlist-php.svg?style=flat-square)](https://packagist.org/packages/rafayrty/linkedlist-php)
[![Tests](https://github.com/rafayrty/linkedlist-php/actions/workflows/run-tests.yml/badge.svg?branch=main)](https://github.com/rafayrty/linkedlist-php/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/rafayrty/linkedlist-php.svg?style=flat-square)](https://packagist.org/packages/rafayrty/linkedlist-php)

This is where your description should go. Try and limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/linkedlist-php.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/linkedlist-php)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require rafayrty/linkedlist-php
```

## Usage

```php
$list = new Rafayrty\LinkedListPhp\SinglyList();
//Insert a New Node to the LinkedList
$list->push(5); // -> returns the linkedlist

//Remove the Last Node from the LinkedList
$list->pop(); // -> returns value of deleted element

//Remove the Initial Node from the LinkedList
$list->shift(); // -> returns value of deleted node

//Add a Node To Beginning of the LinkedList
$list->unshift(5); // -> returns the linkedlist

//Get a Node from a specific index 
$list->get(0); // -> returns the value of the node

//Remove a Node from a specific index 
$list->remove(0); // -> returns the value of the deleted node

//Convert Your LinkedList to an array
$list->toArray(); // -> returns an array of linkedlist

//Delete an Element from a specified index to deleteCount similar to JS array splice
$list->splice($starting,$deletecount); // -> returns the linkedlist


```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.


## Credits

- [Abdul Rafay](https://github.com/rafayrty)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
