<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\dialogues;

use AlibabaCloud\Dara\Model;

class dialogue extends Model
{
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
    public $beginTimeMs;

    /**
     * @var int
     */
    public $emotionValue;

    /**
     * @var int
     */
    public $end;

    /**
     * @var string
     */
    public $hourMinSec;

    /**
     * @var string
     */
    public $identity;

    /**
     * @var string
     */
    public $role;

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
    public $words;
    protected $_name = [
        'begin' => 'Begin',
        'beginTime' => 'BeginTime',
        'beginTimeMs' => 'BeginTimeMs',
        'emotionValue' => 'EmotionValue',
        'end' => 'End',
        'hourMinSec' => 'HourMinSec',
        'identity' => 'Identity',
        'role' => 'Role',
        'silenceDuration' => 'SilenceDuration',
        'speechRate' => 'SpeechRate',
        'words' => 'Words',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->begin) {
            $res['Begin'] = $this->begin;
        }

        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }

        if (null !== $this->beginTimeMs) {
            $res['BeginTimeMs'] = $this->beginTimeMs;
        }

        if (null !== $this->emotionValue) {
            $res['EmotionValue'] = $this->emotionValue;
        }

        if (null !== $this->end) {
            $res['End'] = $this->end;
        }

        if (null !== $this->hourMinSec) {
            $res['HourMinSec'] = $this->hourMinSec;
        }

        if (null !== $this->identity) {
            $res['Identity'] = $this->identity;
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        if (null !== $this->silenceDuration) {
            $res['SilenceDuration'] = $this->silenceDuration;
        }

        if (null !== $this->speechRate) {
            $res['SpeechRate'] = $this->speechRate;
        }

        if (null !== $this->words) {
            $res['Words'] = $this->words;
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
        if (isset($map['Begin'])) {
            $model->begin = $map['Begin'];
        }

        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }

        if (isset($map['BeginTimeMs'])) {
            $model->beginTimeMs = $map['BeginTimeMs'];
        }

        if (isset($map['EmotionValue'])) {
            $model->emotionValue = $map['EmotionValue'];
        }

        if (isset($map['End'])) {
            $model->end = $map['End'];
        }

        if (isset($map['HourMinSec'])) {
            $model->hourMinSec = $map['HourMinSec'];
        }

        if (isset($map['Identity'])) {
            $model->identity = $map['Identity'];
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        if (isset($map['SilenceDuration'])) {
            $model->silenceDuration = $map['SilenceDuration'];
        }

        if (isset($map['SpeechRate'])) {
            $model->speechRate = $map['SpeechRate'];
        }

        if (isset($map['Words'])) {
            $model->words = $map['Words'];
        }

        return $model;
    }
}
