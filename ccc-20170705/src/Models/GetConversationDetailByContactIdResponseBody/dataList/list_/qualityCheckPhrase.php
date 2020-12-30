<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GetConversationDetailByContactIdResponseBody\dataList\list_;

use AlibabaCloud\Tea\Model;

class qualityCheckPhrase extends Model
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
     * @var string
     */
    public $identity;

    /**
     * @var int
     */
    public $end;

    /**
     * @var string
     */
    public $role;
    protected $_name = [
        'words'    => 'Words',
        'begin'    => 'Begin',
        'identity' => 'Identity',
        'end'      => 'End',
        'role'     => 'Role',
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
        if (null !== $this->identity) {
            $res['Identity'] = $this->identity;
        }
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return qualityCheckPhrase
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
        if (isset($map['Identity'])) {
            $model->identity = $map['Identity'];
        }
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        return $model;
    }
}
