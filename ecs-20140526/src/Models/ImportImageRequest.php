<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\ImportImageRequest\diskDeviceMapping;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ImportImageRequest\features;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ImportImageRequest\tag;
use AlibabaCloud\Tea\Model;

class ImportImageRequest extends Model
{
    /**
     * @description The system architecture. Valid values:
     *
     *   i386
     *   x86_64
     *   arm64
     *
     * Default value: x86_64.
     *
     * @example x86_64
     *
     * @var string
     */
    public $architecture;

    /**
     * @description The boot mode of the image. Valid values:
     *
     *   BIOS
     *   UEFI
     *
     * Default value: BIOS. If you set `Architecture` to arm64, set this parameter to UEFI.
     *
     * > Make sure that you are aware of the boot modes supported by the specified image, as thehe modified boot mode needs to be supported by the image. This way, instances that use this image can start.
     *
     * @example BIOS
     *
     * @var string
     */
    public $bootMode;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. **The token can contain only ASCII characters and cannot exceed 64 characters in length.** For more information, see [How to ensure idempotence](https://help.aliyun.com/document_detail/25693.html).
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The image description. The description must be 2 to 256 characters in length and cannot start with `http://` or `https://`.
     *
     * @example TestDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The mode in which to check the image. If you do not specify this parameter, the image is not checked. Only the standard check mode is supported.
     *
     * >  This parameter is supported for most Linux and Windows operating system versions. For more information about image check items and operating system limits for image check, see [Overview](https://help.aliyun.com/document_detail/439819.html) and [Operating system limits for image check](https://help.aliyun.com/document_detail/475800.html).
     *
     * @example Standard
     *
     * @var string
     */
    public $detectionStrategy;

    /**
     * @description Details about the custom images.
     *
     * @var diskDeviceMapping[]
     */
    public $diskDeviceMapping;

    /**
     * @description Specifies whether to perform only a dry run, without performing the actual request. Valid values:
     *
     *   true: performs only a dry run. The system checks the request for potential issues, including invalid AccessKey pairs, unauthorized RAM users, and missing parameter values. If the request fails the dry run, an error message is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
     *   false: performs a dry run and performs the actual request. If the request passes the dry run, a 2xx HTTP status code is returned and the operation is performed.
     *
     * Default value: false.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The attributes of the image.
     *
     * @var features
     */
    public $features;

    /**
     * @description The image name. The name must be 2 to 128 characters in length. The name must start with a letter and cannot start with `acs:` or `aliyun`. The name cannot contain `http://` or `https://`. The name can contain letters, digits, periods (.), colons (:), underscores (_), and hyphens (-).
     *
     * @example ImageTestName
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The type of the license used to activate the operating system after the image is imported. Valid values:
     *
     *   Auto: ECS checks the operating system of the image and allocates a license to the operating system. ECS first checks whether the operating system distribution specified by `Platform` has a license allocated through an official Alibaba Cloud channel. If yes, the allocated license is used. If no, the license that comes with the source operating system is used.
     *   Aliyun: The license allocated through an official Alibaba Cloud channel is used for the operating system distribution specified by `Platform`.
     *   BYOL: The license that comes with the source operating system is used. In this case, make sure that your license key is eligible for use in Alibaba Cloud.
     *
     * Default value: Auto.
     *
     * @example Auto
     *
     * @var string
     */
    public $licenseType;

    /**
     * @description The operating system platform. Valid values:
     *
     *   windows
     *   linux
     *
     * Default value: linux.
     *
     * @example linux
     *
     * @var string
     */
    public $OSType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The operating system distribution. Valid values:
     *
     *   Aliyun
     *   Anolis
     *   CentOS
     *   Ubuntu
     *   CoreOS
     *   SUSE
     *   Debian
     *   OpenSUSE
     *   FreeBSD
     *   RedHat
     *   Kylin
     *   UOS
     *   Fedora
     *   Fedora CoreOS
     *   CentOS Stream
     *   AlmaLinux
     *   Rocky Linux
     *   Gentoo
     *   Customized Linux
     *   Others Linux
     *   Windows Server 2022
     *   Windows Server 2019
     *   Windows Server 2016
     *   Windows Server 2012
     *   Windows Server 2008
     *   Windows Server 2003
     *
     * Default value: Others Linux.
     *
     * @example Aliyun
     *
     * @var string
     */
    public $platform;

    /**
     * @description The region ID of the source image. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/25609.html) operation to query the most recent region list.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which to assign the image.
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
     * @description The name of the RAM role used to import the image.
     *
     * @example AliyunECSImageImportDefaultRole
     *
     * @var string
     */
    public $roleName;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the cloud box, which is used to uniquely identify a storage location in the cloud.
     *
     * >  Specify this parameter only if you import an image from OSS on CloudBox. Otherwise, you do not need to specify this parameter. For more information, see [What is OSS on CloudBox?](https://help.aliyun.com/document_detail/430190.html)
     *
     * The ARN must be in the following format: `arn:acs:cloudbox:{RegionId}:{AliUid}:cloudbox/{CloudBoxId}`. Replace `{RegionId}` with the region ID of the cloud box, `{AliUid}` with the ID of the Alibaba Cloud account to which the cloud box belongs, and `{CloudBoxId}` with the ID of the cloud box.
     *
     * @example arn:acs:cloudbox:cn-hangzhou:123456:cloudbox/cb-xx***123
     *
     * @var string
     */
    public $storageLocationArn;

    /**
     * @description The image tags.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'architecture' => 'Architecture',
        'bootMode' => 'BootMode',
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'detectionStrategy' => 'DetectionStrategy',
        'diskDeviceMapping' => 'DiskDeviceMapping',
        'dryRun' => 'DryRun',
        'features' => 'Features',
        'imageName' => 'ImageName',
        'licenseType' => 'LicenseType',
        'OSType' => 'OSType',
        'ownerId' => 'OwnerId',
        'platform' => 'Platform',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'roleName' => 'RoleName',
        'storageLocationArn' => 'StorageLocationArn',
        'tag' => 'Tag',
    ];

    public function validate() {}

    public function toMap()
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
            $res['DiskDeviceMapping'] = [];
            if (null !== $this->diskDeviceMapping && \is_array($this->diskDeviceMapping)) {
                $n = 0;
                foreach ($this->diskDeviceMapping as $item) {
                    $res['DiskDeviceMapping'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->features) {
            $res['Features'] = null !== $this->features ? $this->features->toMap() : null;
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
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportImageRequest
     */
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
                $n = 0;
                foreach ($map['DiskDeviceMapping'] as $item) {
                    $model->diskDeviceMapping[$n++] = null !== $item ? diskDeviceMapping::fromMap($item) : $item;
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
                $n = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
