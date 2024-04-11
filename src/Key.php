<?php

declare(strict_types=1);

namespace Tempest\Console;

enum Key: string
{
    case UP = "\e[A";
    case DOWN = "\e[B";
    case LEFT = "\e[D";
    case RIGHT = "\e[C";
    case ENTER = "\n";
    case BACKSPACE = "\x7F";
    case DELETE = "\e[3~";
    case SPACE = " ";
}
