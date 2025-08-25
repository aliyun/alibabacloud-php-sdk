<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20200710\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\CreateMcubeNebulaTaskResponseBody\createMcubeNebulaTaskResult;

class CreateMcubeNebulaTaskResponseBody extends Model
{
    /**
     * @var createMcubeNebulaTaskResult
     */
    public $createMcubeNebulaTaskResult;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resultCode;

    /**
     * @var string
     */
    public $resultMessage;
    protected $_name = [
        'createMcubeNebulaTaskResult' => 'CreateMcubeNebulaTaskResult',
        'requestId' => 'RequestId',
        'resultCode' => 'ResultCode',
        'resultMessage' => 'ResultMessage',
    ];

    public function validate()
    {
        if (null !== $this->createMcubeNebulaTaskResult) {
            $this->createMcubeNebulaTaskResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createMcubeNebulaTaskResult) {
            $res['CreateMcubeNebulaTaskResult'] = null !== $this->createMcubeNebulaTaskResult ? $this->createMcubeNebulaTaskResult->toArray($noStream) : $this->createMcubeNebulaTaskResult;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resultCode) {
            $res['ResultCode'] = $this->resultCode;
        }

        if (null !== $this->resultMessage) {
            $res['ResultMessage'] = $this->resultMessage;
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
        if (isset($map['CreateMcubeNebulaTaskResult'])) {
            $model->createMcubeNebulaTaskResult = createMcubeNebulaTaskResult::fromMap($map['CreateMcubeNebulaTaskResult']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResultCode'])) {
            $model->resultCode = $map['ResultCode'];
        }

        if (isset($map['ResultMessage'])) {
            $model->resultMessage = $map['ResultMessage'];
        }

        return $model;
    }
}
