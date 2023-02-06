<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DescribeAutoProvisioningGroupsRequest extends Model
{
    /**
     * @description The IDs of auto provisioning groups. You can specify up to 20 auto provisioning group IDs.
     *
     * @example apg-sn54avj8htgvtyh8****
     *
     * @var string[]
     */
    public $autoProvisioningGroupId;

    /**
     * @description The name of the auto provisioning group.
     *
     * @example testAutoProvisioningGroupName
     *
     * @var string
     */
    public $autoProvisioningGroupName;

    /**
     * @description The statuses of auto provisioning groups.
     *
     * @example active
     *
     * @var string[]
     */
    public $autoProvisioningGroupStatus;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of the page to return.
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page.
     *
     * Default value: 10.
     * @example 2
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID of the auto provisioning group.
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
    protected $_name = [
        'autoProvisioningGroupId'     => 'AutoProvisioningGroupId',
        'autoProvisioningGroupName'   => 'AutoProvisioningGroupName',
        'autoProvisioningGroupStatus' => 'AutoProvisioningGroupStatus',
        'ownerAccount'                => 'OwnerAccount',
        'ownerId'                     => 'OwnerId',
        'pageNumber'                  => 'PageNumber',
        'pageSize'                    => 'PageSize',
        'regionId'                    => 'RegionId',
        'resourceOwnerAccount'        => 'ResourceOwnerAccount',
        'resourceOwnerId'             => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoProvisioningGroupId) {
            $res['AutoProvisioningGroupId'] = $this->autoProvisioningGroupId;
        }
        if (null !== $this->autoProvisioningGroupName) {
            $res['AutoProvisioningGroupName'] = $this->autoProvisioningGroupName;
        }
        if (null !== $this->autoProvisioningGroupStatus) {
            $res['AutoProvisioningGroupStatus'] = $this->autoProvisioningGroupStatus;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAutoProvisioningGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoProvisioningGroupId'])) {
            if (!empty($map['AutoProvisioningGroupId'])) {
                $model->autoProvisioningGroupId = $map['AutoProvisioningGroupId'];
            }
        }
        if (isset($map['AutoProvisioningGroupName'])) {
            $model->autoProvisioningGroupName = $map['AutoProvisioningGroupName'];
        }
        if (isset($map['AutoProvisioningGroupStatus'])) {
            if (!empty($map['AutoProvisioningGroupStatus'])) {
                $model->autoProvisioningGroupStatus = $map['AutoProvisioningGroupStatus'];
            }
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

        return $model;
    }
}
