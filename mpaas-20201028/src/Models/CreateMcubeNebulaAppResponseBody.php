<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcubeNebulaAppResponseBody\createNebulaAppResult;
use AlibabaCloud\Tea\Model;

class CreateMcubeNebulaAppResponseBody extends Model
{
    /**
     * @var createNebulaAppResult
     */
    public $createNebulaAppResult;

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
        'createNebulaAppResult' => 'CreateNebulaAppResult',
        'requestId'             => 'RequestId',
        'resultCode'            => 'ResultCode',
        'resultMessage'         => 'ResultMessage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createNebulaAppResult) {
            $res['CreateNebulaAppResult'] = null !== $this->createNebulaAppResult ? $this->createNebulaAppResult->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return CreateMcubeNebulaAppResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateNebulaAppResult'])) {
            $model->createNebulaAppResult = createNebulaAppResult::fromMap($map['CreateNebulaAppResult']);
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
