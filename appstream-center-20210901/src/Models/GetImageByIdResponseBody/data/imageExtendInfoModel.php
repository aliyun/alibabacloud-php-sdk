<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetImageByIdResponseBody\data;

use AlibabaCloud\Dara\Model;

class imageExtendInfoModel extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var int
     */
    public $dataDiskSize;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $gpuCategory;

    /**
     * @var string
     */
    public $gpuDriverVersion;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $packageType;

    /**
     * @var int
     */
    public $systemDiskSize;

    /**
     * @var string
     */
    public $versionId;
    protected $_name = [
        'aliUid' => 'AliUid',
        'dataDiskSize' => 'DataDiskSize',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'gpuCategory' => 'GpuCategory',
        'gpuDriverVersion' => 'GpuDriverVersion',
        'imageId' => 'ImageId',
        'packageType' => 'PackageType',
        'systemDiskSize' => 'SystemDiskSize',
        'versionId' => 'VersionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->gpuCategory) {
            $res['GpuCategory'] = $this->gpuCategory;
        }

        if (null !== $this->gpuDriverVersion) {
            $res['GpuDriverVersion'] = $this->gpuDriverVersion;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }

        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }

        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
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
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['GpuCategory'])) {
            $model->gpuCategory = $map['GpuCategory'];
        }

        if (isset($map['GpuDriverVersion'])) {
            $model->gpuDriverVersion = $map['GpuDriverVersion'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }

        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }

        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
