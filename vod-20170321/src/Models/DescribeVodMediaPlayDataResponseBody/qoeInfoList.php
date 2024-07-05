<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodMediaPlayDataResponseBody;

use AlibabaCloud\Tea\Model;

class qoeInfoList extends Model
{
    /**
     * @description The number of visits to the audio or video per day.
     *
     * @example 5
     *
     * @var float
     */
    public $DAU;

    /**
     * @description The ID of the media file (VideoId).
     *
     * @example 9ae2af636ca6c10412f44891fc****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The total playback duration of the audio or video. Unit: seconds.
     *
     * @example 2400
     *
     * @var float
     */
    public $playDuration;

    /**
     * @description The average playback duration of the audio or video per viewer. Unit: seconds.
     *
     * @example 120
     *
     * @var float
     */
    public $playDurationPerUv;

    /**
     * @description The average number of times that the audio or video was played per viewer.
     *
     * @example 4
     *
     * @var float
     */
    public $playPerVv;

    /**
     * @description The total number of times the audio or video has been played.
     *
     * @example 20
     *
     * @var float
     */
    public $playSuccessVv;

    /**
     * @description The duration of the audio or video file. Unit: seconds.
     *
     * @example 246
     *
     * @var float
     */
    public $videoDuration;

    /**
     * @description The name of the audio or video file.
     *
     * @var string
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
