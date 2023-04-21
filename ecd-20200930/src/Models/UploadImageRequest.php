<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class UploadImageRequest extends Model
{
    /**
     * @example 80
     *
     * @var int
     */
    public $dataDiskSize;

    /**
     * @example test description
     *
     * @var string
     */
    public $description;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableSecurityCheck;

    /**
     * @example true
     *
     * @var bool
     */
    public $gpuCategory;

    /**
     * @example gpu_grid9
     *
     * @var string
     */
    public $gpuDriverType;

    /**
     * @example Win10_Test
     *
     * @var string
     */
    public $imageName;

    /**
     * @example Auto
     *
     * @var string
     */
    public $licenseType;

    /**
     * @example Windows
     *
     * @var string
     */
    public $osType;

    /**
     * @example https://ossbucket:endpoint/object
     *
     * @var string
     */
    public $ossObjectPath;

    /**
     * @example HDX
     *
     * @var string
     */
    public $protocolType;

    /**
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
