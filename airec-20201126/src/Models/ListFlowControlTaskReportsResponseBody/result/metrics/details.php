<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\ListFlowControlTaskReportsResponseBody\result\metrics;

use AlibabaCloud\Tea\Model;

class details extends Model
{
    /**
     * @example 1664035200
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 1664000452
     *
     * @var int
     */
    public $startTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $val;
    protected $_name = [
        'endTime'   => 'endTime',
        'startTime' => 'startTime',
        'val'       => 'val',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->val) {
            $res['val'] = $this->val;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return details
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['val'])) {
            $model->val = $map['val'];
        }

        return $model;
    }
}
