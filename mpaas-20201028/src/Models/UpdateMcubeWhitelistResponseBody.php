<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\SDK\MPaaS\V20201028\Models\UpdateMcubeWhitelistResponseBody\addWhitelistResult;
use AlibabaCloud\Tea\Model;

class UpdateMcubeWhitelistResponseBody extends Model
{
    /**
     * @var addWhitelistResult
     */
    public $addWhitelistResult;

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
        'addWhitelistResult' => 'AddWhitelistResult',
        'requestId'          => 'RequestId',
        'resultCode'         => 'ResultCode',
        'resultMessage'      => 'ResultMessage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addWhitelistResult) {
            $res['AddWhitelistResult'] = null !== $this->addWhitelistResult ? $this->addWhitelistResult->toMap() : null;
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
     * @return UpdateMcubeWhitelistResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddWhitelistResult'])) {
            $model->addWhitelistResult = addWhitelistResult::fromMap($map['AddWhitelistResult']);
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
