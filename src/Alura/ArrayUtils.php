<?php declare(strict_types=1);

namespace Alura;

class ArrayUtils
{
    public static function remover(int $elemento, array &$array)
    {
        $posicao = array_search($elemento, $array, true);
        if (is_int($posicao)) {
            unset($array[$posicao]);
        } else {
            echo "Nao foi encontrado no array";
        }
    }
}
