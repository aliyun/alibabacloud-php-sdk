<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\hits\hit;

use AlibabaCloud\Dara\Model;

class phrase extends Model
{
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
     * @var string
     */
    public $role;
    /**
     * @var string
     */
    public $words;
    protected $_name = [
        'begin'        => 'Begin',
        'emotionValue' => 'EmotionValue',
        'end'          => 'End',
        'role'         => 'Role',
        'words'        => 'Words',
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
