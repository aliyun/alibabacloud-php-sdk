<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class DescribeAvailabilityZonesRequest extends Model
{
    /**
     * @description The language of the returned **RegionName** and **ZoneName** parameter values. Valid values:
     *
     *   **zh** (default): Chinese
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
     * @description The architecture of the instance. Valid values:
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
     * @description The secondary zone ID that is excluded from the query results. You can configure the ExcludeZoneId and ExcludeSecondaryZoneId parameters to specify the IDs of multiple zones that are excluded from the query results.
     *
     * @example cn-shanghai-b
     *
     * @var string
     */
    public $excludeSecondaryZoneId;

    /**
     * @description The zone ID that is excluded from the query results.
     *
     * @example cn-shanghai-g
     *
     * @var string
     */
    public $excludeZoneId;

    /**
     * @description The billing method of the product. Valid values:
     *
     *   **PrePaid**: subscription
     *   **PostPaid:** pay-as-you-go
     *
     * @example PrePaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The architecture of the instance. Valid values:
     *
     *   **sharding**: sharded cluster instance
     *   **replicate**: replica set or standalone instance
     *
     * @example replicate
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The edition of the instance. High-Available Edition and Preview Edition (dbfs) are supported.
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
     * @description The region ID of the instance. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/61933.html) operation to query the latest available regions.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The number of nodes in the instance.
     *
     * >  This parameter is available only for replica set instances.
     *
     * Valid values:
     *
     *   1
     *   3
     *   5
     *   7
     *
     * @example 3
     *
     * @var string
     */
    public $replicationFactor;

    /**
     * @description The ID of the resource group. For more information, see [View basic information of a resource group](https://help.aliyun.com/document_detail/151181.html).
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
     * @description The storage type. Valid values:
     *
     *   **cloud**: displays only zones available for instances that use cloud disks.
     *   **local**: only displays zones available for instances that use local disks instances.
     *   **default** or unspecified: displays zones available for instances that use cloud disks and those that use local disks.
     *
     * @example local
     *
     * @var string
     */
    public $storageSupport;

    /**
     * @description The storage type. Valid values:
     *
     *   **cloud_essd1**: PL1 Enterprise SSDs (ESSDs)
     *   **cloud_essd2**: PL2 ESSDs
     *   **cloud_essd3**: PL3 ESSDs
     *   **local_ssd**: local SSDs
     *
     * > *   Instances that run MongoDB 4.4 or later only use cloud disks to store data. If you do not specify this parameter, the value **cloud_essd1** is used by default.
     * > *   Instances that run MongoDB 4.2 and earlier only use local disks to store data. If you do not specify this parameter, the value **local_ssd** is used by default.
     *
     * @example local_ssd
     *
     * @var string
     */
    public $storageType;

    /**
     * @description The zone ID of the instance. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/61933.html) operation to query available zones.
     *
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'DBInstanceClass' => 'DBInstanceClass',
        'dbType' => 'DbType',
        'engineVersion' => 'EngineVersion',
        'excludeSecondaryZoneId' => 'ExcludeSecondaryZoneId',
        'excludeZoneId' => 'ExcludeZoneId',
        'instanceChargeType' => 'InstanceChargeType',
        'instanceType' => 'InstanceType',
        'mongoType' => 'MongoType',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'replicationFactor' => 'ReplicationFactor',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'storageSupport' => 'StorageSupport',
        'storageType' => 'StorageType',
        'zoneId' => 'ZoneId',
    ];

    public function validate() {}

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
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
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
        if (null !== $this->replicationFactor) {
            $res['ReplicationFactor'] = $this->replicationFactor;
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
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
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
        if (isset($map['ReplicationFactor'])) {
            $model->replicationFactor = $map['ReplicationFactor'];
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
