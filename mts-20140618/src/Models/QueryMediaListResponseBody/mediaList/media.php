<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaListResponseBody\mediaList;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaListResponseBody\mediaList\media\file;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaListResponseBody\mediaList\media\mediaInfo;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaListResponseBody\mediaList\media\playList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaListResponseBody\mediaList\media\runIdList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaListResponseBody\mediaList\media\snapshotList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaListResponseBody\mediaList\media\summaryList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaListResponseBody\mediaList\media\tags;
use AlibabaCloud\Tea\Model;

class media extends Model
{
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
    public $height;

    /**
     * @var string
     */
    public $censorState;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var playList
     */
    public $playList;

    /**
     * @var string
     */
    public $bitrate;

    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var file
     */
    public $file;

    /**
     * @var summaryList
     */
    public $summaryList;

    /**
     * @var string
     */
    public $publishState;

    /**
     * @var mediaInfo
     */
    public $mediaInfo;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $size;

    /**
     * @var string
     */
    public $width;

    /**
     * @var string
     */
    public $coverURL;

    /**
     * @var snapshotList
     */
    public $snapshotList;

    /**
     * @var runIdList
     */
    public $runIdList;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $fps;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $format;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'cateId'       => 'CateId',
        'height'       => 'Height',
        'censorState'  => 'CensorState',
        'tags'         => 'Tags',
        'playList'     => 'PlayList',
        'bitrate'      => 'Bitrate',
        'mediaId'      => 'MediaId',
        'file'         => 'File',
        'summaryList'  => 'SummaryList',
        'publishState' => 'PublishState',
        'mediaInfo'    => 'MediaInfo',
        'description'  => 'Description',
        'size'         => 'Size',
        'width'        => 'Width',
        'coverURL'     => 'CoverURL',
        'snapshotList' => 'SnapshotList',
        'runIdList'    => 'RunIdList',
        'duration'     => 'Duration',
        'fps'          => 'Fps',
        'title'        => 'Title',
        'format'       => 'Format',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->cateId) {
            $res['CateId'] = $this->cateId;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->censorState) {
            $res['CensorState'] = $this->censorState;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->playList) {
            $res['PlayList'] = null !== $this->playList ? $this->playList->toMap() : null;
        }
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->file) {
            $res['File'] = null !== $this->file ? $this->file->toMap() : null;
        }
        if (null !== $this->summaryList) {
            $res['SummaryList'] = null !== $this->summaryList ? $this->summaryList->toMap() : null;
        }
        if (null !== $this->publishState) {
            $res['PublishState'] = $this->publishState;
        }
        if (null !== $this->mediaInfo) {
            $res['MediaInfo'] = null !== $this->mediaInfo ? $this->mediaInfo->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->coverURL) {
            $res['CoverURL'] = $this->coverURL;
        }
        if (null !== $this->snapshotList) {
            $res['SnapshotList'] = null !== $this->snapshotList ? $this->snapshotList->toMap() : null;
        }
        if (null !== $this->runIdList) {
            $res['RunIdList'] = null !== $this->runIdList ? $this->runIdList->toMap() : null;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return media
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['CateId'])) {
            $model->cateId = $map['CateId'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['CensorState'])) {
            $model->censorState = $map['CensorState'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['PlayList'])) {
            $model->playList = playList::fromMap($map['PlayList']);
        }
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['File'])) {
            $model->file = file::fromMap($map['File']);
        }
        if (isset($map['SummaryList'])) {
            $model->summaryList = summaryList::fromMap($map['SummaryList']);
        }
        if (isset($map['PublishState'])) {
            $model->publishState = $map['PublishState'];
        }
        if (isset($map['MediaInfo'])) {
            $model->mediaInfo = mediaInfo::fromMap($map['MediaInfo']);
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['CoverURL'])) {
            $model->coverURL = $map['CoverURL'];
        }
        if (isset($map['SnapshotList'])) {
            $model->snapshotList = snapshotList::fromMap($map['SnapshotList']);
        }
        if (isset($map['RunIdList'])) {
            $model->runIdList = runIdList::fromMap($map['RunIdList']);
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }

        return $model;
    }
}
