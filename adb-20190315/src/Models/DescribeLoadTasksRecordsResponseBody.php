<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeLoadTasksRecordsResponseBody\loadTasksRecords;
use AlibabaCloud\Tea\Model;

class DescribeLoadTasksRecordsResponseBody extends Model
{
    /**
     * @description The cluster ID.
     *
     * @example am-bp2590j****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The queried asynchronous import and export tasks.
     *
     * @var loadTasksRecords[]
     */
    public $loadTasksRecords;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 30
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example C60B05DB-2B77-421A-98E9-92C20E******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 1
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'DBClusterId'      => 'DBClusterId',
        'loadTasksRecords' => 'LoadTasksRecords',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'requestId'        => 'RequestId',
        'totalCount'       => 'TotalCount',
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
        if (null !== $this->loadTasksRecords) {
            $res['LoadTasksRecords'] = [];
            if (null !== $this->loadTasksRecords && \is_array($this->loadTasksRecords)) {
                $n = 0;
                foreach ($this->loadTasksRecords as $item) {
                    $res['LoadTasksRecords'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLoadTasksRecordsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['LoadTasksRecords'])) {
            if (!empty($map['LoadTasksRecords'])) {
                $model->loadTasksRecords = [];
                $n                       = 0;
                foreach ($map['LoadTasksRecords'] as $item) {
                    $model->loadTasksRecords[$n++] = null !== $item ? loadTasksRecords::fromMap($item) : $item;
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
