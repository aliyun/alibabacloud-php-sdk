<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoListResponseBody\videoList;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoListResponseBody\videoList\video\snapshots;
use AlibabaCloud\Tea\Model;

class video extends Model
{
    /**
     * @description The ID of the application. Default value: **app-1000000**.
     *
     * @example app-1000000
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the video category.
     *
     * @example 781111
     *
     * @var int
     */
    public $cateId;

    /**
     * @description The name of the video category.
     *
     * @example category name
     *
     * @var string
     */
    public $cateName;

    /**
     * @description The URL of the video thumbnail.
     *
     * @example https://example.aliyundoc.com/****.jpg
     *
     * @var string
     */
    public $coverURL;

    /**
     * @description The time when the video file was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2017-11-14T09:15:50Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the video.
     *
     * @example video description
     *
     * @var string
     */
    public $description;

    /**
     * @description The duration of the video. Unit: seconds.
     *
     * @example 135.6
     *
     * @var float
     */
    public $duration;

    /**
     * @description The time when the video file was updated. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2017-11-14T09:16:50Z
     *
     * @var string
     */
    public $modificationTime;

    /**
     * @description The size of the video mezzanine file. Unit: byte.
     *
     * @example 10897890
     *
     * @var int
     */
    public $size;

    /**
     * @description The URL array of video snapshots.
     *
     * @var snapshots
     */
    public $snapshots;

    /**
     * @description The status of the video. By default, videos in all states are returned. Multiple states are separated by commas (,). Valid values:
     *
     *   **Uploading**: The video is being uploaded.
     *   **UploadFail**: The video fails to be uploaded.
     *   **UploadSucc**: The video is uploaded.
     *   **Transcoding**: The video is being transcoded.
     *   **TranscodeFail**: The video fails to be transcoded.
     *   **Blocked**: The video is blocked.
     *   **Normal**: The video can be played.
     *
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @description The OSS bucket where the video file is stored.
     *
     * @example out-****.oss-cn-shanghai.aliyuncs.com
     *
     * @var string
     */
    public $storageLocation;

    /**
     * @description The tags of the video. Multiple tags are separated by commas (,).
     *
     * @example tag1,tag2
     *
     * @var string
     */
    public $tags;

    /**
     * @description The title of the video.
     *
     * @example video title
     *
     * @var string
     */
    public $title;

    /**
     * @description The ID of the video.
     *
     * @example 9ae2af636ca6c10412f44891fc****
     *
     * @var string
     */
    public $videoId;
    protected $_name = [
        'appId'            => 'AppId',
        'cateId'           => 'CateId',
        'cateName'         => 'CateName',
        'coverURL'         => 'CoverURL',
        'creationTime'     => 'CreationTime',
        'description'      => 'Description',
        'duration'         => 'Duration',
        'modificationTime' => 'ModificationTime',
        'size'             => 'Size',
        'snapshots'        => 'Snapshots',
        'status'           => 'Status',
        'storageLocation'  => 'StorageLocation',
        'tags'             => 'Tags',
        'title'            => 'Title',
        'videoId'          => 'VideoId',
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
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->snapshots) {
            $res['Snapshots'] = null !== $this->snapshots ? $this->snapshots->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Snapshots'])) {
            $model->snapshots = snapshots::fromMap($map['Snapshots']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
