<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListLiveRecordVideoResponseBody\liveRecordVideoList\liveRecordVideo;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListLiveRecordVideoResponseBody\liveRecordVideoList\liveRecordVideo\video\snapshots;
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
     * @var int
     */
    public $cateId;

    /**
     * @var string
     */
    public $videoId;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var snapshots
     */
    public $snapshots;

    /**
     * @var string
     */
    public $cateName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $coverURL;

    /**
     * @var string
     */
    public $templateGroupId;

    /**
     * @var float
     */
    public $duration;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $modifyTime;
    protected $_name = [
        'status'          => 'Status',
        'creationTime'    => 'CreationTime',
        'cateId'          => 'CateId',
        'videoId'         => 'VideoId',
        'tags'            => 'Tags',
        'snapshots'       => 'Snapshots',
        'cateName'        => 'CateName',
        'description'     => 'Description',
        'size'            => 'Size',
        'coverURL'        => 'CoverURL',
        'templateGroupId' => 'TemplateGroupId',
        'duration'        => 'Duration',
        'title'           => 'Title',
        'modifyTime'      => 'ModifyTime',
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
        if (null !== $this->cateId) {
            $res['CateId'] = $this->cateId;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->snapshots) {
            $res['Snapshots'] = null !== $this->snapshots ? $this->snapshots->toMap() : null;
        }
        if (null !== $this->cateName) {
            $res['CateName'] = $this->cateName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->coverURL) {
            $res['CoverURL'] = $this->coverURL;
        }
        if (null !== $this->templateGroupId) {
            $res['TemplateGroupId'] = $this->templateGroupId;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
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
        if (isset($map['CateId'])) {
            $model->cateId = $map['CateId'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['Snapshots'])) {
            $model->snapshots = snapshots::fromMap($map['Snapshots']);
        }
        if (isset($map['CateName'])) {
            $model->cateName = $map['CateName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['CoverURL'])) {
            $model->coverURL = $map['CoverURL'];
        }
        if (isset($map['TemplateGroupId'])) {
            $model->templateGroupId = $map['TemplateGroupId'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        return $model;
    }
}
