<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagesRequest\filter;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagesRequest\tag;

class DescribeImagesRequest extends Model
{
    /**
     * @var string
     */
    public $actionType;
    /**
     * @var string
     */
    public $architecture;
    /**
     * @var bool
     */
    public $dryRun;
    /**
     * @var filter[]
     */
    public $filter;
    /**
     * @var string
     */
    public $imageFamily;
    /**
     * @var string
     */
    public $imageId;
    /**
     * @var string
     */
    public $imageName;
    /**
     * @var string
     */
    public $imageOwnerAlias;
    /**
     * @var int
     */
    public $imageOwnerId;
    /**
     * @var string
     */
    public $instanceType;
    /**
     * @var bool
     */
    public $isPublic;
    /**
     * @var bool
     */
    public $isSupportCloudinit;
    /**
     * @var bool
     */
    public $isSupportIoOptimized;
    /**
     * @var string
     */
    public $OSType;
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
     * @var bool
     */
    public $showExpired;
    /**
     * @var string
     */
    public $snapshotId;
    /**
     * @var string
     */
    public $status;
    /**
     * @var tag[]
     */
    public $tag;
    /**
     * @var string
     */
    public $usage;
    protected $_name = [
        'actionType'           => 'ActionType',
        'architecture'         => 'Architecture',
        'dryRun'               => 'DryRun',
        'filter'               => 'Filter',
        'imageFamily'          => 'ImageFamily',
        'imageId'              => 'ImageId',
        'imageName'            => 'ImageName',
        'imageOwnerAlias'      => 'ImageOwnerAlias',
        'imageOwnerId'         => 'ImageOwnerId',
        'instanceType'         => 'InstanceType',
        'isPublic'             => 'IsPublic',
        'isSupportCloudinit'   => 'IsSupportCloudinit',
        'isSupportIoOptimized' => 'IsSupportIoOptimized',
        'OSType'               => 'OSType',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'showExpired'          => 'ShowExpired',
        'snapshotId'           => 'SnapshotId',
        'status'               => 'Status',
        'tag'                  => 'Tag',
        'usage'                => 'Usage',
    ];

    public function validate()
    {
        if (\is_array($this->filter)) {
            Model::validateArray($this->filter);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionType) {
            $res['ActionType'] = $this->actionType;
        }

        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->filter) {
            if (\is_array($this->filter)) {
                $res['Filter'] = [];
                $n1            = 0;
                foreach ($this->filter as $item1) {
                    $res['Filter'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->imageFamily) {
            $res['ImageFamily'] = $this->imageFamily;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }

        if (null !== $this->imageOwnerAlias) {
            $res['ImageOwnerAlias'] = $this->imageOwnerAlias;
        }

        if (null !== $this->imageOwnerId) {
            $res['ImageOwnerId'] = $this->imageOwnerId;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->isPublic) {
            $res['IsPublic'] = $this->isPublic;
        }

        if (null !== $this->isSupportCloudinit) {
            $res['IsSupportCloudinit'] = $this->isSupportCloudinit;
        }

        if (null !== $this->isSupportIoOptimized) {
            $res['IsSupportIoOptimized'] = $this->isSupportIoOptimized;
        }

        if (null !== $this->OSType) {
            $res['OSType'] = $this->OSType;
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

        if (null !== $this->showExpired) {
            $res['ShowExpired'] = $this->showExpired;
        }

        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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

        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
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
        if (isset($map['ActionType'])) {
            $model->actionType = $map['ActionType'];
        }

        if (isset($map['Architecture'])) {
            $model->architecture = $map['Architecture'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['Filter'])) {
            if (!empty($map['Filter'])) {
                $model->filter = [];
                $n1            = 0;
                foreach ($map['Filter'] as $item1) {
                    $model->filter[$n1++] = filter::fromMap($item1);
                }
            }
        }

        if (isset($map['ImageFamily'])) {
            $model->imageFamily = $map['ImageFamily'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }

        if (isset($map['ImageOwnerAlias'])) {
            $model->imageOwnerAlias = $map['ImageOwnerAlias'];
        }

        if (isset($map['ImageOwnerId'])) {
            $model->imageOwnerId = $map['ImageOwnerId'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['IsPublic'])) {
            $model->isPublic = $map['IsPublic'];
        }

        if (isset($map['IsSupportCloudinit'])) {
            $model->isSupportCloudinit = $map['IsSupportCloudinit'];
        }

        if (isset($map['IsSupportIoOptimized'])) {
            $model->isSupportIoOptimized = $map['IsSupportIoOptimized'];
        }

        if (isset($map['OSType'])) {
            $model->OSType = $map['OSType'];
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

        if (isset($map['ShowExpired'])) {
            $model->showExpired = $map['ShowExpired'];
        }

        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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

        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }

        return $model;
    }
}
