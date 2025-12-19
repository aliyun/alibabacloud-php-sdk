<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateWorkloadIdentityResponseBody\workloadIdentity;

class CreateWorkloadIdentityResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var workloadIdentity
     */
    public $workloadIdentity;
    protected $_name = [
        'requestId' => 'RequestId',
        'workloadIdentity' => 'WorkloadIdentity',
    ];

    public function validate()
    {
        if (null !== $this->workloadIdentity) {
            $this->workloadIdentity->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->workloadIdentity) {
            $res['WorkloadIdentity'] = null !== $this->workloadIdentity ? $this->workloadIdentity->toArray($noStream) : $this->workloadIdentity;
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

        if (isset($map['WorkloadIdentity'])) {
            $model->workloadIdentity = workloadIdentity::fromMap($map['WorkloadIdentity']);
        }

        return $model;
    }
}
