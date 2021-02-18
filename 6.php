<?php
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A(); // создание экземпляра класса А
$b1 = new B(); // создание экземпляра класса В (наследует от родительского класса А)
$a1->foo(); //1
$b1->foo(); //1
$a1->foo(); //2
$b1->foo(); //2

//В качестве вывода будет числовая последовательность "1122".
//В этом случае переменная х будет инкрементироватсья для каждого из классов А и В по отдельности.
//Пример наследования