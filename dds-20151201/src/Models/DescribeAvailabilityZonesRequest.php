<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class DescribeAvailabilityZonesRequest extends Model
{
    /**
     * @description The language of the returned values of the **RegionName** and **ZoneName** parameters. Default value: zh. Valid values:
     *
     *   **zh**: Chinese.
     *   **en**: English
     *
     * @example en
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The instance type of the instance.
     *
     * @example dds.mongo.standard
     *
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @description The database engine type of the instance. Valid values:
     *
     *   **normal**: replica set instance
     *   **sharding**: sharded cluster instance
     *
     * @example normal
     *
     * @var string
     */
    public $dbType;

    /**
     * @description The database engine version of the instance.
     *
     * @example 5.0
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The ID of the secondary zone that you want to exclude from the query results. You can configure both the ExcludeSecondaryZoneId and ExcludeZoneId parameters to filter multiple zones that you want to exclude from the query results.
     *
     * @example cn-shanghai-b
     *
     * @var string
     */
    public $excludeSecondaryZoneId;

    /**
     * @description The ID of the zone that you want to exclude from the query results.
     *
     * @example cn-shanghai-g
     *
     * @var string
     */
    public $excludeZoneId;

    /**
     * @description The billing method of the instance. Default value: PrePaid. Valid values:
     *
     *   **PrePaid**: subscription
     *   **PostPaid**: pay-as-you-go
     *
     * @example PrePaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The edition of the ApsaraDB for MongoDB instance. The instance can be of a high-availability edition or beta edition.
     *
     * @example dbfs
     *
     * @var string
     */
    public $mongoType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the instance. You can call the [DescribeRegions](~~61933~~) operation to query the latest available regions.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group. For more information, see [View basic information of a resource group](~~151181~~).
     *
     * @example rg-acfmx2m4rqu7pry
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The zones to be displayed. The values include the zones in which you can create an instance that uses cloud disks, the zones in which you can create an instance that uses local disks, and the zones in which you can create an instance that uses cloud disks and local disks.
     *
     * @example lcoal
     *
     * @var string
     */
    public $storageSupport;

    /**
     * @description The storage type of the instance. Valid values:
     *
     *   **cloud_essd1**: PL1.enhanced SSD (ESSD)
     *   **cloud_essd2**: PL2 ESSD.
     *   **cloud_essd3**: PL3 ESSD.
     *   **local_ssd**: local SSD.
     *
     * > *   Instances of MongoDB 4.4 and later only support cloud disks. **cloud_essd1** is selected if you leave this parameter empty.
     * > *   Instances of MongoDB 4.2 and earlier support only local disks. **local_ssd** is selected if you leave this parameter empty.
     * @example local_ssd
     *
     * @var string
     */
    public $storageType;

    /**
     * @description The zone ID of the instance. You can call the [DescribeRegions](~~61933~~) operation to query available zones.
     *
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'acceptLanguage'         => 'AcceptLanguage',
        'DBInstanceClass'        => 'DBInstanceClass',
        'dbType'                 => 'DbType',
        'engineVersion'          => 'EngineVersion',
        'excludeSecondaryZoneId' => 'ExcludeSecondaryZoneId',
        'excludeZoneId'          => 'ExcludeZoneId',
        'instanceChargeType'     => 'InstanceChargeType',
        'mongoType'              => 'MongoType',
        'ownerAccount'           => 'OwnerAccount',
        'ownerId'                => 'OwnerId',
        'regionId'               => 'RegionId',
        'resourceGroupId'        => 'ResourceGroupId',
        'resourceOwnerAccount'   => 'ResourceOwnerAccount',
        'resourceOwnerId'        => 'ResourceOwnerId',
        'storageSupport'         => 'StorageSupport',
        'storageType'            => 'StorageType',
        'zoneId'                 => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->excludeSecondaryZoneId) {
            $res['ExcludeSecondaryZoneId'] = $this->excludeSecondaryZoneId;
        }
        if (null !== $this->excludeZoneId) {
            $res['ExcludeZoneId'] = $this->excludeZoneId;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->mongoType) {
            $res['MongoType'] = $this->mongoType;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->storageSupport) {
            $res['StorageSupport'] = $this->storageSupport;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAvailabilityZonesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['ExcludeSecondaryZoneId'])) {
            $model->excludeSecondaryZoneId = $map['ExcludeSecondaryZoneId'];
        }
        if (isset($map['ExcludeZoneId'])) {
            $model->excludeZoneId = $map['ExcludeZoneId'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['MongoType'])) {
            $model->mongoType = $map['MongoType'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['StorageSupport'])) {
            $model->storageSupport = $map['StorageSupport'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
