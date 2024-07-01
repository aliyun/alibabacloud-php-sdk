<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsActionLogsResponseBody\actionLogs;
use AlibabaCloud\Tea\Model;

class DescribeApsActionLogsResponseBody extends Model
{
    /**
     * @description The information about the request denial.
     *
     * @example {
     * }
     * @var string
     */
    public $accessDeniedDetail;

    /**
     * @description The queried logs.
     *
     * @var actionLogs[]
     */
    public $actionLogs;

    /**
     * @description The ID of the AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * @example amv-bp1r053byu48p****
     *
     * @var string
     */
    public $DBClusterId;

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
     * @example A5EDBA27-AF3E-5966-9503-FD1557E19167
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 3
     *
     * @var string
     */
    public $totalCount;

    /**
     * @description The ID of the real-time data ingestion job.
     *
     * @example aps-hz109vpvt4fg8528d****
     *
     * @var string
     */
    public $workloadId;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'actionLogs'         => 'ActionLogs',
        'DBClusterId'        => 'DBClusterId',
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
        'requestId'          => 'RequestId',
        'totalCount'         => 'TotalCount',
        'workloadId'         => 'WorkloadId',
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
        if (null !== $this->actionLogs) {
            $res['ActionLogs'] = [];
            if (null !== $this->actionLogs && \is_array($this->actionLogs)) {
                $n = 0;
                foreach ($this->actionLogs as $item) {
                    $res['ActionLogs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
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
        if (null !== $this->workloadId) {
            $res['WorkloadId'] = $this->workloadId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApsActionLogsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = $map['AccessDeniedDetail'];
        }
        if (isset($map['ActionLogs'])) {
            if (!empty($map['ActionLogs'])) {
                $model->actionLogs = [];
                $n                 = 0;
                foreach ($map['ActionLogs'] as $item) {
                    $model->actionLogs[$n++] = null !== $item ? actionLogs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
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
        if (isset($map['WorkloadId'])) {
            $model->workloadId = $map['WorkloadId'];
        }

        return $model;
    }
}
