<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBClusterResourcePoolPerformanceRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * > You can call the [DescribeDBClusters](~~129857~~) operation to query the information about all AnalyticDB for MySQL clusters within a region, including cluster IDs.
     * @example am-****************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The end of the time range to monitor the resource group. The end time must be later than the start time. Specify the time in the ISO 8601 standard in the *yyyy-MM-ddTHH:mmZ* format. The time must be in UTC.
     *
     * @example 2021-06-10T07:01Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The metrics of the resource group. You can enter multiple metrics at the same time to query the monitoring information. Separate multiple metrics with commas (,). Valid values:
     *
     *   **AnalyticDB_RP_CPU**: the average CPU utilization. Unit: %.
     *   **AnalyticDB_RP_RT**: the query response time (RT). Unit: milliseconds.
     *   **AnalyticDB_RP_QPS**: the queries per second (QPS). The value of this parameter must be a numeric value.
     *   **AnalyticDB_RP_WaitTime**: the query waiting time. Unit: milliseconds.
     *   **AnalyticDB_RP_OriginalNode**: the number of basic nodes in the resource group.
     *   **AnalyticDB_RP_ActualNode**: the number of scheduled nodes that are scaled out in the resource group.
     *   **AnalyticDB_RP_PlanNode**: the number of scheduled nodes to be scaled out in the resource group.
     *   **AnalyticDB_RP_TotalNode**: the total number of nodes in the resource group. Total number of nodes = Number of basic nodes + Number of scheduled nodes that are scaled out.
     *
     * >
     *
     *   If you leave this parameter empty, the monitoring information about all metrics is returned.
     *
     *   For more information about scaling plans, see [Create a resource scaling plan](~~189507~~).
     *
     * @example AnalyticDB_RP_CPU
     *
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The names of the resource groups that you want to query. You can enter multiple names of resource groups. Separate multiple names with commas (,).
     *
     * >
     *
     *   The value of this parameter is case-insensitive. For example, `USER_DEFAULT` and `user_default` specify the same resource group.
     *
     *   If you leave this parameter empty, the monitoring information about the `USER_DEFAULT` resource group is returned.
     *
     * @example TEST_POOL
     *
     * @var string
     */
    public $resourcePools;

    /**
     * @description The beginning of the time range to monitor the resource group. Specify the time in the ISO 8601 standard in the *yyyy-MM-ddTHH:mmZ* format. The time must be in UTC.
     *
     * > You can view only the monitoring information about the resource groups within the last two days.
     * @example 2021-06-10T07:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'DBClusterId'          => 'DBClusterId',
        'endTime'              => 'EndTime',
        'key'                  => 'Key',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'resourcePools'        => 'ResourcePools',
        'startTime'            => 'StartTime',
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
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->resourcePools) {
            $res['ResourcePools'] = $this->resourcePools;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBClusterResourcePoolPerformanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ResourcePools'])) {
            $model->resourcePools = $map['ResourcePools'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
