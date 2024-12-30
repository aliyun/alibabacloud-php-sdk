<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeExecutorDetectionResponseBody\detectionItems;
use AlibabaCloud\Tea\Model;

class DescribeExecutorDetectionResponseBody extends Model
{
    /**
     * @example am-xxx
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @var detectionItems[]
     */
    public $detectionItems;

    /**
     * @example 9DFF5F54-162B-5860-80A5-411FF550B347
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 566
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'DBClusterId'    => 'DBClusterId',
        'detectionItems' => 'DetectionItems',
        'requestId'      => 'RequestId',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->detectionItems) {
            $res['DetectionItems'] = [];
            if (null !== $this->detectionItems && \is_array($this->detectionItems)) {
                $n = 0;
                foreach ($this->detectionItems as $item) {
                    $res['DetectionItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeExecutorDetectionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['DetectionItems'])) {
            if (!empty($map['DetectionItems'])) {
                $model->detectionItems = [];
                $n                     = 0;
                foreach ($map['DetectionItems'] as $item) {
                    $model->detectionItems[$n++] = null !== $item ? detectionItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
