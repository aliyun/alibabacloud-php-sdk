<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tablestore\V20201209\Models\ListInstancesResponseBody;

use AlibabaCloud\Dara\Model;

class instances extends Model
{
    /**
     * @var string
     */
    public $aliasName;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $instanceDescription;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceSpecification;

    /**
     * @var string
     */
    public $instanceStatus;

    /**
     * @var bool
     */
    public $isMultiAZ;

    /**
     * @var string
     */
    public $paymentType;

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
    public $SPInstanceId;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var string
     */
    public $userId;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
