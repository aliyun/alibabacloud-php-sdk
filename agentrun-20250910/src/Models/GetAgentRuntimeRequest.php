<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class GetAgentRuntimeRequest extends Model
{
    /**
     * @var string
     */
    public $agentRuntimeVersion;
    protected $_name = [
        'agentRuntimeVersion' => 'agentRuntimeVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentRuntimeVersion) {
            $res['agentRuntimeVersion'] = $this->agentRuntimeVersion;
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
        if (isset($map['agentRuntimeVersion'])) {
            $model->agentRuntimeVersion = $map['agentRuntimeVersion'];
        }

        return $model;
    }
}
