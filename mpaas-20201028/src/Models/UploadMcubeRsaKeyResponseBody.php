<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\UploadMcubeRsaKeyResponseBody\uploadRsaResult;

class UploadMcubeRsaKeyResponseBody extends Model
{
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

    /**
     * @var uploadRsaResult
     */
    public $uploadRsaResult;
    protected $_name = [
        'requestId' => 'RequestId',
        'resultCode' => 'ResultCode',
        'resultMessage' => 'ResultMessage',
        'uploadRsaResult' => 'UploadRsaResult',
    ];

    public function validate()
    {
        if (null !== $this->uploadRsaResult) {
            $this->uploadRsaResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resultCode) {
            $res['ResultCode'] = $this->resultCode;
        }

        if (null !== $this->resultMessage) {
            $res['ResultMessage'] = $this->resultMessage;
        }

        if (null !== $this->uploadRsaResult) {
            $res['UploadRsaResult'] = null !== $this->uploadRsaResult ? $this->uploadRsaResult->toArray($noStream) : $this->uploadRsaResult;
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

        if (isset($map['ResultCode'])) {
            $model->resultCode = $map['ResultCode'];
        }

        if (isset($map['ResultMessage'])) {
            $model->resultMessage = $map['ResultMessage'];
        }

        if (isset($map['UploadRsaResult'])) {
            $model->uploadRsaResult = uploadRsaResult::fromMap($map['UploadRsaResult']);
        }

        return $model;
    }
}
