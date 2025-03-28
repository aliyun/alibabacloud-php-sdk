<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupOperationResponseBody\stackGroupOperation;

class GetStackGroupOperationResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var stackGroupOperation
     */
    public $stackGroupOperation;
    protected $_name = [
        'requestId' => 'RequestId',
        'stackGroupOperation' => 'StackGroupOperation',
    ];

    public function validate()
    {
        if (null !== $this->stackGroupOperation) {
            $this->stackGroupOperation->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->stackGroupOperation) {
            $res['StackGroupOperation'] = null !== $this->stackGroupOperation ? $this->stackGroupOperation->toArray($noStream) : $this->stackGroupOperation;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StackGroupOperation'])) {
            $model->stackGroupOperation = stackGroupOperation::fromMap($map['StackGroupOperation']);
        }

        return $model;
    }
}
