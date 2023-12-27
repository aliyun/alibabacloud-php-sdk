<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class DescribeAvailableResourceRequest extends Model
{
    /**
     * @description The display language of the response. Default value: zh-CN. Valid values:
     *
     *   **zh-CN**: Chinese
     *   **en-US**: English
     *
     * @example zh-CN
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The category of the instance. Valid values:
     *
     *   **Redis**
     *   **Memcache**
     *
     * @example Redis
     *
     * @var string
     */
    public $engine;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   **PrePaid**: subscription
     *   **PostPaid**: pay-as-you-go
     *
     * > The default value is **PrePaid**.
     * @example PrePaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The ID of the instance.
     *
     * > This parameter is available and required only if the **OrderType** parameter is set to **UPGRADE** or **DOWNGRADE**.
     * @example r-bp1zxszhcgatnx****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The edition of the instance. Valid values:
     *
     *   **professional**: Standard Edition. This edition supports the standalone, master-replica, read /write splitting, and cluster architectures and provides high scalability.
     *
     * @example professional
     *
     * @var string
     */
    public $instanceScene;

    /**
     * @description The ID of the data node for which you want to query available resources that can be created. You can call the [DescribeLogicInstanceTopology](~~94665~~) operation to query the ID of the data node. Remove the number sign (`#`) and the content that follows the number sign. For example, retain only r-bp10noxlhcoim2\*\*\*\*-db-0.
     *
     * > Before you specify this parameter, you must set the **InstanceId** parameter to the ID of an instance that uses the cluster or read/write splitting architecture.
     * @example r-bp1zxszhcgatnx****-db-0
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The type of the order. Default value: BUY. Valid values:
     *
     *   **BUY**: orders that are newly created
     *   **UPGRADE**: orders that are used to upgrade instances
     *   **DOWNGRADE**: orders that are used to downgrade instances
     *
     * @example BUY
     *
     * @var string
     */
    public $orderType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The series of the instance. Valid values:
     *
     *   **Local**: classic ApsaraDB for Redis Community Edition instance or classic ApsaraDB for Redis Enhanced Edition (Tair) DRAM-based instance
     *   **Tair_rdb**: cloud-native ApsaraDB for Redis Enhanced Edition (Tair) DRAM-based instance
     *   **Tair_scm**: ApsaraDB for Redis Enhanced Edition (Tair) persistent memory-optimized instance
     *   **Tair_essd**: ApsaraDB for Redis Enhanced Edition (Tair) ESSD-based instance
     *   **OnECS**: cloud-native ApsaraDB for Redis Community Edition instance
     *
     * @example Local
     *
     * @var string
     */
    public $productType;

    /**
     * @description The region ID of the instance. You can call the [DescribeRegions](~~61012~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the instance belongs. You can call the [ListResourceGroups](~~158855~~) operation to query the IDs of resource groups.
     *
     * > You can also query the IDs of resource groups in the Resource Management console. For more information, see [View basic information about a resource group](~~151181~~).
     * @example rg-acfmyiu4e******
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
     * @var string
     */
    public $securityToken;

    /**
     * @description The zone ID of the instance. You can call the [DescribeZones](~~94527~~) operation to query the most recent zone list.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'acceptLanguage'       => 'AcceptLanguage',
        'engine'               => 'Engine',
        'instanceChargeType'   => 'InstanceChargeType',
        'instanceId'           => 'InstanceId',
        'instanceScene'        => 'InstanceScene',
        'nodeId'               => 'NodeId',
        'orderType'            => 'OrderType',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'productType'          => 'ProductType',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
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
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceScene) {
            $res['InstanceScene'] = $this->instanceScene;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
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
     * @return DescribeAvailableResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceScene'])) {
            $model->instanceScene = $map['InstanceScene'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
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
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
