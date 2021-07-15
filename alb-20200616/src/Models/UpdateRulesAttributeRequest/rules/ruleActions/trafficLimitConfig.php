<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRulesAttributeRequest\rules\ruleActions;

use AlibabaCloud\Tea\Model;

class trafficLimitConfig extends Model
{
    /**
     * @var int
     */
    public $QPS;
    protected $_name = [
        'QPS' => 'QPS',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (isset($map['QPS'])) {
            $model->QPS = $map['QPS'];
        }

        return $model;
    }
}
