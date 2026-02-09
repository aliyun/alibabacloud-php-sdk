<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcubeHotpatchTaskResponseBody\createHotpatchTaskResult;

class CreateMcubeHotpatchTaskResponseBody extends Model
{
    /**
     * @var createHotpatchTaskResult
     */
    public $createHotpatchTaskResult;

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
        'createHotpatchTaskResult' => 'CreateHotpatchTaskResult',
        'requestId' => 'RequestId',
        'resultCode' => 'ResultCode',
        'resultMessage' => 'ResultMessage',
    ];

    public function validate()
    {
        if (null !== $this->createHotpatchTaskResult) {
            $this->createHotpatchTaskResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createHotpatchTaskResult) {
            $res['CreateHotpatchTaskResult'] = null !== $this->createHotpatchTaskResult ? $this->createHotpatchTaskResult->toArray($noStream) : $this->createHotpatchTaskResult;
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
        if (isset($map['CreateHotpatchTaskResult'])) {
            $model->createHotpatchTaskResult = createHotpatchTaskResult::fromMap($map['CreateHotpatchTaskResult']);
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
