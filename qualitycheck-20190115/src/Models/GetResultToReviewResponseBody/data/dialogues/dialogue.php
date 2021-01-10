<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\dialogues;

use AlibabaCloud\Tea\Model;

class dialogue extends Model
{
    /**
     * @var string
     */
    public $words;

    /**
     * @var string
     */
    public $identity;

    /**
     * @var int
     */
    public $begin;

    /**
     * @var string
     */
    public $beginTime;

    /**
     * @var int
     */
    public $emotionValue;

    /**
     * @var int
     */
    public $end;

    /**
     * @var int
     */
    public $speechRate;

    /**
     * @var string
     */
    public $role;

    /**
     * @var int
     */
    public $silenceDuration;

    /**
     * @var string
     */
    public $hourMinSec;
    protected $_name = [
        'words'           => 'Words',
        'identity'        => 'Identity',
        'begin'           => 'Begin',
        'beginTime'       => 'BeginTime',
        'emotionValue'    => 'EmotionValue',
        'end'             => 'End',
        'speechRate'      => 'SpeechRate',
        'role'            => 'Role',
        'silenceDuration' => 'SilenceDuration',
        'hourMinSec'      => 'HourMinSec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->words) {
            $res['Words'] = $this->words;
        }
        if (null !== $this->identity) {
            $res['Identity'] = $this->identity;
        }
        if (null !== $this->begin) {
            $res['Begin'] = $this->begin;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->emotionValue) {
            $res['EmotionValue'] = $this->emotionValue;
        }
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }
        if (null !== $this->speechRate) {
            $res['SpeechRate'] = $this->speechRate;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->silenceDuration) {
            $res['SilenceDuration'] = $this->silenceDuration;
        }
        if (null !== $this->hourMinSec) {
            $res['HourMinSec'] = $this->hourMinSec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dialogue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Words'])) {
            $model->words = $map['Words'];
        }
        if (isset($map['Identity'])) {
            $model->identity = $map['Identity'];
        }
        if (isset($map['Begin'])) {
            $model->begin = $map['Begin'];
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['EmotionValue'])) {
            $model->emotionValue = $map['EmotionValue'];
        }
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }
        if (isset($map['SpeechRate'])) {
            $model->speechRate = $map['SpeechRate'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['SilenceDuration'])) {
            $model->silenceDuration = $map['SilenceDuration'];
        }
        if (isset($map['HourMinSec'])) {
            $model->hourMinSec = $map['HourMinSec'];
        }

        return $model;
    }
}
