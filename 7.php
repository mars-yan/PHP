<?php
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A; //Аналогично задани 6, но В случае отсутствия аргументов в конструктор класса,
$b1 = new B; // круглые скобки после названия класса можно опустить.
$a1->foo();
$b1->foo();
$a1->foo();
$b1->foo();
