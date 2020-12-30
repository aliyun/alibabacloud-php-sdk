<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveColumnsDetailResponseBody\sensitiveColumnsDetailList;
use AlibabaCloud\Tea\Model;

class ListSensitiveColumnsDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sensitiveColumnsDetailList
     */
    public $sensitiveColumnsDetailList;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'requestId'                  => 'RequestId',
        'sensitiveColumnsDetailList' => 'SensitiveColumnsDetailList',
        'errorCode'                  => 'ErrorCode',
        'errorMessage'               => 'ErrorMessage',
        'success'                    => 'Success',
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
        if (null !== $this->sensitiveColumnsDetailList) {
            $res['SensitiveColumnsDetailList'] = null !== $this->sensitiveColumnsDetailList ? $this->sensitiveColumnsDetailList->toMap() : null;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SensitiveColumnsDetailList'])) {
            $model->sensitiveColumnsDetailList = sensitiveColumnsDetailList::fromMap($map['SensitiveColumnsDetailList']);
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
