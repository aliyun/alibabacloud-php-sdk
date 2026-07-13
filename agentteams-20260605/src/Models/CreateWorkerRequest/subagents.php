<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\CreateWorkerRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\CreateWorkerRequest\subagents\skills;

class subagents extends Model
{
    /**
     * @var string
     */
    public $agents;

    /**
     * @var skills[]
     */
    public $skills;

    /**
     * @var string
     */
    public $subagentId;
    protected $_name = [
        'agents' => 'Agents',
        'skills' => 'Skills',
        'subagentId' => 'SubagentId',
    ];

    public function validate()
    {
        if (\is_array($this->skills)) {
            Model::validateArray($this->skills);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agents) {
            $res['Agents'] = $this->agents;
        }

        if (null !== $this->skills) {
            if (\is_array($this->skills)) {
                $res['Skills'] = [];
                $n1 = 0;
                foreach ($this->skills as $item1) {
                    $res['Skills'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->subagentId) {
            $res['SubagentId'] = $this->subagentId;
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
        if (isset($map['Agents'])) {
            $model->agents = $map['Agents'];
        }

        if (isset($map['Skills'])) {
            if (!empty($map['Skills'])) {
                $model->skills = [];
                $n1 = 0;
                foreach ($map['Skills'] as $item1) {
                    $model->skills[$n1] = skills::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SubagentId'])) {
            $model->subagentId = $map['SubagentId'];
        }

        return $model;
    }
}
