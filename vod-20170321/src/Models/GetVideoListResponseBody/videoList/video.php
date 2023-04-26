<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoListResponseBody\videoList;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoListResponseBody\videoList\video\snapshots;
use AlibabaCloud\Tea\Model;

class video extends Model
{
    /**
     * @description The application ID. Default value: **app-1000000**.
     *
     * @example app-1000000
     *
     * @var string
     */
    public $appId;

    /**
     * @description The category ID.
     *
     * @example 781111
     *
     * @var int
     */
    public $cateId;

    /**
     * @description The category name.
     *
     * @example Category name
     *
     * @var string
     */
    public $cateName;

    /**
     * @description The thumbnail URL of the media file.
     *
     * @example https://example.aliyundoc.com/****.jpg
     *
     * @var string
     */
    public $coverURL;

    /**
     * @description The time when the media file was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2017-11-14T09:15:50Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the media file.
     *
     * @example Video description in ApsaraVideo VOD
     *
     * @var string
     */
    public $description;

    /**
     * @description The duration of the media file. Unit: seconds.
     *
     * @example 135.6
     *
     * @var float
     */
    public $duration;

    /**
     * @description The time when the video was updated. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2017-11-14T09:16:50Z
     *
     * @var string
     */
    public $modificationTime;

    /**
     * @var string
     */
    public $restoreExpiration;

    /**
     * @var string
     */
    public $restoreStatus;

    /**
     * @description The size of the source file. Unit: bytes.
     *
     * @example 10897890
     *
     * @var int
     */
    public $size;

    /**
     * @description The video snapshot URLs.
     *
     * @var snapshots
     */
    public $snapshots;

    /**
     * @description The video status. Valid values:
     *
     *   **Uploading**: The video is being uploaded.
     *   **UploadFail**: The video failed to be uploaded.
     *   **UploadSucc**: The video has been uploaded.
     *   **Transcoding**: The video is being transcoded.
     *   **TranscodeFail**: The video failed to be transcoded.
     *   **checking**: The video is being reviewed.
     *   **Blocked**: The video is blocked.
     *   **Normal**: The video is normal.
     *   **ProduceFail**: The video failed to be produced.
     *
     * For more information about each video status, see the "Status: the status of a video" section of the [Basic data types](~~52839#section-p7c-jgy-070~~) topic.
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $storageClass;

    /**
     * @description The storage address of the media file.
     *
     * @example out-****.oss-cn-shanghai.aliyuncs.com
     *
     * @var string
     */
    public $storageLocation;

    /**
     * @description The tags of the media file. Multiple tags are separated by commas (,).
     *
     * @example Tag 1,Tag 2
     *
     * @var string
     */
    public $tags;

    /**
     * @description The title of the media file.
     *
     * @example Video title in ApsaraVideo VOD
     *
     * @var string
     */
    public $title;

    /**
     * @description The ID of the media file.
     *
     * @example 9ae2af636ca6c10412f44891fc****
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
        'duration'          => 'Duration',
        'modificationTime'  => 'ModificationTime',
        'restoreExpiration' => 'RestoreExpiration',
        'restoreStatus'     => 'RestoreStatus',
        'size'              => 'Size',
        'snapshots'         => 'Snapshots',
        'status'            => 'Status',
        'storageClass'      => 'StorageClass',
        'storageLocation'   => 'StorageLocation',
        'tags'              => 'Tags',
        'title'             => 'Title',
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
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->modificationTime) {
            $res['ModificationTime'] = $this->modificationTime;
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
            $res['Snapshots'] = null !== $this->snapshots ? $this->snapshots->toMap() : null;
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
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['ModificationTime'])) {
            $model->modificationTime = $map['ModificationTime'];
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
            $model->snapshots = snapshots::fromMap($map['Snapshots']);
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
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }

        return $model;
    }
}
