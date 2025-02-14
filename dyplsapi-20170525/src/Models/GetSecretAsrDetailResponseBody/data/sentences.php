<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetSecretAsrDetailResponseBody\data;

use AlibabaCloud\Dara\Model;

class sentences extends Model
{
    /**
     * @var int
     */
    public $beginTime;
    /**
     * @var int
     */
    public $channelId;
    /**
     * @var string
     */
    public $emotionValue;
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
    public $speechRate;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
