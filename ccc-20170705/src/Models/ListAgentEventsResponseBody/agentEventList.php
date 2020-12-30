<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentEventsResponseBody;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentEventsResponseBody\agentEventList\agentEvent;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentEvent) {
            $res['AgentEvent'] = [];
            if (null !== $this->agentEvent && \is_array($this->agentEvent)) {
                $n = 0;
                foreach ($this->agentEvent as $item) {
                    $res['AgentEvent'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return agentEventList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentEvent'])) {
            if (!empty($map['AgentEvent'])) {
                $model->agentEvent = [];
                $n                 = 0;
                foreach ($map['AgentEvent'] as $item) {
                    $model->agentEvent[$n++] = null !== $item ? agentEvent::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
