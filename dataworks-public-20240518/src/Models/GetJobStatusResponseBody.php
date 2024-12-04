<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetJobStatusResponseBody\jobStatus;
use AlibabaCloud\Tea\Model;

class GetJobStatusResponseBody extends Model
{
    /**
     * @description The real-time status information of the asynchronous task.
     *
     * @var jobStatus
     */
    public $jobStatus;

    /**
     * @description The request ID.
     *
     * @example 5E2BFE96-C0E0-5A98-85C8-633EC803198D
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'jobStatus' => 'JobStatus',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobStatus) {
            $res['JobStatus'] = null !== $this->jobStatus ? $this->jobStatus->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetJobStatusResponseBody
     */
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
