<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponseBody\mediaList;

use AlibabaCloud\Tea\Model;

class video extends Model
{
    /**
     * @description The download switch. The audio file can be downloaded offline only when the download switch is turned on. Valid values:
     *
     *   **on**
     *   **off**
     *
     * @example app-****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The status of the video file. Valid values:
     *
     *   **Uploading**
     *   **UploadFail**
     *   **UploadSucc**
     *   **Transcoding**
     *   **TranscodeFail**
     *   **Blocked**
     *   **Normal**
     *
     * @example 10000123
     *
     * @var int
     */
    public $cateId;

    /**
     * @description The name of the category.
     *
     * @example video1
     *
     * @var string
     */
    public $cateName;

    /**
     * @description The filter condition. For more information about the syntax, see [Protocol for media asset search](~~86991~~).
     *
     * @example https://example.aliyundoc.com/image01.png
     *
     * @var string
     */
    public $coverURL;

    /**
     * @description The category ID of the auxiliary media asset.
     *
     * @example 2018-07-19T03:45:25Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The endpoint of the OSS bucket in which the image file is stored.
     *
     * @example The media asset fields to return in the query results.
     *
     * By default, only the basic media asset fields are returned. You can specify additional media asset fields that need to be returned in the request. For more information, see the "API examples" section of the [Search for media asset information](~~99179~~) topic.
     * @var string
     */
    public $description;

    /**
     * @description The ID of the application.
     *
     * @example on
     *
     * @var string
     */
    public $downloadSwitch;

    /**
     * @description The description of the auxiliary media asset.
     *
     * @example 123
     *
     * @var float
     */
    public $duration;

    /**
     * @description [Details about video files](~~86991~~).
     *
     * @example general
     *
     * @var string
     */
    public $mediaSource;

    /**
     * @description The description of the audio file.
     *
     * @example 2018-07-19T03:48:25Z
     *
     * @var string
     */
    public $modificationTime;

    /**
     * @description The URL of the image file.
     *
     * @example Preprocessing
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
     * @description The time when the image file was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 123
     *
     * @var int
     */
    public $size;

    /**
     * @description The endpoint of the OSS bucket in which the auxiliary media asset is stored.
     *
     * @var string[]
     */
    public $snapshots;

    /**
     * @description The list of automatic snapshots.
     *
     * @var string[]
     */
    public $spriteSnapshots;

    /**
     * @description The ID of the application.
     *
     * @example UploadSucc
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
     * @description The time when the audio file was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example outin-bfefbb90a47c******163e1c7426.oss-cn-shanghai.aliyuncs.com
     *
     * @var string
     */
    public $storageLocation;

    /**
     * @description The title of the image file.
     *
     * @example tag1
     *
     * @var string
     */
    public $tags;

    /**
     * @description The title of the audio file.
     *
     * @example ceshi
     *
     * @var string
     */
    public $title;

    /**
     * @description The category ID of the audio file.
     *
     * @example FastTranscode
     *
     * @var string
     */
    public $transcodeMode;

    /**
     * @description The time when the video file was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example a82a2asdasqadaf3faa0ed6c1ee372****
     *
     * @var string
     */
    public $videoId;
    protected $_name = [
        'appId'             => 'AppId',
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
        'videoId'           => 'VideoId',
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
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return video
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
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
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }

        return $model;
    }
}
