<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListRulesResponseBody\rules\ruleActions;

use AlibabaCloud\Dara\Model;

class trafficLimitConfig extends Model
{
    /**
     * @var int
     */
    public $perIpQps;

    /**
     * @var int
     */
    public $QPS;
    protected $_name = [
        'perIpQps' => 'PerIpQps',
        'QPS' => 'QPS',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
