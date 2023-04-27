<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveColumnsDetailResponseBody\sensitiveColumnsDetailList;
use AlibabaCloud\Tea\Model;

class ListSensitiveColumnsDetailResponseBody extends Model
{
    /**
     * @description WB01053274
     *
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
     * @description The name of the field. You can call the [ListSensitiveColumns](~~188103~~) operation to obtain the name of the field.
     *
     * >  You can also call the [ListColumns](~~141870~~) operation to obtain the name of the field.
     * @example 7629888F-C9FB-4D16-A7D3-B443FE06FBD4
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The data type of the field.
     *
     * @var sensitiveColumnsDetailList
     */
    public $sensitiveColumnsDetailList;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorCode'                  => 'ErrorCode',
        'errorMessage'               => 'ErrorMessage',
        'requestId'                  => 'RequestId',
        'sensitiveColumnsDetailList' => 'SensitiveColumnsDetailList',
        'success'                    => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sensitiveColumnsDetailList) {
            $res['SensitiveColumnsDetailList'] = null !== $this->sensitiveColumnsDetailList ? $this->sensitiveColumnsDetailList->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSensitiveColumnsDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SensitiveColumnsDetailList'])) {
            $model->sensitiveColumnsDetailList = sensitiveColumnsDetailList::fromMap($map['SensitiveColumnsDetailList']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
