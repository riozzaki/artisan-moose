<?php

namespace Riozzaki;

/**
 * Trait ArtisanMoose
 * @package Riozzaki
 *
 * @method void info($string, $verbosity = null) \Illuminate\Console\Command
 */
trait ArtisanMoose
{
    /**
     * Write a string as moose output.
     *
     * @param string[] $lines
     *
     * @return void
     */
    public function moose($lines)
    {
        $max = max(array_map('mb_strlen', $lines));
        $this->info(' _' . str_pad('', $max, '_') . '_ ');
        $this->info('( ' . str_pad('', $max) . ' )');
        foreach ($lines as $line) {
            $this->info("( " . str_pad($line, $max) . " )");
        }
        $this->info('(_' . str_pad('', $max, '_') . '_)');
        $this->info(base64_decode("ICBvDQogICBvICBcX1xfICAgIF8vXy8NCiAgICBvICAgICBcX18vDQogICAgICAgICAgKG9vKVxfX19fX19fDQogICAgICAgICAgKF9fKVwgICAgICAgKVwNCiAgICAgICAgICAgICAgfHx+fn5+fnZ8DQogICAgICAgICAgICAgIHx8ICAgICB8fA=="));
    }
}
