<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateTopicRouteTableResponseBody\failureTopics;

class CreateTopicRouteTableResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var failureTopics
     */
    public $failureTopics;

    /**
     * @var bool
     */
    public $isAllSucceed;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'code' => 'Code',
        'errorMessage' => 'ErrorMessage',
        'failureTopics' => 'FailureTopics',
        'isAllSucceed' => 'IsAllSucceed',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->failureTopics) {
            $this->failureTopics->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->failureTopics) {
            $res['FailureTopics'] = null !== $this->failureTopics ? $this->failureTopics->toArray($noStream) : $this->failureTopics;
        }

        if (null !== $this->isAllSucceed) {
            $res['IsAllSucceed'] = $this->isAllSucceed;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['FailureTopics'])) {
            $model->failureTopics = failureTopics::fromMap($map['FailureTopics']);
        }

        if (isset($map['IsAllSucceed'])) {
            $model->isAllSucceed = $map['IsAllSucceed'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
