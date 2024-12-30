<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeTablePartitionDiagnoseResponseBody\detectionItems;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeTablePartitionDiagnoseResponseBody\items;
use AlibabaCloud\Tea\Model;

class DescribeTablePartitionDiagnoseResponseBody extends Model
{
    /**
     * @example {
     * "PolicyType": "AccountLevelIdentityBasedPolicy",
     * "AuthPrincipalOwnerId": "1*****************7",
     * "AuthPrincipalType": "SubUser",
     * "AuthPrincipalDisplayName": "2***************9",
     * }
     * @var string
     */
    public $accessDeniedDetail;

    /**
     * @example amv-bp171g24yvbxxxxx
     *
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
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 1AD222E9-E606-4A42-BF6D-8A4442913CEF
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 640000000
     *
     * @var int
     */
    public $suggestMaxRecordsPerPartition;

    /**
     * @example 64000000
     *
     * @var int
     */
    public $suggestMinRecordsPerPartition;

    /**
     * @example 185
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'accessDeniedDetail'            => 'AccessDeniedDetail',
        'DBClusterId'                   => 'DBClusterId',
        'detectionItems'                => 'DetectionItems',
        'items'                         => 'Items',
        'pageNumber'                    => 'PageNumber',
        'pageSize'                      => 'PageSize',
        'requestId'                     => 'RequestId',
        'suggestMaxRecordsPerPartition' => 'SuggestMaxRecordsPerPartition',
        'suggestMinRecordsPerPartition' => 'SuggestMinRecordsPerPartition',
        'totalCount'                    => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = $this->accessDeniedDetail;
        }
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
        if (null !== $this->items) {
            $res['Items'] = [];
            if (null !== $this->items && \is_array($this->items)) {
                $n = 0;
                foreach ($this->items as $item) {
                    $res['Items'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return DescribeTablePartitionDiagnoseResponseBody
     */
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
                $n                     = 0;
                foreach ($map['DetectionItems'] as $item) {
                    $model->detectionItems[$n++] = null !== $item ? detectionItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                $n            = 0;
                foreach ($map['Items'] as $item) {
                    $model->items[$n++] = null !== $item ? items::fromMap($item) : $item;
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
