<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetProcessInstanceResponseBody\processInstance;

class GetProcessInstanceResponseBody extends Model
{
    /**
     * @var processInstance
     */
    public $processInstance;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'processInstance' => 'ProcessInstance',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->processInstance) {
            $this->processInstance->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->processInstance) {
            $res['ProcessInstance'] = null !== $this->processInstance ? $this->processInstance->toArray($noStream) : $this->processInstance;
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
        if (isset($map['ProcessInstance'])) {
            $model->processInstance = processInstance::fromMap($map['ProcessInstance']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
