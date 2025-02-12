<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;

class ConfigLayer4RealLimitRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var int
     */
    public $limitValue;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'limitValue' => 'LimitValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->limitValue) {
            $res['LimitValue'] = $this->limitValue;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LimitValue'])) {
            $model->limitValue = $map['LimitValue'];
        }

        return $model;
    }
}
