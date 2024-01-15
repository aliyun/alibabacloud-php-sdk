<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetNextResultToVerifyResponseBody\data\dialogues;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetNextResultToVerifyResponseBody\data\dialogues\dialogue\deltas;
use AlibabaCloud\Tea\Model;

class dialogue extends Model
{
    /**
     * @example 980
     *
     * @var int
     */
    public $begin;

    /**
     * @example XXX
     *
     * @var string
     */
    public $beginTime;

    /**
     * @var deltas
     */
    public $deltas;

    /**
     * @example 6
     *
     * @var int
     */
    public $emotionValue;

    /**
     * @example 3422
     *
     * @var int
     */
    public $end;

    /**
     * @example 00:00:07
     *
     * @var string
     */
    public $hourMinSec;

    /**
     * @var string
     */
    public $identity;

    /**
     * @example 2
     *
     * @var int
     */
    public $incorrectWords;

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
     * @var string
     */
    public $sourceRole;

    /**
     * @var string
     */
    public $sourceWords;

    /**
     * @example 332
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
        'deltas'          => 'Deltas',
        'emotionValue'    => 'EmotionValue',
        'end'             => 'End',
        'hourMinSec'      => 'HourMinSec',
        'identity'        => 'Identity',
        'incorrectWords'  => 'IncorrectWords',
        'role'            => 'Role',
        'silenceDuration' => 'SilenceDuration',
        'sourceRole'      => 'SourceRole',
        'sourceWords'     => 'SourceWords',
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
        if (null !== $this->deltas) {
            $res['Deltas'] = null !== $this->deltas ? $this->deltas->toMap() : null;
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
        if (null !== $this->incorrectWords) {
            $res['IncorrectWords'] = $this->incorrectWords;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->silenceDuration) {
            $res['SilenceDuration'] = $this->silenceDuration;
        }
        if (null !== $this->sourceRole) {
            $res['SourceRole'] = $this->sourceRole;
        }
        if (null !== $this->sourceWords) {
            $res['SourceWords'] = $this->sourceWords;
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
        if (isset($map['Deltas'])) {
            $model->deltas = deltas::fromMap($map['Deltas']);
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
        if (isset($map['IncorrectWords'])) {
            $model->incorrectWords = $map['IncorrectWords'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['SilenceDuration'])) {
            $model->silenceDuration = $map['SilenceDuration'];
        }
        if (isset($map['SourceRole'])) {
            $model->sourceRole = $map['SourceRole'];
        }
        if (isset($map['SourceWords'])) {
            $model->sourceWords = $map['SourceWords'];
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
