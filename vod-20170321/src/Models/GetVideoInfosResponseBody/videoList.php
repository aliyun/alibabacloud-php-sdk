<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoInfosResponseBody;

use AlibabaCloud\Dara\Model;

class videoList extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $cateId;

    /**
     * @var string
     */
    public $cateName;

    /**
     * @var string
     */
    public $coverURL;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $downloadSwitch;

    /**
     * @var float
     */
    public $duration;

    /**
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
     * @var int
     */
    public $size;

    /**
     * @var string[]
     */
    public $snapshots;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $storageClass;

    /**
     * @var string
     */
    public $storageLocation;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $templateGroupId;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $videoId;
    protected $_name = [
        'appId' => 'AppId',
        'cateId' => 'CateId',
        'cateName' => 'CateName',
        'coverURL' => 'CoverURL',
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'downloadSwitch' => 'DownloadSwitch',
        'duration' => 'Duration',
        'modificationTime' => 'ModificationTime',
        'restoreExpiration' => 'RestoreExpiration',
        'restoreStatus' => 'RestoreStatus',
        'size' => 'Size',
        'snapshots' => 'Snapshots',
        'status' => 'Status',
        'storageClass' => 'StorageClass',
        'storageLocation' => 'StorageLocation',
        'tags' => 'Tags',
        'templateGroupId' => 'TemplateGroupId',
        'title' => 'Title',
        'userData' => 'UserData',
        'videoId' => 'VideoId',
    ];

    public function validate()
    {
        if (\is_array($this->snapshots)) {
            Model::validateArray($this->snapshots);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->snapshots)) {
                $res['Snapshots'] = [];
                $n1 = 0;
                foreach ($this->snapshots as $item1) {
                    $res['Snapshots'][$n1++] = $item1;
                }
            }
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

        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->snapshots = [];
                $n1 = 0;
                foreach ($map['Snapshots'] as $item1) {
                    $model->snapshots[$n1++] = $item1;
                }
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

        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }

        return $model;
    }
}
