<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetNextResultToVerifyResponseBody\data\dialogues;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetNextResultToVerifyResponseBody\data\dialogues\dialogue\deltas;
use AlibabaCloud\Tea\Model;

class dialogue extends Model
{
    /**
     * @var deltas
     */
    public $deltas;

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
    public $incorrectWords;

    /**
     * @var string
     */
    public $beginTime;

    /**
     * @var string
     */
    public $sourceWords;

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
    public $sourceRole;

    /**
     * @var string
     */
    public $hourMinSec;

    /**
     * @var int
     */
    public $begin;

    /**
     * @var int
     */
    public $emotionValue;

    /**
     * @var string
     */
    public $role;

    /**
     * @var int
     */
    public $silenceDuration;
    protected $_name = [
        'deltas'          => 'Deltas',
        'words'           => 'Words',
        'identity'        => 'Identity',
        'incorrectWords'  => 'IncorrectWords',
        'beginTime'       => 'BeginTime',
        'sourceWords'     => 'SourceWords',
        'end'             => 'End',
        'speechRate'      => 'SpeechRate',
        'sourceRole'      => 'SourceRole',
        'hourMinSec'      => 'HourMinSec',
        'begin'           => 'Begin',
        'emotionValue'    => 'EmotionValue',
        'role'            => 'Role',
        'silenceDuration' => 'SilenceDuration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deltas) {
            $res['Deltas'] = null !== $this->deltas ? $this->deltas->toMap() : null;
        }
        if (null !== $this->words) {
            $res['Words'] = $this->words;
        }
        if (null !== $this->identity) {
            $res['Identity'] = $this->identity;
        }
        if (null !== $this->incorrectWords) {
            $res['IncorrectWords'] = $this->incorrectWords;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->sourceWords) {
            $res['SourceWords'] = $this->sourceWords;
        }
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }
        if (null !== $this->speechRate) {
            $res['SpeechRate'] = $this->speechRate;
        }
        if (null !== $this->sourceRole) {
            $res['SourceRole'] = $this->sourceRole;
        }
        if (null !== $this->hourMinSec) {
            $res['HourMinSec'] = $this->hourMinSec;
        }
        if (null !== $this->begin) {
            $res['Begin'] = $this->begin;
        }
        if (null !== $this->emotionValue) {
            $res['EmotionValue'] = $this->emotionValue;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->silenceDuration) {
            $res['SilenceDuration'] = $this->silenceDuration;
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
        if (isset($map['Deltas'])) {
            $model->deltas = deltas::fromMap($map['Deltas']);
        }
        if (isset($map['Words'])) {
            $model->words = $map['Words'];
        }
        if (isset($map['Identity'])) {
            $model->identity = $map['Identity'];
        }
        if (isset($map['IncorrectWords'])) {
            $model->incorrectWords = $map['IncorrectWords'];
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['SourceWords'])) {
            $model->sourceWords = $map['SourceWords'];
        }
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }
        if (isset($map['SpeechRate'])) {
            $model->speechRate = $map['SpeechRate'];
        }
        if (isset($map['SourceRole'])) {
            $model->sourceRole = $map['SourceRole'];
        }
        if (isset($map['HourMinSec'])) {
            $model->hourMinSec = $map['HourMinSec'];
        }
        if (isset($map['Begin'])) {
            $model->begin = $map['Begin'];
        }
        if (isset($map['EmotionValue'])) {
            $model->emotionValue = $map['EmotionValue'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['SilenceDuration'])) {
            $model->silenceDuration = $map['SilenceDuration'];
        }

        return $model;
    }
}
