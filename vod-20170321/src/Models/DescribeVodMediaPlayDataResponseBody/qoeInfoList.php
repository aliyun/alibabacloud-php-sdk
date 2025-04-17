<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodMediaPlayDataResponseBody;

use AlibabaCloud\Dara\Model;

class qoeInfoList extends Model
{
    /**
     * @var float
     */
    public $DAU;

    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var float
     */
    public $playDuration;

    /**
     * @var float
     */
    public $playDurationPerUv;

    /**
     * @var float
     */
    public $playPerVv;

    /**
     * @var float
     */
    public $playSuccessVv;

    /**
     * @var float
     */
    public $videoDuration;

    /**
     * @var string
     */
    public $videoTitle;
    protected $_name = [
        'DAU' => 'DAU',
        'mediaId' => 'MediaId',
        'playDuration' => 'PlayDuration',
        'playDurationPerUv' => 'PlayDurationPerUv',
        'playPerVv' => 'PlayPerVv',
        'playSuccessVv' => 'PlaySuccessVv',
        'videoDuration' => 'VideoDuration',
        'videoTitle' => 'VideoTitle',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
