<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\ListAgentTeamsRequest;

use AlibabaCloud\Dara\Model;

class body extends Model
{
    /**
     * @var string[]
     */
    public $agentIds;
    protected $_name = [
        'agentIds' => 'agentIds',
    ];

    public function validate()
    {
        if (\is_array($this->agentIds)) {
            Model::validateArray($this->agentIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentIds) {
            if (\is_array($this->agentIds)) {
                $res['agentIds'] = [];
                $n1 = 0;
                foreach ($this->agentIds as $item1) {
                    $res['agentIds'][$n1] = $item1;
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
        if (isset($map['agentIds'])) {
            if (!empty($map['agentIds'])) {
                $model->agentIds = [];
                $n1 = 0;
                foreach ($map['agentIds'] as $item1) {
                    $model->agentIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
