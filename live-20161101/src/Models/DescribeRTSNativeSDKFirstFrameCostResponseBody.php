<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeRTSNativeSDKFirstFrameCostResponseBody\firstFrameCostData;
use AlibabaCloud\Tea\Model;

class DescribeRTSNativeSDKFirstFrameCostResponseBody extends Model
{
    /**
     * @var string
     */
    public $dataInterval;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var firstFrameCostData[]
     */
    public $firstFrameCostData;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'dataInterval'       => 'DataInterval',
        'endTime'            => 'EndTime',
        'firstFrameCostData' => 'FirstFrameCostData',
        'requestId'          => 'RequestId',
        'startTime'          => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataInterval) {
            $res['DataInterval'] = $this->dataInterval;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->firstFrameCostData) {
            $res['FirstFrameCostData'] = [];
            if (null !== $this->firstFrameCostData && \is_array($this->firstFrameCostData)) {
                $n = 0;
                foreach ($this->firstFrameCostData as $item) {
                    $res['FirstFrameCostData'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeRTSNativeSDKFirstFrameCostResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataInterval'])) {
            $model->dataInterval = $map['DataInterval'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['FirstFrameCostData'])) {
            if (!empty($map['FirstFrameCostData'])) {
                $model->firstFrameCostData = [];
                $n                         = 0;
                foreach ($map['FirstFrameCostData'] as $item) {
                    $model->firstFrameCostData[$n++] = null !== $item ? firstFrameCostData::fromMap($item) : $item;
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
