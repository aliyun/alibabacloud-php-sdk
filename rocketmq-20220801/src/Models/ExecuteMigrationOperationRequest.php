<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ExecuteMigrationOperationRequest\operationParam;

class ExecuteMigrationOperationRequest extends Model
{
    /**
     * @var operationParam
     */
    public $operationParam;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'operationParam' => 'operationParam',
        'instanceId' => 'instanceId',
    ];

    public function validate()
    {
        if (null !== $this->operationParam) {
            $this->operationParam->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operationParam) {
            $res['operationParam'] = null !== $this->operationParam ? $this->operationParam->toArray($noStream) : $this->operationParam;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
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
        if (isset($map['operationParam'])) {
            $model->operationParam = operationParam::fromMap($map['operationParam']);
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        return $model;
    }
}
