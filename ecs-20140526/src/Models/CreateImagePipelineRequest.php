<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImagePipelineRequest\advancedOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImagePipelineRequest\importImageOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImagePipelineRequest\tag;

class CreateImagePipelineRequest extends Model
{
    /**
     * @var int[]
     */
    public $addAccount;
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
    public $clientToken;
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
    public $ownerAccount;
    /**
     * @var int
     */
    public $ownerId;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $repairMode;
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
     * @var int
     */
    public $systemDiskSize;
    /**
     * @var tag[]
     */
    public $tag;
    /**
     * @var string
     */
    public $testContent;
    /**
     * @var string[]
     */
    public $toRegionId;
    /**
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'addAccount'              => 'AddAccount',
        'advancedOptions'         => 'AdvancedOptions',
        'baseImage'               => 'BaseImage',
        'baseImageType'           => 'BaseImageType',
        'buildContent'            => 'BuildContent',
        'clientToken'             => 'ClientToken',
        'deleteInstanceOnFailure' => 'DeleteInstanceOnFailure',
        'description'             => 'Description',
        'imageFamily'             => 'ImageFamily',
        'imageName'               => 'ImageName',
        'importImageOptions'      => 'ImportImageOptions',
        'instanceType'            => 'InstanceType',
        'internetMaxBandwidthOut' => 'InternetMaxBandwidthOut',
        'name'                    => 'Name',
        'nvmeSupport'             => 'NvmeSupport',
        'ownerAccount'            => 'OwnerAccount',
        'ownerId'                 => 'OwnerId',
        'regionId'                => 'RegionId',
        'repairMode'              => 'RepairMode',
        'resourceGroupId'         => 'ResourceGroupId',
        'resourceOwnerAccount'    => 'ResourceOwnerAccount',
        'resourceOwnerId'         => 'ResourceOwnerId',
        'systemDiskSize'          => 'SystemDiskSize',
        'tag'                     => 'Tag',
        'testContent'             => 'TestContent',
        'toRegionId'              => 'ToRegionId',
        'vSwitchId'               => 'VSwitchId',
    ];

    public function validate()
    {
        if (\is_array($this->addAccount)) {
            Model::validateArray($this->addAccount);
        }
        if (null !== $this->advancedOptions) {
            $this->advancedOptions->validate();
        }
        if (null !== $this->importImageOptions) {
            $this->importImageOptions->validate();
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        if (\is_array($this->toRegionId)) {
            Model::validateArray($this->toRegionId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addAccount) {
            if (\is_array($this->addAccount)) {
                $res['AddAccount'] = [];
                $n1                = 0;
                foreach ($this->addAccount as $item1) {
                    $res['AddAccount'][$n1++] = $item1;
                }
            }
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

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->repairMode) {
            $res['RepairMode'] = $this->repairMode;
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

        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
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

        if (null !== $this->testContent) {
            $res['TestContent'] = $this->testContent;
        }

        if (null !== $this->toRegionId) {
            if (\is_array($this->toRegionId)) {
                $res['ToRegionId'] = [];
                $n1                = 0;
                foreach ($this->toRegionId as $item1) {
                    $res['ToRegionId'][$n1++] = $item1;
                }
            }
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
        if (isset($map['AddAccount'])) {
            if (!empty($map['AddAccount'])) {
                $model->addAccount = [];
                $n1                = 0;
                foreach ($map['AddAccount'] as $item1) {
                    $model->addAccount[$n1++] = $item1;
                }
            }
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

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
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

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RepairMode'])) {
            $model->repairMode = $map['RepairMode'];
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

        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
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

        if (isset($map['TestContent'])) {
            $model->testContent = $map['TestContent'];
        }

        if (isset($map['ToRegionId'])) {
            if (!empty($map['ToRegionId'])) {
                $model->toRegionId = [];
                $n1                = 0;
                foreach ($map['ToRegionId'] as $item1) {
                    $model->toRegionId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
