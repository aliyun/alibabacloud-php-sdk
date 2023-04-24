<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDatabaseExportOrderResponseBody\createOrderResult;
use AlibabaCloud\Tea\Model;

class CreateDatabaseExportOrderResponseBody extends Model
{
    /**
     * @var createOrderResult
     */
    public $createOrderResult;

    /**
     * @example UnknownError
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example UnknownError
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example 0C1CB646-1DE4-4AD0-B4A4-7D47DD52E931
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'createOrderResult' => 'CreateOrderResult',
        'errorCode'         => 'ErrorCode',
        'errorMessage'      => 'ErrorMessage',
        'requestId'         => 'RequestId',
        'success'           => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createOrderResult) {
            $res['CreateOrderResult'] = null !== $this->createOrderResult ? $this->createOrderResult->toMap() : null;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDatabaseExportOrderResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateOrderResult'])) {
            $model->createOrderResult = createOrderResult::fromMap($map['CreateOrderResult']);
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
