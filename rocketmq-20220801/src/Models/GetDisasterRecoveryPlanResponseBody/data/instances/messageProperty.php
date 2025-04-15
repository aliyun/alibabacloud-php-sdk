<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetDisasterRecoveryPlanResponseBody\data\instances;

use AlibabaCloud\Dara\Model;

class messageProperty extends Model
{
    /**
     * @var string
     */
    public $propertyKey;

    /**
     * @var string
     */
    public $propertyValue;
    protected $_name = [
        'propertyKey' => 'propertyKey',
        'propertyValue' => 'propertyValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->propertyKey) {
            $res['propertyKey'] = $this->propertyKey;
        }

        if (null !== $this->propertyValue) {
            $res['propertyValue'] = $this->propertyValue;
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
        if (isset($map['propertyKey'])) {
            $model->propertyKey = $map['propertyKey'];
        }

        if (isset($map['propertyValue'])) {
            $model->propertyValue = $map['propertyValue'];
        }

        return $model;
    }
}
