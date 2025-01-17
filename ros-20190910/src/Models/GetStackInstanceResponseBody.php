<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackInstanceResponseBody\stackInstance;

class GetStackInstanceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var stackInstance
     */
    public $stackInstance;
    protected $_name = [
        'requestId'     => 'RequestId',
        'stackInstance' => 'StackInstance',
    ];

    public function validate()
    {
        if (null !== $this->stackInstance) {
            $this->stackInstance->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->stackInstance) {
            $res['StackInstance'] = null !== $this->stackInstance ? $this->stackInstance->toArray($noStream) : $this->stackInstance;
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

        if (isset($map['StackInstance'])) {
            $model->stackInstance = stackInstance::fromMap($map['StackInstance']);
        }

        return $model;
    }
}
