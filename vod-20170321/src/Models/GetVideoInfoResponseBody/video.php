<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoInfoResponseBody;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoInfoResponseBody\video\snapshots;
use AlibabaCloud\Tea\Model;

class video extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $storageLocation;

    /**
     * @var int
     */
    public $cateId;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $modificationTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $coverURL;

    /**
     * @var string
     */
    public $templateGroupId;

    /**
     * @var string
     */
    public $auditStatus;

    /**
     * @var string
     */
    public $videoId;

    /**
     * @var snapshots
     */
    public $snapshots;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $customMediaInfo;

    /**
     * @var string
     */
    public $cateName;

    /**
     * @var int
     */
    public $size;

    /**
     * @var float
     */
    public $duration;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'status'           => 'Status',
        'creationTime'     => 'CreationTime',
        'storageLocation'  => 'StorageLocation',
        'cateId'           => 'CateId',
        'tags'             => 'Tags',
        'modificationTime' => 'ModificationTime',
        'description'      => 'Description',
        'appId'            => 'AppId',
        'coverURL'         => 'CoverURL',
        'templateGroupId'  => 'TemplateGroupId',
        'auditStatus'      => 'AuditStatus',
        'videoId'          => 'VideoId',
        'snapshots'        => 'Snapshots',
        'regionId'         => 'RegionId',
        'customMediaInfo'  => 'CustomMediaInfo',
        'cateName'         => 'CateName',
        'size'             => 'Size',
        'duration'         => 'Duration',
        'title'            => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->storageLocation) {
            $res['StorageLocation'] = $this->storageLocation;
        }
        if (null !== $this->cateId) {
            $res['CateId'] = $this->cateId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->modificationTime) {
            $res['ModificationTime'] = $this->modificationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->coverURL) {
            $res['CoverURL'] = $this->coverURL;
        }
        if (null !== $this->templateGroupId) {
            $res['TemplateGroupId'] = $this->templateGroupId;
        }
        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }
        if (null !== $this->snapshots) {
            $res['Snapshots'] = null !== $this->snapshots ? $this->snapshots->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->customMediaInfo) {
            $res['CustomMediaInfo'] = $this->customMediaInfo;
        }
        if (null !== $this->cateName) {
            $res['CateName'] = $this->cateName;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['StorageLocation'])) {
            $model->storageLocation = $map['StorageLocation'];
        }
        if (isset($map['CateId'])) {
            $model->cateId = $map['CateId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['ModificationTime'])) {
            $model->modificationTime = $map['ModificationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CoverURL'])) {
            $model->coverURL = $map['CoverURL'];
        }
        if (isset($map['TemplateGroupId'])) {
            $model->templateGroupId = $map['TemplateGroupId'];
        }
        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }
        if (isset($map['Snapshots'])) {
            $model->snapshots = snapshots::fromMap($map['Snapshots']);
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['CustomMediaInfo'])) {
            $model->customMediaInfo = $map['CustomMediaInfo'];
        }
        if (isset($map['CateName'])) {
            $model->cateName = $map['CateName'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
