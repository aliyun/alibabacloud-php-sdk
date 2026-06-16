<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\UpdateContextStoreRequest\config;

use AlibabaCloud\Dara\Model;

class source extends Model
{
    /**
     * @var string
     */
    public $agentSpace;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'agentSpace' => 'agentSpace',
        'startTime' => 'startTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentSpace) {
            $res['agentSpace'] = $this->agentSpace;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
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
        if (isset($map['agentSpace'])) {
            $model->agentSpace = $map['agentSpace'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
