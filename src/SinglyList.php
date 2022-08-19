<?php

namespace Rafayrty\LinkedListPhp;

class Node
{
    public $value;
    public Node | null $next;

    public function __construct($value = null)
    {
        $this->value = $value;
        $this->next = null;
    }
}

class SinglyList
{
    public Node | null $head;
    public Node | null $tail;
    public int $length = 0;

    public function __construct($value = null)
    {
        $this->head = $value;
        $this->tail = $this->head;
        if ($value !== null) {
            $this->length++;
        }
    }

    /**
     *  Insert an Element To The End of the List
     *  @param mixed $value
     *  @return Node
     */
    public function push($value)
    {
        if ($this->head === null) {
            $this->head = new Node($value);
            $this->tail = $this->head;
            $this->length++;

            return $this;
        }

        $node = new Node($value);
        $this->tail->next = $node;
        $this->tail = $node;
        $this->length++;

        return $this;
    }

    /**
     *  Remove an Element From The Beginning of the List
     *  @param mixed $value
     *  @return Node
     */
    public function shift()
    {
        if ($this->head === null) {
            return null;
        }

        $temp = $this->head;
        $this->head = $temp->next;
        $this->length--;

        return $temp->value;
    }

    /**
     *  Insert an Element To The Beginning of the List
     *  @param mixed $value
     *  @return Node
     */
    public function unshift($value)
    {
        if ($this->head === null) {
            $this->head = new Node($value);
            $this->tail = $this->head;
            $this->length++;

            return $this;
        }

        $temp = $this->head;
        $this->head = new Node($value);
        $this->next = $temp;
        $this->length++;

        return $temp;
    }

    /**
    *  Remove an Element From The End of the List
    *  @return Node
    */
    public function pop()
    {
        if ($this->head === null) {
            return null;
        }

        if ($this->length === 1) {
            $value = $this->head->value;
            $this->head = null;
            $this->tail = null;
            $this->length = 0;

            return $value;
        }

        $temp = $this->head;

        $last = $temp;
        $prev = $temp;

        while ($last->next !== null) {
            $prev = $temp;
            $last = $temp->next;
        }
        $prev->next = null;
        $this->tail = $prev;
        $this->length--;

        return $prev->value;
    }

    /**
     *  Get an Element from the Specified index
     *  @param int $index
     *  @return Node
     */
    public function get($index)
    {
        if ($this->head === null) {
            return null;
        }

        if ($index > ($this->length - 1)) {
            throw ("Linked List Out Of Bounds Set a Number Within Range");
        }

        $last = $this->head; // [0,1,2]
        for ($i = 0; $i < $index; $i++) {
            $last = $last->next;
        }

        return $last->value;
    }

    /**
     *  Remove an Element From a Specified Index
     *  @param int $index
     *  @return Node
     */
    public function remove($index)
    {
        echo "testing";

        if ($this->head === null) {
            return null;
        }

        if ($index > ($this->length - 1)) {
            throw ("Linked List Out Of Bounds Set a Number Within Range");
        }

        $delete = $this->head;
        $prev = $delete;
        echo $index . " " . ($this->length - 1);
        if ($index === ($this->length - 1)) {
            $this->pop();

            return $prev->value;
        }
        echo "testing 179";

        if ($index === 0) {
            $this->shift();

            return $prev->value;
        }


        for ($i = 0; $i < $index; $i++) {
            echo "testing";
            $prev = $delete;
            $delete = $delete->next;
        }

        $prev->next = $delete->next;

        $this->length--;

        return $prev->value;
    }

    /**
     *  Remove an Element From The a Specified Index to delete Count
     *  @param int $start
     *  @param int $deletecount
     *  @return Node
     */
    public function splice($start, $deletecount)
    {
        if ($this->head === null) {
            return null;
        }
        if ((($this->length - 1) - (($deletecount - 1) - $start)) < 0) {
            throw ("Linked List Out Of Bounds Set a Number Within Range");
        }

        for ($i = $start; $i < $deletecount; $i++) {
            echo $start;
            $this->remove($start);
        }

        return $this;
    }

    /**
     *  Convert the Linked List to an array
     *  @return array
     */
    public function toArray()
    {
        $last = $this->head;
        $array = [];
        while ($last !== null) {
            $array[] = $last->value;
            $last = $last->next;
        }

        return $array;
    }
}
