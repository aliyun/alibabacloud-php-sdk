<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncJobAnalyzeResultResponseBody\structSyncJobAnalyzeResult;
use AlibabaCloud\Tea\Model;

class GetStructSyncJobAnalyzeResultResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var structSyncJobAnalyzeResult
     */
    public $structSyncJobAnalyzeResult;
    protected $_name = [
        'requestId'                  => 'RequestId',
        'success'                    => 'Success',
        'errorMessage'               => 'ErrorMessage',
        'errorCode'                  => 'ErrorCode',
        'structSyncJobAnalyzeResult' => 'StructSyncJobAnalyzeResult',
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
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->structSyncJobAnalyzeResult) {
            $res['StructSyncJobAnalyzeResult'] = null !== $this->structSyncJobAnalyzeResult ? $this->structSyncJobAnalyzeResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStructSyncJobAnalyzeResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['StructSyncJobAnalyzeResult'])) {
            $model->structSyncJobAnalyzeResult = structSyncJobAnalyzeResult::fromMap($map['StructSyncJobAnalyzeResult']);
        }

        return $model;
    }
}
