<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ImportWorkflowDefinitionResponseBody\asyncJob;

class ImportWorkflowDefinitionResponseBody extends Model
{
    /**
     * @var asyncJob
     */
    public $asyncJob;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'asyncJob' => 'AsyncJob',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->asyncJob) {
            $this->asyncJob->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asyncJob) {
            $res['AsyncJob'] = null !== $this->asyncJob ? $this->asyncJob->toArray($noStream) : $this->asyncJob;
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
        if (isset($map['AsyncJob'])) {
            $model->asyncJob = asyncJob::fromMap($map['AsyncJob']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
