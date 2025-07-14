<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody\imagePipeline\imagePipelineSet;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody\imagePipeline\imagePipelineSet\importImageOptions\diskDeviceMappings;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody\imagePipeline\imagePipelineSet\importImageOptions\features;
use AlibabaCloud\Tea\Model;

class importImageOptions extends Model
{
    /**
     * @description The operating system architecture. Valid values:
     *
     *   x86_64
     *   arm64
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
     * @example BIOS
     *
     * @var string
     */
    public $bootMode;

    /**
     * @description The information of disks from which the custom images are created.
     *
     *   When the value of N is 1, a custom image is created from the system disk.
     *   When the value of N is an integer in the range of 2 to 17, a custom image is created from a data disk.
     *
     * @var diskDeviceMappings
     */
    public $diskDeviceMappings;

    /**
     * @description The feature attributes of the image.
     *
     * @var features
     */
    public $features;

    /**
     * @description The type of the license to use to activate the operating system after the image is imported. Valid values:
     *
     *   Auto: ECS detects the operating system of the image and allocates a license to the operating system In this mode, the system first checks whether a license allocated by an official Alibaba Cloud channel is specified in the `Platform`. If a license allocated by an official Alibaba Cloud channel is specified, the system allocates the license to the imported image. If no such license is specified, the Bring Your Own License (BYOL) mode is used.
     *   Aliyun: The license allocated through an official Alibaba Cloud channel is used for the operating system distribution specified by `Platform`.
     *   BYOL: The license that comes with the source operating system is used. When you use the BYOL license, make sure that your license key is supported by Alibaba Cloud.
     *
     * @example Auto
     *
     * @var string
     */
    public $licenseType;

    /**
     * @description The operating system type. Valid values:
     *
     *   windows: Windows operating systems
     *   linux: Linux operating systems
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
            $res['DiskDeviceMappings'] = null !== $this->diskDeviceMappings ? $this->diskDeviceMappings->toMap() : null;
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
            $model->diskDeviceMappings = diskDeviceMappings::fromMap($map['DiskDeviceMappings']);
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
