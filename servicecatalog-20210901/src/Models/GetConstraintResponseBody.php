<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetConstraintResponseBody\constraintDetail;

class GetConstraintResponseBody extends Model
{
    /**
     * @var constraintDetail
     */
    public $constraintDetail;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'constraintDetail' => 'ConstraintDetail',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->constraintDetail) {
            $this->constraintDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->constraintDetail) {
            $res['ConstraintDetail'] = null !== $this->constraintDetail ? $this->constraintDetail->toArray($noStream) : $this->constraintDetail;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ConstraintDetail'])) {
            $model->constraintDetail = constraintDetail::fromMap($map['ConstraintDetail']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
