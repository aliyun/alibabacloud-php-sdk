<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\ListRuleTasksResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The completion rate of the task.
     *
     * @example 50
     *
     * @var int
     */
    public $finishRate;

    /**
     * @description The time when the task was complete.
     *
     * @example 1588240081
     *
     * @var int
     */
    public $finishTime;
    protected $_name = [
        'finishRate' => 'finishRate',
        'finishTime' => 'finishTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->finishRate) {
            $res['finishRate'] = $this->finishRate;
        }
        if (null !== $this->finishTime) {
            $res['finishTime'] = $this->finishTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['finishRate'])) {
            $model->finishRate = $map['finishRate'];
        }
        if (isset($map['finishTime'])) {
            $model->finishTime = $map['finishTime'];
        }

        return $model;
    }
}
