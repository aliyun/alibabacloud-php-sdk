<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsRequest\tag;

class DescribeAutoProvisioningGroupsRequest extends Model
{
    /**
     * @var string[]
     */
    public $autoProvisioningGroupId;
    /**
     * @var string
     */
    public $autoProvisioningGroupName;
    /**
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
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'autoProvisioningGroupId'     => 'AutoProvisioningGroupId',
        'autoProvisioningGroupName'   => 'AutoProvisioningGroupName',
        'autoProvisioningGroupStatus' => 'AutoProvisioningGroupStatus',
        'ownerAccount'                => 'OwnerAccount',
        'ownerId'                     => 'OwnerId',
        'pageNumber'                  => 'PageNumber',
        'pageSize'                    => 'PageSize',
        'regionId'                    => 'RegionId',
        'resourceGroupId'             => 'ResourceGroupId',
        'resourceOwnerAccount'        => 'ResourceOwnerAccount',
        'resourceOwnerId'             => 'ResourceOwnerId',
        'tag'                         => 'Tag',
    ];

    public function validate()
    {
        if (\is_array($this->autoProvisioningGroupId)) {
            Model::validateArray($this->autoProvisioningGroupId);
        }
        if (\is_array($this->autoProvisioningGroupStatus)) {
            Model::validateArray($this->autoProvisioningGroupStatus);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoProvisioningGroupId) {
            if (\is_array($this->autoProvisioningGroupId)) {
                $res['AutoProvisioningGroupId'] = [];
                $n1                             = 0;
                foreach ($this->autoProvisioningGroupId as $item1) {
                    $res['AutoProvisioningGroupId'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->autoProvisioningGroupName) {
            $res['AutoProvisioningGroupName'] = $this->autoProvisioningGroupName;
        }

        if (null !== $this->autoProvisioningGroupStatus) {
            if (\is_array($this->autoProvisioningGroupStatus)) {
                $res['AutoProvisioningGroupStatus'] = [];
                $n1                                 = 0;
                foreach ($this->autoProvisioningGroupStatus as $item1) {
                    $res['AutoProvisioningGroupStatus'][$n1++] = $item1;
                }
            }
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

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1         = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['AutoProvisioningGroupId'])) {
            if (!empty($map['AutoProvisioningGroupId'])) {
                $model->autoProvisioningGroupId = [];
                $n1                             = 0;
                foreach ($map['AutoProvisioningGroupId'] as $item1) {
                    $model->autoProvisioningGroupId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['AutoProvisioningGroupName'])) {
            $model->autoProvisioningGroupName = $map['AutoProvisioningGroupName'];
        }

        if (isset($map['AutoProvisioningGroupStatus'])) {
            if (!empty($map['AutoProvisioningGroupStatus'])) {
                $model->autoProvisioningGroupStatus = [];
                $n1                                 = 0;
                foreach ($map['AutoProvisioningGroupStatus'] as $item1) {
                    $model->autoProvisioningGroupStatus[$n1++] = $item1;
                }
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

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1         = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
