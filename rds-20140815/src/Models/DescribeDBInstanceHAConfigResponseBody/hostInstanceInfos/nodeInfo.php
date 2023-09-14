<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceHAConfigResponseBody\hostInstanceInfos;

use AlibabaCloud\Tea\Model;

class nodeInfo extends Model
{
    /**
     * @description The time when the secondary instance completed the synchronization of data from the primary instance. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2018-05-05T15:15:00Z
     *
     * @var string
     */
    public $dataSyncTime;

    /**
     * @description The time when the secondary instance received logs from the primary instance. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2018-05-05T15:15:00Z
     *
     * @var string
     */
    public $logSyncTime;

    /**
     * @description The ID of the instance.
     *
     * @example 3397027
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The type of the node. Valid values:
     *
     *   **Master**: the primary node
     *   **Slave**: the secondary node
     *
     * @example Master
     *
     * @var string
     */
    public $nodeType;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The synchronization status. Valid values:
     *
     *   **NotAvailable**: The synchronization fails. This means that faults occur.
     *   **Syncing**: The synchronization is in process. In this case, a primary/secondary switchover may cause data losses.
     *   **Synchronized**: The synchronization is completed.
     *   **NotSupport**: The database engine or database engine version does not involve the synchronization between the primary and secondary instances.
     *
     * @example NotAvailable
     *
     * @var string
     */
    public $syncStatus;

    /**
     * @description The ID of the zone.
     *
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'dataSyncTime' => 'DataSyncTime',
        'logSyncTime'  => 'LogSyncTime',
        'nodeId'       => 'NodeId',
        'nodeType'     => 'NodeType',
        'regionId'     => 'RegionId',
        'syncStatus'   => 'SyncStatus',
        'zoneId'       => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSyncTime) {
            $res['DataSyncTime'] = $this->dataSyncTime;
        }
        if (null !== $this->logSyncTime) {
            $res['LogSyncTime'] = $this->logSyncTime;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->syncStatus) {
            $res['SyncStatus'] = $this->syncStatus;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSyncTime'])) {
            $model->dataSyncTime = $map['DataSyncTime'];
        }
        if (isset($map['LogSyncTime'])) {
            $model->logSyncTime = $map['LogSyncTime'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SyncStatus'])) {
            $model->syncStatus = $map['SyncStatus'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
