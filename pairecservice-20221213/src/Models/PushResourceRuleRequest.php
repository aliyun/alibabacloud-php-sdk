<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->metricInfo)) {
            Model::validateArray($this->metricInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->metricInfo) {
            if (\is_array($this->metricInfo)) {
                $res['MetricInfo'] = [];
                foreach ($this->metricInfo as $key1 => $value1) {
                    $res['MetricInfo'][$key1] = $value1;
                }
            }
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

        if (isset($map['MetricInfo'])) {
            if (!empty($map['MetricInfo'])) {
                $model->metricInfo = [];
                foreach ($map['MetricInfo'] as $key1 => $value1) {
                    $model->metricInfo[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
