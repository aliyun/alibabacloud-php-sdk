<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetTaskDetailBaseResponseBody\object;

use AlibabaCloud\Tea\Model;

class workTime extends Model
{
    /**
     * @var int
     */
    public $usedTime;

    /**
     * @var int
     */
    public $totalTime;

    /**
     * @var string
     */
    public $unit;
    protected $_name = [
        'usedTime'  => 'UsedTime',
        'totalTime' => 'TotalTime',
        'unit'      => 'Unit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }
        if (null !== $this->totalTime) {
            $res['TotalTime'] = $this->totalTime;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return workTime
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }
        if (isset($map['TotalTime'])) {
            $model->totalTime = $map['TotalTime'];
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        return $model;
    }
}
