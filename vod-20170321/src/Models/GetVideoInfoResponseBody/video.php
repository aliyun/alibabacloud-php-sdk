<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoInfoResponseBody;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoInfoResponseBody\video\snapshots;
use AlibabaCloud\Tea\Model;

class video extends Model
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
     * @description The review status of the video. Valid values:
     *
     *   **Normal**: pass
     *   **Blocked**: failed
     *
     * @example Normal
     *
     * @var string
     */
    public $auditStatus;

    /**
     * @description The category ID of the video.
     *
     * @example 781111****
     *
     * @var int
     */
    public $cateId;

    /**
     * @description The category of the video.
     *
     * @example category name
     *
     * @var string
     */
    public $cateName;

    /**
     * @description The thumbnail URL of the video.
     *
     * @example https://example.aliyundoc.com/****.jpg
     *
     * @var string
     */
    public $coverURL;

    /**
     * @description The time when the video was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2017-11-14T09:15:50Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The information about the custom media asset.
     * > This parameter has been deprecated. This parameter is no longer returned when you call the API.
     * @example {"aaa":"test"}
     *
     * @var string
     */
    public $customMediaInfo;

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
     * @description The time when the video was updated. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2017-11-14T10:15:50Z
     *
     * @var string
     */
    public $modificationTime;

    /**
     * @description The region ID of the Object Storage Service (OSS) bucket.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The size of the source video file. Unit: byte.
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
     * @description The video status. Valid values:
     *   **Uploading**: The video is being uploaded.
     *   **UploadFail**: The video failed to be uploaded.
     *   **UploadSucc**: The video has been uploaded.
     *   **Transcoding**: The video is being transcoded.
     *   **TranscodeFail**: The video failed to be transcoded.
     *   **Blocked**: The video failed the review.
     *   **Normal**: The video passed the review.
     *
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @description The OSS bucket where the video is stored.
     *
     * @example out-201703232251****.oss-cn-shanghai.aliyuncs.com
     *
     * @var string
     */
    public $storageLocation;

    /**
     * @description The tags of the video. Separate multiple tags with commas (,).
     *
     * @example tag1,tag2
     *
     * @var string
     */
    public $tags;

    /**
     * @description The ID of the template group.
     *
     * @example 9ae2af636ca64835b0c10412f448****
     *
     * @var string
     */
    public $templateGroupId;

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
     * @example 9b73864d75f1d231e9001cd5f8****
     *
     * @var string
     */
    public $videoId;
    protected $_name = [
        'appId'            => 'AppId',
        'auditStatus'      => 'AuditStatus',
        'cateId'           => 'CateId',
        'cateName'         => 'CateName',
        'coverURL'         => 'CoverURL',
        'creationTime'     => 'CreationTime',
        'customMediaInfo'  => 'CustomMediaInfo',
        'description'      => 'Description',
        'duration'         => 'Duration',
        'modificationTime' => 'ModificationTime',
        'regionId'         => 'RegionId',
        'size'             => 'Size',
        'snapshots'        => 'Snapshots',
        'status'           => 'Status',
        'storageLocation'  => 'StorageLocation',
        'tags'             => 'Tags',
        'templateGroupId'  => 'TemplateGroupId',
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
        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
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
        if (null !== $this->customMediaInfo) {
            $res['CustomMediaInfo'] = $this->customMediaInfo;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (null !== $this->templateGroupId) {
            $res['TemplateGroupId'] = $this->templateGroupId;
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
        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
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
        if (isset($map['CustomMediaInfo'])) {
            $model->customMediaInfo = $map['CustomMediaInfo'];
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
        if (isset($map['TemplateGroupId'])) {
            $model->templateGroupId = $map['TemplateGroupId'];
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
