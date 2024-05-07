<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class PushResourceRuleRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var mixed[]
     */
    public $metricInfo;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'metricInfo' => 'MetricInfo',
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
        if (null !== $this->metricInfo) {
            $res['MetricInfo'] = $this->metricInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PushResourceRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MetricInfo'])) {
            $model->metricInfo = $map['MetricInfo'];
        }

        return $model;
    }
}
