<?php

namespace Finite\Event\Callback;

use Finite\Event\TransitionEvent;

/**
 * Base interface for CallbackSpecification
 *
 * @author Yohan Giarelli <yohan@frequence-web.fr>
 */
interface CallbackSpecificationInterface
{
    /**
     * Return if this callback carried by this spec should be called on this event
     *
     * @param TransitionEvent $event
     *
     * @return boolean
     */
    public function isSatisfiedBy(TransitionEvent $event);

    /**
     * Return the callback carried by the specification
     *
     * @return callable
     */
    public function getCallback();
}
