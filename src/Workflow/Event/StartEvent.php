<?php
/*
 * Copyright (c) 2015 KUBO Atsuhiro <kubo@iteman.jp>,
 * All rights reserved.p
 *
 * This file is part of Workflower.
 *
 * This program and the accompanying materials are made available under
 * the terms of the BSD 2-Clause License which accompanies this
 * distribution, and is available at http://opensource.org/licenses/BSD-2-Clause
 */

namespace PHPMentors\Workflower\Workflow\Event;

use PHPMentors\Workflower\Workflow\Connection\SequenceFlow;
use PHPMentors\Workflower\Workflow\Type\TransitionalFlowObjectInterface;

class StartEvent extends Event implements TransitionalFlowObjectInterface
{
    /**
     * @var SequenceFlow
     */
    private $defaultSequenceFlow;

    /**
     * {@inheritDoc}
     */
    public function setDefaultSequenceFlow(SequenceFlow $sequenceFlow)
    {
        $this->defaultSequenceFlow = $sequenceFlow;
    }

    /**
     * {@inheritDoc}
     */
    public function getDefaultSequenceFlow()
    {
        return $this->defaultSequenceFlow;
    }
}
