<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayTopVideosResponseBody\topPlayVideos;

use AlibabaCloud\Tea\Model;

class topPlayVideoStatis extends Model
{
    /**
     * @description The playback duration. Unit: milliseconds.
     *
     * @example 4640369
     *
     * @var string
     */
    public $playDuration;

    /**
     * @description The title of the video.
     *
     * @example Four streams (two streams encrypted): LD-HLS-encrypted + SD-MP4 + HD-H
     *
     * @var string
     */
    public $title;

    /**
     * @description The number of unique visitors.
     *
     * @example 1
     *
     * @var string
     */
    public $UV;

    /**
     * @description The number of video views.
     *
     * @example 107
     *
     * @var string
     */
    public $VV;

    /**
     * @description The ID of the video.
     *
     * @example 2a8d4cb9ecbb487681473a15****8fda
     *
     * @var string
     */
    public $videoId;
    protected $_name = [
        'playDuration' => 'PlayDuration',
        'title'        => 'Title',
        'UV'           => 'UV',
        'VV'           => 'VV',
        'videoId'      => 'VideoId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->playDuration) {
            $res['PlayDuration'] = $this->playDuration;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->UV) {
            $res['UV'] = $this->UV;
        }
        if (null !== $this->VV) {
            $res['VV'] = $this->VV;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return topPlayVideoStatis
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PlayDuration'])) {
            $model->playDuration = $map['PlayDuration'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['UV'])) {
            $model->UV = $map['UV'];
        }
        if (isset($map['VV'])) {
            $model->VV = $map['VV'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }

        return $model;
    }
}
