<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetSecretAsrDetailResponseBody\data;

use AlibabaCloud\Tea\Model;

class sentences extends Model
{
    /**
     * @description The start time offset of the sentence. Unit: milliseconds.
     *
     * @example 1020
     *
     * @var int
     */
    public $beginTime;

    /**
     * @description The ID of the audio track to which the sentence belongs.
     *
     * @example 0
     *
     * @var int
     */
    public $channelId;

    /**
     * @description The emotion value. Value range: 1 to 10. The higher the value, the stronger the emotion.
     *
     * @example 5.7
     *
     * @var string
     */
    public $emotionValue;

    /**
     * @description The end time offset of the sentence. Unit: milliseconds.
     *
     * @example 1770
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The silence duration between the current sentence and the previous sentence. Unit: seconds.
     *
     * @example 0
     *
     * @var int
     */
    public $silenceDuration;

    /**
     * @description The average speech rate of the sentence. Unit: number of words per minute.
     *
     * @example 80
     *
     * @var int
     */
    public $speechRate;

    /**
     * @description The recognition result of the sentence.
     *
     * @example Hello
     *
     * @var string
     */
    public $text;
    protected $_name = [
        'beginTime'       => 'BeginTime',
        'channelId'       => 'ChannelId',
        'emotionValue'    => 'EmotionValue',
        'endTime'         => 'EndTime',
        'silenceDuration' => 'SilenceDuration',
        'speechRate'      => 'SpeechRate',
        'text'            => 'Text',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->emotionValue) {
            $res['EmotionValue'] = $this->emotionValue;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->silenceDuration) {
            $res['SilenceDuration'] = $this->silenceDuration;
        }
        if (null !== $this->speechRate) {
            $res['SpeechRate'] = $this->speechRate;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
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
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['EmotionValue'])) {
            $model->emotionValue = $map['EmotionValue'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['SilenceDuration'])) {
            $model->silenceDuration = $map['SilenceDuration'];
        }
        if (isset($map['SpeechRate'])) {
            $model->speechRate = $map['SpeechRate'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
