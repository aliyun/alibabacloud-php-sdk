<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeTablePartitionDiagnoseResponseBody\detectionItems;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeTablePartitionDiagnoseResponseBody\items;

class DescribeTablePartitionDiagnoseResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessDeniedDetail;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var detectionItems[]
     */
    public $detectionItems;

    /**
     * @var items[]
     */
    public $items;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $suggestMaxRecordsPerPartition;

    /**
     * @var int
     */
    public $suggestMinRecordsPerPartition;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'DBClusterId' => 'DBClusterId',
        'detectionItems' => 'DetectionItems',
        'items' => 'Items',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'suggestMaxRecordsPerPartition' => 'SuggestMaxRecordsPerPartition',
        'suggestMinRecordsPerPartition' => 'SuggestMinRecordsPerPartition',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->detectionItems)) {
            Model::validateArray($this->detectionItems);
        }
        if (\is_array($this->items)) {
            Model::validateArray($this->items);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = $this->accessDeniedDetail;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->detectionItems) {
            if (\is_array($this->detectionItems)) {
                $res['DetectionItems'] = [];
                $n1 = 0;
                foreach ($this->detectionItems as $item1) {
                    $res['DetectionItems'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->items) {
            if (\is_array($this->items)) {
                $res['Items'] = [];
                $n1 = 0;
                foreach ($this->items as $item1) {
                    $res['Items'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->suggestMaxRecordsPerPartition) {
            $res['SuggestMaxRecordsPerPartition'] = $this->suggestMaxRecordsPerPartition;
        }

        if (null !== $this->suggestMinRecordsPerPartition) {
            $res['SuggestMinRecordsPerPartition'] = $this->suggestMinRecordsPerPartition;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = $map['AccessDeniedDetail'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['DetectionItems'])) {
            if (!empty($map['DetectionItems'])) {
                $model->detectionItems = [];
                $n1 = 0;
                foreach ($map['DetectionItems'] as $item1) {
                    $model->detectionItems[$n1++] = detectionItems::fromMap($item1);
                }
            }
        }

        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                $n1 = 0;
                foreach ($map['Items'] as $item1) {
                    $model->items[$n1++] = items::fromMap($item1);
                }
            }
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SuggestMaxRecordsPerPartition'])) {
            $model->suggestMaxRecordsPerPartition = $map['SuggestMaxRecordsPerPartition'];
        }

        if (isset($map['SuggestMinRecordsPerPartition'])) {
            $model->suggestMinRecordsPerPartition = $map['SuggestMinRecordsPerPartition'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
