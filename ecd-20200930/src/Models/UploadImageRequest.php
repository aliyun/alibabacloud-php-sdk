<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class UploadImageRequest extends Model
{
    /**
     * @var int
     */
    public $dataDiskSize;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enableSecurityCheck;

    /**
     * @var bool
     */
    public $gpuCategory;

    /**
     * @var string
     */
    public $gpuDriverType;

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
    public $osType;

    /**
     * @var string
     */
    public $ossObjectPath;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $systemDiskSize;
    protected $_name = [
        'dataDiskSize' => 'DataDiskSize',
        'description' => 'Description',
        'enableSecurityCheck' => 'EnableSecurityCheck',
        'gpuCategory' => 'GpuCategory',
        'gpuDriverType' => 'GpuDriverType',
        'imageName' => 'ImageName',
        'licenseType' => 'LicenseType',
        'osType' => 'OsType',
        'ossObjectPath' => 'OssObjectPath',
        'protocolType' => 'ProtocolType',
        'regionId' => 'RegionId',
        'systemDiskSize' => 'SystemDiskSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
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

        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }

        return $model;
    }
}
