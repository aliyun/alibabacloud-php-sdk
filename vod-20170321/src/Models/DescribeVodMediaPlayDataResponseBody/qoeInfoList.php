<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodMediaPlayDataResponseBody;

use AlibabaCloud\Tea\Model;

class qoeInfoList extends Model
{
    /**
     * @example 5
     *
     * @var float
     */
    public $DAU;

    /**
     * @example 9ae2af636ca6c10412f44891fc****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @example 2400
     *
     * @var float
     */
    public $playDuration;

    /**
     * @example 120
     *
     * @var float
     */
    public $playDurationPerUv;

    /**
     * @example 4
     *
     * @var float
     */
    public $playPerVv;

    /**
     * @example 20
     *
     * @var float
     */
    public $playSuccessVv;

    /**
     * @example 246
     *
     * @var float
     */
    public $videoDuration;

    /**
     * @var float
     */
    public $videoTitle;
    protected $_name = [
        'DAU'               => 'DAU',
        'mediaId'           => 'MediaId',
        'playDuration'      => 'PlayDuration',
        'playDurationPerUv' => 'PlayDurationPerUv',
        'playPerVv'         => 'PlayPerVv',
        'playSuccessVv'     => 'PlaySuccessVv',
        'videoDuration'     => 'VideoDuration',
        'videoTitle'        => 'VideoTitle',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DAU) {
            $res['DAU'] = $this->DAU;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->playDuration) {
            $res['PlayDuration'] = $this->playDuration;
        }
        if (null !== $this->playDurationPerUv) {
            $res['PlayDurationPerUv'] = $this->playDurationPerUv;
        }
        if (null !== $this->playPerVv) {
            $res['PlayPerVv'] = $this->playPerVv;
        }
        if (null !== $this->playSuccessVv) {
            $res['PlaySuccessVv'] = $this->playSuccessVv;
        }
        if (null !== $this->videoDuration) {
            $res['VideoDuration'] = $this->videoDuration;
        }
        if (null !== $this->videoTitle) {
            $res['VideoTitle'] = $this->videoTitle;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return qoeInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DAU'])) {
            $model->DAU = $map['DAU'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['PlayDuration'])) {
            $model->playDuration = $map['PlayDuration'];
        }
        if (isset($map['PlayDurationPerUv'])) {
            $model->playDurationPerUv = $map['PlayDurationPerUv'];
        }
        if (isset($map['PlayPerVv'])) {
            $model->playPerVv = $map['PlayPerVv'];
        }
        if (isset($map['PlaySuccessVv'])) {
            $model->playSuccessVv = $map['PlaySuccessVv'];
        }
        if (isset($map['VideoDuration'])) {
            $model->videoDuration = $map['VideoDuration'];
        }
        if (isset($map['VideoTitle'])) {
            $model->videoTitle = $map['VideoTitle'];
        }

        return $model;
    }
}
