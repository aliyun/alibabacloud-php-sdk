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
     * @var string
     */
    public $creationTime;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var bool
     */
    public $deleteInstanceOnFailure;

    /**
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $imagePipelineId;

    /**
     * @var int
     */
    public $systemDiskSize;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $baseImage;

    /**
     * @var toRegionIds
     */
    public $toRegionIds;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var string
     */
    public $baseImageType;

    /**
     * @var addAccounts
     */
    public $addAccounts;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $buildContent;
    protected $_name = [
        'creationTime'            => 'CreationTime',
        'tags'                    => 'Tags',
        'deleteInstanceOnFailure' => 'DeleteInstanceOnFailure',
        'internetMaxBandwidthOut' => 'InternetMaxBandwidthOut',
        'instanceType'            => 'InstanceType',
        'imagePipelineId'         => 'ImagePipelineId',
        'systemDiskSize'          => 'SystemDiskSize',
        'vSwitchId'               => 'VSwitchId',
        'description'             => 'Description',
        'baseImage'               => 'BaseImage',
        'toRegionIds'             => 'ToRegionIds',
        'resourceGroupId'         => 'ResourceGroupId',
        'imageName'               => 'ImageName',
        'baseImageType'           => 'BaseImageType',
        'addAccounts'             => 'AddAccounts',
        'name'                    => 'Name',
        'buildContent'            => 'BuildContent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->deleteInstanceOnFailure) {
            $res['DeleteInstanceOnFailure'] = $this->deleteInstanceOnFailure;
        }
        if (null !== $this->internetMaxBandwidthOut) {
            $res['InternetMaxBandwidthOut'] = $this->internetMaxBandwidthOut;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->imagePipelineId) {
            $res['ImagePipelineId'] = $this->imagePipelineId;
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->baseImage) {
            $res['BaseImage'] = $this->baseImage;
        }
        if (null !== $this->toRegionIds) {
            $res['ToRegionIds'] = null !== $this->toRegionIds ? $this->toRegionIds->toMap() : null;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->baseImageType) {
            $res['BaseImageType'] = $this->baseImageType;
        }
        if (null !== $this->addAccounts) {
            $res['AddAccounts'] = null !== $this->addAccounts ? $this->addAccounts->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->buildContent) {
            $res['BuildContent'] = $this->buildContent;
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
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['DeleteInstanceOnFailure'])) {
            $model->deleteInstanceOnFailure = $map['DeleteInstanceOnFailure'];
        }
        if (isset($map['InternetMaxBandwidthOut'])) {
            $model->internetMaxBandwidthOut = $map['InternetMaxBandwidthOut'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['ImagePipelineId'])) {
            $model->imagePipelineId = $map['ImagePipelineId'];
        }
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['BaseImage'])) {
            $model->baseImage = $map['BaseImage'];
        }
        if (isset($map['ToRegionIds'])) {
            $model->toRegionIds = toRegionIds::fromMap($map['ToRegionIds']);
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['BaseImageType'])) {
            $model->baseImageType = $map['BaseImageType'];
        }
        if (isset($map['AddAccounts'])) {
            $model->addAccounts = addAccounts::fromMap($map['AddAccounts']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['BuildContent'])) {
            $model->buildContent = $map['BuildContent'];
        }

        return $model;
    }
}
