<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudUpdateAgentResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudUpdateAgentResponseBody\data\agent;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudUpdateAgentResponseBody\data\agentSkills;

class data extends Model
{
    /**
     * @var agent
     */
    public $agent;

    /**
     * @var agentSkills[]
     */
    public $agentSkills;
    protected $_name = [
        'agent' => 'Agent',
        'agentSkills' => 'AgentSkills',
    ];

    public function validate()
    {
        if (null !== $this->agent) {
            $this->agent->validate();
        }
        if (\is_array($this->agentSkills)) {
            Model::validateArray($this->agentSkills);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agent) {
            $res['Agent'] = null !== $this->agent ? $this->agent->toArray($noStream) : $this->agent;
        }

        if (null !== $this->agentSkills) {
            if (\is_array($this->agentSkills)) {
                $res['AgentSkills'] = [];
                $n1 = 0;
                foreach ($this->agentSkills as $item1) {
                    $res['AgentSkills'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Agent'])) {
            $model->agent = agent::fromMap($map['Agent']);
        }

        if (isset($map['AgentSkills'])) {
            if (!empty($map['AgentSkills'])) {
                $model->agentSkills = [];
                $n1 = 0;
                foreach ($map['AgentSkills'] as $item1) {
                    $model->agentSkills[$n1] = agentSkills::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
