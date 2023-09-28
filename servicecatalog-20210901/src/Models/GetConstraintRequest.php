<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Tea\Model;

class GetConstraintRequest extends Model
{
    /**
     * @description The ID of the constraint.
     *
     * @example cons-bp1yx7x42v****
     *
     * @var string
     */
    public $constraintId;
    protected $_name = [
        'constraintId' => 'ConstraintId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->constraintId) {
            $res['ConstraintId'] = $this->constraintId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetConstraintRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConstraintId'])) {
            $model->constraintId = $map['ConstraintId'];
        }

        return $model;
    }
}
