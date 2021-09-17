<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetSecretAsrDetailResponseBody\data;

use AlibabaCloud\Tea\Model;

class sentences extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $silenceDuration;

    /**
     * @var int
     */
    public $beginTime;

    /**
     * @var string
     */
    public $text;

    /**
     * @var int
     */
    public $channelId;

    /**
     * @var int
     */
    public $speechRate;

    /**
     * @var string
     */
    public $emotionValue;
    protected $_name = [
        'endTime'         => 'EndTime',
        'silenceDuration' => 'SilenceDuration',
        'beginTime'       => 'BeginTime',
        'text'            => 'Text',
        'channelId'       => 'ChannelId',
        'speechRate'      => 'SpeechRate',
        'emotionValue'    => 'EmotionValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->silenceDuration) {
            $res['SilenceDuration'] = $this->silenceDuration;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->speechRate) {
            $res['SpeechRate'] = $this->speechRate;
        }
        if (null !== $this->emotionValue) {
            $res['EmotionValue'] = $this->emotionValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sentences
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['SilenceDuration'])) {
            $model->silenceDuration = $map['SilenceDuration'];
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['SpeechRate'])) {
            $model->speechRate = $map['SpeechRate'];
        }
        if (isset($map['EmotionValue'])) {
            $model->emotionValue = $map['EmotionValue'];
        }

        return $model;
    }
}
