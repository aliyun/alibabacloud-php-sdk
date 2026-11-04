<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentEventsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentEventsResponseBody\agentEventList\agentEvent;

class agentEventList extends Model
{
    /**
     * @var agentEvent[]
     */
    public $agentEvent;
    protected $_name = [
        'agentEvent' => 'AgentEvent',
    ];

    public function validate()
    {
        if (\is_array($this->agentEvent)) {
            Model::validateArray($this->agentEvent);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentEvent) {
            if (\is_array($this->agentEvent)) {
                $res['AgentEvent'] = [];
                $n1 = 0;
                foreach ($this->agentEvent as $item1) {
                    $res['AgentEvent'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentEvent'])) {
            if (!empty($map['AgentEvent'])) {
                $model->agentEvent = [];
                $n1 = 0;
                foreach ($map['AgentEvent'] as $item1) {
                    $model->agentEvent[$n1] = agentEvent::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
