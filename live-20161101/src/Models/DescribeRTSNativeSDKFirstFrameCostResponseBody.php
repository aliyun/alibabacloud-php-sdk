<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeRTSNativeSDKFirstFrameCostResponseBody\firstFrameCostData;

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
        'dataInterval' => 'DataInterval',
        'endTime' => 'EndTime',
        'firstFrameCostData' => 'FirstFrameCostData',
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->firstFrameCostData)) {
            Model::validateArray($this->firstFrameCostData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataInterval) {
            $res['DataInterval'] = $this->dataInterval;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->firstFrameCostData) {
            if (\is_array($this->firstFrameCostData)) {
                $res['FirstFrameCostData'] = [];
                $n1 = 0;
                foreach ($this->firstFrameCostData as $item1) {
                    $res['FirstFrameCostData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['FirstFrameCostData'] as $item1) {
                    $model->firstFrameCostData[$n1] = firstFrameCostData::fromMap($item1);
                    ++$n1;
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
