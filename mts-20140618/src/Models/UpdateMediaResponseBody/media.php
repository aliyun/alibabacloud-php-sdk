<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\UpdateMediaResponseBody;

use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateMediaResponseBody\media\file;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateMediaResponseBody\media\runIdList;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateMediaResponseBody\media\tags;
use AlibabaCloud\Tea\Model;

class media extends Model
{
    /**
     * @description The bitrate of the media file.
     *
     * @example 2659.326
     *
     * @var string
     */
    public $bitrate;

    /**
     * @description The ID of the category to which the media file belongs.
     *
     * @example 1
     *
     * @var int
     */
    public $cateId;

    /**
     * @description The review state of the media file. Valid values:
     *
     *   **Initiated**: The media file is uploaded but not reviewed.
     *   **Pass**: The media file is uploaded and passes the review.
     *
     * @example Initiated
     *
     * @var string
     */
    public $censorState;

    /**
     * @description The URL of the thumbnail.
     *
     * @example http://example-bucket-****.oss-cn-shanghai.aliyuncs.com/example-****.jpg
     *
     * @var string
     */
    public $coverURL;

    /**
     * @description The time when the media file was created.
     *
     * @example 2016-09-14T08:30:33Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the media file.
     *
     * @example example description
     *
     * @var string
     */
    public $description;

    /**
     * @description The duration of the media file.
     *
     * @example 7.965000
     *
     * @var string
     */
    public $duration;

    /**
     * @description The information about the input file.
     *
     * @var file
     */
    public $file;

    /**
     * @description The format of the media file. Valid values: mov, mp4, m4a, 3gp, 3g2, and mj2.
     *
     * @example mov
     *
     * @var string
     */
    public $format;

    /**
     * @description The frame rate of the media file.
     *
     * @example 25.0
     *
     * @var string
     */
    public $fps;

    /**
     * @description The height of the media file.
     *
     * @example 1080
     *
     * @var string
     */
    public $height;

    /**
     * @description The ID of the media file.
     *
     * @example 3e1cd21131a94525be55acf65888****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The publishing state of the media file. Valid values:
     *
     *   **Initiated**: The media file is in the initial state.
     *   **UnPublish**: The media file has not been published, and the playback permission on the OSS object is Private.
     *   **Published**: The media file has been published, and the playback permission on the OSS object is Default.
     *   **Deleted**: The media file is deleted.
     *
     * @example Published
     *
     * @var string
     */
    public $publishState;

    /**
     * @description The IDs of the media workflow execution instances.
     *
     * @var runIdList
     */
    public $runIdList;

    /**
     * @description The size of the media file.
     *
     * @example 2647692
     *
     * @var string
     */
    public $size;

    /**
     * @description The information about the tags.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The title of the media file.
     *
     * @example hello
     *
     * @var string
     */
    public $title;

    /**
     * @description The width of the media file.
     *
     * @example 1920
     *
     * @var string
     */
    public $width;
    protected $_name = [
        'bitrate'      => 'Bitrate',
        'cateId'       => 'CateId',
        'censorState'  => 'CensorState',
        'coverURL'     => 'CoverURL',
        'creationTime' => 'CreationTime',
        'description'  => 'Description',
        'duration'     => 'Duration',
        'file'         => 'File',
        'format'       => 'Format',
        'fps'          => 'Fps',
        'height'       => 'Height',
        'mediaId'      => 'MediaId',
        'publishState' => 'PublishState',
        'runIdList'    => 'RunIdList',
        'size'         => 'Size',
        'tags'         => 'Tags',
        'title'        => 'Title',
        'width'        => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['File'] = null !== $this->file ? $this->file->toMap() : null;
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
            $res['RunIdList'] = null !== $this->runIdList ? $this->runIdList->toMap() : null;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
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
