<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayTopVideosResponseBody\topPlayVideos;

use AlibabaCloud\Tea\Model;

class topPlayVideoStatis extends Model
{
    /**
     * @var string
     */
    public $playDuration;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $UV;

    /**
     * @var string
     */
    public $VV;

    /**
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
