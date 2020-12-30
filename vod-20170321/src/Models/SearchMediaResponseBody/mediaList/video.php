<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponseBody\mediaList;

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
    public $mediaSource;

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
    public $videoId;

    /**
     * @var string
     */
    public $downloadSwitch;

    /**
     * @var string[]
     */
    public $snapshots;

    /**
     * @var string
     */
    public $transcodeMode;

    /**
     * @var string
     */
    public $cateName;

    /**
     * @var string
     */
    public $preprocessStatus;

    /**
     * @var string[]
     */
    public $spriteSnapshots;

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
        'mediaSource'      => 'MediaSource',
        'description'      => 'Description',
        'appId'            => 'AppId',
        'coverURL'         => 'CoverURL',
        'videoId'          => 'VideoId',
        'downloadSwitch'   => 'DownloadSwitch',
        'snapshots'        => 'Snapshots',
        'transcodeMode'    => 'TranscodeMode',
        'cateName'         => 'CateName',
        'preprocessStatus' => 'PreprocessStatus',
        'spriteSnapshots'  => 'SpriteSnapshots',
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
        if (null !== $this->mediaSource) {
            $res['MediaSource'] = $this->mediaSource;
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
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }
        if (null !== $this->downloadSwitch) {
            $res['DownloadSwitch'] = $this->downloadSwitch;
        }
        if (null !== $this->snapshots) {
            $res['Snapshots'] = $this->snapshots;
        }
        if (null !== $this->transcodeMode) {
            $res['TranscodeMode'] = $this->transcodeMode;
        }
        if (null !== $this->cateName) {
            $res['CateName'] = $this->cateName;
        }
        if (null !== $this->preprocessStatus) {
            $res['PreprocessStatus'] = $this->preprocessStatus;
        }
        if (null !== $this->spriteSnapshots) {
            $res['SpriteSnapshots'] = $this->spriteSnapshots;
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
        if (isset($map['MediaSource'])) {
            $model->mediaSource = $map['MediaSource'];
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
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }
        if (isset($map['DownloadSwitch'])) {
            $model->downloadSwitch = $map['DownloadSwitch'];
        }
        if (isset($map['Snapshots'])) {
            if (!empty($map['Snapshots'])) {
                $model->snapshots = $map['Snapshots'];
            }
        }
        if (isset($map['TranscodeMode'])) {
            $model->transcodeMode = $map['TranscodeMode'];
        }
        if (isset($map['CateName'])) {
            $model->cateName = $map['CateName'];
        }
        if (isset($map['PreprocessStatus'])) {
            $model->preprocessStatus = $map['PreprocessStatus'];
        }
        if (isset($map['SpriteSnapshots'])) {
            if (!empty($map['SpriteSnapshots'])) {
                $model->spriteSnapshots = $map['SpriteSnapshots'];
            }
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
