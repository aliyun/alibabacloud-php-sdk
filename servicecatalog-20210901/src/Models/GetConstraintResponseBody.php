<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetConstraintResponseBody\constraintDetail;
use AlibabaCloud\Tea\Model;

class GetConstraintResponseBody extends Model
{
    /**
     * @description The details of the constraint.
     *
     * @var constraintDetail
     */
    public $constraintDetail;

    /**
     * @description The ID of the request.
     *
     * @example 0FEEF92D-4052-5202-87D0-3D8EC16F81BF
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'constraintDetail' => 'ConstraintDetail',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->constraintDetail) {
            $res['ConstraintDetail'] = null !== $this->constraintDetail ? $this->constraintDetail->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetConstraintResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConstraintDetail'])) {
            $model->constraintDetail = constraintDetail::fromMap($map['ConstraintDetail']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
