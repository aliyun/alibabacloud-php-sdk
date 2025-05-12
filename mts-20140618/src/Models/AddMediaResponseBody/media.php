<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\AddMediaResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddMediaResponseBody\media\file;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddMediaResponseBody\media\runIdList;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddMediaResponseBody\media\tags;

class media extends Model
{
    /**
     * @var string
     */
    public $bitrate;

    /**
     * @var int
     */
    public $cateId;

    /**
     * @var string
     */
    public $censorState;

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
    public $duration;

    /**
     * @var file
     */
    public $file;

    /**
     * @var string
     */
    public $format;

    /**
     * @var string
     */
    public $fps;

    /**
     * @var string
     */
    public $height;

    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $publishState;

    /**
     * @var runIdList
     */
    public $runIdList;

    /**
     * @var string
     */
    public $size;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $width;
    protected $_name = [
        'bitrate' => 'Bitrate',
        'cateId' => 'CateId',
        'censorState' => 'CensorState',
        'coverURL' => 'CoverURL',
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'duration' => 'Duration',
        'file' => 'File',
        'format' => 'Format',
        'fps' => 'Fps',
        'height' => 'Height',
        'mediaId' => 'MediaId',
        'publishState' => 'PublishState',
        'runIdList' => 'RunIdList',
        'size' => 'Size',
        'tags' => 'Tags',
        'title' => 'Title',
        'width' => 'Width',
    ];

    public function validate()
    {
        if (null !== $this->file) {
            $this->file->validate();
        }
        if (null !== $this->runIdList) {
            $this->runIdList->validate();
        }
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }

        if (null !== $this->cateId) {
            $res['CateId'] = $this->cateId;
        }

        if (null !== $this->censorState) {
            $res['CensorState'] = $this->censorState;
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

        if (null !== $this->file) {
            $res['File'] = null !== $this->file ? $this->file->toArray($noStream) : $this->file;
        }

        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }

        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }

        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }

        if (null !== $this->publishState) {
            $res['PublishState'] = $this->publishState;
        }

        if (null !== $this->runIdList) {
            $res['RunIdList'] = null !== $this->runIdList ? $this->runIdList->toArray($noStream) : $this->runIdList;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->width) {
            $res['Width'] = $this->width;
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
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }

        if (isset($map['CateId'])) {
            $model->cateId = $map['CateId'];
        }

        if (isset($map['CensorState'])) {
            $model->censorState = $map['CensorState'];
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

        if (isset($map['File'])) {
            $model->file = file::fromMap($map['File']);
        }

        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }

        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }

        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }

        if (isset($map['PublishState'])) {
            $model->publishState = $map['PublishState'];
        }

        if (isset($map['RunIdList'])) {
            $model->runIdList = runIdList::fromMap($map['RunIdList']);
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
