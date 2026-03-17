<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;

class DescribeSmartAccessGatewaysRequest extends Model
{
    /**
     * @var string
     */
    public $aclIds;

    /**
     * @var string
     */
    public $associatedCcnId;

    /**
     * @var string
     */
    public $associatedCcnName;

    /**
     * @var string
     */
    public $businessState;

    /**
     * @var bool
     */
    public $canAssociateQos;

    /**
     * @var string
     */
    public $hardwareType;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

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
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var string
     */
    public $smartAGId;

    /**
     * @var string[]
     */
    public $smartAGIds;

    /**
     * @var string
     */
    public $softwareVersion;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $unboundAclIds;

    /**
     * @var string
     */
    public $versionComparator;
    protected $_name = [
        'aclIds' => 'AclIds',
        'associatedCcnId' => 'AssociatedCcnId',
        'associatedCcnName' => 'AssociatedCcnName',
        'businessState' => 'BusinessState',
        'canAssociateQos' => 'CanAssociateQos',
        'hardwareType' => 'HardwareType',
        'instanceType' => 'InstanceType',
        'name' => 'Name',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'serialNumber' => 'SerialNumber',
        'smartAGId' => 'SmartAGId',
        'smartAGIds' => 'SmartAGIds',
        'softwareVersion' => 'SoftwareVersion',
        'status' => 'Status',
        'unboundAclIds' => 'UnboundAclIds',
        'versionComparator' => 'VersionComparator',
    ];

    public function validate()
    {
        if (\is_array($this->smartAGIds)) {
            Model::validateArray($this->smartAGIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclIds) {
            $res['AclIds'] = $this->aclIds;
        }

        if (null !== $this->associatedCcnId) {
            $res['AssociatedCcnId'] = $this->associatedCcnId;
        }

        if (null !== $this->associatedCcnName) {
            $res['AssociatedCcnName'] = $this->associatedCcnName;
        }

        if (null !== $this->businessState) {
            $res['BusinessState'] = $this->businessState;
        }

        if (null !== $this->canAssociateQos) {
            $res['CanAssociateQos'] = $this->canAssociateQos;
        }

        if (null !== $this->hardwareType) {
            $res['HardwareType'] = $this->hardwareType;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }

        if (null !== $this->smartAGId) {
            $res['SmartAGId'] = $this->smartAGId;
        }

        if (null !== $this->smartAGIds) {
            if (\is_array($this->smartAGIds)) {
                $res['SmartAGIds'] = [];
                $n1 = 0;
                foreach ($this->smartAGIds as $item1) {
                    $res['SmartAGIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->softwareVersion) {
            $res['SoftwareVersion'] = $this->softwareVersion;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->unboundAclIds) {
            $res['UnboundAclIds'] = $this->unboundAclIds;
        }

        if (null !== $this->versionComparator) {
            $res['VersionComparator'] = $this->versionComparator;
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
        if (isset($map['AclIds'])) {
            $model->aclIds = $map['AclIds'];
        }

        if (isset($map['AssociatedCcnId'])) {
            $model->associatedCcnId = $map['AssociatedCcnId'];
        }

        if (isset($map['AssociatedCcnName'])) {
            $model->associatedCcnName = $map['AssociatedCcnName'];
        }

        if (isset($map['BusinessState'])) {
            $model->businessState = $map['BusinessState'];
        }

        if (isset($map['CanAssociateQos'])) {
            $model->canAssociateQos = $map['CanAssociateQos'];
        }

        if (isset($map['HardwareType'])) {
            $model->hardwareType = $map['HardwareType'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }

        if (isset($map['SmartAGId'])) {
            $model->smartAGId = $map['SmartAGId'];
        }

        if (isset($map['SmartAGIds'])) {
            if (!empty($map['SmartAGIds'])) {
                $model->smartAGIds = [];
                $n1 = 0;
                foreach ($map['SmartAGIds'] as $item1) {
                    $model->smartAGIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SoftwareVersion'])) {
            $model->softwareVersion = $map['SoftwareVersion'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UnboundAclIds'])) {
            $model->unboundAclIds = $map['UnboundAclIds'];
        }

        if (isset($map['VersionComparator'])) {
            $model->versionComparator = $map['VersionComparator'];
        }

        return $model;
    }
}
