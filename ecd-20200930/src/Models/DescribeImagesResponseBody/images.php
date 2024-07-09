<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeImagesResponseBody;

use AlibabaCloud\Tea\Model;

class images extends Model
{
    /**
     * @description The version of the image.
     *
     * @example 1.0.0
     *
     * @var string
     */
    public $appVersion;

    /**
     * @description The time when the image was created.
     *
     * @example 2018-01-10T01:01:10Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The size of the data disk. Unit: GiB.
     *
     * @example 150
     *
     * @var int
     */
    public $dataDiskSize;

    /**
     * @description The description of the image.
     *
     * @example This is description.
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether the image is a GPU-accelerated image.
     *
     * @example false
     *
     * @var bool
     */
    public $gpuCategory;

    /**
     * @description The version number of the GPU driver.
     *
     * @example 417.22
     *
     * @var string
     */
    public $gpuDriverVersion;

    /**
     * @description The ID of the image.
     *
     * @example m-gx2x1dhsmusr2****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The type of the image.
     *
     * Valid values:
     *
     *   SYSTEM
     *
     * <!-- -->
     *
     *   CUSTOM
     *
     * <!-- -->
     * @example SYSTEM
     *
     * @var string
     */
    public $imageType;

    /**
     * @description The name of the image.
     *
     * @example testImageName
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the operating system.
     *
     * @example WINDOWS
     *
     * @var string
     */
    public $osType;

    /**
     * @description The operating system type of the image.
     *
     * Valid values:
     *
     *   Ubuntu
     *
     * <!-- -->
     *
     *   Windows Server 2022
     *
     * <!-- -->
     *
     *   UOS
     *
     * <!-- -->
     *
     *   CentOS
     *
     * <!-- -->
     *
     *   Windows Server 2019
     *
     * <!-- -->
     *
     *   SQL Server 2016
     *
     * <!-- -->
     *
     *   Windows 10
     *
     * <!-- -->
     * @example Windows Server 2019
     *
     * @var string
     */
    public $platform;

    /**
     * @description The creation progress of the image. Unit: %.
     *
     * @example 100%
     *
     * @var string
     */
    public $progress;

    /**
     * @description The protocol type.
     *
     * Valid values:
     *
     *   HDX: High-definition Experience (HDX) protocol
     *   ASP: in-house Adaptive Streaming Protocol (ASP) (recommended)
     *
     * @example ASP
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description The type of the image session.
     *
     * Valid values:
     *
     *   SINGLE_SESSION: single-session image.
     *
     *   MULTIPLE_SESSION: multi-session image.
     *
     * @example MULTIPLE_SESSION
     *
     * @var string
     */
    public $sessionType;

    /**
     * @description The number of shared images.
     *
     * @example 1
     *
     * @var int
     */
    public $sharedCount;

    /**
     * @description The size of the image. Unit: GiB.
     *
     * @example 40
     *
     * @var int
     */
    public $size;

    /**
     * @description The status of the image.
     *
     * Valid values:
     *
     *   Creating
     *
     * <!-- -->
     *
     *   Available
     *
     * <!-- -->
     *
     *   CreateFailed
     *
     * <!-- -->
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The languages of the operating system.
     *
     * @var string[]
     */
    public $supportedLanguages;

    /**
     * @description The time when the image was last modified.
     *
     * @example 2021-12-22T02:48:43Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description Indicates whether disk encryption is enabled.
     *
     * @example false
     *
     * @var bool
     */
    public $volumeEncryptionEnabled;

    /**
     * @description The ID of the Key Management Service (KMS) key that is used when disk encryption is enabled. You can call the [ListKeys](https://help.aliyun.com/document_detail/28951.html) operation to query the list of KMS keys.
     *
     * @example 08c33a6f-4e0a-4a1b-a3fa-7ddfa1d4****
     *
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
        'platform'                => 'Platform',
        'progress'                => 'Progress',
        'protocolType'            => 'ProtocolType',
        'sessionType'             => 'SessionType',
        'sharedCount'             => 'SharedCount',
        'size'                    => 'Size',
        'status'                  => 'Status',
        'supportedLanguages'      => 'SupportedLanguages',
        'updateTime'              => 'UpdateTime',
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
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
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
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
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
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
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
