<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class UpdateVideoInfoRequest extends Model
{
    /**
     * @description The ID of the video category.
     *
     * @example 384761111
     *
     * @var int
     */
    public $cateId;

    /**
     * @description The URL of the video thumbnail.
     *
     * @example https://example.aliyundoc.com/****.jpg
     *
     * @var string
     */
    public $coverURL;

    /**
     * @description The description of the video.
     *
     *   The value can be up to 1,024 bytes in length.
     *   The string must be encoded in the UTF-8 format.
     *
     * @example video description
     *
     * @var string
     */
    public $description;

    /**
     * @description The tags of the video.
     *
     *   Each tag can be up to 32 bytes in length. A maximum of 16 tags can be specified.
     *   Separate multiple tags with commas (,).
     *   The string must be encoded in the UTF-8 format.
     *
     * @example tag1,tag2
     *
     * @var string
     */
    public $tags;

    /**
     * @description The title of the video.
     *
     *   The value can be up to 128 bytes in length.
     *   The string must be encoded in the UTF-8 format.
     *
     * @example video title
     *
     * @var string
     */
    public $title;

    /**
     * @description The ID of the video.
     *
     * @example 2deda93265312baf9b0ed810d****
     *
     * @var string
     */
    public $videoId;
    protected $_name = [
        'cateId'      => 'CateId',
        'coverURL'    => 'CoverURL',
        'description' => 'Description',
        'tags'        => 'Tags',
        'title'       => 'Title',
        'videoId'     => 'VideoId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cateId) {
            $res['CateId'] = $this->cateId;
        }
        if (null !== $this->coverURL) {
            $res['CoverURL'] = $this->coverURL;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
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
     * @return UpdateVideoInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CateId'])) {
            $model->cateId = $map['CateId'];
        }
        if (isset($map['CoverURL'])) {
            $model->coverURL = $map['CoverURL'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
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
