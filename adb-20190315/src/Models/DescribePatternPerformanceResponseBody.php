<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribePatternPerformanceResponseBody\performances;
use AlibabaCloud\Tea\Model;

class DescribePatternPerformanceResponseBody extends Model
{
    /**
     * @description The end time of the query. The time follows the ISO 8601 standard in the *yyyy-MM-ddTHH:mm:ssZ* format. The time is displayed in UTC.
     *
     * @example 2021-11-18T18:05Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The queried performance metrics.
     *
     * @var performances[]
     */
    public $performances;

    /**
     * @description The request ID.
     *
     * @example 210f47011634026610213529******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The start time of the query. The time follows the ISO 8601 standard in the *yyyy-MM-ddTHH:mm:ssZ* format. The time is displayed in UTC.
     *
     * @example 2021-11-18T00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'      => 'EndTime',
        'performances' => 'Performances',
        'requestId'    => 'RequestId',
        'startTime'    => 'StartTime',
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
        if (null !== $this->performances) {
            $res['Performances'] = [];
            if (null !== $this->performances && \is_array($this->performances)) {
                $n = 0;
                foreach ($this->performances as $item) {
                    $res['Performances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePatternPerformanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Performances'])) {
            if (!empty($map['Performances'])) {
                $model->performances = [];
                $n                   = 0;
                foreach ($map['Performances'] as $item) {
                    $model->performances[$n++] = null !== $item ? performances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
