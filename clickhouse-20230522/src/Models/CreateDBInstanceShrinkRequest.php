<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models;

use AlibabaCloud\Dara\Model;

class CreateDBInstanceShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $backupSetId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @var string
     */
    public $DBTimeZone;

    /**
     * @var string
     */
    public $deploySchema;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $multiZoneShrink;

    /**
     * @var int
     */
    public $nodeCount;

    /**
     * @var int
     */
    public $nodeScaleMax;

    /**
     * @var int
     */
    public $nodeScaleMin;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $scaleMax;

    /**
     * @var string
     */
    public $scaleMin;

    /**
     * @var string
     */
    public $sourceDBInstanceId;

    /**
     * @var int
     */
    public $storageQuota;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vswitchId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'backupSetId' => 'BackupSetId',
        'clientToken' => 'ClientToken',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'DBTimeZone' => 'DBTimeZone',
        'deploySchema' => 'DeploySchema',
        'engine' => 'Engine',
        'engineVersion' => 'EngineVersion',
        'multiZoneShrink' => 'MultiZone',
        'nodeCount' => 'NodeCount',
        'nodeScaleMax' => 'NodeScaleMax',
        'nodeScaleMin' => 'NodeScaleMin',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'scaleMax' => 'ScaleMax',
        'scaleMin' => 'ScaleMin',
        'sourceDBInstanceId' => 'SourceDBInstanceId',
        'storageQuota' => 'StorageQuota',
        'storageType' => 'StorageType',
        'vpcId' => 'VpcId',
        'vswitchId' => 'VswitchId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupSetId) {
            $res['BackupSetId'] = $this->backupSetId;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }

        if (null !== $this->DBTimeZone) {
            $res['DBTimeZone'] = $this->DBTimeZone;
        }

        if (null !== $this->deploySchema) {
            $res['DeploySchema'] = $this->deploySchema;
        }

        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }

        if (null !== $this->multiZoneShrink) {
            $res['MultiZone'] = $this->multiZoneShrink;
        }

        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
        }

        if (null !== $this->nodeScaleMax) {
            $res['NodeScaleMax'] = $this->nodeScaleMax;
        }

        if (null !== $this->nodeScaleMin) {
            $res['NodeScaleMin'] = $this->nodeScaleMin;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->scaleMax) {
            $res['ScaleMax'] = $this->scaleMax;
        }

        if (null !== $this->scaleMin) {
            $res['ScaleMin'] = $this->scaleMin;
        }

        if (null !== $this->sourceDBInstanceId) {
            $res['SourceDBInstanceId'] = $this->sourceDBInstanceId;
        }

        if (null !== $this->storageQuota) {
            $res['StorageQuota'] = $this->storageQuota;
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
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
        if (isset($map['BackupSetId'])) {
            $model->backupSetId = $map['BackupSetId'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }

        if (isset($map['DBTimeZone'])) {
            $model->DBTimeZone = $map['DBTimeZone'];
        }

        if (isset($map['DeploySchema'])) {
            $model->deploySchema = $map['DeploySchema'];
        }

        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }

        if (isset($map['MultiZone'])) {
            $model->multiZoneShrink = $map['MultiZone'];
        }

        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }

        if (isset($map['NodeScaleMax'])) {
            $model->nodeScaleMax = $map['NodeScaleMax'];
        }

        if (isset($map['NodeScaleMin'])) {
            $model->nodeScaleMin = $map['NodeScaleMin'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ScaleMax'])) {
            $model->scaleMax = $map['ScaleMax'];
        }

        if (isset($map['ScaleMin'])) {
            $model->scaleMin = $map['ScaleMin'];
        }

        if (isset($map['SourceDBInstanceId'])) {
            $model->sourceDBInstanceId = $map['SourceDBInstanceId'];
        }

        if (isset($map['StorageQuota'])) {
            $model->storageQuota = $map['StorageQuota'];
        }

        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
