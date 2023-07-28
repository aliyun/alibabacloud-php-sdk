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
     * @description The category ID of the media file.
     *
     * @example 781111****
     *
     * @var int
     */
    public $cateId;

    /**
     * @description The name of the category.
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
     * @description The custom information about the media file.\n\n> This parameter has been deprecated. This parameter is no longer returned after you call the operation.
     *
     * @example {"aaa":"test"}
     *
     * @var string
     */
    public $customMediaInfo;

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
     * @description The time when the media file was updated. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2017-11-14T10:15:50Z
     *
     * @var string
     */
    public $modificationTime;

    /**
     * @description The region where the media file is stored.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The period of time in which the object remains in the restored state.
     *
     * @example 2023-03-30T10:14:14Z
     *
     * @var string
     */
    public $restoreExpiration;

    /**
     * @description The restoration status of the audio or video file. Valid values:
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
     * @description The status of the video. For information about the operations that can be performed on videos in different statuses and limits, see the Status: the status of a video section of the [Basic data types](~~52839~~) topic. Valid values:
     *
     *   **Uploading**: The video is being uploaded.
     *   **UploadFail**: The video failed to be uploaded.
     *   **UploadSucc**: The video has been uploaded.
     *   **Transcoding**: The video is being transcoded.
     *   **TranscodeFail**: The video failed to be transcoded.
     *   **Blocked**: The video is blocked.
     *   **Normal**: The video is normal.
     *
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @description The storage class of the audio or video file. Valid values:
     *
     *   **Standard**: All media resources are stored as Standard objects.
     *   **IA**: All media resources are stored as IA objects.
     *   **Archive**: All media resources are stored as Archive objects.
     *   **ColdArchive**: All media resources are stored as Cold Archive objects.
     *   **SourceIA**: Only the source files are IA objects.
     *   **SourceArchive**: Only the source files are Archive objects.
     *   **SourceColdArchive**: Only the source files are Cold Archive objects.
     *   **Changing**: The storage class is being modified.
     *
     * @example Standard
     *
     * @var string
     */
    public $storageClass;

    /**
     * @description The storage address of the media file.
     *
     * @example out-201703232251****.oss-cn-shanghai.aliyuncs.com
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
     * @description The ID of the transcoding template group.
     *
     * @example 9ae2af636ca64835b0c10412f448****
     *
     * @var string
     */
    public $templateGroupId;

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
     * @example 9b73864d75f1d231e9001cd5f8****
     *
     * @var string
     */
    public $videoId;
    protected $_name = [
        'appId'             => 'AppId',
        'auditStatus'       => 'AuditStatus',
        'cateId'            => 'CateId',
        'cateName'          => 'CateName',
        'coverURL'          => 'CoverURL',
        'creationTime'      => 'CreationTime',
        'customMediaInfo'   => 'CustomMediaInfo',
        'description'       => 'Description',
        'duration'          => 'Duration',
        'modificationTime'  => 'ModificationTime',
        'regionId'          => 'RegionId',
        'restoreExpiration' => 'RestoreExpiration',
        'restoreStatus'     => 'RestoreStatus',
        'size'              => 'Size',
        'snapshots'         => 'Snapshots',
        'status'            => 'Status',
        'storageClass'      => 'StorageClass',
        'storageLocation'   => 'StorageLocation',
        'tags'              => 'Tags',
        'templateGroupId'   => 'TemplateGroupId',
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
