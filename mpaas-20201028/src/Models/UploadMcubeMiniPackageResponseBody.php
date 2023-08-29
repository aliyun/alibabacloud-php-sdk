<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\SDK\MPaaS\V20201028\Models\UploadMcubeMiniPackageResponseBody\uploadMiniPackageResult;
use AlibabaCloud\Tea\Model;

class UploadMcubeMiniPackageResponseBody extends Model
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
     * @var uploadMiniPackageResult
     */
    public $uploadMiniPackageResult;
    protected $_name = [
        'requestId'               => 'RequestId',
        'resultCode'              => 'ResultCode',
        'resultMessage'           => 'ResultMessage',
        'uploadMiniPackageResult' => 'UploadMiniPackageResult',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->uploadMiniPackageResult) {
            $res['UploadMiniPackageResult'] = null !== $this->uploadMiniPackageResult ? $this->uploadMiniPackageResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadMcubeMiniPackageResponseBody
     */
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
        if (isset($map['UploadMiniPackageResult'])) {
            $model->uploadMiniPackageResult = uploadMiniPackageResult::fromMap($map['UploadMiniPackageResult']);
        }

        return $model;
    }
}
