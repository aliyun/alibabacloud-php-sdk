<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class RegisterLineageRelationShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $lineageRelationRegisterVOShrink;
    protected $_name = [
        'lineageRelationRegisterVOShrink' => 'LineageRelationRegisterVO',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lineageRelationRegisterVOShrink) {
            $res['LineageRelationRegisterVO'] = $this->lineageRelationRegisterVOShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RegisterLineageRelationShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LineageRelationRegisterVO'])) {
            $model->lineageRelationRegisterVOShrink = $map['LineageRelationRegisterVO'];
        }

        return $model;
    }
}
