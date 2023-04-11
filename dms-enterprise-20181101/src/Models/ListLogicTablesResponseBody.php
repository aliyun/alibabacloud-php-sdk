<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLogicTablesResponseBody\logicTableList;
use AlibabaCloud\Tea\Model;

class ListLogicTablesResponseBody extends Model
{
    /**
     * @description The error code.
     *
     * @example UnknownError
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message.
     *
     * @example UnknownError
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The details of the logical tables.
     *
     * @var logicTableList
     */
    public $logicTableList;

    /**
     * @description The ID of the request.
     *
     * @example F1E6484F-9DF1-4406-9BDE-0861C4629B69
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request is successful.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The total number of logical tables that meet the query conditions.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'errorCode'      => 'ErrorCode',
        'errorMessage'   => 'ErrorMessage',
        'logicTableList' => 'LogicTableList',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
        'totalCount'     => 'TotalCount',
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
        if (null !== $this->logicTableList) {
            $res['LogicTableList'] = null !== $this->logicTableList ? $this->logicTableList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLogicTablesResponseBody
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
        if (isset($map['LogicTableList'])) {
            $model->logicTableList = logicTableList::fromMap($map['LogicTableList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
