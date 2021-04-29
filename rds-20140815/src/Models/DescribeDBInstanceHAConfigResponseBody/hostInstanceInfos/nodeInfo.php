<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceHAConfigResponseBody\hostInstanceInfos;

use AlibabaCloud\Tea\Model;

class nodeInfo extends Model
{
    /**
     * @var string
     */
    public $logSyncTime;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $syncStatus;

    /**
     * @var string
     */
    public $dataSyncTime;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'logSyncTime'  => 'LogSyncTime',
        'nodeType'     => 'NodeType',
        'zoneId'       => 'ZoneId',
        'syncStatus'   => 'SyncStatus',
        'dataSyncTime' => 'DataSyncTime',
        'nodeId'       => 'NodeId',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logSyncTime) {
            $res['LogSyncTime'] = $this->logSyncTime;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->syncStatus) {
            $res['SyncStatus'] = $this->syncStatus;
        }
        if (null !== $this->dataSyncTime) {
            $res['DataSyncTime'] = $this->dataSyncTime;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['LogSyncTime'])) {
            $model->logSyncTime = $map['LogSyncTime'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['SyncStatus'])) {
            $model->syncStatus = $map['SyncStatus'];
        }
        if (isset($map['DataSyncTime'])) {
            $model->dataSyncTime = $map['DataSyncTime'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
