<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Tea\Model;

class DescribeSmartAccessGatewaysRequest extends Model
{
    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

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
    public $regionId;

    /**
     * @var string
     */
    public $associatedCcnId;

    /**
     * @var string
     */
    public $smartAGId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var string
     */
    public $aclIds;

    /**
     * @var string
     */
    public $unboundAclIds;

    /**
     * @var string
     */
    public $instanceType;

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
    public $softwareVersion;

    /**
     * @var string
     */
    public $versionComparator;

    /**
     * @var string
     */
    public $businessState;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string[]
     */
    public $smartAGIds;
    protected $_name = [
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'regionId'             => 'RegionId',
        'associatedCcnId'      => 'AssociatedCcnId',
        'smartAGId'            => 'SmartAGId',
        'status'               => 'Status',
        'name'                 => 'Name',
        'pageSize'             => 'PageSize',
        'pageNumber'           => 'PageNumber',
        'serialNumber'         => 'SerialNumber',
        'aclIds'               => 'AclIds',
        'unboundAclIds'        => 'UnboundAclIds',
        'instanceType'         => 'InstanceType',
        'canAssociateQos'      => 'CanAssociateQos',
        'hardwareType'         => 'HardwareType',
        'softwareVersion'      => 'SoftwareVersion',
        'versionComparator'    => 'VersionComparator',
        'businessState'        => 'BusinessState',
        'resourceGroupId'      => 'ResourceGroupId',
        'smartAGIds'           => 'SmartAGIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->associatedCcnId) {
            $res['AssociatedCcnId'] = $this->associatedCcnId;
        }
        if (null !== $this->smartAGId) {
            $res['SmartAGId'] = $this->smartAGId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->aclIds) {
            $res['AclIds'] = $this->aclIds;
        }
        if (null !== $this->unboundAclIds) {
            $res['UnboundAclIds'] = $this->unboundAclIds;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->canAssociateQos) {
            $res['CanAssociateQos'] = $this->canAssociateQos;
        }
        if (null !== $this->hardwareType) {
            $res['HardwareType'] = $this->hardwareType;
        }
        if (null !== $this->softwareVersion) {
            $res['SoftwareVersion'] = $this->softwareVersion;
        }
        if (null !== $this->versionComparator) {
            $res['VersionComparator'] = $this->versionComparator;
        }
        if (null !== $this->businessState) {
            $res['BusinessState'] = $this->businessState;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->smartAGIds) {
            $res['SmartAGIds'] = $this->smartAGIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSmartAccessGatewaysRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['AssociatedCcnId'])) {
            $model->associatedCcnId = $map['AssociatedCcnId'];
        }
        if (isset($map['SmartAGId'])) {
            $model->smartAGId = $map['SmartAGId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['AclIds'])) {
            $model->aclIds = $map['AclIds'];
        }
        if (isset($map['UnboundAclIds'])) {
            $model->unboundAclIds = $map['UnboundAclIds'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['CanAssociateQos'])) {
            $model->canAssociateQos = $map['CanAssociateQos'];
        }
        if (isset($map['HardwareType'])) {
            $model->hardwareType = $map['HardwareType'];
        }
        if (isset($map['SoftwareVersion'])) {
            $model->softwareVersion = $map['SoftwareVersion'];
        }
        if (isset($map['VersionComparator'])) {
            $model->versionComparator = $map['VersionComparator'];
        }
        if (isset($map['BusinessState'])) {
            $model->businessState = $map['BusinessState'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SmartAGIds'])) {
            if (!empty($map['SmartAGIds'])) {
                $model->smartAGIds = $map['SmartAGIds'];
            }
        }

        return $model;
    }
}
