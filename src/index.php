<?php

// Абстрактний класс Собака
abstract class Dog {
    abstract public function makeSound(): string;
    abstract public function hunt(): string;
}

// Класc Сіба-іну
class ShibaInu extends Dog {
    public function makeSound(): string {
        return "Гаф! Гаф!";
    }

    public function hunt(): string {
        return "Сіба-іну полювала б, але вона замаленька...";
    }
}

// Класc Мопс
class Pug extends Dog {
    public function makeSound(): string {
        return "Гаф! Гаф!";
    }

    public function hunt(): string {
        return "Мопс дуже лінивий, щоб полювати...";
    }
}

// Класc Такса
class Dachshund extends Dog {
    public function makeSound(): string {
        return "Гаф! Гаф!";
    }

    public function hunt(): string {
        return "Такса полює... На своєму рівні ))))";
    }
}

// Класc Плюшевий лабрадор
class PlushLabrador extends Dog {
    public function makeSound(): string {
        return "Ця плюшова іграшка не видала жодного звуку і дивиться на Вас.";
    }

    public function hunt(): string {
        return "Це плюшова іграшка, серйозно?";
    }
}

// Класc Гумова такса з пищалкою
class RubberDachshund extends Dog {
    public function makeSound(): string {
        return "Піск! Піск!";
    }

    public function hunt(): string {
        return "Гумова такса з пищалкою не може полювати!";
    }
}

function validatDog(string $dog): bool {
    if
    (
        $dog === "Сіба-іну"
        || $dog === "Мопс"
        || $dog === "Такса"
        || $dog === "Плюшевий лабрадор"
        || $dog === "Гумова такса з пищалкою"
    ) {
        return true;
    }

    return false;
}

function validatCommand(string $command): bool {
    if ($command === "Видавати звук" || $command === "Полювати") {
        return true;
    }

    return false;
}

// Виведення результату запросу
function getCommand(string $dog, string $command): void {
    switch ($dog) {
        case "Сіба-іну":
            $shibaInu = new ShibaInu();

            if ($command === "Видавати звук") {
                echo $shibaInu -> makeSound().PHP_EOL;
            }

            if ($command === "Полювати") {
                echo $shibaInu -> hunt().PHP_EOL;
            }

            break;

        case "Мопс":
            $pug = new Pug();

            if ($command === "Видавати звук") {
                echo $pug -> makeSound().PHP_EOL;
            }

            if ($command === "Полювати") {
                echo $pug -> hunt().PHP_EOL;
            }

            break;

        case "Такса":
            $dachshund = new Dachshund();

            if ($command === "Видавати звук") {
                echo $dachshund -> makeSound().PHP_EOL;
            }

            if ($command === "Полювати") {
                echo $dachshund -> hunt().PHP_EOL;
            }

            break;

        case "Плюшевий лабрадор":
            $plushLabrador = new PlushLabrador();

            if ($command === "Видавати звук") {
                echo $plushLabrador -> makeSound().PHP_EOL;
            }

            if ($command === "Полювати") {
                echo $plushLabrador -> hunt().PHP_EOL;
            }

            break;

        case "Гумова такса з пищалкою":
            $rubberDachshund = new RubberDachshund();

            if ($command === "Видавати звук") {
                echo $rubberDachshund -> makeSound().PHP_EOL;
            }

            if ($command === "Полювати") {
                echo $rubberDachshund -> hunt().PHP_EOL;
            }

            break;
        
        default:
            break;
    }
}

if (php_sapi_name() !== 'cli') {
    // Отримання введення з консолі
    while (true) {
        // Питання стосовно собаки
        echo "> Оберіть собаку (Сіба-іну, Мопс, Такса, Плюшевий лабрадор, Гумова такса з пищалкою): ";
        $dog = trim(fgets(STDIN));

        if (!validatDog($dog)) {
            echo "Такої собаки не має в системі, виберіть зі списку\n";
            continue;
        }

        // Питання стосовно команди
        echo "> Оберіть команду (Видавати звук, Полювати): ";
        $command = trim(fgets(STDIN));

        if (!validatCommand($command )) {
            echo "Такої команди не має в системі, виберіть зі списку\n";
            continue;
        }

        //Виведення результату
        getCommand($dog, $command);
    }
}

?>
