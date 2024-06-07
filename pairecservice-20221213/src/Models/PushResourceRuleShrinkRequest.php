<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class PushResourceRuleShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $metricInfoShrink;
    protected $_name = [
        'instanceId'       => 'InstanceId',
        'metricInfoShrink' => 'MetricInfo',
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
        if (null !== $this->metricInfoShrink) {
            $res['MetricInfo'] = $this->metricInfoShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PushResourceRuleShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MetricInfo'])) {
            $model->metricInfoShrink = $map['MetricInfo'];
        }

        return $model;
    }
}
