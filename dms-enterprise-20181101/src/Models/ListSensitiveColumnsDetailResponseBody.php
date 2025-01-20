<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveColumnsDetailResponseBody\sensitiveColumnsDetailList;

class ListSensitiveColumnsDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $errorCode;
    /**
     * @var string
     */
    public $errorMessage;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var sensitiveColumnsDetailList
     */
    public $sensitiveColumnsDetailList;
    /**
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
        if (null !== $this->sensitiveColumnsDetailList) {
            $this->sensitiveColumnsDetailList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['SensitiveColumnsDetailList'] = null !== $this->sensitiveColumnsDetailList ? $this->sensitiveColumnsDetailList->toArray($noStream) : $this->sensitiveColumnsDetailList;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
