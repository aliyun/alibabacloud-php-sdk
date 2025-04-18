<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody\imagePipeline;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody\imagePipeline\imagePipelineSet\addAccounts;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody\imagePipeline\imagePipelineSet\advancedOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody\imagePipeline\imagePipelineSet\imageOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody\imagePipeline\imagePipelineSet\importImageOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody\imagePipeline\imagePipelineSet\tags;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody\imagePipeline\imagePipelineSet\toRegionIds;

class imagePipelineSet extends Model
{
    /**
     * @var addAccounts
     */
    public $addAccounts;

    /**
     * @var advancedOptions
     */
    public $advancedOptions;

    /**
     * @var string
     */
    public $baseImage;

    /**
     * @var string
     */
    public $baseImageType;

    /**
     * @var string
     */
    public $buildContent;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var bool
     */
    public $deleteInstanceOnFailure;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $imageFamily;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var imageOptions
     */
    public $imageOptions;

    /**
     * @var string
     */
    public $imagePipelineId;

    /**
     * @var importImageOptions
     */
    public $importImageOptions;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nvmeSupport;

    /**
     * @var string
     */
    public $repairMode;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $systemDiskSize;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $testContent;

    /**
     * @var toRegionIds
     */
    public $toRegionIds;

    /**
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'addAccounts' => 'AddAccounts',
        'advancedOptions' => 'AdvancedOptions',
        'baseImage' => 'BaseImage',
        'baseImageType' => 'BaseImageType',
        'buildContent' => 'BuildContent',
        'creationTime' => 'CreationTime',
        'deleteInstanceOnFailure' => 'DeleteInstanceOnFailure',
        'description' => 'Description',
        'imageFamily' => 'ImageFamily',
        'imageName' => 'ImageName',
        'imageOptions' => 'ImageOptions',
        'imagePipelineId' => 'ImagePipelineId',
        'importImageOptions' => 'ImportImageOptions',
        'instanceType' => 'InstanceType',
        'internetMaxBandwidthOut' => 'InternetMaxBandwidthOut',
        'name' => 'Name',
        'nvmeSupport' => 'NvmeSupport',
        'repairMode' => 'RepairMode',
        'resourceGroupId' => 'ResourceGroupId',
        'systemDiskSize' => 'SystemDiskSize',
        'tags' => 'Tags',
        'testContent' => 'TestContent',
        'toRegionIds' => 'ToRegionIds',
        'vSwitchId' => 'VSwitchId',
    ];

    public function validate()
    {
        if (null !== $this->addAccounts) {
            $this->addAccounts->validate();
        }
        if (null !== $this->advancedOptions) {
            $this->advancedOptions->validate();
        }
        if (null !== $this->imageOptions) {
            $this->imageOptions->validate();
        }
        if (null !== $this->importImageOptions) {
            $this->importImageOptions->validate();
        }
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        if (null !== $this->toRegionIds) {
            $this->toRegionIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addAccounts) {
            $res['AddAccounts'] = null !== $this->addAccounts ? $this->addAccounts->toArray($noStream) : $this->addAccounts;
        }

        if (null !== $this->advancedOptions) {
            $res['AdvancedOptions'] = null !== $this->advancedOptions ? $this->advancedOptions->toArray($noStream) : $this->advancedOptions;
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

        if (null !== $this->imageFamily) {
            $res['ImageFamily'] = $this->imageFamily;
        }

        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }

        if (null !== $this->imageOptions) {
            $res['ImageOptions'] = null !== $this->imageOptions ? $this->imageOptions->toArray($noStream) : $this->imageOptions;
        }

        if (null !== $this->imagePipelineId) {
            $res['ImagePipelineId'] = $this->imagePipelineId;
        }

        if (null !== $this->importImageOptions) {
            $res['ImportImageOptions'] = null !== $this->importImageOptions ? $this->importImageOptions->toArray($noStream) : $this->importImageOptions;
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

        if (null !== $this->nvmeSupport) {
            $res['NvmeSupport'] = $this->nvmeSupport;
        }

        if (null !== $this->repairMode) {
            $res['RepairMode'] = $this->repairMode;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->testContent) {
            $res['TestContent'] = $this->testContent;
        }

        if (null !== $this->toRegionIds) {
            $res['ToRegionIds'] = null !== $this->toRegionIds ? $this->toRegionIds->toArray($noStream) : $this->toRegionIds;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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
        if (isset($map['AddAccounts'])) {
            $model->addAccounts = addAccounts::fromMap($map['AddAccounts']);
        }

        if (isset($map['AdvancedOptions'])) {
            $model->advancedOptions = advancedOptions::fromMap($map['AdvancedOptions']);
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

        if (isset($map['ImageFamily'])) {
            $model->imageFamily = $map['ImageFamily'];
        }

        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }

        if (isset($map['ImageOptions'])) {
            $model->imageOptions = imageOptions::fromMap($map['ImageOptions']);
        }

        if (isset($map['ImagePipelineId'])) {
            $model->imagePipelineId = $map['ImagePipelineId'];
        }

        if (isset($map['ImportImageOptions'])) {
            $model->importImageOptions = importImageOptions::fromMap($map['ImportImageOptions']);
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

        if (isset($map['NvmeSupport'])) {
            $model->nvmeSupport = $map['NvmeSupport'];
        }

        if (isset($map['RepairMode'])) {
            $model->repairMode = $map['RepairMode'];
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

        if (isset($map['TestContent'])) {
            $model->testContent = $map['TestContent'];
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
