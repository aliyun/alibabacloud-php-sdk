<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20200710\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\CreateMcubeNebulaResourceResponseBody\createMcubeNebulaResourceReslult;

class CreateMcubeNebulaResourceResponseBody extends Model
{
    /**
     * @var createMcubeNebulaResourceReslult
     */
    public $createMcubeNebulaResourceReslult;

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
        'createMcubeNebulaResourceReslult' => 'CreateMcubeNebulaResourceReslult',
        'requestId' => 'RequestId',
        'resultCode' => 'ResultCode',
        'resultMessage' => 'ResultMessage',
    ];

    public function validate()
    {
        if (null !== $this->createMcubeNebulaResourceReslult) {
            $this->createMcubeNebulaResourceReslult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createMcubeNebulaResourceReslult) {
            $res['CreateMcubeNebulaResourceReslult'] = null !== $this->createMcubeNebulaResourceReslult ? $this->createMcubeNebulaResourceReslult->toArray($noStream) : $this->createMcubeNebulaResourceReslult;
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
        if (isset($map['CreateMcubeNebulaResourceReslult'])) {
            $model->createMcubeNebulaResourceReslult = createMcubeNebulaResourceReslult::fromMap($map['CreateMcubeNebulaResourceReslult']);
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
