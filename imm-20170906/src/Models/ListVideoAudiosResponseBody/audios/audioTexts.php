<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\ListVideoAudiosResponseBody\audios;

use AlibabaCloud\Tea\Model;

class audioTexts extends Model
{
    /**
     * @var float
     */
    public $endTime;

    /**
     * @var string
     */
    public $library;

    /**
     * @var float
     */
    public $confidence;

    /**
     * @var float
     */
    public $beginTime;

    /**
     * @var int
     */
    public $channelId;

    /**
     * @var float
     */
    public $emotionValue;

    /**
     * @var int
     */
    public $speechRate;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $person;

    /**
     * @var float
     */
    public $silenceDuration;
    protected $_name = [
        'endTime'         => 'EndTime',
        'library'         => 'Library',
        'confidence'      => 'Confidence',
        'beginTime'       => 'BeginTime',
        'channelId'       => 'ChannelId',
        'emotionValue'    => 'EmotionValue',
        'speechRate'      => 'SpeechRate',
        'text'            => 'Text',
        'person'          => 'Person',
        'silenceDuration' => 'SilenceDuration',
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
        if (null !== $this->library) {
            $res['Library'] = $this->library;
        }
        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->emotionValue) {
            $res['EmotionValue'] = $this->emotionValue;
        }
        if (null !== $this->speechRate) {
            $res['SpeechRate'] = $this->speechRate;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->person) {
            $res['Person'] = $this->person;
        }
        if (null !== $this->silenceDuration) {
            $res['SilenceDuration'] = $this->silenceDuration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return audioTexts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Library'])) {
            $model->library = $map['Library'];
        }
        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['EmotionValue'])) {
            $model->emotionValue = $map['EmotionValue'];
        }
        if (isset($map['SpeechRate'])) {
            $model->speechRate = $map['SpeechRate'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['Person'])) {
            $model->person = $map['Person'];
        }
        if (isset($map['SilenceDuration'])) {
            $model->silenceDuration = $map['SilenceDuration'];
        }

        return $model;
    }
}
