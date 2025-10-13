<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models\ListBackupDataResponseBody;

use AlibabaCloud\Dara\Model;

class backupDataList extends Model
{
    /**
     * @var string
     */
    public $backupType;

    /**
     * @var int
     */
    public $coldDataSize;

    /**
     * @var string
     */
    public $dataDesc;

    /**
     * @var string
     */
    public $dataGran;

    /**
     * @var int
     */
    public $dataSize;

    /**
     * @var string
     */
    public $dataTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceRegion;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $instanceZoneId;

    /**
     * @var string
     */
    public $snapshotRegion;

    /**
     * @var string
     */
    public $snapshotZoneId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $triggerType;
    protected $_name = [
        'backupType' => 'BackupType',
        'coldDataSize' => 'ColdDataSize',
        'dataDesc' => 'DataDesc',
        'dataGran' => 'DataGran',
        'dataSize' => 'DataSize',
        'dataTime' => 'DataTime',
        'endTime' => 'EndTime',
        'id' => 'Id',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'instanceRegion' => 'InstanceRegion',
        'instanceType' => 'InstanceType',
        'instanceZoneId' => 'InstanceZoneId',
        'snapshotRegion' => 'SnapshotRegion',
        'snapshotZoneId' => 'SnapshotZoneId',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'triggerType' => 'TriggerType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }

        if (null !== $this->coldDataSize) {
            $res['ColdDataSize'] = $this->coldDataSize;
        }

        if (null !== $this->dataDesc) {
            $res['DataDesc'] = $this->dataDesc;
        }

        if (null !== $this->dataGran) {
            $res['DataGran'] = $this->dataGran;
        }

        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
        }

        if (null !== $this->dataTime) {
            $res['DataTime'] = $this->dataTime;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->instanceRegion) {
            $res['InstanceRegion'] = $this->instanceRegion;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->instanceZoneId) {
            $res['InstanceZoneId'] = $this->instanceZoneId;
        }

        if (null !== $this->snapshotRegion) {
            $res['SnapshotRegion'] = $this->snapshotRegion;
        }

        if (null !== $this->snapshotZoneId) {
            $res['SnapshotZoneId'] = $this->snapshotZoneId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->triggerType) {
            $res['TriggerType'] = $this->triggerType;
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
        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }

        if (isset($map['ColdDataSize'])) {
            $model->coldDataSize = $map['ColdDataSize'];
        }

        if (isset($map['DataDesc'])) {
            $model->dataDesc = $map['DataDesc'];
        }

        if (isset($map['DataGran'])) {
            $model->dataGran = $map['DataGran'];
        }

        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }

        if (isset($map['DataTime'])) {
            $model->dataTime = $map['DataTime'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['InstanceRegion'])) {
            $model->instanceRegion = $map['InstanceRegion'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['InstanceZoneId'])) {
            $model->instanceZoneId = $map['InstanceZoneId'];
        }

        if (isset($map['SnapshotRegion'])) {
            $model->snapshotRegion = $map['SnapshotRegion'];
        }

        if (isset($map['SnapshotZoneId'])) {
            $model->snapshotZoneId = $map['SnapshotZoneId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TriggerType'])) {
            $model->triggerType = $map['TriggerType'];
        }

        return $model;
    }
}
