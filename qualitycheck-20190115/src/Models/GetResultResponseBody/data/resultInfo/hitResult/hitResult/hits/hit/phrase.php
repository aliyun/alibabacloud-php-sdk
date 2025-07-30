<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\hits\hit;

use AlibabaCloud\Tea\Model;

class phrase extends Model
{
    /**
     * @example 300
     *
     * @var int
     */
    public $begin;

    /**
     * @example 0
     *
     * @var int
     */
    public $emotionValue;

    /**
     * @example 300
     *
     * @var int
     */
    public $end;

    /**
     * @var string
     */
    public $role;

    /**
     * @example xxx
     *
     * @var string
     */
    public $words;
    protected $_name = [
        'begin' => 'Begin',
        'emotionValue' => 'EmotionValue',
        'end' => 'End',
        'role' => 'Role',
        'words' => 'Words',
    ];

    public function validate() {}

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
        if (null !== $this->role) {
            $res['Role'] = $this->role;
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
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Words'])) {
            $model->words = $map['Words'];
        }

        return $model;
    }
}
