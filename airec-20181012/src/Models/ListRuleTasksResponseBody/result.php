<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models\ListRuleTasksResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $finishTime;

    /**
     * @var int
     */
    public $finishRate;
    protected $_name = [
        'finishTime' => 'FinishTime',
        'finishRate' => 'FinishRate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->finishRate) {
            $res['FinishRate'] = $this->finishRate;
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
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['FinishRate'])) {
            $model->finishRate = $map['FinishRate'];
        }

        return $model;
    }
}
