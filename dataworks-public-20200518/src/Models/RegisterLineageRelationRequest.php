<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class RegisterLineageRelationRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var LineageRelationRegisterVO
     */
    public $lineageRelationRegisterVO;
    protected $_name = [
        'lineageRelationRegisterVO' => 'LineageRelationRegisterVO',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lineageRelationRegisterVO) {
            $res['LineageRelationRegisterVO'] = null !== $this->lineageRelationRegisterVO ? $this->lineageRelationRegisterVO->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RegisterLineageRelationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LineageRelationRegisterVO'])) {
            $model->lineageRelationRegisterVO = LineageRelationRegisterVO::fromMap($map['LineageRelationRegisterVO']);
        }

        return $model;
    }
}
