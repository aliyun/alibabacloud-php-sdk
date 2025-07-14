<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImagePipelineRequest;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImagePipelineRequest\importImageOptions\diskDeviceMappings;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImagePipelineRequest\importImageOptions\features;
use AlibabaCloud\Tea\Model;

class importImageOptions extends Model
{
    /**
     * @description The system architecture of the system disk. If you specify a data disk snapshot to create the system disk of the image, use Architecture to specify the system architecture of the system disk. Valid values:
     *
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
     *   BIOS: BIOS mode
     *   UEFI: Unified Extensible Firmware Interface (UEFI) mode
     *
     * Default value: BIOS. If you set Architecture to `arm64`, set this parameter to UEFI.
     *
     * >  Before you specify this parameter, make sure that you are familiar with the boot modes supported by the image. If you specify a boot mode that is not supported by the image, ECS instances created from the image cannot start as expected. For information about the boot modes of images, see the [Boot modes of images](~~2244655#b9caa9b8bb1wf~~) section of the "Best practices for ECS instance boot modes" topic.
     *
     * @example BIOS
     *
     * @var string
     */
    public $bootMode;

    /**
     * @description The information of disks from which the custom images are created.
     *
     *   When the N value is 1, this parameter creates a custom image from the system disk.
     *   When the N value is an integer in the range of 2 to 17, this parameter creates a custom image from a data disk.
     *
     * @var diskDeviceMappings[]
     */
    public $diskDeviceMappings;

    /**
     * @description The attributes of the image.
     *
     * @var features
     */
    public $features;

    /**
     * @description The type of the license to use to activate the operating system after the image is imported. Valid values:
     *
     *   Auto: ECS detects the operating system of the image and allocates a license to the operating system. In this mode, the system first checks whether a license allocated by an official Alibaba Cloud channel is available for the operating system version specified by `Platform`. If a license allocated by an official Alibaba Cloud channel is available for the operating system version, the system allocates the license to the imported image. If no such license is available, the Bring Your Own License (BYOL) mode is used.
     *   Aliyun: The license allocated by an official Alibaba Cloud channel for the operating system version specified by `Platform` is used.
     *   BYOL: The license that comes with the source operating system is used. When you use the BYOL license, make sure that your license key is supported by Alibaba Cloud.
     *
     * Default value: Auto.
     *
     * @example Auto
     *
     * @var string
     */
    public $licenseType;

    /**
     * @description The operating system type. Valid values:
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
     * @description The version of the operating system. Valid values:
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
     *   Other Windows
     *
     * Default value: Others Linux when the operating system type is linux, and Other Windows when the operating system type is windows.
     *
     * @example Aliyun
     *
     * @var string
     */
    public $platform;

    /**
     * @description >  This parameter is in invitational preview.
     *
     * @example false
     *
     * @var bool
     */
    public $retainImportedImage;
    protected $_name = [
        'architecture' => 'Architecture',
        'bootMode' => 'BootMode',
        'diskDeviceMappings' => 'DiskDeviceMappings',
        'features' => 'Features',
        'licenseType' => 'LicenseType',
        'OSType' => 'OSType',
        'platform' => 'Platform',
        'retainImportedImage' => 'RetainImportedImage',
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
        if (null !== $this->diskDeviceMappings) {
            $res['DiskDeviceMappings'] = [];
            if (null !== $this->diskDeviceMappings && \is_array($this->diskDeviceMappings)) {
                $n = 0;
                foreach ($this->diskDeviceMappings as $item) {
                    $res['DiskDeviceMappings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->features) {
            $res['Features'] = null !== $this->features ? $this->features->toMap() : null;
        }
        if (null !== $this->licenseType) {
            $res['LicenseType'] = $this->licenseType;
        }
        if (null !== $this->OSType) {
            $res['OSType'] = $this->OSType;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->retainImportedImage) {
            $res['RetainImportedImage'] = $this->retainImportedImage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return importImageOptions
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
        if (isset($map['DiskDeviceMappings'])) {
            if (!empty($map['DiskDeviceMappings'])) {
                $model->diskDeviceMappings = [];
                $n = 0;
                foreach ($map['DiskDeviceMappings'] as $item) {
                    $model->diskDeviceMappings[$n++] = null !== $item ? diskDeviceMappings::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Features'])) {
            $model->features = features::fromMap($map['Features']);
        }
        if (isset($map['LicenseType'])) {
            $model->licenseType = $map['LicenseType'];
        }
        if (isset($map['OSType'])) {
            $model->OSType = $map['OSType'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['RetainImportedImage'])) {
            $model->retainImportedImage = $map['RetainImportedImage'];
        }

        return $model;
    }
}
