<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListRulesResponseBody\rules\ruleActions;

use AlibabaCloud\Tea\Model;

class trafficLimitConfig extends Model
{
    /**
     * @description The number of requests per IP address. Valid values: **1 to 100000**.
     *
     * >  If both the **QPS** and **PerIpQps** parameters are specified, the value of the **QPS** parameter is smaller than the value of the PerIpQps parameter.
     * @example 80
     *
     * @var int
     */
    public $perIpQps;

    /**
     * @description The number of queries per second (QPS). Valid values: **1** to **100000**.
     *
     * @example 4
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
