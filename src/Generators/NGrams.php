<?php

namespace drupol\phpermutations\Generators;

use drupol\phpermutations\GeneratorInterface;
use drupol\phpermutations\Iterators\NGrams as NGramsIterator;

/**
 * Class NGrams.
 */
class NGrams extends NGramsIterator implements GeneratorInterface
{
    /**
     * {@inheritdoc}
     */
    public function generator()
    {
        return $this->get();
    }

    /**
     * {@inheritdoc}
     */
    public function toArray()
    {
        return [];
    }

    /**
     * Get the generator.
     *
     * @codingStandardsIgnoreStart
     *
     * @return \Generator
     *                    The generator
     * @codingStandardsIgnoreEnd
     */
    protected function get()
    {
        while (true) {
            $this->next();
            yield $this->current();
        }
    }
}
