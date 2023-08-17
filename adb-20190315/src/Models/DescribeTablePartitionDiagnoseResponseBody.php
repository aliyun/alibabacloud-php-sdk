<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeTablePartitionDiagnoseResponseBody\items;
use AlibabaCloud\Tea\Model;

class DescribeTablePartitionDiagnoseResponseBody extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * @example am-bp1xxxxxxxx47
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The information of tables.
     *
     * @var items[]
     */
    public $items;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example 1AD222E9-E606-4A42-BF6D-8A4442913CEF
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The recommended maximum number of rows in each list partition.
     *
     * @example 640000000
     *
     * @var int
     */
    public $suggestMaxRecordsPerPartition;

    /**
     * @description The recommended minimum number of rows in each list partition.
     *
     * @example 64000000
     *
     * @var int
     */
    public $suggestMinRecordsPerPartition;

    /**
     * @description The total number of entries.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'DBClusterId'                   => 'DBClusterId',
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
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
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
