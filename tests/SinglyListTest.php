<?php

namespace Rafayrty\LinkedListPhp\Tests;

use Rafayrty\LinkedListPhp\SinglyList;

it('pushes an element to the end of singlylist', function () {
    $linked_list = new SinglyList();
    $linked_list->push(5);

    expect($linked_list->head->value)->toBe(5);
});

it('removes an element from the singlylist', function () {
    $linked_list = new SinglyList();
    $linked_list->shift();

    expect($linked_list->head)->toBe(null);
});

it('adds an element to the beginning of singlylist', function () {
    $linked_list = new SinglyList();
    $linked_list->unshift(5);

    expect($linked_list->head->value)->toBe(5);
});

it('removes an element from the end of singlylist', function () {
    $linked_list = new SinglyList();
    $linked_list->pop();

    expect($linked_list->head)->toBe(null);
});

it('removes an element at a specified index from the singlylist', function () {
    $linked_list = new SinglyList();
    $linked_list->push(5);

    expect($linked_list->remove(0))->toBe(5);

    $linked_list->push(5);
    $linked_list->push(6);

    expect($linked_list->remove(1))->toBe(6);
});

it('get an element from a specified index of the singlylist', function () {
    $linked_list = new SinglyList();
    $linked_list->push(5);

    expect($linked_list->get(0))->toBe(5);
});

it('remove an element from a specified index to a specified amount of the singlylist', function () {
    $linked_list = new SinglyList();
    $linked_list->push(5);
    $linked_list->push(6);
    $linked_list->push(2);
    $linked_list->push(7);

    // Splice the linkedlist
    $linked_list->splice(0, 3);

    expect($linked_list->head->value)->toBe(7);
});

it('convert a singly list to an array of items', function () {
    $linked_list = new SinglyList();
    $linked_list->push(5);
    $linked_list->push(6);
    $linked_list->push(2);
    $linked_list->push(7);

    expect($linked_list->toArray())->toBeArray();
});
