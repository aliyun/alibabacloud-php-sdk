<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRuleAttributeRequest\ruleActions;

use AlibabaCloud\Tea\Model;

class trafficLimitConfig extends Model
{
    /**
     * @description The QPS of each IP address. Valid values: **1 to 100000**.
     *
     * > If both the **QPS** and **PerIpQps** properties are specified, make sure that the value of the **QPS** property is smaller than the value of the PerIpQps property.
     * @example 80
     *
     * @var int
     */
    public $perIpQps;

    /**
     * @description The queries per second (QPS). Valid values: **1 to 100000**.
     *
     * @example 100
     *
     * @var int
     */
    public $QPS;
    protected $_name = [
        'perIpQps' => 'PerIpQps',
        'QPS'      => 'QPS',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->perIpQps) {
            $res['PerIpQps'] = $this->perIpQps;
        }
        if (null !== $this->QPS) {
            $res['QPS'] = $this->QPS;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trafficLimitConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PerIpQps'])) {
            $model->perIpQps = $map['PerIpQps'];
        }
        if (isset($map['QPS'])) {
            $model->QPS = $map['QPS'];
        }

        return $model;
    }
}
