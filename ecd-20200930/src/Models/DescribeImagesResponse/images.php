<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeImagesResponse;

use AlibabaCloud\Tea\Model;

class images extends Model
{
    /**
     * @var string
     */
    public $creationTime;

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
    public $imageType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var string
     */
    public $progress;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $supportedLanguages;
    protected $_name = [
        'creationTime'       => 'CreationTime',
        'dataDiskSize'       => 'DataDiskSize',
        'description'        => 'Description',
        'gpuCategory'        => 'GpuCategory',
        'gpuDriverVersion'   => 'GpuDriverVersion',
        'imageId'            => 'ImageId',
        'imageType'          => 'ImageType',
        'name'               => 'Name',
        'osType'             => 'OsType',
        'progress'           => 'Progress',
        'protocolType'       => 'ProtocolType',
        'size'               => 'Size',
        'status'             => 'Status',
        'supportedLanguages' => 'SupportedLanguages',
    ];

    public function validate()
    {
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('dataDiskSize', $this->dataDiskSize, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('gpuCategory', $this->gpuCategory, true);
        Model::validateRequired('gpuDriverVersion', $this->gpuDriverVersion, true);
        Model::validateRequired('imageId', $this->imageId, true);
        Model::validateRequired('imageType', $this->imageType, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('osType', $this->osType, true);
        Model::validateRequired('progress', $this->progress, true);
        Model::validateRequired('protocolType', $this->protocolType, true);
        Model::validateRequired('size', $this->size, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('supportedLanguages', $this->supportedLanguages, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->supportedLanguages) {
            $res['SupportedLanguages'] = $this->supportedLanguages;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return images
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SupportedLanguages'])) {
            if (!empty($map['SupportedLanguages'])) {
                $model->supportedLanguages = $map['SupportedLanguages'];
            }
        }

        return $model;
    }
}
