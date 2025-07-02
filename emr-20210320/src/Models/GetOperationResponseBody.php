<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class GetOperationResponseBody extends Model
{
    /**
     * @var Operation
     */
    public $operation;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'operation' => 'Operation',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->operation) {
            $this->operation->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operation) {
            $res['Operation'] = null !== $this->operation ? $this->operation->toArray($noStream) : $this->operation;
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
        if (isset($map['Operation'])) {
            $model->operation = Operation::fromMap($map['Operation']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
