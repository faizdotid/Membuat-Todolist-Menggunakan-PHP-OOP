<?php

namespace Repository {

    use Entity\Todolist;

    interface TodoListRepository {

        function save(Todolist $todolist): void;

        function remove(int $number): bool;

        function findAll(): array;
    }

    class TodolistRepostoryImpl implements TodoListRepository {

        public array $todolist = array();

        public function save(Todolist $todolist): void {
            $number = sizeof($this->todolist) + 1;
            $this->todolist[$number] = $todolist;
        }

        public function remove(int $number): bool {
            if ($number > sizeof($this->todolist)) {
                return false;
            }
            for ($i = $number; $i < sizeof($this->todolist); $i++) {
                $this->todolist[$i] = $this->todolist[$i +1];
            }
            unset($this->todolist[sizeof($this->todolist)]);
            return true;
        }

        public function findAll(): array {
            return $this->todolist;
        }
    }
}