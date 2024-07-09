<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class UploadImageRequest extends Model
{
    /**
     * @description The size of the data disk. Valid values: 80 to 500. Unit: GiB.
     *
     * @example 80
     *
     * @var int
     */
    public $dataDiskSize;

    /**
     * @description The description of the image. The description must be 2 to 256 characters in length and cannot start with `http://` or `https://`.
     *
     * @example test description
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to enable security check.
     *
     * @example true
     *
     * @var bool
     */
    public $enableSecurityCheck;

    /**
     * @description Specifies whether the image is a GPU-accelerated image.
     *
     * @example true
     *
     * @var bool
     */
    public $gpuCategory;

    /**
     * @description The type of the pre-installed GPU driver.
     *
     * Valid values:
     *
     *   gpu_grid9: This GPU driver is used on cloud computers of the following two specifications: graphics – 4 vCPUs, 23 GiB memory, 4 GiB GPU memory, and graphics – 10 vCPUs, 46 GiB memory, 8 GiB GPU memory.
     *   gpu_custom: You can install the driver later.
     *   gpu_grid12: This GPU driver is used on graphical cloud computers of specifications other than the following two specifications: graphics – 4 vCPUs, 23 GiB memory, & 4 GiB GPU memory, and graphics – 10 vCPUs, 46 GiB memory, & 8 GiB GPU memory.
     *
     * @example gpu_grid9
     *
     * @var string
     */
    public $gpuDriverType;

    /**
     * @description The name of the image. The name must be 2 to 128 characters in length. The name must start with a letter but cannot start with `http://` or `https://`. The name can contain letters, digits, colons (:), underscores (_), and hyphens (-).
     *
     * This parameter is required.
     * @example Win10_Test
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The type of the license that is used to activate the operating system after the image is imported. Valid values:
     *
     *   Auto: Elastic Desktop Service detects the operating system of the image and allocates a license to the operating system. In this mode, the system first checks whether a license allocated by an official Alibaba Cloud channel is specified in the `Platform`. If a license allocated by an official Alibaba Cloud channel is specified, the system allocates the license to the imported image. If no such license is specified, the BYOL (Bring Your Own License) mode is used.
     *   Aliyun: The license that is allocated by an official Alibaba Cloud channel and is specified by `Platform` is used for the operating system distribution.
     *   BYOL: The license that comes with the source operating system is used. When you use the BYOL mode, make sure that your license key is supported by Alibaba Cloud.
     *
     * >  Windows 10 cannot be activated by Alibaba Cloud. Set the `LicenseType` to BYOL for Windows 10.
     * @example Auto
     *
     * @var string
     */
    public $licenseType;

    /**
     * @description The type of the operating system.
     *
     * Valid values:
     *
     *   Linux
     *
     * <!-- -->
     *
     *   Windows
     *
     * <!-- -->
     * @example Windows
     *
     * @var string
     */
    public $osType;

    /**
     * @description The object path of the image file in Object Storage Service (OSS).
     *
     * This parameter is required.
     * @example https://ossbucket:endpoint/object
     *
     * @var string
     */
    public $ossObjectPath;

    /**
     * @description The protocol type.
     *
     * Valid values:
     *
     *   ASP: in-house Adaptive Streaming Protocol (ASP)
     *
     * @example ASP
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description The region ID. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/196646.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'dataDiskSize'        => 'DataDiskSize',
        'description'         => 'Description',
        'enableSecurityCheck' => 'EnableSecurityCheck',
        'gpuCategory'         => 'GpuCategory',
        'gpuDriverType'       => 'GpuDriverType',
        'imageName'           => 'ImageName',
        'licenseType'         => 'LicenseType',
        'osType'              => 'OsType',
        'ossObjectPath'       => 'OssObjectPath',
        'protocolType'        => 'ProtocolType',
        'regionId'            => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->enableSecurityCheck) {
            $res['EnableSecurityCheck'] = $this->enableSecurityCheck;
        }
        if (null !== $this->gpuCategory) {
            $res['GpuCategory'] = $this->gpuCategory;
        }
        if (null !== $this->gpuDriverType) {
            $res['GpuDriverType'] = $this->gpuDriverType;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->licenseType) {
            $res['LicenseType'] = $this->licenseType;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->ossObjectPath) {
            $res['OssObjectPath'] = $this->ossObjectPath;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnableSecurityCheck'])) {
            $model->enableSecurityCheck = $map['EnableSecurityCheck'];
        }
        if (isset($map['GpuCategory'])) {
            $model->gpuCategory = $map['GpuCategory'];
        }
        if (isset($map['GpuDriverType'])) {
            $model->gpuDriverType = $map['GpuDriverType'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['LicenseType'])) {
            $model->licenseType = $map['LicenseType'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['OssObjectPath'])) {
            $model->ossObjectPath = $map['OssObjectPath'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
