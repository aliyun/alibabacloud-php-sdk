<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class RegisterLineageRelationShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $lineageRelationRegisterVOShrink;
    protected $_name = [
        'lineageRelationRegisterVOShrink' => 'LineageRelationRegisterVO',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lineageRelationRegisterVOShrink) {
            $res['LineageRelationRegisterVO'] = $this->lineageRelationRegisterVOShrink;
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
            $model->lineageRelationRegisterVOShrink = $map['LineageRelationRegisterVO'];
        }

        return $model;
    }
}
