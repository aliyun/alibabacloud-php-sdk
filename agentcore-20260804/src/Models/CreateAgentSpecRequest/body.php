<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateAgentSpecRequest;

use AlibabaCloud\Dara\Model;

class body extends Model
{
    /**
     * @var string
     */
    public $agentSpecName;

    /**
     * @var string
     */
    public $targetVersion;
    protected $_name = [
        'agentSpecName' => 'agentSpecName',
        'targetVersion' => 'targetVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentSpecName) {
            $res['agentSpecName'] = $this->agentSpecName;
        }

        if (null !== $this->targetVersion) {
            $res['targetVersion'] = $this->targetVersion;
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
        if (isset($map['agentSpecName'])) {
            $model->agentSpecName = $map['agentSpecName'];
        }

        if (isset($map['targetVersion'])) {
            $model->targetVersion = $map['targetVersion'];
        }

        return $model;
    }
}
