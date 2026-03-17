<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetYikeStoryboardJobResponseBody\jobParams;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetYikeStoryboardJobResponseBody\jobResult;

class GetYikeStoryboardJobResponseBody extends Model
{
    /**
     * @var string
     */
    public $jobId;

    /**
     * @var jobParams
     */
    public $jobParams;

    /**
     * @var jobResult
     */
    public $jobResult;

    /**
     * @var string
     */
    public $jobStatus;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'jobId' => 'JobId',
        'jobParams' => 'JobParams',
        'jobResult' => 'JobResult',
        'jobStatus' => 'JobStatus',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->jobParams) {
            $this->jobParams->validate();
        }
        if (null !== $this->jobResult) {
            $this->jobResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->jobParams) {
            $res['JobParams'] = null !== $this->jobParams ? $this->jobParams->toArray($noStream) : $this->jobParams;
        }

        if (null !== $this->jobResult) {
            $res['JobResult'] = null !== $this->jobResult ? $this->jobResult->toArray($noStream) : $this->jobResult;
        }

        if (null !== $this->jobStatus) {
            $res['JobStatus'] = $this->jobStatus;
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
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['JobParams'])) {
            $model->jobParams = jobParams::fromMap($map['JobParams']);
        }

        if (isset($map['JobResult'])) {
            $model->jobResult = jobResult::fromMap($map['JobResult']);
        }

        if (isset($map['JobStatus'])) {
            $model->jobStatus = $map['JobStatus'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
