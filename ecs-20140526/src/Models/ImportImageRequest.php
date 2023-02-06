<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\ImportImageRequest\diskDeviceMapping;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ImportImageRequest\tag;
use AlibabaCloud\Tea\Model;

class ImportImageRequest extends Model
{
    /**
     * @description The system architecture. Valid values:
     *
     *   i386
     *   x86\_64
     *   arm64
     *
     * Default value: x86\_64.
     * @example x86_64
     *
     * @var string
     */
    public $architecture;

    /**
     * @description The boot mode of the custom image. Valid values:
     *
     *   BIOS
     *   UEFI
     *
     * >  You must be aware of the boot modes supported by the specified image. When you use this parameter to change the boot mode of the image, specify a boot mode supported by the image to ensure that instances that use this image can start normally.
     * @example BIOS
     *
     * @var string
     */
    public $bootMode;

    /**
     * @description The description of the custom image. The description must be 2 to 256 characters in length and cannot start with `http://` or `https://`.
     *
     * @example TestDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The mode in which to check the source image. If you do not specify this parameter, the source image is not checked. Only Linux images can be checked. Set the value to Standard, which indicates standard check mode.
     *
     * The following items are checked in standard check mode:
     *
     *   Virtio: whether the virtio driver is installed.
     *   Fstab: whether mounting configurations in the fstab file are correct.
     *   Grub: whether GRUB configurations are correct.
     *   SystemImage: whether the image is valid. Do not import images that are in the ISO format or empty.
     *   CloudInit: whether cloud-init is installed.
     *   NVMe: whether the NVMe driver is installed.
     *   Selinux: whether SElinux is enabled.
     *   OnlineResizeFS: whether the root partition can be automatically resized.
     *   Dhcp: whether Dynamic Host Configuration Protocol (DHCP) is enabled for network interface controllers (NICs).
     *   RtcTimeMode: the RTC time mode.
     *   Platform: the platform. Example: Linux or Windows.
     *   OSVersion: the operating system version. Example: Centos 7.9.
     *   Architecture: the architecture. Example: ARM or x86\_64.
     *   BootMode: the boot mode. Example: UEFI or Legacy.
     *   KernelVersion: the kernel version.
     *   CloudAssistant: whether the Cloud Assistant client is installed.
     *   SecurityCenterAgent: whether the Security Center agent is installed.
     *
     * @example Standard
     *
     * @var string
     */
    public $detectionStrategy;

    /**
     * @description The mappings of the disk devices.
     *
     * @var diskDeviceMapping[]
     */
    public $diskDeviceMapping;

    /**
     * @description The name of the custom image. The name must be 2 to 128 characters in length. It must start with a letter and cannot start with `acs:` or `aliyun`. It cannot contain `http://` or `https://`. It can contain letters, digits, periods (.), colons (:), underscores (\_), and hyphens (-).
     *
     * @example ImageTestName
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The type of the license to use to activate the operating system after the source image is imported. Valid values:
     *
     *   Auto: ECS checks the operating system of the source image and allocates a license to the operating system. ECS first checks whether the operating system distribution specified by `Platform` has a license allocated through an official Alibaba Cloud channel. If yes, the allocated license is used. If not, the license that comes with the source operating system is used.
     *   Aliyun: The license allocated through an official Alibaba Cloud channel is used for the operating system distribution specified by `Platform`.
     *   BYOL: The license that comes with the source operating system is used. In this case, make sure that your license key can be used in Alibaba Cloud.
     *
     * Default value: Auto.
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
     *   CentOS
     *   CentOS Stream
     *   Ubuntu
     *   SUSE
     *   openSUSE
     *   Debian
     *   CoreOS
     *   Aliyun
     *   Anolis
     *   AlmaLinux
     *   FreeBSD
     *   Fedora
     *   Rocky Linux
     *   UOS
     *   Kylin
     *   Others Linux
     *   Customized Linux
     *   Windows Server 2022
     *   Windows Server 2019
     *   Windows Server 2016
     *   Windows Server 2012
     *   Windows Server 2008
     *   Windows Server 2003
     *
     * Default value: Others Linux.
     * @example Aliyun
     *
     * @var string
     */
    public $platform;

    /**
     * @description The region ID of the source custom image. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which to assign the custom image.
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
     * @description The name of the RAM role to use to import the source image.
     *
     * @example AliyunECSImageImportDefaultRole
     *
     * @var string
     */
    public $roleName;

    /**
     * @description The tags of the imported custom image.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'architecture'         => 'Architecture',
        'bootMode'             => 'BootMode',
        'description'          => 'Description',
        'detectionStrategy'    => 'DetectionStrategy',
        'diskDeviceMapping'    => 'DiskDeviceMapping',
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
        'tag'                  => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
        }
        if (null !== $this->bootMode) {
            $res['BootMode'] = $this->bootMode;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DetectionStrategy'])) {
            $model->detectionStrategy = $map['DetectionStrategy'];
        }
        if (isset($map['DiskDeviceMapping'])) {
            if (!empty($map['DiskDeviceMapping'])) {
                $model->diskDeviceMapping = [];
                $n                        = 0;
                foreach ($map['DiskDeviceMapping'] as $item) {
                    $model->diskDeviceMapping[$n++] = null !== $item ? diskDeviceMapping::fromMap($item) : $item;
                }
            }
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
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
