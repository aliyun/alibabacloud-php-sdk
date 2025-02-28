<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceHAConfigResponseBody\hostInstanceInfos;

use AlibabaCloud\Dara\Model;

class nodeInfo extends Model
{
    /**
     * @var string
     */
    public $dataSyncTime;
    /**
     * @var string
     */
    public $logSyncTime;
    /**
     * @var string
     */
    public $nodeId;
    /**
     * @var string
     */
    public $nodeType;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $syncStatus;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
