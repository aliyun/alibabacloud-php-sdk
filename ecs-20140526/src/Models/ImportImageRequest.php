<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ImportImageRequest\diskDeviceMapping;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ImportImageRequest\features;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ImportImageRequest\tag;

class ImportImageRequest extends Model
{
    /**
     * @var string
     */
    public $architecture;
    /**
     * @var string
     */
    public $bootMode;
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $detectionStrategy;
    /**
     * @var diskDeviceMapping[]
     */
    public $diskDeviceMapping;
    /**
     * @var bool
     */
    public $dryRun;
    /**
     * @var features
     */
    public $features;
    /**
     * @var string
     */
    public $imageName;
    /**
     * @var string
     */
    public $licenseType;
    /**
     * @var string
     */
    public $OSType;
    /**
     * @var int
     */
    public $ownerId;
    /**
     * @var string
     */
    public $platform;
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
    public $roleName;
    /**
     * @var string
     */
    public $storageLocationArn;
    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'architecture'         => 'Architecture',
        'bootMode'             => 'BootMode',
        'clientToken'          => 'ClientToken',
        'description'          => 'Description',
        'detectionStrategy'    => 'DetectionStrategy',
        'diskDeviceMapping'    => 'DiskDeviceMapping',
        'dryRun'               => 'DryRun',
        'features'             => 'Features',
        'imageName'            => 'ImageName',
        'licenseType'          => 'LicenseType',
        'OSType'               => 'OSType',
        'ownerId'              => 'OwnerId',
        'platform'             => 'Platform',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'roleName'             => 'RoleName',
        'storageLocationArn'   => 'StorageLocationArn',
        'tag'                  => 'Tag',
    ];

    public function validate()
    {
        if (\is_array($this->diskDeviceMapping)) {
            Model::validateArray($this->diskDeviceMapping);
        }
        if (null !== $this->features) {
            $this->features->validate();
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
        }

        if (null !== $this->bootMode) {
            $res['BootMode'] = $this->bootMode;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->detectionStrategy) {
            $res['DetectionStrategy'] = $this->detectionStrategy;
        }

        if (null !== $this->diskDeviceMapping) {
            if (\is_array($this->diskDeviceMapping)) {
                $res['DiskDeviceMapping'] = [];
                $n1                       = 0;
                foreach ($this->diskDeviceMapping as $item1) {
                    $res['DiskDeviceMapping'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->features) {
            $res['Features'] = null !== $this->features ? $this->features->toArray($noStream) : $this->features;
        }

        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }

        if (null !== $this->licenseType) {
            $res['LicenseType'] = $this->licenseType;
        }

        if (null !== $this->OSType) {
            $res['OSType'] = $this->OSType;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
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

        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }

        if (null !== $this->storageLocationArn) {
            $res['StorageLocationArn'] = $this->storageLocationArn;
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
        if (isset($map['Architecture'])) {
            $model->architecture = $map['Architecture'];
        }

        if (isset($map['BootMode'])) {
            $model->bootMode = $map['BootMode'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DetectionStrategy'])) {
            $model->detectionStrategy = $map['DetectionStrategy'];
        }

        if (isset($map['DiskDeviceMapping'])) {
            if (!empty($map['DiskDeviceMapping'])) {
                $model->diskDeviceMapping = [];
                $n1                       = 0;
                foreach ($map['DiskDeviceMapping'] as $item1) {
                    $model->diskDeviceMapping[$n1++] = diskDeviceMapping::fromMap($item1);
                }
            }
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['Features'])) {
            $model->features = features::fromMap($map['Features']);
        }

        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }

        if (isset($map['LicenseType'])) {
            $model->licenseType = $map['LicenseType'];
        }

        if (isset($map['OSType'])) {
            $model->OSType = $map['OSType'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
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

        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }

        if (isset($map['StorageLocationArn'])) {
            $model->storageLocationArn = $map['StorageLocationArn'];
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
