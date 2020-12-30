<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeResourcePackUsageResponseBody\packUsages;
use AlibabaCloud\Tea\Model;

class DescribeResourcePackUsageResponseBody extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var packUsages[]
     */
    public $packUsages;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $interval;
    protected $_name = [
        'endTime'    => 'EndTime',
        'requestId'  => 'RequestId',
        'packUsages' => 'PackUsages',
        'startTime'  => 'StartTime',
        'interval'   => 'Interval',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->packUsages) {
            $res['PackUsages'] = [];
            if (null !== $this->packUsages && \is_array($this->packUsages)) {
                $n = 0;
                foreach ($this->packUsages as $item) {
                    $res['PackUsages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResourcePackUsageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PackUsages'])) {
            if (!empty($map['PackUsages'])) {
                $model->packUsages = [];
                $n                 = 0;
                foreach ($map['PackUsages'] as $item) {
                    $model->packUsages[$n++] = null !== $item ? packUsages::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        return $model;
    }
}
