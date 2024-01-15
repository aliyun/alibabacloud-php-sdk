<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\dialogues;

use AlibabaCloud\Tea\Model;

class dialogue extends Model
{
    /**
     * @example 72000
     *
     * @var int
     */
    public $begin;

    /**
     * @example 2019-10-01 11:12:01
     *
     * @var string
     */
    public $beginTime;

    /**
     * @example 7
     *
     * @var int
     */
    public $emotionValue;

    /**
     * @example 80000
     *
     * @var int
     */
    public $end;

    /**
     * @example 00:08
     *
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
     * @example 1
     *
     * @var int
     */
    public $silenceDuration;

    /**
     * @example 200
     *
     * @var int
     */
    public $speechRate;

    /**
     * @var string
     */
    public $words;
    protected $_name = [
        'begin'           => 'Begin',
        'beginTime'       => 'BeginTime',
        'emotionValue'    => 'EmotionValue',
        'end'             => 'End',
        'hourMinSec'      => 'HourMinSec',
        'identity'        => 'Identity',
        'role'            => 'Role',
        'silenceDuration' => 'SilenceDuration',
        'speechRate'      => 'SpeechRate',
        'words'           => 'Words',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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

    /**
     * @param array $map
     *
     * @return dialogue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
