<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetConversationDetailResponseBody;

use AlibabaCloud\Tea\Model;

class phrases extends Model
{
    /**
     * @example 240
     *
     * @var int
     */
    public $begin;

    /**
     * @example 1280
     *
     * @var int
     */
    public $end;

    /**
     * @var bool
     */
    public $finished;

    /**
     * @example agent@ccc-test
     *
     * @var string
     */
    public $identity;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $words;
    protected $_name = [
        'begin' => 'Begin',
        'end' => 'End',
        'finished' => 'Finished',
        'identity' => 'Identity',
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
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }
        if (null !== $this->finished) {
            $res['Finished'] = $this->finished;
        }
        if (null !== $this->identity) {
            $res['Identity'] = $this->identity;
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
     * @return phrases
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Begin'])) {
            $model->begin = $map['Begin'];
        }
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }
        if (isset($map['Finished'])) {
            $model->finished = $map['Finished'];
        }
        if (isset($map['Identity'])) {
            $model->identity = $map['Identity'];
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
