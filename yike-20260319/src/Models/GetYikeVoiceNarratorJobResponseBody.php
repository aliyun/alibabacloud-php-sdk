<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260319\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yike\V20260319\Models\GetYikeVoiceNarratorJobResponseBody\jobResult;

class GetYikeVoiceNarratorJobResponseBody extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $jobParams;

    /**
     * @var jobResult[]
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

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'errorCode' => 'ErrorCode',
        'jobId' => 'JobId',
        'jobParams' => 'JobParams',
        'jobResult' => 'JobResult',
        'jobStatus' => 'JobStatus',
        'requestId' => 'RequestId',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        if (\is_array($this->jobResult)) {
            Model::validateArray($this->jobResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->jobParams) {
            $res['JobParams'] = $this->jobParams;
        }

        if (null !== $this->jobResult) {
            if (\is_array($this->jobResult)) {
                $res['JobResult'] = [];
                $n1 = 0;
                foreach ($this->jobResult as $item1) {
                    $res['JobResult'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->jobStatus) {
            $res['JobStatus'] = $this->jobStatus;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['JobParams'])) {
            $model->jobParams = $map['JobParams'];
        }

        if (isset($map['JobResult'])) {
            if (!empty($map['JobResult'])) {
                $model->jobResult = [];
                $n1 = 0;
                foreach ($map['JobResult'] as $item1) {
                    $model->jobResult[$n1] = jobResult::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['JobStatus'])) {
            $model->jobStatus = $map['JobStatus'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
