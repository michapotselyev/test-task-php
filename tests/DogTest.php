<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/index.php';
class DogTest extends TestCase
{
    public function testValidateDog(): void
    {
        $this->assertTrue(validatDog("Сіба-іну"));
        $this->assertTrue(validatDog("Мопс"));
        $this->assertTrue(validatDog("Такса"));
        $this->assertTrue(validatDog("Плюшевий лабрадор"));
        $this->assertTrue(validatDog("Гумова такса з пищалкою"));

        $this->assertFalse(validatDog("Невірна собака"));
    }

    public function testValidatCommand(): void
    {
        $this->assertTrue(validatCommand("Видавати звук"));
        $this->assertTrue(validatCommand("Полювати"));

        $this->assertFalse(validatCommand("Невірна команда"));
    }

    public function testGetCommand(): void
    {
        ob_start();
        getCommand("Сіба-іну", "Видавати звук");
        $output = ob_get_clean();
        $this->assertEquals("Гаф! Гаф!".PHP_EOL, $output);

        ob_start();
        getCommand("Сіба-іну", "Полювати");
        $output = ob_get_clean();
        $this->assertEquals("Сіба-іну полювала б, але вона замаленька...".PHP_EOL, $output);

        ob_start();
        getCommand("Мопс", "Видавати звук");
        $output = ob_get_clean();
        $this->assertEquals("Гаф! Гаф!".PHP_EOL, $output);

        ob_start();
        getCommand("Мопс", "Полювати");
        $output = ob_get_clean();
        $this->assertEquals("Мопс дуже лінивий, щоб полювати...".PHP_EOL, $output);

        ob_start();
        getCommand("Такса", "Видавати звук");
        $output = ob_get_clean();
        $this->assertEquals("Гаф! Гаф!".PHP_EOL, $output);

        ob_start();
        getCommand("Такса", "Полювати");
        $output = ob_get_clean();
        $this->assertEquals("Такса полює... На своєму рівні ))))".PHP_EOL, $output);

        ob_start();
        getCommand("Плюшевий лабрадор", "Видавати звук");
        $output = ob_get_clean();
        $this->assertEquals("Ця плюшова іграшка не видала жодного звуку і дивиться на Вас.".PHP_EOL, $output);

        ob_start();
        getCommand("Плюшевий лабрадор", "Полювати");
        $output = ob_get_clean();
        $this->assertEquals("Це плюшова іграшка, серйозно?".PHP_EOL, $output);

        ob_start();
        getCommand("Гумова такса з пищалкою", "Видавати звук");
        $output = ob_get_clean();
        $this->assertEquals("Піск! Піск!".PHP_EOL, $output);

        ob_start();
        getCommand("Гумова такса з пищалкою", "Полювати");
        $output = ob_get_clean();
        $this->assertEquals("Гумова такса з пищалкою не може полювати!".PHP_EOL, $output);
    }
}

?>
