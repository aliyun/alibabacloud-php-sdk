<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Tea\Model;

class UpdateConstraintResponseBody extends Model
{
    /**
     * @description The ID of the constraint.
     *
     * @example cons-bp1yx7x42v****
     *
     * @var string
     */
    public $constraintId;

    /**
     * @description The ID of the request.
     *
     * @example 0FEEF92D-4052-5202-87D0-3D8EC16F81BF
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'constraintId' => 'ConstraintId',
        'requestId'    => 'RequestId',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateConstraintResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConstraintId'])) {
            $model->constraintId = $map['ConstraintId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
