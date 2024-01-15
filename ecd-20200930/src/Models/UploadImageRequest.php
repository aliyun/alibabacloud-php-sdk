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
     * @description The description of the custom image. The description must be 2 to 256 characters in length. It cannot start with `http://` or `https://`.
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
     * @description The type of the pre-installed GPU driver. Valid values:
     *
     *   gpu_grid9: This value is applicable to a Graphics cloud desktop that uses 4 vCores, 23 GB memory, and 4 GB GPU memory and a Graphics cloud desktop that uses 10 vCores, 46 GB memory, and 8 GB GPU memory
     *   gpu_grid12: This value is applicable to a cloud desktop other than a Graphics cloud desktop that uses 4 vCores, 23 GB memory, and 4 GB GPU memory and a Graphics cloud desktop that uses 10 vCores, 46 GB memory, and 8 GB GPU memory.
     *   gpu_custom: You can install a driver later.
     *
     * @example gpu_grid9
     *
     * @var string
     */
    public $gpuDriverType;

    /**
     * @description The name of the custom image. The name must be 2 to 128 characters in length and can contain letters, digits, colons (:), underscores (\_), and hyphens (-). The name can contain letters, digits, colons (:), underscores (\_), and hyphens (-). The name must start with a letter and cannot start with `http://` or `https://`.
     *
     * @example Win10_Test
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The type of the license that you want to use to activate the OS after the image is imported. Valid values:
     *
     *   Auto: Elastic Desktop Service (EDS) checks the source OS of the image and allocates a license to the OS. EDS first checks whether the OS distribution that is specified by `Platform` has a license allocated by using an official Alibaba Cloud channel. If yes, the allocated license is used. If no, the license of the source OS is used.
     *   Aliyun: The license allocated by using an official Alibaba Cloud channel is used for the OS distribution that is specified by `Platform`.
     *   BYOL: The license of the source OS is used. In this case, make sure that your license key can be used in Alibaba Cloud.
     *
     * > Windows 10 cannot be activated by using a license that is allocated by using an official Alibaba Cloud channel. In this case, you must set `LicenseType` to BYOL.
     * @example Auto
     *
     * @var string
     */
    public $licenseType;

    /**
     * @description The type of the OS. Valid values:
     *
     *   Windows
     *   Linux
     *
     * @example Windows
     *
     * @var string
     */
    public $osType;

    /**
     * @description The URL of the image object that you want to upload in Object Storage Service (OSS).
     *
     * @example https://ossbucket:endpoint/object
     *
     * @var string
     */
    public $ossObjectPath;

    /**
     * @description The type of the protocol. Valid value: ASP.
     *
     * @example ASP
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description The ID of the region.
     *
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
