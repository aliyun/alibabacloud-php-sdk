<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\QueryJobsWithResultResponseBody\jobs;

class QueryJobsWithResultResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var jobs
     */
    public $jobs;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string[]
     */
    public $variableNames;
    protected $_name = [
        'code' => 'Code',
        'httpStatusCode' => 'HttpStatusCode',
        'jobs' => 'Jobs',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'variableNames' => 'VariableNames',
    ];

    public function validate()
    {
        if (null !== $this->jobs) {
            $this->jobs->validate();
        }
        if (\is_array($this->variableNames)) {
            Model::validateArray($this->variableNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->jobs) {
            $res['Jobs'] = null !== $this->jobs ? $this->jobs->toArray($noStream) : $this->jobs;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->variableNames) {
            if (\is_array($this->variableNames)) {
                $res['VariableNames'] = [];
                $n1 = 0;
                foreach ($this->variableNames as $item1) {
                    $res['VariableNames'][$n1++] = $item1;
                }
            }
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }

        if (isset($map['Jobs'])) {
            $model->jobs = jobs::fromMap($map['Jobs']);
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['VariableNames'])) {
            if (!empty($map['VariableNames'])) {
                $model->variableNames = [];
                $n1 = 0;
                foreach ($map['VariableNames'] as $item1) {
                    $model->variableNames[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
