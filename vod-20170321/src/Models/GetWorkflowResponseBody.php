<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetWorkflowResponseBody\workflowInfo;

class GetWorkflowResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var workflowInfo
     */
    public $workflowInfo;
    protected $_name = [
        'requestId' => 'RequestId',
        'workflowInfo' => 'WorkflowInfo',
    ];

    public function validate()
    {
        if (null !== $this->workflowInfo) {
            $this->workflowInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->workflowInfo) {
            $res['WorkflowInfo'] = null !== $this->workflowInfo ? $this->workflowInfo->toArray($noStream) : $this->workflowInfo;
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

        if (isset($map['WorkflowInfo'])) {
            $model->workflowInfo = workflowInfo::fromMap($map['WorkflowInfo']);
        }

        return $model;
    }
}
