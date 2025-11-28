# Brain Games

### Статус проверок Hexlet
[![Actions Status](https://github.com/hrolenkov-prog/php-project-45/actions/workflows/hexlet-check.yml/badge.svg)](https://github.com/hrolenkov-prog/php-project-45/actions)

## О проекте

Brain Games — набор консольных мини‑игр, развивающих навыки устного счёта и работы с числами.

В проект входят игры:
- `brain-games` — приветствие и знакомство с игроком;
- `brain-even` — определение, является ли число чётным;
- `brain-calc` — вычисление значения арифметического выражения;
- `brain-gcd` — поиск наибольшего общего делителя двух чисел;
- `brain-progression` — поиск пропущенного числа в арифметической прогрессии;
- `brain-prime` — определение, является ли число простым.

## Системные требования

- PHP версии `>= 8.3`;
- установленный Composer;
- ОС: Linux, macOS или Windows с поддержкой PHP в терминале;
- доступ в интернет для установки зависимостей через Composer.

## Установка

1. Клонируйте репозиторий:
   ```bash
   git clone https://github.com/hrolenkov-prog/php-project-45.git
   ```
2. Перейдите в каталог проекта:
   ```bash
   cd php-project-45
   ```
3. Установите зависимости:
   ```bash
   composer install
   ```

После установки все игры будут доступны через исполняемые файлы в каталоге `bin`.

## Запуск игр

Возможен двумя способами (пример для `brain-even`):
- через PHP:  
  ```bash
  php bin/brain-even
  ```
- напрямую (Unix):  
  ```bash
  bin/brain-even
  ```

Аналогично запускаются остальные игры:
- приветствие: `php bin/brain-games`;
- чётное число: `php bin/brain-even`;
- калькулятор: `php bin/brain-calc`;
- НОД: `php bin/brain-gcd`;
- прогрессия: `php bin/brain-progression`;
- простое число: `php bin/brain-prime`.

### Запуск через Makefile

На системах с `make` можно использовать удобные цели:
- установка зависимостей: `make install`;
- проверка `composer.json`: `make validate`;
- запуск игр: `make brain-games`, `make brain-even`, `make brain-calc`, `make brain-gcd`, `make brain-progression`, `make brain-prime`;
- запуск линтера: `make lint`.

## Демонстрация игр (asciinema)

- Демо `brain-even`:  
  https://asciinema.org/a/WNHbX7QmcX3eeZPQUiUDX7l1O
- Демо `brain-calc`:  
  https://asciinema.org/a/odWFgjT5Hdq429Ls9jih4uYTs
- Демо `brain-gcd`:  
  https://asciinema.org/a/xeHSMYSI12N55TWMgxZzhj1S5
- Демо `brain-progression`:  
  https://asciinema.org/a/sWqq6VUFp6wJoZ4bvb8nUd1Y4
- Демо `brain-prime`:  
  https://asciinema.org/a/EKlVlRhUh9egvKhNW5Ap4GSdr
