<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetImageTestResultResponseBody\testResult;

class GetImageTestResultResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var testResult
     */
    public $testResult;
    protected $_name = [
        'requestId' => 'RequestId',
        'success' => 'Success',
        'testResult' => 'TestResult',
    ];

    public function validate()
    {
        if (null !== $this->testResult) {
            $this->testResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->testResult) {
            $res['TestResult'] = null !== $this->testResult ? $this->testResult->toArray($noStream) : $this->testResult;
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

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['TestResult'])) {
            $model->testResult = testResult::fromMap($map['TestResult']);
        }

        return $model;
    }
}
