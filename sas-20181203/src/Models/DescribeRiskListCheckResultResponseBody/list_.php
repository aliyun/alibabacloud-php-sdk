<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskListCheckResultResponseBody;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var int
     */
    public $riskCount;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'riskCount'  => 'riskCount',
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

        if (null !== $this->riskCount) {
            $res['riskCount'] = $this->riskCount;
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

        if (isset($map['riskCount'])) {
            $model->riskCount = $map['riskCount'];
        }

        return $model;
    }
}
