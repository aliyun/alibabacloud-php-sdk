<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetReviewInfoResponseBody\data\hitRuleReviewInfoList\hitRuleReviewInfo\conditionHitInfoList\conditionHitInfo;

use AlibabaCloud\Tea\Model;

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
    public $identity;

    /**
     * @var int
     */
    public $pid;

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
        'identity'     => 'Identity',
        'pid'          => 'Pid',
        'role'         => 'Role',
        'words'        => 'Words',
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
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
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
        if (isset($map['Identity'])) {
            $model->identity = $map['Identity'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
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
