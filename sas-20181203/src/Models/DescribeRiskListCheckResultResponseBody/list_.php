<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskListCheckResultResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The instance ID of the cloud service.
     *
     * @example rm-bp1e8t4q15sr3****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The total number of risk items detected in the current cloud service.
     *
     * @example 3
     *
     * @var int
     */
    public $riskCount;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'riskCount'  => 'riskCount',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return list_
     */
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
