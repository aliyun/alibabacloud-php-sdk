<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncResponseBody\data\resultInfo\rules\ruleHitInfo\hit\conditionHitInfo;

use AlibabaCloud\Tea\Model;

class phrase extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $begin;

    /**
     * @example 1564574
     *
     * @var string
     */
    public $beginTime;

    /**
     * @example 2090
     *
     * @var int
     */
    public $end;

    /**
     * @example 1
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
        'begin'     => 'Begin',
        'beginTime' => 'BeginTime',
        'end'       => 'End',
        'identity'  => 'Identity',
        'role'      => 'Role',
        'words'     => 'Words',
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
        if (null !== $this->end) {
            $res['End'] = $this->end;
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
     * @return phrase
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
        if (isset($map['End'])) {
            $model->end = $map['End'];
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
