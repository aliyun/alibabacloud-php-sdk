<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetVideoListResponseBody;

use AlibabaCloud\Tea\Model;

class mediaList extends Model
{
    /**
     * @description The ID of the application. Default value: app-1000000.
     *
     * @example app-1000000
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the category.
     *
     * @example 3679
     *
     * @var int
     */
    public $cateId;

    /**
     * @description The name of the category.
     *
     * @var string
     */
    public $cateName;

    /**
     * @description The URL of the thumbnail.
     *
     * @example http://example.aliyundoc.com/snapshot/****.jpg?auth_key=1498476426-0-0-f00b9455c49a423ce69cf4e27333****
     *
     * @var string
     */
    public $coverUrl;

    /**
     * @description The time when the audio or video file was created. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2017-11-14T09:15:50Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the audio or video file.
     *
     * @var string
     */
    public $description;

    /**
     * @description The duration. Unit: seconds.
     *
     * @example 135.6
     *
     * @var float
     */
    public $duration;

    /**
     * @description The ID of the audio or video file.
     *
     * @example 1c6ce34007d571ed94667630a6bc****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The time when the audio or video file was updated. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2017-11-14T09:16:50Z
     *
     * @var string
     */
    public $modificationTime;

    /**
     * @description The size of the source file. Unit: bytes.
     *
     * @example 10897890
     *
     * @var int
     */
    public $size;

    /**
     * @description The array of video snapshot URLs.
     *
     * @var string[]
     */
    public $snapshots;

    /**
     * @description The status of the video.
     *
     * Valid values:
     *
     *   PrepareFail: The file is abnormal.
     *   UploadFail: The video failed to be uploaded.
     *   UploadSucc: The video is uploaded.
     *   Transcoding: The video is being transcoded.
     *   TranscodeFail: The video failed to be transcoded.
     *   ProduceFail: The video failed to be produced.
     *   Normal: The video is normal.
     *   Uploading: The video is being uploaded.
     *   Preparing: The file is being generated.
     *   Blocked: The video is blocked.
     *   checking: The video is being reviewed.
     *
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @description The storage address.
     *
     * @example out-****.oss-cn-shanghai.aliyuncs.com
     *
     * @var string
     */
    public $storageLocation;

    /**
     * @description The tags of the audio or video file.
     *
     * @var string
     */
    public $tags;

    /**
     * @description The title of the audio or video file.
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'appId'            => 'AppId',
        'cateId'           => 'CateId',
        'cateName'         => 'CateName',
        'coverUrl'         => 'CoverUrl',
        'creationTime'     => 'CreationTime',
        'description'      => 'Description',
        'duration'         => 'Duration',
        'mediaId'          => 'MediaId',
        'modificationTime' => 'ModificationTime',
        'size'             => 'Size',
        'snapshots'        => 'Snapshots',
        'status'           => 'Status',
        'storageLocation'  => 'StorageLocation',
        'tags'             => 'Tags',
        'title'            => 'Title',
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
        if (null !== $this->coverUrl) {
            $res['CoverUrl'] = $this->coverUrl;
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
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->modificationTime) {
            $res['ModificationTime'] = $this->modificationTime;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->snapshots) {
            $res['Snapshots'] = $this->snapshots;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaList
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
        if (isset($map['CoverUrl'])) {
            $model->coverUrl = $map['CoverUrl'];
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
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['ModificationTime'])) {
            $model->modificationTime = $map['ModificationTime'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Snapshots'])) {
            if (!empty($map['Snapshots'])) {
                $model->snapshots = $map['Snapshots'];
            }
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

        return $model;
    }
}
