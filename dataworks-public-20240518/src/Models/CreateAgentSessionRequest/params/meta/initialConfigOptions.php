<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateAgentSessionRequest\params\meta;

use AlibabaCloud\Dara\Model;

class initialConfigOptions extends Model
{
    /**
     * @var string
     */
    public $executionLane;

    /**
     * @var string
     */
    public $mode;
    protected $_name = [
        'executionLane' => 'ExecutionLane',
        'mode' => 'Mode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->executionLane) {
            $res['ExecutionLane'] = $this->executionLane;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
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
        if (isset($map['ExecutionLane'])) {
            $model->executionLane = $map['ExecutionLane'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        return $model;
    }
}
