<?php

namespace App;

enum ProjectStatus: string
{
    case Open = 'open';
    case Closed = 'closed';



    public function label() {
        return match($this) {
            self::Open => 'Aceitando propostas',
            self::Closed => 'Encerrado',
        };
    }
}
