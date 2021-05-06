<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeResourcePackUsageResponse\packUsages;
use AlibabaCloud\Tea\Model;

class DescribeResourcePackUsageResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var packUsages[]
     */
    public $packUsages;
    protected $_name = [
        'requestId'  => 'RequestId',
        'interval'   => 'Interval',
        'startTime'  => 'StartTime',
        'endTime'    => 'EndTime',
        'packUsages' => 'PackUsages',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('interval', $this->interval, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('packUsages', $this->packUsages, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResourcePackUsageResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
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

        return $model;
    }
}
