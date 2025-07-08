<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models;

use AlibabaCloud\Dara\Model;

class CreateMessageCallbackNewResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $testFailCode;

    /**
     * @var string
     */
    public $testResponse;

    /**
     * @var bool
     */
    public $testSuccess;
    protected $_name = [
        'requestId' => 'RequestId',
        'testFailCode' => 'TestFailCode',
        'testResponse' => 'TestResponse',
        'testSuccess' => 'TestSuccess',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->testFailCode) {
            $res['TestFailCode'] = $this->testFailCode;
        }

        if (null !== $this->testResponse) {
            $res['TestResponse'] = $this->testResponse;
        }

        if (null !== $this->testSuccess) {
            $res['TestSuccess'] = $this->testSuccess;
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

        if (isset($map['TestFailCode'])) {
            $model->testFailCode = $map['TestFailCode'];
        }

        if (isset($map['TestResponse'])) {
            $model->testResponse = $map['TestResponse'];
        }

        if (isset($map['TestSuccess'])) {
            $model->testSuccess = $map['TestSuccess'];
        }

        return $model;
    }
}
