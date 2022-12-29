<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class DescribeDedicatedClusterInstanceListRequest extends Model
{
    /**
     * @description The ID of the dedicated cluster to which the instance belongs.
     *
     * >  Separate multiple IDs with commas (,).
     * @example dhg-****************
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the dedicated host.
     *
     * >  Separate multiple names with commas (,).
     * @example ch-****************
     *
     * @var string
     */
    public $dedicatedHostName;

    /**
     * @description The database engine. Set the value to MongoDB.
     *
     * @example MongoDB
     *
     * @var string
     */
    public $engine;

    /**
     * @description The version number of the database engine. Set the value to **4.2**.
     *
     * @example 4.2
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The ID of the ApsaraDB for MongoDB instance.
     *
     * >  Separate multiple IDs with commas (,).
     * @example dds-t4n**********
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The network type of the instance. Valid values:
     *
     *   0: The instance is connected over the Internet.
     *   1: The instance is connected over an internal network.
     *   2\. The instance is deployed in a VPC.
     *
     * Default value: 1.
     * @example 1
     *
     * @var string
     */
    public $instanceNetType;

    /**
     * @description The status of the instance. For information about the valid values of this parameter, see [Valid values of the InstanceStatus parameter for DescribeDedicatedClusterInstanceList](~~190071~~).
     *
     * @example 1
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of the page to return. Valid values: any non-zero positive integer. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Valid values: **30**, **50**, and **100**. Default value: **30**.
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the region. You can call the [DescribeRegions](~~61933~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The ID of the zone. You can call [DescribeZones](~~61933~~) to query the zone ID.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'clusterId'            => 'ClusterId',
        'dedicatedHostName'    => 'DedicatedHostName',
        'engine'               => 'Engine',
        'engineVersion'        => 'EngineVersion',
        'instanceId'           => 'InstanceId',
        'instanceNetType'      => 'InstanceNetType',
        'instanceStatus'       => 'InstanceStatus',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'securityToken'        => 'SecurityToken',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->dedicatedHostName) {
            $res['DedicatedHostName'] = $this->dedicatedHostName;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceNetType) {
            $res['InstanceNetType'] = $this->instanceNetType;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDedicatedClusterInstanceListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DedicatedHostName'])) {
            $model->dedicatedHostName = $map['DedicatedHostName'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceNetType'])) {
            $model->instanceNetType = $map['InstanceNetType'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
