<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeWorkerDetectionResponseBody\detectionItems;
use AlibabaCloud\Tea\Model;

class DescribeWorkerDetectionResponseBody extends Model
{
    /**
     * @example am-xxxxx
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @var detectionItems[]
     */
    public $detectionItems;

    /**
     * @example E5B37B61-E6C9-5FE0-9374-45BAA548AEF6
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 20
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
     * @return DescribeWorkerDetectionResponseBody
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
