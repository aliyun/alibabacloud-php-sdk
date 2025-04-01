<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class Relation extends Model
{
    /**
     * @var string
     */
    public $errMsg;

    /**
     * @var LineageRelation
     */
    public $lineageRelation;

    /**
     * @var bool
     */
    public $result;
    protected $_name = [
        'errMsg' => 'ErrMsg',
        'lineageRelation' => 'LineageRelation',
        'result' => 'Result',
    ];

    public function validate()
    {
        if (null !== $this->lineageRelation) {
            $this->lineageRelation->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errMsg) {
            $res['ErrMsg'] = $this->errMsg;
        }

        if (null !== $this->lineageRelation) {
            $res['LineageRelation'] = null !== $this->lineageRelation ? $this->lineageRelation->toArray($noStream) : $this->lineageRelation;
        }

        if (null !== $this->result) {
            $res['Result'] = $this->result;
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
        if (isset($map['ErrMsg'])) {
            $model->errMsg = $map['ErrMsg'];
        }

        if (isset($map['LineageRelation'])) {
            $model->lineageRelation = LineageRelation::fromMap($map['LineageRelation']);
        }

        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        return $model;
    }
}
