<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeImagesResponseBody;

use AlibabaCloud\Tea\Model;

class images extends Model
{
    /**
     * @var string
     */
    public $appVersion;

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
     * @var string
     */
    public $sessionType;

    /**
     * @var int
     */
    public $sharedCount;

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

    /**
     * @var bool
     */
    public $volumeEncryptionEnabled;

    /**
     * @var string
     */
    public $volumeEncryptionKey;
    protected $_name = [
        'appVersion'              => 'AppVersion',
        'creationTime'            => 'CreationTime',
        'dataDiskSize'            => 'DataDiskSize',
        'description'             => 'Description',
        'gpuCategory'             => 'GpuCategory',
        'gpuDriverVersion'        => 'GpuDriverVersion',
        'imageId'                 => 'ImageId',
        'imageType'               => 'ImageType',
        'name'                    => 'Name',
        'osType'                  => 'OsType',
        'progress'                => 'Progress',
        'protocolType'            => 'ProtocolType',
        'sessionType'             => 'SessionType',
        'sharedCount'             => 'SharedCount',
        'size'                    => 'Size',
        'status'                  => 'Status',
        'supportedLanguages'      => 'SupportedLanguages',
        'volumeEncryptionEnabled' => 'VolumeEncryptionEnabled',
        'volumeEncryptionKey'     => 'VolumeEncryptionKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
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
        if (null !== $this->sessionType) {
            $res['SessionType'] = $this->sessionType;
        }
        if (null !== $this->sharedCount) {
            $res['SharedCount'] = $this->sharedCount;
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
        if (null !== $this->volumeEncryptionEnabled) {
            $res['VolumeEncryptionEnabled'] = $this->volumeEncryptionEnabled;
        }
        if (null !== $this->volumeEncryptionKey) {
            $res['VolumeEncryptionKey'] = $this->volumeEncryptionKey;
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
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
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
        if (isset($map['SessionType'])) {
            $model->sessionType = $map['SessionType'];
        }
        if (isset($map['SharedCount'])) {
            $model->sharedCount = $map['SharedCount'];
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
        if (isset($map['VolumeEncryptionEnabled'])) {
            $model->volumeEncryptionEnabled = $map['VolumeEncryptionEnabled'];
        }
        if (isset($map['VolumeEncryptionKey'])) {
            $model->volumeEncryptionKey = $map['VolumeEncryptionKey'];
        }

        return $model;
    }
}
