<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudListOnlineAgentResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudListOnlineAgentResponseBody\data\agentStatuses;

class data extends Model
{
    /**
     * @var agentStatuses[]
     */
    public $agentStatuses;
    protected $_name = [
        'agentStatuses' => 'AgentStatuses',
    ];

    public function validate()
    {
        if (\is_array($this->agentStatuses)) {
            Model::validateArray($this->agentStatuses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentStatuses) {
            if (\is_array($this->agentStatuses)) {
                $res['AgentStatuses'] = [];
                $n1 = 0;
                foreach ($this->agentStatuses as $item1) {
                    $res['AgentStatuses'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AgentStatuses'])) {
            if (!empty($map['AgentStatuses'])) {
                $model->agentStatuses = [];
                $n1 = 0;
                foreach ($map['AgentStatuses'] as $item1) {
                    $model->agentStatuses[$n1] = agentStatuses::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
