<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponseBody\mediaList;

use AlibabaCloud\Tea\Model;

class audio extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example app-****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the audio file.
     *
     * @example a82a2cd7d4e147bbed6c1ee372****
     *
     * @var string
     */
    public $audioId;

    /**
     * @description The ID of the category.
     *
     * @example 10000123
     *
     * @var int
     */
    public $cateId;

    /**
     * @description The name of the category.
     *
     * @example ceshi
     *
     * @var string
     */
    public $cateName;

    /**
     * @description The URL of the thumbnail.
     *
     * @example http://example.com/image04.jpg
     *
     * @var string
     */
    public $coverURL;

    /**
     * @description The time when the audio stream was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*hh:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2018-07-19T03:45:25Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the audio file.
     *
     * @example audio description
     *
     * @var string
     */
    public $description;

    /**
     * @description The download switch. The audio file can be downloaded offline only when the download switch is turned on. Valid values:
     *
     *   **on**
     *   **off**
     *
     * @example on
     *
     * @var string
     */
    public $downloadSwitch;

    /**
     * @description The duration of the audio file.
     *
     * @example 123
     *
     * @var float
     */
    public $duration;

    /**
     * @description The source of the audio file. Valid values:
     *
     *   **general**: The audio file is uploaded by using ApsaraVideo VOD.
     *   **short_video**: The audio file is uploaded to ApsaraVideo VOD by using the short video SDK. For more information, see [Introduction](https://help.aliyun.com/document_detail/53407.html).
     *   **editing**: The audio file is uploaded to ApsaraVideo VOD after online editing and production. For more information, see [ProduceEditingProjectVideo](https://help.aliyun.com/document_detail/68536.html).
     *   **live**: The audio file is recorded and uploaded as a file to ApsaraVideo VOD.
     *
     * @example general
     *
     * @var string
     */
    public $mediaSource;

    /**
     * @description The time when the audio file was updated. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*hh:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2018-07-19T03:48:25Z
     *
     * @var string
     */
    public $modificationTime;

    /**
     * @description The preprocessing status. Only preprocessed videos can be used for live streaming in the production studio. Valid values:
     *
     *   **UnPreprocess**
     *   **Preprocessing**
     *   **PreprocessSucceed**
     *   **PreprocessFailed**
     *
     * @example UnPreprocess
     *
     * @var string
     */
    public $preprocessStatus;

    /**
     * @description The period of time in which the audio file remains in the restored state.
     *
     * @example 2023-03-30T10:14:14Z
     *
     * @var string
     */
    public $restoreExpiration;

    /**
     * @description The restoration status of the audio file. Valid values:
     *
     *   **Processing**
     *   **Success**
     *   **Failed**
     *
     * @example Success
     *
     * @var string
     */
    public $restoreStatus;

    /**
     * @description The size of the audio file.
     *
     * @example 123
     *
     * @var int
     */
    public $size;

    /**
     * @description The automatic snapshots.
     *
     * @var string[]
     */
    public $snapshots;

    /**
     * @description The sprite snapshots.
     *
     * @var string[]
     */
    public $spriteSnapshots;

    /**
     * @description The status of the audio file. Valid values:
     *
     *   **Uploading**
     *   **Normal**
     *   **UploadFail**
     *   **Deleted**
     *
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @description The storage class of the audio file. Valid values:
     *
     *   **Standard**: All media resources are stored as Standard objects.
     *   **IA**: All media resources are stored as IA objects.
     *   **Archive**: All media resources are stored as Archive objects.
     *   **ColdArchive**: All media resources are stored as Cold Archive objects.
     *   **SourceIA**: Only the source file is stored as an IA object.
     *   **SourceArchive**: Only the source file is stored as an Archive object.
     *   **SourceColdArchive**: Only the source file is stored as a Cold Archive object.
     *   **Changing**: The storage class is being modified.
     *
     * @example Standard
     *
     * @var string
     */
    public $storageClass;

    /**
     * @description The region in which the audio is stored.
     *
     * @example outin-aaa*****aa.oss-cn-shanghai.aliyuncs.com
     *
     * @var string
     */
    public $storageLocation;

    /**
     * @description The tags of the audio file.
     *
     * @example tag1,tag2
     *
     * @var string
     */
    public $tags;

    /**
     * @description The title of the audio file
     *
     * @example audio
     *
     * @var string
     */
    public $title;

    /**
     * @description The transcoding mode. Valid values:
     *
     *   **FastTranscode**: The audio file is immediately transcoded after it is uploaded. You cannot play the file before it is transcoded.
     *   **NoTranscode**: The audio file can be played without being transcoded. You can immediately play the file after it is uploaded.
     *   **AsyncTranscode**: The audio file can be immediately played and asynchronously transcoded after it is uploaded.
     *
     * @example FastTranscode
     *
     * @var string
     */
    public $transcodeMode;
    protected $_name = [
        'appId'             => 'AppId',
        'audioId'           => 'AudioId',
        'cateId'            => 'CateId',
        'cateName'          => 'CateName',
        'coverURL'          => 'CoverURL',
        'creationTime'      => 'CreationTime',
        'description'       => 'Description',
        'downloadSwitch'    => 'DownloadSwitch',
        'duration'          => 'Duration',
        'mediaSource'       => 'MediaSource',
        'modificationTime'  => 'ModificationTime',
        'preprocessStatus'  => 'PreprocessStatus',
        'restoreExpiration' => 'RestoreExpiration',
        'restoreStatus'     => 'RestoreStatus',
        'size'              => 'Size',
        'snapshots'         => 'Snapshots',
        'spriteSnapshots'   => 'SpriteSnapshots',
        'status'            => 'Status',
        'storageClass'      => 'StorageClass',
        'storageLocation'   => 'StorageLocation',
        'tags'              => 'Tags',
        'title'             => 'Title',
        'transcodeMode'     => 'TranscodeMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->audioId) {
            $res['AudioId'] = $this->audioId;
        }
        if (null !== $this->cateId) {
            $res['CateId'] = $this->cateId;
        }
        if (null !== $this->cateName) {
            $res['CateName'] = $this->cateName;
        }
        if (null !== $this->coverURL) {
            $res['CoverURL'] = $this->coverURL;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->downloadSwitch) {
            $res['DownloadSwitch'] = $this->downloadSwitch;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->mediaSource) {
            $res['MediaSource'] = $this->mediaSource;
        }
        if (null !== $this->modificationTime) {
            $res['ModificationTime'] = $this->modificationTime;
        }
        if (null !== $this->preprocessStatus) {
            $res['PreprocessStatus'] = $this->preprocessStatus;
        }
        if (null !== $this->restoreExpiration) {
            $res['RestoreExpiration'] = $this->restoreExpiration;
        }
        if (null !== $this->restoreStatus) {
            $res['RestoreStatus'] = $this->restoreStatus;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->snapshots) {
            $res['Snapshots'] = $this->snapshots;
        }
        if (null !== $this->spriteSnapshots) {
            $res['SpriteSnapshots'] = $this->spriteSnapshots;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->storageClass) {
            $res['StorageClass'] = $this->storageClass;
        }
        if (null !== $this->storageLocation) {
            $res['StorageLocation'] = $this->storageLocation;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->transcodeMode) {
            $res['TranscodeMode'] = $this->transcodeMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return audio
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AudioId'])) {
            $model->audioId = $map['AudioId'];
        }
        if (isset($map['CateId'])) {
            $model->cateId = $map['CateId'];
        }
        if (isset($map['CateName'])) {
            $model->cateName = $map['CateName'];
        }
        if (isset($map['CoverURL'])) {
            $model->coverURL = $map['CoverURL'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DownloadSwitch'])) {
            $model->downloadSwitch = $map['DownloadSwitch'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['MediaSource'])) {
            $model->mediaSource = $map['MediaSource'];
        }
        if (isset($map['ModificationTime'])) {
            $model->modificationTime = $map['ModificationTime'];
        }
        if (isset($map['PreprocessStatus'])) {
            $model->preprocessStatus = $map['PreprocessStatus'];
        }
        if (isset($map['RestoreExpiration'])) {
            $model->restoreExpiration = $map['RestoreExpiration'];
        }
        if (isset($map['RestoreStatus'])) {
            $model->restoreStatus = $map['RestoreStatus'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Snapshots'])) {
            if (!empty($map['Snapshots'])) {
                $model->snapshots = $map['Snapshots'];
            }
        }
        if (isset($map['SpriteSnapshots'])) {
            if (!empty($map['SpriteSnapshots'])) {
                $model->spriteSnapshots = $map['SpriteSnapshots'];
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StorageClass'])) {
            $model->storageClass = $map['StorageClass'];
        }
        if (isset($map['StorageLocation'])) {
            $model->storageLocation = $map['StorageLocation'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['TranscodeMode'])) {
            $model->transcodeMode = $map['TranscodeMode'];
        }

        return $model;
    }
}
