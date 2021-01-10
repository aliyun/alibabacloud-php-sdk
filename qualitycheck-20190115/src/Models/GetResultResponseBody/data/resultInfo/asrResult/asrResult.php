<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\asrResult;

use AlibabaCloud\Tea\Model;

class asrResult extends Model
{
    /**
     * @var string
     */
    public $words;

    /**
     * @var int
     */
    public $begin;

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
    protected $_name = [
        'words'        => 'Words',
        'begin'        => 'Begin',
        'emotionValue' => 'EmotionValue',
        'end'          => 'End',
        'speechRate'   => 'SpeechRate',
        'role'         => 'Role',
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
        if (null !== $this->begin) {
            $res['Begin'] = $this->begin;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return asrResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Words'])) {
            $model->words = $map['Words'];
        }
        if (isset($map['Begin'])) {
            $model->begin = $map['Begin'];
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

        return $model;
    }
}
