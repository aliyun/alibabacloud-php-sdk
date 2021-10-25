<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models;

use AlibabaCloud\Tea\Model;

class CreateDbfsRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $fsName;

    /**
     * @var string
     */
    public $category;

    /**
     * @var int
     */
    public $sizeG;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $snapshotId;

    /**
     * @var bool
     */
    public $deleteSnapshot;

    /**
     * @var string
     */
    public $performanceLevel;

    /**
     * @var bool
     */
    public $enableRaid;

    /**
     * @var int
     */
    public $raidStripeUnitNumber;

    /**
     * @var string
     */
    public $KMSKeyId;

    /**
     * @var bool
     */
    public $encryption;

    /**
     * @var string
     */
    public $usedScene;

    /**
     * @var string
     */
    public $instanceType;
    protected $_name = [
        'regionId'             => 'RegionId',
        'fsName'               => 'FsName',
        'category'             => 'Category',
        'sizeG'                => 'SizeG',
        'zoneId'               => 'ZoneId',
        'clientToken'          => 'ClientToken',
        'snapshotId'           => 'SnapshotId',
        'deleteSnapshot'       => 'DeleteSnapshot',
        'performanceLevel'     => 'PerformanceLevel',
        'enableRaid'           => 'EnableRaid',
        'raidStripeUnitNumber' => 'RaidStripeUnitNumber',
        'KMSKeyId'             => 'KMSKeyId',
        'encryption'           => 'Encryption',
        'usedScene'            => 'UsedScene',
        'instanceType'         => 'InstanceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->fsName) {
            $res['FsName'] = $this->fsName;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->sizeG) {
            $res['SizeG'] = $this->sizeG;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->deleteSnapshot) {
            $res['DeleteSnapshot'] = $this->deleteSnapshot;
        }
        if (null !== $this->performanceLevel) {
            $res['PerformanceLevel'] = $this->performanceLevel;
        }
        if (null !== $this->enableRaid) {
            $res['EnableRaid'] = $this->enableRaid;
        }
        if (null !== $this->raidStripeUnitNumber) {
            $res['RaidStripeUnitNumber'] = $this->raidStripeUnitNumber;
        }
        if (null !== $this->KMSKeyId) {
            $res['KMSKeyId'] = $this->KMSKeyId;
        }
        if (null !== $this->encryption) {
            $res['Encryption'] = $this->encryption;
        }
        if (null !== $this->usedScene) {
            $res['UsedScene'] = $this->usedScene;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['FsName'])) {
            $model->fsName = $map['FsName'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['SizeG'])) {
            $model->sizeG = $map['SizeG'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['DeleteSnapshot'])) {
            $model->deleteSnapshot = $map['DeleteSnapshot'];
        }
        if (isset($map['PerformanceLevel'])) {
            $model->performanceLevel = $map['PerformanceLevel'];
        }
        if (isset($map['EnableRaid'])) {
            $model->enableRaid = $map['EnableRaid'];
        }
        if (isset($map['RaidStripeUnitNumber'])) {
            $model->raidStripeUnitNumber = $map['RaidStripeUnitNumber'];
        }
        if (isset($map['KMSKeyId'])) {
            $model->KMSKeyId = $map['KMSKeyId'];
        }
        if (isset($map['Encryption'])) {
            $model->encryption = $map['Encryption'];
        }
        if (isset($map['UsedScene'])) {
            $model->usedScene = $map['UsedScene'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        return $model;
    }
}
