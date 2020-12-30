<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveColumnsResponseBody\sensitiveColumnList;
use AlibabaCloud\Tea\Model;

class ListSensitiveColumnsResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var sensitiveColumnList
     */
    public $sensitiveColumnList;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'totalCount'          => 'TotalCount',
        'requestId'           => 'RequestId',
        'errorCode'           => 'ErrorCode',
        'errorMessage'        => 'ErrorMessage',
        'sensitiveColumnList' => 'SensitiveColumnList',
        'success'             => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->sensitiveColumnList) {
            $res['SensitiveColumnList'] = null !== $this->sensitiveColumnList ? $this->sensitiveColumnList->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSensitiveColumnsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['SensitiveColumnList'])) {
            $model->sensitiveColumnList = sensitiveColumnList::fromMap($map['SensitiveColumnList']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
