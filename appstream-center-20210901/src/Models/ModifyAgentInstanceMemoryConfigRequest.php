<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class ModifyAgentInstanceMemoryConfigRequest extends Model
{
    /**
     * @var string[]
     */
    public $agentInstanceIds;

    /**
     * @var bool
     */
    public $enabled;
    protected $_name = [
        'agentInstanceIds' => 'AgentInstanceIds',
        'enabled' => 'Enabled',
    ];

    public function validate()
    {
        if (\is_array($this->agentInstanceIds)) {
            Model::validateArray($this->agentInstanceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentInstanceIds) {
            if (\is_array($this->agentInstanceIds)) {
                $res['AgentInstanceIds'] = [];
                $n1 = 0;
                foreach ($this->agentInstanceIds as $item1) {
                    $res['AgentInstanceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
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
        if (isset($map['AgentInstanceIds'])) {
            if (!empty($map['AgentInstanceIds'])) {
                $model->agentInstanceIds = [];
                $n1 = 0;
                foreach ($map['AgentInstanceIds'] as $item1) {
                    $model->agentInstanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        return $model;
    }
}
