<?php

namespace LotGD\Census;

class Stats {
    public $count = 0;
    public $dau = 0;
    public $mau = 0;

    public function add(Stats $s) {
        $this->count += $s->count;
        $this->dau += $s->dau;
        $this->mau += $s->mau;
    }

    public static function compare(Stats $a, Stats $b): int {
        return $b->count - $a->count;
    }

    public static function isEqual(?Stats $a, ?Stats $b): bool {
        if ($a === null || $b === null) {
            return false;
        }
        return
            $a->count == $b->count &&
            $a->dau == $b->dau &&
            $a->mau == $b->mau;
    }
}
