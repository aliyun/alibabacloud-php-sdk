<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetJobStatusResponseBody\jobStatus;

class GetJobStatusResponseBody extends Model
{
    /**
     * @var jobStatus
     */
    public $jobStatus;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'jobStatus' => 'JobStatus',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->jobStatus) {
            $this->jobStatus->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobStatus) {
            $res['JobStatus'] = null !== $this->jobStatus ? $this->jobStatus->toArray($noStream) : $this->jobStatus;
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
        if (isset($map['JobStatus'])) {
            $model->jobStatus = jobStatus::fromMap($map['JobStatus']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
