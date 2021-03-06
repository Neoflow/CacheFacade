<?php

namespace Neoflow\CacheFacade;

interface CacheFacadeAwareInterface
{
    /**
     * Set cache facade.
     *
     * @param CacheFacadeInterface $cache Cache facade instance
     */
    public function setCacheFacade(CacheFacadeInterface $cache);
}
