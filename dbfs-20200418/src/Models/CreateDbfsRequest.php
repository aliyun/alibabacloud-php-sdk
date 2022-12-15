<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models;

use AlibabaCloud\Tea\Model;

class CreateDbfsRequest extends Model
{
    /**
     * @example {"cpuCoreCount":0.5,"memorySize":512,"pageCacheSize":128}
     *
     * @var string
     */
    public $advancedFeatures;

    /**
     * @example standard
     *
     * @var string
     */
    public $category;

    /**
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example false
     *
     * @var bool
     */
    public $deleteSnapshot;

    /**
     * @example false
     *
     * @var bool
     */
    public $enableRaid;

    /**
     * @example false
     *
     * @var bool
     */
    public $encryption;

    /**
     * @example testdbfs-001
     *
     * @var string
     */
    public $fsName;

    /**
     * @example dbfs.small
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example 0e478b7a-4262-4802-b8cb-00d3fb40826X
     *
     * @var string
     */
    public $KMSKeyId;

    /**
     * @example PL1
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @example 2
     *
     * @var int
     */
    public $raidStripeUnitNumber;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 200
     *
     * @var int
     */
    public $sizeG;

    /**
     * @example s-y2vZ3********vvMilZ2hQ
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @example PostgreSQL
     *
     * @var string
     */
    public $usedScene;

    /**
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'advancedFeatures'     => 'AdvancedFeatures',
        'category'             => 'Category',
        'clientToken'          => 'ClientToken',
        'deleteSnapshot'       => 'DeleteSnapshot',
        'enableRaid'           => 'EnableRaid',
        'encryption'           => 'Encryption',
        'fsName'               => 'FsName',
        'instanceType'         => 'InstanceType',
        'KMSKeyId'             => 'KMSKeyId',
        'performanceLevel'     => 'PerformanceLevel',
        'raidStripeUnitNumber' => 'RaidStripeUnitNumber',
        'regionId'             => 'RegionId',
        'sizeG'                => 'SizeG',
        'snapshotId'           => 'SnapshotId',
        'usedScene'            => 'UsedScene',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advancedFeatures) {
            $res['AdvancedFeatures'] = $this->advancedFeatures;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->deleteSnapshot) {
            $res['DeleteSnapshot'] = $this->deleteSnapshot;
        }
        if (null !== $this->enableRaid) {
            $res['EnableRaid'] = $this->enableRaid;
        }
        if (null !== $this->encryption) {
            $res['Encryption'] = $this->encryption;
        }
        if (null !== $this->fsName) {
            $res['FsName'] = $this->fsName;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->KMSKeyId) {
            $res['KMSKeyId'] = $this->KMSKeyId;
        }
        if (null !== $this->performanceLevel) {
            $res['PerformanceLevel'] = $this->performanceLevel;
        }
        if (null !== $this->raidStripeUnitNumber) {
            $res['RaidStripeUnitNumber'] = $this->raidStripeUnitNumber;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sizeG) {
            $res['SizeG'] = $this->sizeG;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->usedScene) {
            $res['UsedScene'] = $this->usedScene;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDbfsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdvancedFeatures'])) {
            $model->advancedFeatures = $map['AdvancedFeatures'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DeleteSnapshot'])) {
            $model->deleteSnapshot = $map['DeleteSnapshot'];
        }
        if (isset($map['EnableRaid'])) {
            $model->enableRaid = $map['EnableRaid'];
        }
        if (isset($map['Encryption'])) {
            $model->encryption = $map['Encryption'];
        }
        if (isset($map['FsName'])) {
            $model->fsName = $map['FsName'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['KMSKeyId'])) {
            $model->KMSKeyId = $map['KMSKeyId'];
        }
        if (isset($map['PerformanceLevel'])) {
            $model->performanceLevel = $map['PerformanceLevel'];
        }
        if (isset($map['RaidStripeUnitNumber'])) {
            $model->raidStripeUnitNumber = $map['RaidStripeUnitNumber'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SizeG'])) {
            $model->sizeG = $map['SizeG'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['UsedScene'])) {
            $model->usedScene = $map['UsedScene'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
