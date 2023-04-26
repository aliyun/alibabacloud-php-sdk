<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoInfosResponseBody;

use AlibabaCloud\Tea\Model;

class videoList extends Model
{
    /**
     * @example app-****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The Object Storage Service (OSS) bucket where the video file is stored.
     *
     * @example 781111****
     *
     * @var int
     */
    public $cateId;

    /**
     * @description The name of the video category.
     *
     * @example The ID of the request.
     *
     * @var string
     */
    public $cateName;

    /**
     * @example https://example.aliyundoc.com/****.jpg
     *
     * @var string
     */
    public $coverURL;

    /**
     * @description The time when the video file was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2017-06-26T05:38:48Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description Queries the information about multiple videos at a time.
     *
     * @var string
     */
    public $description;

    /**
     * @example 120
     *
     * @var float
     */
    public $duration;

    /**
     * @description The URL array of video snapshots.
     *
     * @example 2017-06-26T06:38:48Z
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
     * @example 453
     *
     * @var int
     */
    public $size;

    /**
     * @var string[]
     */
    public $snapshots;

    /**
     * @description The URL of the video thumbnail.
     *
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
     * @description The information about the video.
     *
     * @example out-****.oss-cn-shanghai.aliyuncs.com
     *
     * @var string
     */
    public $storageLocation;

    /**
     * @description The ID of the video category.
     *
     * @example The size of the video mezzanine file. Unit: byte.
     *
     * @var string
     */
    public $tags;

    /**
     * @example b4039216985f4312a5382a4ed****
     *
     * @var string
     */
    public $templateGroupId;

    /**
     * @var string
     */
    public $title;

    /**
     * @description The list of video IDs. Separate multiple IDs with commas (,). A maximum of 20 IDs can be specified.
     *
     * @example 7753d144efd74d6c45fe0570****
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
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoList
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
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }

        return $model;
    }
}
