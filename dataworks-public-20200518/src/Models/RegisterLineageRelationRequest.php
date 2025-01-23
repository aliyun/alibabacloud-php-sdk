<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class RegisterLineageRelationRequest extends Model
{
    /**
     * @var LineageRelationRegisterVO
     */
    public $lineageRelationRegisterVO;
    protected $_name = [
        'lineageRelationRegisterVO' => 'LineageRelationRegisterVO',
    ];

    public function validate()
    {
        if (null !== $this->lineageRelationRegisterVO) {
            $this->lineageRelationRegisterVO->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lineageRelationRegisterVO) {
            $res['LineageRelationRegisterVO'] = null !== $this->lineageRelationRegisterVO ? $this->lineageRelationRegisterVO->toArray($noStream) : $this->lineageRelationRegisterVO;
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
        if (isset($map['LineageRelationRegisterVO'])) {
            $model->lineageRelationRegisterVO = LineageRelationRegisterVO::fromMap($map['LineageRelationRegisterVO']);
        }

        return $model;
    }
}
