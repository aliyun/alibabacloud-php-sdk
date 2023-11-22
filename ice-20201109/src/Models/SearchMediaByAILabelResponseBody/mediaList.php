<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaByAILabelResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaByAILabelResponseBody\mediaList\aiData;
use AlibabaCloud\Tea\Model;

class mediaList extends Model
{
    /**
     * @var aiData
     */
    public $aiData;

    /**
     * @example app-1000000
     *
     * @var string
     */
    public $appId;

    /**
     * @example http://example.aliyundoc.com/snapshot/****.jpg?auth_key=1498476426-0-0-f00b9455c49a423ce69cf4e27333****
     *
     * @var string
     */
    public $coverUrl;

    /**
     * @example 2017-11-14T09:15:50Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 12.2
     *
     * @var float
     */
    public $duration;

    /**
     * @example 1c6ce34007d571ed94667630a6bc****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @example 2017-11-14T09:15:50Z
     *
     * @var string
     */
    public $modificationTime;

    /**
     * @example 10897890
     *
     * @var int
     */
    public $size;

    /**
     * @var string[]
     */
    public $snapshots;

    /**
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @example out-****.oss-cn-shanghai.aliyuncs.com
     *
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
    public $title;
    protected $_name = [
        'aiData'           => 'AiData',
        'appId'            => 'AppId',
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
        if (null !== $this->aiData) {
            $res['AiData'] = null !== $this->aiData ? $this->aiData->toMap() : null;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
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
        if (isset($map['AiData'])) {
            $model->aiData = aiData::fromMap($map['AiData']);
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
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
