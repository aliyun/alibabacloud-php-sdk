<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SyncQualityCheckResponseBody\data\rules\hit;

use AlibabaCloud\Tea\Model;

class phrase extends Model
{
    /**
     * @example 1230
     *
     * @var int
     */
    public $begin;

    /**
     * @example 6
     *
     * @var int
     */
    public $emotionValue;

    /**
     * @example 3440
     *
     * @var int
     */
    public $end;

    /**
     * @example xxx
     *
     * @var string
     */
    public $identity;

    /**
     * @var string
     */
    public $role;

    /**
     * @example 123
     *
     * @var int
     */
    public $silenceDuration;

    /**
     * @example 233
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
        'emotionValue'    => 'EmotionValue',
        'end'             => 'End',
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
        if (null !== $this->emotionValue) {
            $res['EmotionValue'] = $this->emotionValue;
        }
        if (null !== $this->end) {
            $res['End'] = $this->end;
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
     * @return phrase
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Begin'])) {
            $model->begin = $map['Begin'];
        }
        if (isset($map['EmotionValue'])) {
            $model->emotionValue = $map['EmotionValue'];
        }
        if (isset($map['End'])) {
            $model->end = $map['End'];
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
