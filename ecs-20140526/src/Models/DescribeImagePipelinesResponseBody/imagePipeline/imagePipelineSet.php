<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody\imagePipeline;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody\imagePipeline\imagePipelineSet\addAccounts;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody\imagePipeline\imagePipelineSet\tags;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody\imagePipeline\imagePipelineSet\toRegionIds;
use AlibabaCloud\Tea\Model;

class imagePipelineSet extends Model
{
    /**
     * @description The IDs of Alibaba Cloud accounts to which to share the created image.
     *
     * @var addAccounts
     */
    public $addAccounts;

    /**
     * @description The source image.
     *
     *   When `BaseImageType` is set to IMAGE, the value of this parameter is the ID of a custom image.
     *   When `BaseImageType` is set to IMAGE_FAMILY, the value of this parameter is the name of an image family.
     *
     * @example m-bp67acfmxazb4p****
     *
     * @var string
     */
    public $baseImage;

    /**
     * @description The type of the source image. Valid values:
     *
     *   IMAGE: custom image
     *   IMAGE_FAMILY: image family
     *
     * @example IMAGE
     *
     * @var string
     */
    public $baseImageType;

    /**
     * @description The content of the image template.
     *
     * @example FROM IMAGE:m-bp67acfmxazb4p****
     *
     * @var string
     */
    public $buildContent;

    /**
     * @description The time when the image template was created.
     *
     * @example 2020-11-24T06:00:00Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description Indicates whether to release the intermediate instance when the image fails to be created.
     *
     * @example true
     *
     * @var bool
     */
    public $deleteInstanceOnFailure;

    /**
     * @description The description of the image template.
     *
     * @example This is description.
     *
     * @var string
     */
    public $description;

    /**
     * @description The name prefix of the created image.
     *
     * @example testImageName
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The ID of the image template.
     *
     * @example ip-2ze5tsl5bp6nf2b3****
     *
     * @var string
     */
    public $imagePipelineId;

    /**
     * @description The instance type of the intermediate instance.
     *
     * @example ecs.g6.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The size of the outbound public bandwidth for the intermediate instance. Unit: Mbit/s.
     *
     * @example 0
     *
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @description The name of the image template.
     *
     * @example testImagePipeline
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The system disk size of the intermediate instance. Unit: GiB.
     *
     * @example 40
     *
     * @var int
     */
    public $systemDiskSize;

    /**
     * @description The tags of the image template.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The IDs of regions to which to distribute the created image.
     *
     * @var toRegionIds
     */
    public $toRegionIds;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-bp67acfmxazb4p****
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'addAccounts'             => 'AddAccounts',
        'baseImage'               => 'BaseImage',
        'baseImageType'           => 'BaseImageType',
        'buildContent'            => 'BuildContent',
        'creationTime'            => 'CreationTime',
        'deleteInstanceOnFailure' => 'DeleteInstanceOnFailure',
        'description'             => 'Description',
        'imageName'               => 'ImageName',
        'imagePipelineId'         => 'ImagePipelineId',
        'instanceType'            => 'InstanceType',
        'internetMaxBandwidthOut' => 'InternetMaxBandwidthOut',
        'name'                    => 'Name',
        'resourceGroupId'         => 'ResourceGroupId',
        'systemDiskSize'          => 'SystemDiskSize',
        'tags'                    => 'Tags',
        'toRegionIds'             => 'ToRegionIds',
        'vSwitchId'               => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addAccounts) {
            $res['AddAccounts'] = null !== $this->addAccounts ? $this->addAccounts->toMap() : null;
        }
        if (null !== $this->baseImage) {
            $res['BaseImage'] = $this->baseImage;
        }
        if (null !== $this->baseImageType) {
            $res['BaseImageType'] = $this->baseImageType;
        }
        if (null !== $this->buildContent) {
            $res['BuildContent'] = $this->buildContent;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->deleteInstanceOnFailure) {
            $res['DeleteInstanceOnFailure'] = $this->deleteInstanceOnFailure;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->imagePipelineId) {
            $res['ImagePipelineId'] = $this->imagePipelineId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->internetMaxBandwidthOut) {
            $res['InternetMaxBandwidthOut'] = $this->internetMaxBandwidthOut;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->toRegionIds) {
            $res['ToRegionIds'] = null !== $this->toRegionIds ? $this->toRegionIds->toMap() : null;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imagePipelineSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddAccounts'])) {
            $model->addAccounts = addAccounts::fromMap($map['AddAccounts']);
        }
        if (isset($map['BaseImage'])) {
            $model->baseImage = $map['BaseImage'];
        }
        if (isset($map['BaseImageType'])) {
            $model->baseImageType = $map['BaseImageType'];
        }
        if (isset($map['BuildContent'])) {
            $model->buildContent = $map['BuildContent'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DeleteInstanceOnFailure'])) {
            $model->deleteInstanceOnFailure = $map['DeleteInstanceOnFailure'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['ImagePipelineId'])) {
            $model->imagePipelineId = $map['ImagePipelineId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InternetMaxBandwidthOut'])) {
            $model->internetMaxBandwidthOut = $map['InternetMaxBandwidthOut'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['ToRegionIds'])) {
            $model->toRegionIds = toRegionIds::fromMap($map['ToRegionIds']);
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
