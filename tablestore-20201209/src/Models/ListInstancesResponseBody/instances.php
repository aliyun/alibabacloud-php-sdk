<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tablestore\V20201209\Models\ListInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @description The instance alias.
     *
     * @example instance-test
     *
     * @var string
     */
    public $aliasName;

    /**
     * @description The time when the instance was created.
     *
     * @example 2019-04-07T09:19:21Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The instance description.
     *
     * @example Description of the test instance.
     *
     * @var string
     */
    public $instanceDescription;

    /**
     * @description The name of the instance, which is used to uniquely identify the instance.
     *
     * @example instance-test
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The type of the instance.
     *
     *   SSD: high-performance instance
     *   HYBRID: capacity instance
     *
     * @example HYBRID
     *
     * @var string
     */
    public $instanceSpecification;

    /**
     * @description The status of the instance.
     *
     *   normal: The instance runs as expected.
     *   forbidden: The instance is disabled.
     *   Deleting: The instance is being released.
     *
     * @example normal
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @description Indicates whether zone-redundant storage (ZRS) is enabled for the instance.
     *
     *   true: ZRS is enabled for the instance.
     *   false: Locally redundant storage (LRS) is enabled for the instance.
     *
     * @example true
     *
     * @var bool
     */
    public $isMultiAZ;

    /**
     * @description The billing method.
     *
     *   Subscription: subscription
     *   PayAsYouGo: pay as you go
     *
     * @example Subscription
     *
     * @var string
     */
    public $paymentType;

    /**
     * @description The region ID.
     *
     * @example cn-huhehaote
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmxh4em5jnbcd
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The instance ID.
     *
     * @example ots_standard_public_cn-g4t3igqjj002
     *
     * @var string
     */
    public $SPInstanceId;

    /**
     * @description The storage type.
     *
     *   SSD: high-performance
     *   HYBRID: capacity
     *
     * @example HYBRID
     *
     * @var string
     */
    public $storageType;

    /**
     * @description The user ID.
     *
     * @example 13542356466
     *
     * @var string
     */
    public $userId;

    /**
     * @description The VCU quota.
     *
     * @example 3
     *
     * @var int
     */
    public $VCUQuota;
    protected $_name = [
        'aliasName' => 'AliasName',
        'createTime' => 'CreateTime',
        'instanceDescription' => 'InstanceDescription',
        'instanceName' => 'InstanceName',
        'instanceSpecification' => 'InstanceSpecification',
        'instanceStatus' => 'InstanceStatus',
        'isMultiAZ' => 'IsMultiAZ',
        'paymentType' => 'PaymentType',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'SPInstanceId' => 'SPInstanceId',
        'storageType' => 'StorageType',
        'userId' => 'UserId',
        'VCUQuota' => 'VCUQuota',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->instanceDescription) {
            $res['InstanceDescription'] = $this->instanceDescription;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceSpecification) {
            $res['InstanceSpecification'] = $this->instanceSpecification;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->isMultiAZ) {
            $res['IsMultiAZ'] = $this->isMultiAZ;
        }
        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->SPInstanceId) {
            $res['SPInstanceId'] = $this->SPInstanceId;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->VCUQuota) {
            $res['VCUQuota'] = $this->VCUQuota;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['InstanceDescription'])) {
            $model->instanceDescription = $map['InstanceDescription'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceSpecification'])) {
            $model->instanceSpecification = $map['InstanceSpecification'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['IsMultiAZ'])) {
            $model->isMultiAZ = $map['IsMultiAZ'];
        }
        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SPInstanceId'])) {
            $model->SPInstanceId = $map['SPInstanceId'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['VCUQuota'])) {
            $model->VCUQuota = $map['VCUQuota'];
        }

        return $model;
    }
}
