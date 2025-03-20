<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\BatchGetMediaInfosResponseBody\mediaInfos;

use AlibabaCloud\Tea\Model;

class mediaInfo extends Model
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
     * @description The ID of the category.
     *
     * @example 781111****
     *
     * @var int
     */
    public $cateId;

    /**
     * @description The name of the category.
     *
     * @example CateName
     *
     * @var string
     */
    public $cateName;

    /**
     * @description The thumbnail URL of the media asset.
     *
     * @example https://example.aliyundoc.com/****.jpg
     *
     * @var string
     */
    public $coverURL;

    /**
     * @description The time when the media asset was created. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2017-11-14T09:15:50Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the media asset.
     *
     * @example Aliyun VOD Video Description
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether the offline download feature is enabled. If you enable the offline download feature, users can download and play videos by using the ApsaraVideo Player on a local PC. For more information, see [Configure download settings](https://help.aliyun.com/document_detail/86107.html). Valid values:
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
     * @description The ID of the media asset.
     *
     * @example 7753d144efd74d6c45fe0570****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The time when the media asset was last updated. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2017-06-26T06:38:48Z
     *
     * @var string
     */
    public $modificationTime;

    /**
     * @description The period of time in which the audio file remains in the restored state.
     *
     * @example 2023-03-30T10:14:14Z
     *
     * @var string
     */
    public $restoreExpiration;

    /**
     * @description The restoration status of the media asset. Valid values:
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
     * @description The array of video snapshot URLs.
     *
     * @var string[]
     */
    public $snapshots;

    /**
     * @description The status of the video. Valid values:
     *
     *   **Uploading**
     *   **UploadFail**
     *   **UploadSucc**
     *   **Transcoding**
     *   **TranscodeFail**
     *   **Blocked**
     *   **Normal**
     *
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @description The storage type. Valid values:
     *
     *   **Standard**: All media assets are stored as Standard objects.
     *   **IA**: All media assets are stored as IA objects.
     *   **Archive**: All media assets are stored as Archive objects.
     *   **ColdArchive**: All media assets are stored as Cold Archive objects.
     *   **SourceIA**: Only the source files are IA objects.
     *   **SourceArchive**: Only the source files are Archive objects.
     *   **SourceColdArchive**: Only the source file is stored as a Cold Archive object.
     *   **Changing**: The storage class of the media asset is being changed.
     *   **SourceChanging**: The storage class of the media asset is being changed.
     *
     * @example Standard
     *
     * @var string
     */
    public $storageClass;

    /**
     * @description The storage address of the media asset.
     *
     * @example outin-***.oss-cn-shanghai.aliyuncs.com
     *
     * @var string
     */
    public $storageLocation;

    /**
     * @description The tags of the media asset. Separate tags with commas (,).
     *
     * @example tag1,tag2
     *
     * @var string
     */
    public $tags;

    /**
     * @description The ID of the transcoding template group.
     *
     * @example b4039216985f4312a5382a4ed****
     *
     * @var string
     */
    public $templateGroupId;

    /**
     * @description The title of the media asset.
     *
     * @example Aliyun VOD Video Title
     *
     * @var string
     */
    public $title;

    /**
     * @description The custom parameters.
     *
     * @example {"Extend":"xxx","MessageCallback":"xxx"}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'appId' => 'AppId',
        'cateId' => 'CateId',
        'cateName' => 'CateName',
        'coverURL' => 'CoverURL',
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'downloadSwitch' => 'DownloadSwitch',
        'mediaId' => 'MediaId',
        'modificationTime' => 'ModificationTime',
        'restoreExpiration' => 'RestoreExpiration',
        'restoreStatus' => 'RestoreStatus',
        'snapshots' => 'Snapshots',
        'status' => 'Status',
        'storageClass' => 'StorageClass',
        'storageLocation' => 'StorageLocation',
        'tags' => 'Tags',
        'templateGroupId' => 'TemplateGroupId',
        'title' => 'Title',
        'userData' => 'UserData',
    ];

    public function validate() {}

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
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
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
        if (null !== $this->snapshots) {
            $res['Snapshots'] = $this->snapshots;
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
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaInfo
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
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
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
        if (isset($map['Snapshots'])) {
            if (!empty($map['Snapshots'])) {
                $model->snapshots = $map['Snapshots'];
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
        if (isset($map['TemplateGroupId'])) {
            $model->templateGroupId = $map['TemplateGroupId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
