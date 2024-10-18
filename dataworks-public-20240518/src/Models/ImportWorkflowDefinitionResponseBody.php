<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ImportWorkflowDefinitionResponseBody\asyncJob;
use AlibabaCloud\Tea\Model;

class ImportWorkflowDefinitionResponseBody extends Model
{
    /**
     * @var asyncJob
     */
    public $asyncJob;

    /**
     * @example 7C352CB7-CD88-50CF-9D0D-E81BDF020E7F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'asyncJob'  => 'AsyncJob',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asyncJob) {
            $res['AsyncJob'] = null !== $this->asyncJob ? $this->asyncJob->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportWorkflowDefinitionResponseBody
     */
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
