<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingRuleRequest;

use AlibabaCloud\Tea\Model;

class alarmOptions extends Model
{
    /**
     * @example 60
     *
     * @var int
     */
    public $period;
    protected $_name = [
        'period' => 'Period',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alarmOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        return $model;
    }
}
