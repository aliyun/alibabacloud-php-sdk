<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponseBody\mediaList;

use AlibabaCloud\Tea\Model;

class audio extends Model
{
    /**
     * @description The number of entries to return on each page. Default value: **10**. Maximum value: **100**.
     *
     * @example app-****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The time when the auxiliary media asset was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example a82a2cd7d4e147bbed6c1ee372****
     *
     * @var string
     */
    public $audioId;

    /**
     * @description The URL of the auxiliary media asset.
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
     * @description The status of the auxiliary media asset. Valid values:
     *
     *   **Uploading**: The auxiliary media asset is being uploaded. This is the initial status.
     *   **Normal**: The auxiliary media asset is uploaded.
     *   **UploadFail**: The auxiliary media asset fails to be uploaded.
     *
     * @example http://example.com/image04.jpg
     *
     * @var string
     */
    public $coverURL;

    /**
     * @description The source. Valid values:
     *
     *   **general**: The video file is uploaded by using ApsaraVideo VOD.
     *   **short_video**: The video file is uploaded by using the short video SDK.
     *   **editing**: The video file is produced after online editing.
     *   **live**: The video stream is recorded and uploaded as a file.
     *
     * @example 2018-07-19T03:45:25Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The type of the auxiliary media asset. Valid values:
     *
     *   **watermark**
     *   **subtitle**
     *   **material**
     *
     * @example The name of the category.
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the auxiliary media asset.
     *
     * @example on
     *
     * @var string
     */
    public $downloadSwitch;

    /**
     * @description The time when the image file was updated. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 123
     *
     * @var float
     */
    public $duration;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * > If the value of this parameter exceeds **200**, we recommend that you set the ScrollToken parameter as well.
     * @example general
     *
     * @var string
     */
    public $mediaSource;

    /**
     * @description The pagination identifier.
     *
     * @example 2018-07-19T03:48:25Z
     *
     * @var string
     */
    public $modificationTime;

    /**
     * @description The total number of data records that meet the specified filter criteria.
     *
     * @example UnPreprocess
     *
     * @var string
     */
    public $preprocessStatus;

    /**
     * @example 2023-03-30T10:14:14Z
     *
     * @var string
     */
    public $restoreExpiration;

    /**
     * @example Success
     *
     * @var string
     */
    public $restoreStatus;

    /**
     * @description The title of the video file.
     *
     * @example 123
     *
     * @var int
     */
    public $size;

    /**
     * @description The ID of the video file.
     *
     * @var string[]
     */
    public $snapshots;

    /**
     * @description The status of the image file.
     *
     *   **Uploading**: The image file is being uploaded. This is the initial status.
     *   **Normal**: The image file is uploaded.
     *   **UploadFail**: The image file fails to be uploaded.
     *
     * @var string[]
     */
    public $spriteSnapshots;

    /**
     * @description The size of the audio file.
     *
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @example Standard
     *
     * @var string
     */
    public $storageClass;

    /**
     * @description The duration of the audio file.
     *
     * @example outin-aaa*****aa.oss-cn-shanghai.aliyuncs.com
     *
     * @var string
     */
    public $storageLocation;

    /**
     * @description The tags of the video file.
     *
     * @example tag1,tag2
     *
     * @var string
     */
    public $tags;

    /**
     * @description The transcoding mode. Default value: FastTranscode. Valid values:
     *
     *   **FastTranscode**: The audio file is immediately transcoded after it is uploaded. You cannot play the file before it is transcoded.
     *   **NoTranscode**: The audio file can be played without being transcoded. You can immediately play the file after it is uploaded.
     *   **AsyncTranscode**: The audio file can be immediately played and asynchronously transcoded after it is uploaded.
     *
     * @example [Details about audio files](~~86991~~).
     *
     * @var string
     */
    public $title;

    /**
     * @description The time when the audio file was updated. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
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
