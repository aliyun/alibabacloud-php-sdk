<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagesRequest\filter;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagesRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeImagesRequest extends Model
{
    /**
     * @description The scenario in which to use the image. Default value: CreateEcs. Valid values:
     *
     *   CreateEcs: instance creation
     *   ChangeOS: replacement of the system disk or operating system
     *
     * @example CreateEcs
     *
     * @var string
     */
    public $actionType;

    /**
     * @description The image architecture. Valid values:
     *
     *   i386
     *   x86\_64
     *   arm64
     *
     * @example i386
     *
     * @var string
     */
    public $architecture;

    /**
     * @description Specifies whether to check the validity of the request without actually making the request. Valid values:
     *
     *   true: The validity of the request is checked but the request is not made. Check items include whether your AccessKey pair is valid, whether RAM users are granted required permissions, and whether the required parameters are specified. If the check fails, the corresponding error is returned. If the check succeeds, the DryRunOperation error code is returned.
     *   false: The validity of the request is checked. If the check succeeds, a 2XX HTTP status code is returned, and the request is made.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The filters that used to query resources.
     *
     * @var filter[]
     */
    public $filter;

    /**
     * @description The name of the image family. You can set this parameter to query images of the specified image family.
     *
     * This parameter is empty by default.
     * @example hangzhou-daily-update
     *
     * @var string
     */
    public $imageFamily;

    /**
     * @description The ID of the image.
     *
     * @example m-bp1g7004ksh0oeuc****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The name of the image.
     *
     * @example testImageName
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The source of the image. Valid values:
     *
     *   system: public images provided by Alibaba Cloud.
     *
     *   self: your custom images.
     *
     *   others: shared images from other Alibaba Cloud accounts or community images published by other Alibaba Cloud accounts. Take note of the following items:
     *
     *   To query community images, you must set IsPublic to true.
     *   To query shared images, you must set IsPublic to false or leave the IsPublic parameter empty.
     *
     *   marketplace: Alibaba Cloud Marketplace images. If Alibaba Cloud Marketplace images are returned in the response, you can use the images without subscription. You must pay attention to the billing details of Alibaba Cloud Marketplace images.
     *
     * This parameter is empty by default, which indicates that your custom images, public images provided by Alibaba Cloud, shared images from other Alibaba Cloud accounts, and community images published by other Alibaba Cloud accounts are queried.
     * @example self
     *
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @description The ID of the Alibaba Cloud account to which the image belongs. This parameter takes effect only when you query shared images or community images.
     *
     * @example 1234567890
     *
     * @var int
     */
    public $imageOwnerId;

    /**
     * @description The instance type for which the image can be used.
     *
     * @example ecs.g5.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description Specifies whether to query published community images. Valid values:
     *
     *   true: queries published community images. When you set this parameter to true, you must set ImageOwnerAlias to others.
     *   false: queries other image types than community images. The specific image types to be queried are determined by the ImageOwnerAlias value.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $isPublic;

    /**
     * @description Specifies whether the image supports cloud-init.
     *
     * @example true
     *
     * @var bool
     */
    public $isSupportCloudinit;

    /**
     * @description Specifies whether the image can be used on I/O optimized instances.
     *
     * @example true
     *
     * @var bool
     */
    public $isSupportIoOptimized;

    /**
     * @description The operating system type of the image. Valid values:
     *
     *   windows
     *   linux
     *
     * @example linux
     *
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
     * @example 1
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID of the image. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the custom image belongs. If this parameter is specified to query resources, up to 1,000 resources that belong to the specified resource group can be displayed in the response.
     *
     * @example rg-bp67acfmxazb4p****
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
     * @description Specifies whether the subscription image has expired.
     *
     * >  This parameter will be removed in the future. We recommend that you use other parameters to ensure future compatibility.
     * @example false
     *
     * @var bool
     */
    public $showExpired;

    /**
     * @description The ID of the snapshot used to create the custom image.
     *
     * @example s-bp17ot2q7x72ggtw****
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description The state of the image. Default value: Available. Valid values:
     *
     * Creating: The image is being created.
     * Waiting: The image is waiting to be processed.
     * Available: The image is available.
     * UnAvailable: The image is unavailable.
     * CreateFailed: The image cannot be created.
     * Deprecated: The image is discontinued.
     *
     * You can specify multiple values. Separate the values with commas (,).
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags that used to query resources. You can specify up to 20 tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description Specifies whether the image is running on an Elastic Compute Service (ECS) instance. Valid values:
     *
     *   instance: The image is already in use and running on an ECS instance.
     *   none: The image is not in use.
     *
     * @example instance
     *
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
    }

    public function toMap()
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
            $res['Filter'] = [];
            if (null !== $this->filter && \is_array($this->filter)) {
                $n = 0;
                foreach ($this->filter as $item) {
                    $res['Filter'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImagesRequest
     */
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
                $n             = 0;
                foreach ($map['Filter'] as $item) {
                    $model->filter[$n++] = null !== $item ? filter::fromMap($item) : $item;
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
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }

        return $model;
    }
}
