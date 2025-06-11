<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\GetTaskResultResponseBody\data;

use AlibabaCloud\Dara\Model;

class asrResult extends Model
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
    public $roleName;

    /**
     * @var int
     */
    public $speechRate;

    /**
     * @var string
     */
    public $words;
    protected $_name = [
        'begin' => 'begin',
        'emotionValue' => 'emotionValue',
        'end' => 'end',
        'role' => 'role',
        'roleName' => 'roleName',
        'speechRate' => 'speechRate',
        'words' => 'words',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->begin) {
            $res['begin'] = $this->begin;
        }

        if (null !== $this->emotionValue) {
            $res['emotionValue'] = $this->emotionValue;
        }

        if (null !== $this->end) {
            $res['end'] = $this->end;
        }

        if (null !== $this->role) {
            $res['role'] = $this->role;
        }

        if (null !== $this->roleName) {
            $res['roleName'] = $this->roleName;
        }

        if (null !== $this->speechRate) {
            $res['speechRate'] = $this->speechRate;
        }

        if (null !== $this->words) {
            $res['words'] = $this->words;
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
        if (isset($map['begin'])) {
            $model->begin = $map['begin'];
        }

        if (isset($map['emotionValue'])) {
            $model->emotionValue = $map['emotionValue'];
        }

        if (isset($map['end'])) {
            $model->end = $map['end'];
        }

        if (isset($map['role'])) {
            $model->role = $map['role'];
        }

        if (isset($map['roleName'])) {
            $model->roleName = $map['roleName'];
        }

        if (isset($map['speechRate'])) {
            $model->speechRate = $map['speechRate'];
        }

        if (isset($map['words'])) {
            $model->words = $map['words'];
        }

        return $model;
    }
}
