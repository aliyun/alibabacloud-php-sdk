<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBClusterPerformanceRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * This parameter is required.
     * @example cc-bp125e3uu94wo****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mmZ format. The time must be in UTC.
     *
     * This parameter is required.
     * @example 2021-11-27T16:38Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The performance metrics that you want to query. Separate multiple performance metrics with commas (,). You can query up to five performance metrics at a time. You can query the following performance metrics:
     *
     * >  The **Key** parameter is required.
     *
     *   **CPU**:
     *
     *   **CPU_USAGE**: the CPU utilization
     *
     *   **Memory**:
     *
     *   **MEM_USAGE**: the memory usage
     *   **MEM_USAGE_SIZE**: the used memory. Unit: MB
     *
     *   **Disk**:
     *
     *   **DISK_USAGE**: the disk usage
     *   **DISK_USAGE_SIZE**: the size of the used disks. Unit: MB
     *   **IOPS**: the disk Input/Output Operations per Second (IOPS)
     *
     *   **Connection**:
     *
     *   **CONN_USAGE**: the database connection usage
     *   **CONN_USAGE_COUNT**: the number of database connections used
     *
     *   **Write**:
     *
     *   **TPS**: the number of rows written per second
     *   **INSERT_SIZE**: the amount of data written per second. Unit: MB
     *
     *   **Query**:
     *
     *   **QPS**: the queries per second
     *   **AVG_SEEK**: the average number of random seek calls
     *
     *   **WAIT**:
     *
     *   **ZK_WAIT**: the average ZooKeeper wait time. Unit: ms
     *   **IO_WAIT**: the average I/O wait time. Unit: ms
     *   **CPU_WAIT**: the average CPU wait time. Unit: ms
     *
     * @example MEM_USAGE
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
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mmZ format. The time must be in Coordinated Universal Time (UTC).
     *
     * This parameter is required.
     * @example 2021-11-27T16:37Z
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
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBClusterPerformanceRequest
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
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
